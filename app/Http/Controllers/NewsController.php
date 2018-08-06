<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

         $posts=Post::orderBY('id','desc')->paginate(10);
         return view('news.index')->withPosts($posts);
        
    }

   
    public function show($id)
    {
        //
         $post=Post::find($id);

        return view('news.show')->withPost($post);     
    }

    
}
