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
                                    <h3 class="text-center font-weight-light my-4">Manage Technology</h3>


                                </div>




                                
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>


                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th>Id</th>
                                                <th>Technology Title</th>
                                                <th>Technology Name</th>
                                                <th>Technology Descriptions</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Technology Title</th>
                                                <th>Technology Name</th>
                                                <th>Technology Descriptions</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                        
                                       @foreach ($data as $rows)
                                        
                                        
                                            <tr>
                                                <td>{{ $rows->techid}}</td>
                                                <td>{{ $rows->technology_title}}</td>
                                                <td>{{ $rows->technology_name}}</td>
                                                <td>{{ $rows->technology_description}}</td>

                                                <td><a href="#" class="btn btn-dm btn-success">Read</a>|<a href="#" class="btn btn-dm btn-danger">delete</a>|<a href="#" class="btn btn-dm btn-info">Edit</a></td>

                                            
                                            </tr>
                                        
                                        @endforeach
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