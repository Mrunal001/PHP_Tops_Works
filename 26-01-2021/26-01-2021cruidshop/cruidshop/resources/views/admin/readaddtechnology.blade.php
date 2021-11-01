@extends('admin.master')
@section('title_here')
Admin:Add Technology Page

@endsection

@include('admin.header')

@include('admin.sidebar')

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                        
                            <div class="card shadow-lg border-0 rounded-lg mt-5" style="padding:15px !important">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Read  Technology</h3>


                                </div>




                                
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Read Technology
                            </div>


                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                      
                                        
                                        <tbody>

                                        
                                     
                                        
                                        
                                            <tr>
                                                <td>Id :{{ $data->techid}}</td>
                                                <td>Technology Title :{{ $data->technology_title}}</td>
                                                <td>Technology Name :{{ $data->technology_name}}</td>
                                                <td>Technology Descriptions :{{ $data->technology_description}}</td>

                                                <td><a href="#" class="btn btn-dm btn-danger">delete</a>|<a href="#" class="btn btn-dm btn-info">Edit</a></td>

                                            
                                            </tr>
                                        
                                      
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
        </div>

        </div>  </div>


        @include('admin.footer')