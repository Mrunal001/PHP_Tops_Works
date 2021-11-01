<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\ContactModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mrunal.contact');
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
            'name' => 'required',
            'em' => 'required|email',
            'mob' => 'required|min:10|max:10',
            'subj' => 'required',
            'mesg' => 'required',
        ]);

        $name=$request->input('name');
        $em =$request->input('em');
        $mob =$request->input('mob');
        $sub = $request->input('subj');
        $msg = $request->input('mesg');

        $data=array("name"=>$name,"email"=>$em,"mobile"=>$mob,"subject"=>$sub,"message"=>$msg); 
        ContactModel::create($data);

        // return view("mrunal.contact");
        Mail::to('bkpandey.pandey@gmail.com')->send(new SendMail($data));

        return redirect("ContactUs")->with('success','Thanks for send Your details We Got  Your Email and Our admin will soon to contact with You');
        
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        ContactModel::all();
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
