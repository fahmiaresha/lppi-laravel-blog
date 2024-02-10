<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Posts;
use App\Models\Categories;
use App\Models\Users;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Posts::select('posts.*', 'categories.*', 'users.*')
            ->join('categories', 'categories.category_id', '=', 'posts.category_id')
            ->join('users', 'users.user_id', '=', 'posts.user_id')
            // ->join('comments', 'comments.post_id', '=', 'posts.post_id')
            ->get();

        $comments = DB::table('comments')
            ->select('comments.*')
            ->join('posts', 'comments.post_id', '=', 'posts.post_id')
            ->get();

        // Menyertakan data komentar ke dalam array postingan
        foreach ($blog as $post) {
            $post->comments = $comments->where('post_id', $post->post_id)->all();
        }

        return view('blog', compact('blog'));
    }

  
}
