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
      <h2>Already Have An Account ?</h2>
      <hr style="border:solid 2px gray">
      <p align="justify">By Creating Account with our website you are able to find more to Upload Notes and downloading Notes with admin Permissions and many More >></p>
      <center>
      <a href="{{ 'Login_Auth' }}"><button type="button" class="btn btn-sm btn-danger" style="height:45px; font-size:18px; width:220px">Login Here</button></a>
      </center>
    </div>
    <div class="col-sm-6"  style="float:left">
      <h2>REGISTER WITH US</h2>
      <hr style="border:solid 1px gray">


        @if(Session::has('success'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>{!! Session::get('success') !!}</strong>
            </div>
        @endif
      <form method="post" action="{{ route('Register.store') }}" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
          <label>Upload Photo *</label>
          <input type="file" name="img" class="form-control @error('img') is-invalid @enderror" value="{{ old('img') }}" autocomplete="firstname" autofocus>
          @error('img')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>


        <div class="form-group">
          <label>Firstname *</label>
          <input type="text" name="firstname" placeholder="Firstname *" class="form-control @error('firstname') is-invalid @enderror" value="{{ old('firstname') }}" autocomplete="firstname" autofocus>
          @error('firstname')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>

        <div class="form-group">
          <label>Lastname *</label>
          <input type="text" name="lastname" placeholder="Lastname *" class="form-control @error('lastname') is-invalid @enderror" value="{{ old('lastname') }}" autocomplete="lastname" autofocus>
          @error('lastname')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>

        <div class="form-group">
          <label>Mobile *</label>
          <input type="text" name="mobile" placeholder="Mobile *" class="form-control @error('mobile') is-invalid @enderror" value="{{ old('mobile') }}" autocomplete="mobile" autofocus >
          @error('mobile')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>

        <div class="form-group">
          <label>Email *</label>
          <input type="text" name="email" placeholder="Email *" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email" autofocus >
          @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>

        <div class="form-group">
          <label>Gender *</label>
          <select name="gender" class="form-control @error('gender') is-invalid @enderror" autocomplete="gender" autofocus >
            <option value="">-selectgender-</option>
            <option value="male" @if (old('gender') == "male") {{ 'selected' }} @endif>Male</option>
            <option value="female" @if (old('gender') == "female") {{ 'selected' }} @endif>Female</option>
          </select>
          @error('gender')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>

        <div class="form-group">
          <label>Branch *</label>
          <select name="branch" class="form-control @error('branch') is-invalid @enderror" autocomplete="branch" autofocus >
            <option value="">-select branch-</option>
            <option value="computerscience" @if (old('branch') == "computerscience") {{ 'selected' }} @endif>computer science</option>
            <option value="information technology" @if (old('branch') == "information technology") {{ 'selected' }} @endif>Information technology</option>
          </select>
          @error('branch')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>

        <div class="form-group">
          <label>Are You *</label>
          <select name="role" class="form-control @error('role') is-invalid @enderror" autocomplete="role" autofocus >
            <option value="">-Are You-</option>
            <option value="student" @if (old('role') == "student") {{ 'selected' }} @endif>student</option>
            <option value="faculty" @if (old('role') == "faculty") {{ 'selected' }} @endif>Faculty</option>
          </select>
          @error('role')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>

        <div class="form-group">
          <label>Password *</label>
          <input type="password" name="password" placeholder="********" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" >
          @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>

        <div class="form-group">
          <label>Confirm Password *</label>
          <input type="password" name="password_confirmation" placeholder="********" class="form-control" autocomplete="new-password" >
        </div>



        <div class="form-group">
          <label>Select Country *</label>
          <select name="country" id="country" class="form-control @error('role') is-invalid @enderror" autocomplete="role" autofocus >
            <option value="">-Country-</option>

            @foreach($countries as $key=>$country)

            <option value="{{$key}}">{{$country}}</option>
          
          
            @endforeach
          </select>
          @error('role')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>





        <div class="form-group">
          <label>Select State *</label>
          <select name="state" id="state" class="form-control @error('role') is-invalid @enderror" autocomplete="role" autofocus >
         
          
          
          </select>
          @error('role')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>





        <div class="form-group">
          <label>Select City *</label>
          <select name="city" id="city" class="form-control @error('role') is-invalid @enderror" autocomplete="role" autofocus >
         
     
          </select>
          @error('role')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>






        <input type="submit" name="sub" value="Register" class="btn btn-sm btn-danger" style="height:45px; font-size:18px; width:100px">
      </form>
    </div>
    <!-- Blog Post -->
    <!-- Sidebar Widgets Column -->
  </div>
</div>
</div>




@include('blogs.inc.footer')
<script src="{{ asset('blog/user') }}/vendor/jquery/jquery.min.js"></script>


<!-- ajax country state & city load -->

<script type="text/javascript">
$("#country").change(function(){ 
var countryID=$(this).val();
//alert('hi')
if(countryID)
{
   $.ajax({

     
      type:"GET",
      url:"{{url('get-state-list')}}?cid="+countryID,
      success:function(data)
      {
        
        if(data)
        {

                   
           $("#state").empty();
           $("#state").append('<option>select</option>');
           $.each(data,function(key,value){

            $("#state").append('<option value="'+key+'">'+value+'</option>');



           });

        }

        
else
{

  $("#state").empty();
  
}


      }

   });

}


else
{

  $("#state").empty();
  $("#city").empty();

}

});




$('#state').on('change',function(){
var stateID=$(this).val();
if(stateID)
{
   $.ajax({

      
      type:"GET",
      url:"{{url('get-city-list')}}?sid="+stateID,
      success:function(data)
      {
        
        if(data)
        {
           $("#city").empty();
           $("#city").append('<option>select</option>');

           $.each(data,function(key,value){

            $("#city").append('<option value="'+key+'">'+value+'</option>');



           });

        }

        
else
{

  $("#city").empty();
  
}


      }

   });

}


else
{

 
  $("#city").empty();

}

});

</script>
