<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Post;

class PostController extends Controller
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
         return view('posts.index')->withPosts($posts);
        
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

        
     
        $post=new post;
        $post->title=$request->title;
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            
             ]);
         if ($request->hasFile('image')){
                 $this->validate($request, [
                 'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                      
                ]);
                $filename = url("/images/post") .
                "/"  .
                 $request->file('image')
                ->getClientOriginalName();
                    $destinationPath = "images/post";
                $request->file('image')->move($destinationPath, $filename);
                 $post->image = $filename;  
            }
        $post->body=$request->body;
        $post->save();
         //   return $post;


      return redirect()->route('posts.show',$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post=Post::find($id);

        return view('posts.show')->withPost($post);     
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
$ @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //
        $post=post::find($id);
        return view('posts.edit')->withPost($post);
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
        //
         //
        //validate the data
        $this->validate($request,array(
             'title'=>'required|max:255',
             'body'=>'required'
        ));
        //store to databse
        $post=post::find($id);
       
        $post->title=$request->input('title');
         $post->body=$request->input('body');
        // $post->image=$request->input('image');
          
         if ($request->hasFile('image')){


          $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
          $filename = $request->file('image')->getClientOriginalName();
            $filename = url("images/post/") .
                "/"  .
            $request->file('image')
                ->getClientOriginalName();
                    $destinationPath = "images/post";
            $request->file('image')->move($destinationPath, $filename);
            $post->image = $filename;  
           } 
            $post->save();

        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $post=post::find($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
