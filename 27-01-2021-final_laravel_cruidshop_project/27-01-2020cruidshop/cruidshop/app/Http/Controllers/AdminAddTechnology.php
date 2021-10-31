<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\adminaddtech;

class AdminAddTechnology extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('admin.addtechnology');
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

            "techtitle"=>'required',
            "titlnm"=>'required',
            "tdesc"=>'required'
        ]);

        $techtitle=$request->input("techtitle");
        
        $titlenm=$request->input("titlnm");
        
        $tdesc=$request->input("tdesc");

        $data=array("technology_title"=>$techtitle,"technology_name"=>$titlenm,"technology_description"=>$tdesc);

        adminaddtech::create($data);

        return redirect('admin/addtechnology')->with('success','Your Technology Added Successfuly');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=adminaddtech::all(); //select all data

        return view('admin.manageaddtechnology',['data'=>$data]);

        
    }

    public function read($id)
    {
        $data=adminaddtech::where('id',$id)->first(); //select all data and read one data

        return view('admin.readaddtechnology',['data'=>$data]);        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=adminaddtech::where('id',$id)->first(); //select all data and read one data

        return view('admin.editaddtechnology',['data'=>$data]);    
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

        $techtitle=$request->input("techtitle");
        
        $titlenm=$request->input("titlnm");
        
        $tdesc=$request->input("tdesc");

        $data=array("technology_title"=>$techtitle,"technology_name"=>$titlenm,"technology_description"=>$tdesc);

        adminaddtech::where('id',$id)->update($data);

        return redirect('admin/manageaddtechnology')->with('updsuccess','Your Technology Updated Successfuly');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        


        adminaddtech::where('id',$id)->delete(); //delete 

        return redirect('admin/manageaddtechnology')->with('delsuccess','Data successfuly Deleted');



    }
}
