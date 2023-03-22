<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(Request $request, $id)
    {
        $postId = $id;
        $userId = $request->input('user_id');

        $like = Like::where('post_id', $postId)
            ->where('user_id', $userId)
            ->first();

        if ($like) {
            $like->delete();
            $liked = false;
        } else {
            $like = new Like();
            $like->post_id = $postId;
            $like->user_id = $userId;
            $like->save();
            $liked = true;
        }

        $likesCount = Like::where('post_id', $postId)->count();
        $post = Post::find($postId);
        $post->like_count = $likesCount;
        $post->save();

        return response()->json([
            'liked' => $liked,
            'likesCount' => $likesCount,
        ]);
    }
}
