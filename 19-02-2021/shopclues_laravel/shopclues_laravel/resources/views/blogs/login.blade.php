@extends('blogs.master')
@section('blogstitle')
Home Page
@endsection

@include('blogs.inc.nav')

<div class="container-fluid">
<div class="row">
  <!-- Blog Entries Column -->
  
    <div class="col-md-12 col-xs-12">   
    <br><br><br><br><br> 

    
<div class="col-sm-6" style="float:left">

<h2>NEW CUSTOMERS</h2>
<hr style="border:solid 2px gray">
<p align="justify">By Creating Account with our website you are able to find more to Upload Notes and downloading Notes with admin Permissions and many More >></p>
<center>
<a href="{{ 'Register' }}"><button type="button" class="btn btn-sm btn-danger" style="height:45px; font-size:18px; width:220px">Create An Account</button></a>
</center>
</div>

<div class="col-sm-6"  style="float:left">
<h2>USER LOGIN</h2>
<hr style="border:solid 1px gray">

<form method="post">

@csrf

<div class="form-group">
<label>Email *</label>
<input type="text" name="em" placeholder="Email *" class="form-control" required>
</div>


<div class="form-group">
<label>Password *</label>
<input type="password" name="pass" placeholder="********" class="form-control" required>
</div>
<input type="submit" value="Login" class="btn btn-block btn-danger" style="height:45px; font-size:18px;">

<br>

</form>

<h5 align="center" style="color:gray">or login with</h5>
<br>

<div class="col-sm-6" style="float:left">


 <a href=""> <button type="submit" class="btn btn-block btn-danger" style="height:50px; font-size:18px"><img src="images/google.png" style="width:45px; height:30px">  Gmail </button></a>

</div>



<div class="col-sm-6"  style="float:left">
<a href="#"><button type="submit" class="btn btn-block btn-info" style="height:50px; font-size:18px"><img src="images/facebook.png" style="width:45px; height:30px"> Facebook</button></a>
</div>
<br><br><br><br>

<br><br>
<br><br>
<br><br>


</div>









    <!-- Blog Post -->
     <!-- Sidebar Widgets Column -->
 
</div>
    

</div>

</div>



</div>


@include('blogs.inc.footer')
