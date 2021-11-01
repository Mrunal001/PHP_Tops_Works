<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='{{ asset( 'user') }}/css/style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='{{ asset ('user') }}/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='{{ asset( 'user') }}/css/font-awesome.min.css'>

    <script src='{{ asset('user') }}/js/jquery.js'></script>
    <script src='{{ asset ('user') }}/js/bootstrap.min.js'></script>
    <script src='{{ asset ('user') }}/js/bootstrap.bundle.min.js'></script>

    
</head>

<body>

<nav class="nav navbar-top-fixed" style='background-color:orange'>
    <ul class="navbar-link">
        <li><a href="#">Home</a><li>
        <li><a href="#">Home</a><li>
        <li><a href="#">Home</a><li>
        <li><a href="#">Home</a><li>
        <li><a href="#">Home</a><li>
        <li><a href="#">Home</a><li>

        </ul>

</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <h2 align='center'>Click For Login Here!</h2>
          
        <div class="jumbotron">
         <center>
          <button type="button" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#log" data-dismiss="modal">Login Here <span class="fa fa-user"></span></button>
         </center>
        </div>

        </div>
    </div>

    <div class="modal fade" role="dialog" id="log">
        <div class="modal-dialog">
            
            <div class="modal-content" style="width:850px;height: 350px; margin-left: -28%;">


            </div>
            
        </div>
    </div>
</div>
</body>

</html>