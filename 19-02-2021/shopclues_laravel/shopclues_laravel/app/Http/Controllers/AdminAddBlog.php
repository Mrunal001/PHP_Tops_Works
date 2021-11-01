<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AddBlog;

use DB;

class AdminAddBlog extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories=DB::table("categories")
        ->pluck("catname","id");

        // return response()->json($categories);

        return view('blogs.admin.addblogs',compact('categories'));
        

    
    
    
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
            'title'=>'required',
            'img'=>'required',
            'bdate' =>'required',
            'desc'=>'required',
          
         ]);

           $img=$request->file('img');
           $new_name=rand(). '.'.$img->getClientOriginalExtension();
           $img->move(public_path('uploads/blogs'),$new_name);

       

         $data=array(
            'catid'=>$request->catname,
            'title'=>$request->title,
            'image'=>$new_name, 
            'registered_date'=>$request->bdate,
            'description'=>$request->desc
            
            );

         AddBlog::create($data);

         return redirect('admin/AddBlogs')->with('success','Blogs Added Sucessfully');


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
