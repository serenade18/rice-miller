<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class BlogComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $blogs = Blog::all();
        $blogs = Blog::paginate(5);
       // $blogs = Blog::orderBy('created_at', 'DESC')->limit(5)->get();
       
        return view('livewire.blog-component',['blogs' => $blogs])->layout('layouts.base');
    }
}
