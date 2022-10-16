<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function index(){
        $posts = Post::with('user')->get();
        return view('post',['posts'=>$posts]);
    }
}
