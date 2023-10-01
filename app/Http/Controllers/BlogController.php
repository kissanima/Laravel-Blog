<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function create_post() {
        return view('blog.create');
    }
    public function blog_store(Request $request)
{
    // Validate the form data
    $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
    ]);

    // Create the new blog post and associate it with the logged-in user
    $post = new Post();
    $post->title = $request->input('title');
    $post->content = $request->input('content');
    $post->published = true; // Adjust as needed
    $post->user_id = auth()->user()->id; // Set the user_id
    $post->save();

    return redirect()->route('home');
}

    public function show(Post $post)
    {
        return view('blog.show', compact('post'));
    }
}
