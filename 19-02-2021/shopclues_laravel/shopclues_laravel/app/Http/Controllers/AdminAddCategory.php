<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\AddCategory;


class AdminAddCategory extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blogs.admin.addcategory');
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
            'catname'=>'required',
            'adddate'=>'required',
            
         ]);

          
         $data=array(
             
           
            'catname'=>$request->catname,
            'addeddate'=>$request->adddate
            );

         AddCategory::create($data);

         return redirect('/admin/AddCategory')->with('success','Blogs Category Added.');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=AddCategory::all();
        return view('blogs.admin.showblogscategory',['data'=>$data]);

    }


    //read a particular one data   
    public function read($id)
    {
        $data=AddCategory::where('id',$id)->first();
        return view('blogs.admin.readcategory',['data'=>$data]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=AddCategory::where('id',$id)->first();
        return view('blogs.admin.editcategory',['data'=>$data]);

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
        $data=array(
             
           
            'catname'=>$request->catname,
            'addeddate'=>$request->adddate
            );

         AddCategory::where('id',$id)->update($data);

         return redirect('admin/ManageCategory')->with('success','Blogs Category Updated successfuly.');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $data=AddCategory::where('id',$id)->delete();
        return redirect('/admin/ManageCategory')->with('delsuccess','Data Deleted Successfully');
    
    }
}
