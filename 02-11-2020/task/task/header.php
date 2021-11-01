<?php
$mainurl="http://localhost/technotask/";
$baseurl="http://localhost/technotask/assets/";
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Techno Task Manager | Home Page </title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/bootstrap.min.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/font-awesome.min.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/style.css'>
        <script src='<?php echo $baseurl;?>js/jquery.js'></script>
        <script src='<?php echo $baseurl;?>js/cycle.min.js'></script>
        <script type="text/javascript">
            $(document).ready(function() {


                $("#slide").cycle("fade");

            });
        </script>
        <script src='<?php echo $baseurl;?>js/bootstrap.min.js'></script>
    </head>

    <body>

        <!-- header start here -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-xs-12">

                        <div class="col-md-6 col-xs-12">
                            <div id="logo">
                                <h3 style="margin-left:2%"><img src="<?php echo $baseurl;?>images/logofinal.png"></h3>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div id="right-header">
                                <ul>
                                    <li><a href="#"><span class="fa fa-home"></span> Home</a></li>
                                    <li><a href="#"> About</a></li>
                                    <li><a href="#"> Services</a></li>
                                    <li><a href="#"> Gallery</a></li>
                                    <li><a href="#"> OurTeam</a></li>


                                    <li class="dropdown"><a class="dropdown-header" data-toggle="dropdown" href="#"><span class="fa fa-user"></span> MyAccount <span class="caret"></span></b></a>

                                        <ul class="dropdown-menu">
                                            <li><a href="#"><span class="fa fa-user"></span> SignIn</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#addemp"><span class="fa fa-user"></span> SignUp</a></li>
                                            <li><a href="#"><span class="fa fa-power-off"></span> Logout</a></li>


                                        </ul>

                                    </li>


                                </ul>

                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>




    </body>

    </html>