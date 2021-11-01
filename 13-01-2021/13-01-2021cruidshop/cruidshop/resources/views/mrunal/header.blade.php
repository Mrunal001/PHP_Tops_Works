
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="index.html">Mrunal Infotech</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="{{ url('') }}">Home</a></li>
                    <li><a href="{{ url('AboutUs') }}">About</a></li>
                    <li><a href="{{ url ('Our-Portfolio') }}">Portfolio</a></li>
                    <li><a href="#team">OurTeam</a></li>
                    <li class="drop-down"><a href="">OurServices</a>
                        <ul>
                            <li><a href="#">Website Designing</a></li>
                            <li class="drop-down"><a href="#">PHP Development</a>
                                <ul>
                                    <li><a href="#">Laravel Framework</a></li>
                                    <li><a href="#">Magento CMS</a></li>
                                    <li><a href="#">Wordpress CMS</a></li>
                                    <li><a href="#">Codeigniter Framework</a></li>
                                    <li><a href="#">Yii Framework</a></li>
                                </ul>
                            </li>
                            <li><a href="#">App Development</a></li>
                            <li><a href="#">Python Development</a></li>
                            <li><a href="#">Angular Devlopement</a></li>
                            <li><a href="#">Java Devlopement</a></li>
                            <li><a href="#">IOS App Devlopement</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('ContactUs')}}">Contact</a></li>

                </ul>
            </nav>
            <!-- .nav-menu -->

            <a href="{{ url ('Login') }}" class="get-started-btn scrollto">MyAccount <span class="fa fa-user"></span></a>

        </div>
    </header>
    <!-- End Header -->
