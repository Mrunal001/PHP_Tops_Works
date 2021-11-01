@extends('blogs.master')
@section('blogstitle')
Home Page
@endsection

@include('blogs.inc.nav')

<div class="container-fluid">
<div class="row">
  <!-- Blog Entries Column -->
  
    <div class="col-md-8">    
    <br><br><br><br>
      

<!-- slider -->

  
@include('blogs.inc.slider')


  <center>


    <h3 style="color:red; font-size:35px">Brijesh Pandey</h3>
    
    <hr style="color:red">

</center>

    
<p align="justify" style="font-size:24px">
<span style="color:red; font-size:24px">Brijesh Pandey</span> is a INDIA based designer specialising in Web Developement,Web Designing,Web/UI Design, Graphic Design, Branding, Illustration & Photography. He has a worldwide client roster and his work is regulary featured in design related publications. Brijesh Pandey is also a regular speaker at design/tech conferences.
</p>


    <!-- Blog Post -->
    <div class="card mb-4">
      <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title">Post Title</h2>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
        <a href="#" class="btn btn-primary">Read More &rarr;</a>
      </div>
      <div class="card-footer text-muted">
        Posted on January 1, 2020 by
        <a href="#">Start Bootstrap</a>
      </div>
    </div>

    <!-- Blog Post -->
    <div class="card mb-4">
      <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title">Post Title</h2>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
        <a href="#" class="btn btn-primary">Read More &rarr;</a>
      </div>
      <div class="card-footer text-muted">
        Posted on January 1, 2020 by
        <a href="#">Start Bootstrap</a>
      </div>
    </div>

    <!-- Blog Post -->
    <div class="card mb-4">
      <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title">Post Title</h2>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
        <a href="#" class="btn btn-primary">Read More &rarr;</a>
      </div>
      <div class="card-footer text-muted">
        Posted on January 1, 2020 by
        <a href="#">Start Bootstrap</a>
      </div>
    </div>

    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
      <li class="page-item">
        <a class="page-link" href="#">&larr; Older</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">Newer &rarr;</a>
      </li>
    </ul>

  </div>



  <!-- Sidebar Widgets Column -->
 
@include('blogs.inc.rightsidebar')
 
<!-- /.row -->

</div>





<div class="container">

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


</div>
</div>












<center>
<div class="col-sm-11">

<h2 align="center" style="color:red; padding:25px; margin-top:2%">Technical Skill of Brijesh</h2>
<hr style="border:red 1px solid">

<div class="skillbar clearfix " data-percent="95%">
	<div class="skillbar-title" style="background: #d35400;"><span style="padding:15px; color:white; font-size:18px">Python 3.8.1</span></div>
	<div class="skillbar-bar" style="background: #d35400;"></div>
	<div class="skill-bar-percent">95%</div>
</div> <!-- End Skill Bar -->
<div class="skillbar clearfix " data-percent="95%">
	<div class="skillbar-title" style="background: #d35400;"><span style="padding:15px; color:white; font-size:18px">Django3.1</span></div>
	<div class="skillbar-bar" style="background: #d35400;"></div>
	<div class="skill-bar-percent">95%</div>
</div> <!-- End Skill Bar -->


<div class="skillbar clearfix " data-percent="85%">
	<div class="skillbar-title" style="background: #2980b9;"><span style="padding:15px; color:white; font-size:18px">php</span></div>
	<div class="skillbar-bar" style="background: #2980b9;"></div>
	<div class="skill-bar-percent">95%</div>
</div> <!-- End Skill Bar -->



<div class="skillbar clearfix " data-percent="95%">
	<div class="skillbar-title" style="background: #d35400;"><span style="padding:15px; color:white; font-size:18px">Laravel</span></div>
	<div class="skillbar-bar" style="background: #d35400;"></div>
	<div class="skill-bar-percent">95%</div>
</div> <!-- End Skill Bar -->


<div class="skillbar clearfix " data-percent="95%">
	<div class="skillbar-title" style="background: #d35400;"><span style="padding:15px; color:white; font-size:18px">Codeigniter</span></div>
	<div class="skillbar-bar" style="background: #d35400;"></div>
	<div class="skill-bar-percent">95%</div>
</div> <!-- End Skill Bar -->



<div class="skillbar clearfix " data-percent="85%">
	<div class="skillbar-title" style="background: #2980b9;"><span style="padding:15px; color:white; font-size:18px">SqlLite3</span></div>
	<div class="skillbar-bar" style="background: #2980b9;"></div>
	<div class="skill-bar-percent">95%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="85%">
	<div class="skillbar-title" style="background: #2980b9;"><span style="padding:15px; color:white; font-size:18px">CSS/CSS3</span></div>
	<div class="skillbar-bar" style="background: #2980b9;"></div>
	<div class="skill-bar-percent">85%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="85%">
	<div class="skillbar-title" style="background: #2c3e50;"><span style="padding:15px; color:white; font-size:18px">javascript/jQuery</span></div>
	<div class="skillbar-bar" style="background: #2c3e50;"></div>
	<div class="skill-bar-percent">85%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="85%">
	<div class="skillbar-title" style="background: #46465e;"><span style="padding:15px; color:white; font-size:18px">Bootstrap4</span></div>
	<div class="skillbar-bar" style="background: #46465e;"></div>
	<div class="skill-bar-percent">85%</div>
</div> <!-- End Skill Bar -->

</div>





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


@include('blogs.inc.footer')
