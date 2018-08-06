<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class WorkController extends Controller
{
    
     public function index()
        {
        
         $posts=Post::orderBY('id','desc')->paginate(10);
         return view('work.index')->withPosts($posts);
        
        }
     public function single($id)
        {
            $posts=Post::find($id);
            return view('work.single')->withPosts($posts);             
        }


}
