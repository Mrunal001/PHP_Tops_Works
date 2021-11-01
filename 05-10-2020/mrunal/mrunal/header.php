<?php
$mainurl="http://localhost/mrunal/";
$baseurl="http://localhost/mrunal/assets/";

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>CRUID Operations in MVC | Home Page</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/bootstrap.min.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/style.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/font-awesome.min.css'>
        <script src='<?php echo $baseurl;?>js/jquery.js'></script>
        <script src='<?php echo $baseurl;?>js/bootstrap.min.js'></script>

    </head>

    <body>


        <nav class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-header">
                <div id="logo" style="margin-left:45%; margin-top: 15% !important;">
                    <h2 style="color: white;" style="margin-top: 2%;">MVC</h2>
                </div>
            </div>

            <div class="navbar-header" style="margin-left: 35%;">
                <ul>
                    <li><a href="<?php echo $mainurl;?>">Home</a></li>
                    <li><a href="<?php echo $mainurl;?>About-Us">About</a></li>
                    <li><a href="<?php echo $mainurl;?>Products">Products</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Account <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $mainurl;?>Register"><span class="fa fa-user"></span> SignUp</a></li>

                            <li><a href="<?php echo $mainurl;?>"><span class="fa fa-user"></span> SignIn</a></li>

                            <li><a href="<?php echo $mainurl;?>"><span class="fa fa-user"></span> AdminLogin</a></li>

                        </ul>


                    </li>



                </ul>
            </div>
        </nav>



    </body>

    </html>