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
                   <br><br>

                   <div class="row">

                  


                       <h3>Manage All Category</h3>
                       <hr>
                        <div class="card" style="width:100%">
                           
                           
                   @if(Session::has('delsuccess'))
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>{!! Session::get('delsuccess') !!}</strong>
            </div>
        @endif





        
        @if(Session::has('success'))
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>{!! Session::get('success') !!}</strong>
            </div>
        @endif
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Show all Blogs Category
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Category Name</th>
                                                <th>Registered Date</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                  
                     
                                        <tbody>

                                        @foreach($data as $row)
                                            <tr>
                                                <td>{{ $row->id }}</td>
                                                <td>{{ $row->catname }}</td>
                                                <td>{{ $row->addeddate }}</td>
                                                <td>

                                                <a href='{{ url("readcategory/{$row->id}")}}' class="btn btn-sm btn-info"><span class="fa fa-read"></span> Read</a> |
                                               <a href="" class="btn btn-sm btn-success"><span class="fa fa-watsapp"></span> Sendwatsap</a> |
                                                
                                               <a href='{{ url("destroy/{$row->id}")}}' class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to Delete Data')"><span class="fa fa-trash"></span> Delete</a>
                                                |
                                                <a href='{{ url("editcategory/{$row->id}")}}' class="btn btn-sm btn-info"><span class="fa fa-edit"></span> Edit</a>
                                                </td>
                                               
                                            </tr>

                                            
                                            @endforeach

                                            
                                            </tbody>


                                    </table>
                                </div>
                            </div>
                        </div>








                   
                </main>



                </div>
                
                </div>
                
                </div>
                
                </div>
                <!-- content-->
                <!-- footer-->
                @include('blogs.admin.inc.footer')
                <!-- footer-->
                </div>
            <!-- content end-->
        </div>
        <!-- main content end-->