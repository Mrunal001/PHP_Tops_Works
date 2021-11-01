
<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.tiny.cloud/1/4bep39q1z5ss46n0jsfg72oan2ix2e06jt0m9dedevkr3cks/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>

@extends('blogs.admin.master')
<!-- Top nav-->
@include('blogs.admin.inc.topnav')

<!-- Top nav end-->
<!-- main content-->
<div id="layoutSidenav">
<!-- side nav-->
@include('blogs.admin.inc.sidenav')



<div id="layoutSidenav_content">
<!-- content-->
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Add Blogs Here</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Add Blogs </li>
                        </ol>


                        <div class="row">
                        
                            <div class="col-xl-6 col-md-6">
             @if(Session::has('success'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>{!! Session::get('success') !!}</strong>
            </div>
        @endif
                         
                         <div class="jumbotron">   

                           <form method="post" action="{{ url('admin/AddBlogs') }}" enctype="multipart/form-data">
                           @csrf

                        
                        <div class="form-group">
                         <label>Select Blogs Category</label>
                         <select  name="catname" placeholder="Enter Category" class="form-control @error('catname') is-invalid @enderror"  autocomplete="catname" autofocus>


                        <option value="">-select Category-</option>
                       
                        @foreach($categories as $key=>$cat)

                       <option value="{{$key}}">{{$cat}}</option>



                       @endforeach

                      

                        </select>     
                       
@error('catname')
<span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
</span>
@enderror
                        </div>   
   
                           
                        <div class="form-group">
                         <label>Enter Blog Title</label>
                         <input type="text" name="title" placeholder="Enter Blogs Title" class="form-control @error('title') is-invalid @enderror" value="" autocomplete="title" autofocus>


                        
                         @error('title')
                        <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        </div>   


                        <div class="form-group">
                         <label>Upload Blogs Image</label>
                         <input type="file" name="img" class="form-control @error('img') is-invalid @enderror" value="" autocomplete="img" autofocus>

                         @error('img')
                        <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>   



                        <div class="form-group">
                         <label>Add Blogs Date</label>
                         <input type="date" name="bdate" placeholder="Enter Blogs Date" class="form-control @error('bdate') is-invalid @enderror" value="" autocomplete="bdate" autofocus>

                         @error('bdate')
                        <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>




                        
                        <div class="form-group">
                         <label>Descriptions of Blogs</label>
                        
                         <textarea id="mytextarea" name="desc" class="form-control @error('desc') is-invalid @enderror" value="" autocomplete="desc" autofocus></textarea>

                         @error('desc')
                        <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        </div>      



                        <div class="form-group">
                         <input type="submit" name="addblogs" value="AddBlogs" class="btn btn-lg btn-success">
                           
                        </div>   


                        </div>   


                           </form>


                              






                        
                    </div>
                          
                    </div>
                          
                    </div>
                </main>
                <!-- content-->
                <!-- footer-->
                @include('blogs.admin.inc.footer')
                <!-- footer-->
                </div>
            <!-- content end-->
        </div>
        <!-- main content end-->



          <script>
    tinymce.init({
      selector: 'textarea',
      plugins: '',
      toolbar: '',
      toolbar_mode: 'floating',
      });
  </script>


</html>
</body>
    