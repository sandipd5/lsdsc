<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Photo;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $photos=Photo::orderBY('id','desc')->paginate(10);
        return view('photos.index')->withPhotos($photos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $photo= new Photo;
            $filename = $request->file('image');
            $this->validate($request, [
             'image' => 'required|mimes:jpeg,png,jpg,gif,svg,mpeg,ogg,mp4,webm,3gp,mov,flv,avi'
                ]);
             
            $filename = url("/public/images/gallery") .
                "/"  .
            $request->file('image')
                ->getClientOriginalName();
            $destinationPath = "images/gallery";
            $request->file('image')->move($destinationPath, $filename);
            $photo->image = $filename;
          

            $photo->save();
           // return $photo;
          return redirect()->route('photos.show',$photo->id);

          
          

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
        $photo=Photo::find($id);
        return view('photos.show')->withPhoto($photo);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
           $photo=Photo::find($id);
           return view('photos.edit')->withPhoto($photo);
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
        $photo=Photo::find($id);
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
         $filename = $request->file('image')->getClientOriginalName();
            $filename = url("/images/gallery") .
                "/"  .
            $request->file('image')
                ->getClientOriginalName();
                    $destinationPath = "images/gallery";
            $request->file('image')->move($destinationPath, $filename);
            $photo->image = $filename;  
            $photo->description=$request->input('description');
            $photo->save();
            return redirect()->route('photos.show',$photo->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $photo=Photo::find($id);
        $photo->delete();
        return redirect()->route('photos.index');
    }
}
