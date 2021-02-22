<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class BlogController extends Controller
{
    //
    public function show($slug) {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('post', compact('post'));
    }

    public function addComment(Request $request, $id) {
        $data = $request->all();

        $newComment = new Comment();
        $newComment->author = $data['author'];
        $newComment->content = $data['content'];
        $newComment->post_id = $id;
        $newComment->comment_date = date('Y-m-d H:i:s');
        $newComment->save();
        $post = Post::where('id', $id)->firstOrFail();
        
        return redirect()->route('post', $post->slug);
    }
}
