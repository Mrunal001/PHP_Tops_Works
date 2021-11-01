<?php
$mainurl="http://localhost/ManishSweet/";
$baseurl="http://localhost/ManishSweet/assets/";
?>
  
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Manish Sweet Pvt Ltd | Rajkot | Ahemdabad | Surat</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/font-awesome.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/style.css'>
    <link rel='icon' type='text/css' media='screen' href='<?php echo $baseurl;?><?php echo $baseurl;?>images/logo.png'>
    <script src='<?php echo $baseurl;?>js/jquery.js'></script>
    <script src='<?php echo $baseurl;?>js/cycle.min.js'></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $("#slide").cycle("shuffle");

        });
    </script>
    <script src='<?php echo $baseurl;?>js/bootstrap.min.js'></script>

</head>



    <div class="header navbar-fixed-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-xs-12">

                    <div class="col-md-3 col-xs-12">
                        <div id="logo">
                            <img src="<?php echo $baseurl;?>images/logo1.png">
                        </div>
                    </div>

                    <div class="col-md-9 col-xs-12">
                        <nav class="navbar">
                            <ul>
                                <li><a class="active" href="<?php echo $mainurl;?>">Home</a></li>

                                <li><a href="#">Company</a></li>

                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Products <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><span class="fa fa-birthday-cake"> Birthday Cake</span></a></li>
                                        <li><a href="#"><span class="fa fa-birthday-cake"> Bhavnagari Gathiya</span></a></li>
                                        <li><a href="#"><span class="fa fa-birthday-cake"> Jambun</span></a></li>
                                        <li><a href="#"><span class="fa fa-birthday-cake"> Namkeen</span></a></li>
                                    </ul>

                                </li>

                                <li><a href="#">Infrastructure</a></li>

                                <li><a href="#">Channel Partners</a></li>

                                <li><a href="#">Career</a></li>

                                <li><a href="#">News&Events</a></li>

                                <li><a href="<?php echo $mainurl;?>Contact-Form">Contact</a></li>

                                <li><a href="#">AgencyForm</a></li>
                            </ul>

                        </nav>
                    </div>


                </div>
            </div>
        </div>
    </div>
