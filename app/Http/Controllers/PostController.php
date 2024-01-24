<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::latest()->paginate();

        return view('post.index', [
            'posts' => $posts,
        ]);
    }

    public function show(Post $post): View
    {
        DB::table('posts')->where('id', $post->id)->update(['hit' => $post->hit + 1]);

        return view('post.show', [
            'post' => $post,
        ]);
    }

    public function create(): View
    {
        return view('post.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $request->user()->posts()->create($validated);

        return redirect()->route('post')
            ->with('success', 'Post updated successfully.');
    }

    public function edit(Post $post): View
    {
        $this->authorize('update', $post);

        return view('post.edit', [
            'post' => $post,
        ]);
    }

    public function update(Request $request, Post $post): RedirectResponse
    {
        $this->authorize('update', $post);

        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update($validated);

        return redirect()->route('post.show', $post->id)
            ->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post): RedirectResponse
    {
        $this->authorize('delete', $post);

        $post->delete();

        return redirect()->route('post')
            ->with('success', 'Post deleted successfully.');
    }
}
