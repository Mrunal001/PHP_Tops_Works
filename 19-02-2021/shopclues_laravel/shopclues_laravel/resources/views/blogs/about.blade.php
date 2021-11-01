@extends('blogs.master')
@section('blogstitle')
Home Page
@endsection

@include('blogs.inc.nav')

<div class="container-fluid">
<div class="row">
  <!-- Blog Entries Column -->
  
    <div class="col-md-8"> 
    <br><br> 
    <h2 style="color:red; padding:25px; margin-top:2%">About Us</h2>
<hr style="border:red 1px solid">
    <center>
   
    <img src="{{ asset('blog/user')}}/images/brijesh.jpg" style="width:100%; height:380px">


      <h1 class="my-4" style="color:red">Brijesh Technical Blogs Writer | Developer
    </h1>



    <h3 style="color:red; font-size:35px">Brijesh Pandey</h3>
    
    <hr style="color:red">

    <b style="color:red; font-size:25px">Web Developer - Graphic Artist - User Experience - Designer-Web Designer</b>


    
<p align="justify" style="font-size:24px">
<span style="color:red; font-size:24px">Brijesh Pandey</span> is a INDIA based designer specialising in Web Developement,Web Designing,Web/UI Design, Graphic Design, Branding, Illustration & Photography. He has a worldwide client roster and his work is regulary featured in design related publications. Brijesh Pandey is also a regular speaker at design/tech conferences.
</p>

</div>

    <!-- Blog Post -->
     <!-- Sidebar Widgets Column -->
 <div class="col-md-4">
   <br><br><br>
        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header" style="color:green">Like Our Latest Video</h5>
          <div class="card-body">
          
          
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/Kyu7sTJo_gE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          
          
          
            </div>
            </div>

  
  <!-- Search Widget -->
  <div class="card my-4">
    <h5 class="card-header" style="color:green">Get in touch</h5>
    <div class="card-body">
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14767.519840240957!2d70.76010836557462!3d22.282536564171117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1stops%20%20technology%20rajkot!5e0!3m2!1sen!2sin!4v1595914192331!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    
      </div>
    </div>

</div>


          </div>
        






<div class="container-fluid">

<h2 align="center" style="color:red; padding:25px; margin-top:2%">Just 4 steps to Follow</h2>
<hr style="border:red 1px solid">

<div class="row">


<div class="col-sm-3">
<div id="half-circle" style="color:red">
<center>
<span class="fa fa-user-circle" style="font-size:55px; padding:25px; color:white"></span>
<hr style="border:white 2px solid">
<h4>Create An Account</h4>
</center>
</div>
</div>



<div class="col-sm-3">
<div id="half-circle" style="color:red">
<center>
<span class="fa fa-sign-in-alt" style="font-size:55px; padding:25px; color:white"></span>
<hr style="border:white 2px solid">
<h4>Login</h4>
</center>
</div>
</div>



<div class="col-sm-3">
<div id="half-circle" style="color:red">
<center>
<span class="fa fa-upload" style="font-size:55px; padding:25px; color:white"></span>
<hr style="border:white 2px solid">
<h4>Upload Notes</h4>
</center>
</div>
</div>




<div class="col-sm-3">
<div id="half-circle" style="color:red">
<center>
<span class="fa fa-download" style="font-size:55px; padding:25px; color:white"></span>
<hr style="border:white 2px solid">
<h4>Download Notes</h4>
</center>
</div>
</div>




<!-- /.row -->


</div>


</div>




<center>
<div class="footer">
        <div class="subfooter">
            <br><br>
            <div class="col-md-4 col-xs-12" style="padding:15px">
                <b><center>
                    <span class="fa fa-question-circle" style="font-size:40px"></span><b style="font-size:20px"> Help</b>

                    <span class="fa fa-truck" style="font-size:40px"></span><b style="font-size:20px"> Track Order</b>

                    <span class="fa fa-comments-o" style="font-size:40px"></span><b style="font-size:20px"> ContactUs</b>
                
                
                </center></b>
            </div>


            <div class="col-md-4 col-xs-12" style="padding:15px">

               <p align="center">

Have a question? Contact Customer Service Department

<h4 align="center"><a href="mailto:support@onlineportfolio.byethost14.com">support@onlineportfolio.byethost14.com</a></h4>

<p align="center">All emails will be answered within 24 hours</p>
               </p>
                </div>





                <div class="col-md-4 col-xs-12" style="padding:15px">

                    <p align="center">
     
                        WE ARE HERE FOR YOU
     <h4 align="center">(+91)9998003879</h4>
     
     <p align="center">10:00 a.m. to 7:00 p.m.</p>
                    </p>
                     </div>

        </div>

</center>



</div>
</div>

<br>
<br>

@include('blogs.inc.footer')
