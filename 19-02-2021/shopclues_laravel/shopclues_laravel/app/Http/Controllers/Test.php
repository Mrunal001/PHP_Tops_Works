<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{

   public function index()


   {
   

     return view('aboutus');



   }



   public function services()


   {
   

     return view('services');
     


   }



   

   public function contact()


   {
   

     return view('contact');
     


   }



   

   public function name()


   {
   

     return view('name');
     


   }
     
   


}
