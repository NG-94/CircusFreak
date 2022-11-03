<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $allPosts = Post::all();
        return view('post.index', compact('allPosts'));
    }
    public function create()
    {
        return view('post.create');
    }
    public function store(request $request)
    {
        $request->validate([
            'post' => 'required'
        ]);
$newPost = new Post();
$newPost->name = $request->name;
$newPost->post = $request->post;
$newPost->save();
return redirect('/post/index');

        
        
    }
}
