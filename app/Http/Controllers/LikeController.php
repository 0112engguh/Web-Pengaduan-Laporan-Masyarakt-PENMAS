<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function toggleLike($postId)
    {
        $like = Like::where('user_id', auth()->id())->where('pengaduan_id', $postId)->first();

        if ($like) {
            $like->delete();
            return response()->json(['liked' => false, 'message' => 'Unliked']);
        }

        Like::create([
            'user_id' => auth()->id(),
            'pengaduan_id' => $postId
        ]);

        return response()->json(['liked' => true, 'message' => 'Disukai']);
    }
}
