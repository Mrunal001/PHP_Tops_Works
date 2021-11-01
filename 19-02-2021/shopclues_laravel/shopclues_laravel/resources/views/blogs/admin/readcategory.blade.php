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
                       <h3>Read Category</h3>
                       <hr>
                        <div class="card" style="width:100%">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Read Blogs Category
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <address style="letter-spacing: 2px; background-color: aquamarine; padding:25px">   
                                     <b>Id : {{$data->id }} </b><br>
                                  
                                     <b>Category : {{$data->catname }} </b><br>
                                  
                                     <b>Registered Date : {{$data->addeddate }} </b><br>
                                  <br>
                                  
                                     <a href='{{ url("destroy/{$data->id}")}}' class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to Delete Data')"><span class="fa fa-trash"></span> Delete</a>
                                  
                                  </address>
                                  
                                  
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