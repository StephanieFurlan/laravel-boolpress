<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\PostInfo;

class PostController extends Controller
{   

    private $postValidator = [
        'title' => 'required|string|max:50',
        'subtitle' => 'required|string|max:10',
        'publication_date' => 'required|date',
        'author' => 'required|string|max:30',
        'content' => 'required|string',
        'img_path' => 'required|URL',
        'extra_content' => 'required|string'
    ];

    public $name = "Stephanie";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       
        $postValidation = $request->validate($this->postValidator);
        $data = $request->all();
        $newPost = new Post();
        $newPost->fill($data);
        $newPost->save();
        $data['post_id'] = $newPost->id;
        

        $newPostInfo = new PostInfo();
        $newPostInfo->fill($data);
        $newPostInfo->content = $data['extra_content'];
        $newPostInfo->save();
        return redirect()->route('posts.index')->with('message', 'Post creato correttamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $post = Post::find($id);
        return view('posts.update', compact('post'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $postValidation = $request->validate($this->postValidator);
        $data = $request->all();



        $post = Post::find($id);
        $post->update($data);

        $postInfo = PostInfo::where('post_id', $id)->first();
        
        $postInfo->update($data);
        $postInfo->content = $data['extra_content'];
        $postInfo->save();

        return redirect()->route('posts.index')->with('message', 'Post aggiornato correttamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index');
    }
}
