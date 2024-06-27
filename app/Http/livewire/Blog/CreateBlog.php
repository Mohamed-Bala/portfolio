<?php

namespace App\Http\livewire\Blog;

use App\Blog;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateBlog extends Component
{
    use WithFileUploads;
    public $author;
    public $title;
    public $body;
    public $image;

    public function render()
    {
        
        return view('livewire.blog.create-blog');
    }

    public function save()
    {
        $this->validate([
            'author'         => 'required|max:255',
            'title'         => 'required|max:255',
            'body'          => 'required',
            'image'         => 'nullable|mimes:jpg,jpeg,gif,png|max:20000',
        ]);

        $data['author']    = $this->author;
        $data['title']      = $this->title;
        $data['body']       = $this->body;
        $data['category_id']= $this->category;

        if ($image = $this->image) {
            $filename = Str::slug($this->title).'.'.$image->getClientOriginalExtension();
            $path = public_path('/assets/img/'.$filename);
            Image::make($image->getRealPath())->save($path, 100);

            $data['image'] = $filename;
        }

        Blog::create($data);

        $this->resetInputs();

        session()->flash('message', 'Post created successfuly');

        return redirect()->to('livewire/posts');

    }

    private function resetInputs()
    {
        $this->title = null;
        $this->author = null;
        $this->body = null;
        $this->image = null;
    }

    public function return_to_posts()
    {
        return redirect()->to('/livewire/posts');
    }
}
