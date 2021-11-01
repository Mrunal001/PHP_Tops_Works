<?php

namespace App\Http\Controllers;

use App\register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;

class RegisterController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            //display dropdown country in register

            $countries=DB::table("countries")->pluck("cname","id");

            return view('blogs.Register',compact('countries'));

    }


    public function getStateList(Request $request)

    {
     
        $states=DB::table("states")
        ->where("cid",$request->cid)
        ->pluck("sname","id");

        return response()->json($states);


    }


    
    public function getCityList(Request $request)

    {
     
        $cities=DB::table("cities")
        ->where("sid",$request->sid)
        ->pluck("ctname","id");

        return response()->json($cities);


    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'img'=>'required|image',
            'firstname'=>'required|string|max:255',
            'lastname'=>'required|string|max:255',
            'mobile' =>'required|min:10|max:10|unique:registers',
            'email'=>'required|string|email|max:255|unique:registers',
            'gender'=>'required',
            'branch'=>'required',
            'role'=>'required',
            'password'=>'required|string|min:8|confirmed',

         ]);

           $img=$request->file('img');
           $new_name=rand(). '.'.$img->getClientOriginalExtension();
           $img->move(public_path('uploads'),$new_name);

       

         $data=array(
             
            'photo'=>$new_name, 
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'password' =>Hash::make($request->password),
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'gender'=>$request->gender,
            'branch'=>$request->branch,
            'role'=>$request->role,
            'cid'=>$request->country,
            'sid'=>$request->state,
            'ctid'=>$request->city

            );

         register::create($data);

         return redirect('/Register')->with('success','Sucessfull Registeration. Now you can login.');

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
    }
}
