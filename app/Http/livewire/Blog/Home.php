<?php

namespace App\Http\livewire\Blog;

use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{

    use WithPagination;
    public function render()
    {
        return view('livewire.blog.home');
    }
}
