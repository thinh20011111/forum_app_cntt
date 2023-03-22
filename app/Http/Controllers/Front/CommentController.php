<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Services\Comment\CommentServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    private $commentService;

    public function __construct(
        CommentServiceInterface $commentService,

    ) {
        $this->commentService =  $commentService;
    }

    public function getCommentCount($postId)
    {
        $count = Comment::where('post_id', $postId)->count();
        return response()->json(['count' => $count]);
    }

    public function comment(Request $request, $id, Post $post)
    {
        $userId = Auth::user()->id;
        $postId = $id;

        $messages = [
            'content.required' => 'Bạn chưa nhập nội dung bình luận.',
        ];

        $validator = Validator::make($request->all(), [
            'content' => 'required',
        ], $messages);

        if ($validator->passes()) {
            $data = [
                'user_id' => $userId,
                'post_id' => $postId,
                'content' => $request->content,
                'reply_id' => $request->reply_id ? $request->reply_id : 0
            ];

            if ($comment = $this->commentService->create($data)) {
                $comments = Comment::where('post_id', $postId)->orderBy('id', 'DESC')->get();

                $comment_count = Comment::where('post_id', $postId)->count();
                $post = Post::find($postId);
                $post->comment_count = $comment_count;
                $post->save();

                return view('front.what_news.list-comment', compact('comments'));
            }
        }


        return response()->json(['error' => $validator->errors()->first()]);
    }

    public function destroy($post_id, $comment_id, Post $post)
    {
        $comment = Comment::where('id', $comment_id)
            ->where('post_id', $post_id)
            ->first();

        if ($comment) {
            if ($comment->reply_id == 0) {
                // Xóa comment cha và các comment con
                Comment::where('post_id', $post_id)
                    ->where(function ($query) use ($comment_id) {
                        $query->where('id', $comment_id)
                            ->orWhere('reply_id', $comment_id);
                    })
                    ->delete();
            } else {
                // Xóa comment con
                $comment->delete();
            }

            $comment_count = Comment::where('post_id', $post_id)->count();
            $post = Post::find($post_id);
            $post->comment_count = $comment_count;
            $post->save();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'Không tìm thấy bình luận']);
    }

    public function update(Request $request)
    {
        $commentText = $request->input('content');
        // dd($commentText);
        $comment = Comment::find($request->commentId);
        // dd($comment);

        if (!$comment) {
            return redirect()->back()->with('error', 'Không tìm thấy bình luận này.');
        }

        $comment->update(['content' => $commentText]);

        return redirect()->back()->with('success', 'Bình luận đã được cập nhật.');
    }
}
