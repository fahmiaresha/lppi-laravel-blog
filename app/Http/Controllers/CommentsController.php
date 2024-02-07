<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\Posts;

class CommentsController extends Controller
{
    public function index(){

    $comments = Comments::select('posts.*', 'comments.*')
        ->join('posts', 'comments.post_id', '=', 'posts.post_id')
        ->get();
    
    $posts = Posts::all();
    
        return view('comments', compact('comments','posts'));
    }

    public function store(Request $request)
    {
        $comments = new Comments();
        $comments->post_id = $request->post_id;
        $comments->user_id = 1;
        $comments->content = $request->content;
        $comments->save();

        return redirect('/comments')->with('success', 'Comments created successfully!');
    }

    public function update(Request $request,$id)
    {
        // dd($request->all());
        $comments = Comments::find($id);
        $comments->post_id = $request->post_id;
        $comments->content = $request->content;
        $comments->save();

        return redirect('/comments')->with('success', 'Comments updated successfully!');
    }

    public function destroy($id)
    {
        $comments = Comments::find($id);
        $comments->delete();

        return redirect('/comments')->with('success', 'Comments deleted successfully!');
    }
}
