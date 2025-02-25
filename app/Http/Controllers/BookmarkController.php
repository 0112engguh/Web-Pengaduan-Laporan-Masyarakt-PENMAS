<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function toggleBookmark($postId)
    {
        $bookmark = Bookmark::where('user_id', auth()->id())->where('pengaduan_id', $postId)->first();

        if ($bookmark) {
            $bookmark->delete();
            return response()->json(['bookmarked' => false, 'message' => 'Removed from bookmarks']);
        }

        Bookmark::create([
            'user_id' => auth()->id(),
            'pengaduan_id' => $postId
        ]);

        return response()->json(['bookmarked' => true, 'message' => 'Added to bookmarks']);
    }
}
