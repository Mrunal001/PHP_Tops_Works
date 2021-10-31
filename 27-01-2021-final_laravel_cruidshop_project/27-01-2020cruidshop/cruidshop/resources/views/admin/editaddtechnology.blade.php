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
                                    <h3 class="text-center font-weight-light my-4">Edit Technology Subject Here</h3>

                                   


                                </div>

                                
                        @if($errors->any())
      
      <div class="alert alert-danger">

<ul>

@foreach($errors->all() as $error)

<li> {{ $error }} </li>

@endforeach

</ul>


</div>


@endif              

                                <div class="card-body">

                                    @if(Session::has('success'))
                                    <div class="alert alert-success">
                                    
                                    <strong role="alert" class="">{!! Session::get('success') !!}</strong>
                                    
                                    </div>
                                 

                                    @endif
                                    




                                    <form method="post" action="{{ url('UpdateAddTechnology',array($data->id))}}">
                                    @csrf




                                    <div class="form-row">
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputFirstName">Edit Technology Title</label>
                                                    <input class="form-control py-4" name="techtitle" value="{{ $data->technology_title }}" id="inputFirstName" type="text" placeholder="Enter first name" />
                                                </div>
                                            </div>
                                    
                                       
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputFirstName">Edit Technology Title Name</label>
                                                    <input class="form-control py-4" name="titlnm"  value="{{ $data->technology_name }}" id="inputFirstName" type="text" placeholder="Enter first name" />
                                                </div>
                                            </div>

                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputLastName">Edit Technology Description</label>
                                                    <textarea class="form-control py-4" id="inputLastName" name="tdesc" type="text" placeholder="Descriptions">{{ $data->technology_description }} </textarea>
                                                </div>
                                            </div>
                                        </div>
                                       



                                        
                                            <div class="form-group mt-4 mb-0"><button type="submit" name="updtech" class="btn btn-lg btn-info"> Update Technology</button></div>

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