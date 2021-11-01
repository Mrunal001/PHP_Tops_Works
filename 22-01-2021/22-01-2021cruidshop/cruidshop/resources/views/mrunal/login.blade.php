@extends('mrunal.master')
@section('title_here')
Home Page
@endsection

@include('mrunal.header')


<section id="hero" class="d-flex align-items-center" style="height:300px">
<div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
<img src="{{ asset ('mrunal/user') }}/assets/img/hero-img.png" class="img-fluid animated" alt="" style="height:auto">
</div>
</section>



        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Login Here</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi
                        quidem hic quas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">

                    <img src="{{ asset ('mrunal/user') }}/assets/img/skills.png" class="img-fluid" alt="">
                        
                        
                          
                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="name">Email *</label>
                                    <input type="text" name="em" class="form-control" id="name" />
                                    <div class="validate"></div>
                                </div>

                             
                                <div class="form-group col-md-12">
                                    <label for="name">Password *</label>
                                    <input type="password" name="pass" class="form-control" id="name" data-rule="minlen:4" />
                                    <div class="validate"></div>

                                </div>
                                
                            <div class="text-center"><button type="submit">Login </button>
                        
                         <a href="#">Forget Password</a>
                        </div>

                        <div class="form-group col-md-12">
                        <b>Don't Have an Account? <a href="{{ url('Register/') }}">Create An Account</a></b>
                        </div>

                        </form>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->
        @include('mrunal.footer')