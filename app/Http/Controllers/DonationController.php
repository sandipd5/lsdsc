<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donation;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

         $donations=Donation::orderBY('id','desc')->paginate(10);
         return view('donations.index')->withDonations($donations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('donations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $donation=new Donation;
        $donation->name=$request->name;
        $donation->amount=$request->amount;
        $donation->message=$request->message;
         $request->validate([
            'name' => 'required|max:255',
            
            'message' => 'required',

            'amount'=>'required|integer',
            
             ]);
        if ($request->hasFile('image')){
             $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                ]);

            $filename = url("/images/donors") .
                "/"  .
            $request->file('image')
                ->getClientOriginalName();
                    $destinationPath = "images/donors";
            $request->file('image')->move($destinationPath, $filename);
            $donation->image = $filename;  
        }
          
        $donation->save();
       // return $donation; 
     return redirect()->route('donations.show',$donation->id);
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
        $donation=Donation::find($id);
        return view('donations.show')->withDonation($donation);
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
        $donation=Donation::find($id);
        return view('donations.edit')->withDonation($donation);
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
           $this->validate($request,array(
             'name'=>'required',           
             'amount'=>'required|numeric',
             'message'=>'required'
        ));
            $donation=Donation::find($id);
       
        $donation->name=$request->input('name');
         $donation->amount=$request->input('amount');
          $donation->message=$request->input('message');
             if ($request->hasFile('image')){


          $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
          $filename = $request->file('image')->getClientOriginalName();
            $filename = url("/images/donors") .
                "/"  .
            $request->file('image')
                ->getClientOriginalName();
                    $destinationPath = "images/donors";
            $request->file('image')->move($destinationPath, $filename);
            $donation->image = $filename;  
           } 
            $donation->save();

        return redirect()->route('donations.show',$donation->id);
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

        $donation=Donation::find($id);
        $donation->delete();
        return redirect()->route('donations.index');
    }
}
