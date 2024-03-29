@extends('mrunal.master')
@section('title_here')
Home Page
@endsection

@include('mrunal.header')


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi
                        quidem hic quas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>

                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0"
                                style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>

                    </div>



<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">




                        <form method="post" action="{{ url('ContactUs')}}">

    
                        @if($errors->any())
      
                        <div class="alert alert-danger">

<ul>

  @foreach($errors->all() as $error)

   <li> {{ $error }} </li>

   @endforeach

</ul>


</div>


@endif              

                    <!-- success msg -->

                    @if(Session::has('success'))

                      
<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>{!! Session::get('success') !!}</strong> 
</div>
                     

                    @endif



                            @csrf

  
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" />

                                
                                   
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Your Email</label>
                                    <input type="text"  class="form-control @error('em') is-invalid @enderror" name="em" id="em"  />




                                </div>


                                    <div class="form-group col-md-6">
                                    <label for="name">Your Mobile</label>
                                    <input type="text"  class="form-control @error('mob') is-invalid @enderror" name="mob" id="em" />
                             
                           </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control @error('subj') is-invalid @enderror" name="subj" id="subject"  />
                              
                            </div>

                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control @error('mesg') is-invalid @enderror" name="mesg" rows="10" cols="58" ></textarea>

                                
                            </div>
                            
                            </div>
                          
                            <div class="text-center"><input type="submit" name="cont" value="Send Message">
                            
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->


        @include('mrunal.footer')
