@extends('blogs.admin.master')
<!-- Top nav-->
@include('blogs.admin.inc.topnav')

<!-- Top nav end-->
<!-- main content-->
<div id="layoutSidenav">
<!-- side nav-->
@include('blogs.admin.inc.sidenav')

<!-- side nav end-->
<!-- content-->
<div id="layoutSidenav_content">
<!-- content-->
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Add Blogs Category</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Blogs Category</li>
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

                           <form method="post" action="{{ url('admin/AddCategory') }}">

                           @csrf
                           
                        <div class="form-group">
                         <label>Enter Blog Category</label>
                         <input type="text" name="catname" placeholder="Enter Category" class="form-control @error('catname') is-invalid @enderror" value="" autocomplete="catname" autofocus>

                         @error('catname')
                        <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>   



           
                        <div class="form-group">
                         <label>Select Add Date</label>
                         <input type="date" name="adddate" placeholder="Enter Addded date" class="form-control @error('catname') is-invalid @enderror" value="" autocomplete="catname" autofocus>

                       @error('adddate')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                        </div>   


                        <div class="form-group">
                         <input type="submit" name="addcategory" value="AddCategory" class="btn btn-lg btn-success">
                           
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