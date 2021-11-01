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
<h2>Feedback Us</h2>
<hr style="border:solid 2px gray">
<p align="justify">Give us your Valuable Feedbacks for more improvement</p>
<center>

<a href="#"><button type="button" class="btn btn-sm btn-danger" style="height:45px; font-size:18px; width:320px">Get In Touch with Us in Map</button></a>
<hr>


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.631659688516!2d70.77838915011893!3d22.29193858525596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca248c77c099%3A0xdf5ac10af64ac8ee!2sTOPS%20Technologies%20-%20Python%2C%20Java%2C%20Android%2C%20PHP%2C%20Web%20%26%20Graphic%20Designing%20Courses!5e0!3m2!1sen!2sin!4v1596092280320!5m2!1sen!2sin" width="600" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


</center>
</div>


<div class="col-sm-6"  style="float:left">
<h2>Feedback</h2>
<hr style="border:solid 1px gray">



@if(Session::has('success'))

<div class="alert alert-success">

<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>{!! Session::get('success') !!}</strong>

</div>

@endif





<form method="post" action="{{ route('Feedback.store') }}">

@csrf

<div class="form-group">
<label>Name *</label>
<input type="text" name="name" placeholder="Name *" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name" autofocus>
@error('name')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
</div>

<div class="form-group">
<label>Email *</label>
<input type="text" name="email" placeholder="Email *" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email" autofocus>
@error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
</div>




<div class="form-group">
<label>Mobile *</label>
<input type="text" name="mobile" placeholder="Mobile *" class="form-control @error('mobile') is-invalid @enderror" value="{{ old('mobile') }}" autocomplete="mobile" autofocus>
@error('mobile')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
</div>




<div class="form-group">
<label>Feedback *</label>
<textarea  name="feedback" placeholder="Write your feedback *" class="form-control @error('feedback') is-invalid @enderror" autocomplete="feedback" autofocus>{{ old('feedback') }}</textarea>
@error('feedback')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
</div>

<input type="submit" name="sub" value="SUBMIT" class="btn btn-sm btn-primary" style="height:45px; font-size:18px; width:100px">


</form>
</div>






    <!-- Blog Post -->
     <!-- Sidebar Widgets Column -->

</div>


</div>

</div>



</div>


@include('blogs.inc.footer')
