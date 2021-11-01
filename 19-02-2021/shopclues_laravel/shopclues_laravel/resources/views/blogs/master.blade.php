<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Brijesh Technical Blogs writer and Developer and Blogger in Laravel | Codeigniter | wordpress | Python | Django | Web Designing | Angular | @yield('blogstitle')</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('blog/user') }}/vendor/bootstrap/css/bootstrap.min.css " rel="stylesheet">

  <link href="{{ asset('blog/user') }}/css/style.css " rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
 
  <!-- Custom styles for this template -->
  <link href="{{ asset('blog/user') }}/css/blog-home.css" rel="stylesheet">

  <script src="{{ asset('blog/user') }}/vendor/jquery/jquery.min.js"></script>
  
  <script src="{{ asset('blog/user') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



</head>

<body>

  <!-- Navigation -->
   @yield('nav')
  <!-- Page Content -->
   @yield('slider')

   
  <!-- /.container -->
  @yield('rightsidebar')
  <!-- Footer -->
 

  @yield('footer')


  <!-- Bootstrap core JavaScript -->

</body>

</html>
