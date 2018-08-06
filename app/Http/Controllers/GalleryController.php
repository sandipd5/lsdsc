<?php

namespace App\Http\Controllers;
use App\Photo;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function index(){

          $photos=Photo::orderBY('id','desc')->paginate(10);
            return view('gallery')->withPhotos($photos);

    }        
}
