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
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Add Technology Subject Here</h3>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-row">
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputFirstName">Enter Technology Title</label>
                                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first name" />
                                                </div>
                                            </div>

                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputLastName">Enter Technology Description</label>
                                                    <textarea class="form-control py-4" id="inputLastName" type="text" placeholder="Descriptions"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">Added Date</label>
                                            <input class="form-control py-4" id="inputEmailAddress" type="date" aria-describedby="emailHelp" placeholder="Added Date" />
                                        </div>

                                        
                                            <div class="form-group mt-4 mb-0"><a class="btn btn-primary btn-block" href="login.html">Add Technology</a></div>
                                    </form>
                                </div>

                                                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        </div>  </div>


        @include('admin.footer')