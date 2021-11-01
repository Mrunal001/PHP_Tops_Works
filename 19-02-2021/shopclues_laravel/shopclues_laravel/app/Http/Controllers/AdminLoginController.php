<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use Auth;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('blogs.admin.login');
        
    }

    public function checklogin(Request $request)
    {  

            $this->validate($request,[
             
                        'email' =>'required|email',
                        'password' =>'required|alphaNum|min:5|max:10'
                 

            ]);




    }
}
