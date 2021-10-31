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

                            @if(Session::has('delsuccess'))
                                    <div class="alert alert-success">
                                    
                                    <strong role="alert" class="">{!! Session::get('delsuccess') !!}</strong>
                                    
                                    </div>
                                 

                                    @endif
                                    


                                    @if(Session::has('updsuccess'))
                                    <div class="alert alert-success">
                                    
                                    <strong role="alert" class="">{!! Session::get('updsuccess') !!}</strong>
                                    
                                    </div>
                                 

                                    @endif
                                    
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

                                        
                                       @foreach($data as $row)
                                        
                                        
                                            <tr>
                                                <td>{{ $row->id }}</td>
                                                <td>{{ $row->technology_title }}</td>
                                                <td>{{ $row->technology_name }}</td>
                                                <td>{{ $row->technology_description }}</td>

                                                <td><a href='{{ url("ReadTechnology/{$row->id}")}}' class="btn btn-dm btn-success">Read</a>|
                                                
                                                <a href='{{ url("manageaddtechnology/{$row->id}")}}' class="btn btn-dm btn-danger" onclick="return confirm('Are You sure to Delete Data')">delete</a>|
                                                <a href='{{ url("EditAddtechnology/{$row->id}")}}' class="btn btn-dm btn-info">Edit</a></td>

                                            
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