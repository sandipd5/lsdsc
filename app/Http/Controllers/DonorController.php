<?php

namespace App\Http\Controllers;
use App\Donation;


use Illuminate\Http\Request;

class DonorController extends Controller
{
    //
      public function index()
    {
        //

         $donations=Donation::orderBY('id','desc')->paginate(3);
         return view('donate')->withDonations($donations);
    }

}
