<?php

namespace App\Http\livewire\Blog;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Blog;
class ShowBlogs extends Component
{

    use WithPagination;
    public function render()
    {

         $blogs= Blog::get();
        return view('livewire.blog.show-blogs',compact(['blogs']));
    }

    public function create_post()
    {
        return redirect()->to('create_post');
    }

    public function show_post($id)
    {
        return redirect()->to('posts'.$id);
    }

    public function edit_post($id)
    {
        $post = Post::whereId($id)->whereUserId(auth()->id())->first();
        if ($post) {
            return redirect()->to('posts'.$id.'/edit');
        }

        session()->flash('message_error', 'You can not update not yours');
        return redirect()->to('posts');
    }

    public function delete_post($id)
    {
        $post = Post::whereId($id)->whereUserId(auth()->id())->first();
        if ($post) {
            if (File::exists('assets/img/'. $post->image)) {
                unlink('assets/img/'. $post->image);
            }
            $post->delete();

            session()->flash('message', 'Post deleted successfully');
            return redirect()->to('posts');

        }

        session()->flash('message_error', 'You can not delete not yours');
        return redirect()->to('posts');
    }

}
