<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function report_post(Request $request, $id)
    {
        $messages = [
            'content.required' => 'Bạn chưa nhập nội dung báo cáo.',
        ];

        $validator = Validator::make($request->all(), [
            'content' => 'required',
        ], $messages);
        
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()]);
        }
        
        $report = new Report();
        $report->user_id = Auth::id();
        $report->content = $request->content;
        $report->post_id_comment_id = $id;
        $report->type = 'post';
        $report->save();
        
        return response()->json(['message' => 'Báo cáo thành công!']);
    }
}
