<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Categories;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index(){
        $posts = Posts::select('posts.*', 'categories.category_name','users.username')
                  ->join('categories', 'posts.category_id', '=', 'categories.category_id')
                  ->join('users', 'posts.user_id', '=', 'users.user_id')
                  ->get();
        // dd($posts);
        $categories = Categories::all();
    
        return view('post', compact('posts', 'categories'));
    }

    public function store(Request $request)
    {
        $post = new Posts();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->image_url = $request->image_url;
        $post->category_id = $request->category_id;
        $post->user_id = 1;
        $post->save();

        return redirect('/posts')->with('success', 'Post created successfully!');
    }

    public function update(Request $request,$id)
    {
        // dd($request->all());
        $post = Posts::find($id);
        $post->title = $request->edit_title;
        $post->content = $request->edit_content;
        $post->image_url = $request->edit_image_url;
        $post->category_id = $request->edit_category_id;
        $post->save();

        return redirect('/posts')->with('success', 'Post updated successfully!');
    }

    public function destroy($id)
    {
        $post = Posts::find($id);
        $post->delete();

        return redirect('/posts')->with('success', 'Post deleted successfully!');
    }

}
