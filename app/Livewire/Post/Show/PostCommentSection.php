<?php

namespace App\Livewire\Post\Show;

use App\Models\Post;
use App\Models\PostComment;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PostCommentSection extends Component
{
    use AuthorizesRequests;

    public Post $post;

    public $content;

    protected $rules = [
        'content' => 'required|min:5',
    ];

    public function save()
    {
        $this->authorize('create', PostComment::class);

        $this->validate();

        PostComment::create([
            'user_id' => Auth::user()->id,
            'post_id' => $this->post->id,
            'content' => $this->content,
        ]);

        DB::table('posts')->where('id', $this->post->id)->increment('comment_count');

        $this->resetForm();

        session()->flash('message', 'Post updated successfully!');
    }

    private function resetForm()
    {
        $this->content = false;
        $this->reset('content');
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.post.show.post-comment-section');
    }
}
