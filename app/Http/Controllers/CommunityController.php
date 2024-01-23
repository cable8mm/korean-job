<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class CommunityController extends Controller
{
    public function index(): View
    {
        $posts = Post::latest()->paginate();

        return view('community.index', [
            'posts' => $posts,
        ]);
    }
}
