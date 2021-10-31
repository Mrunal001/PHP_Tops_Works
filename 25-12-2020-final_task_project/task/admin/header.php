<?php
$mainurl="http://localhost/task/admin/";
$baseurl="http://localhost/task/admin/assets/";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Employee management systems</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/font-awesome.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/style.css'>
    <script src='<?php echo $baseurl;?>js/jquery.js'></script>
    <script src='<?php echo $baseurl;?>js/jquery.bvalidator.min.js'></script>
    <script src='<?php echo $baseurl;?>js/default.min.js'></script>
    <script src='<?php echo $baseurl;?>js/gray.js'></script>
    
    <script src='<?php echo $baseurl;?>js/bootstrap.min.js'></script>
</head>

<body>

<!-- header start here -->
<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-xs-12">

                <div class="col-md-6 col-xs-12">
                    <div id="logo"><h3 style="margin-left:10%">Admin</h3></div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div id="right-header">
                        <ul>
                            <li><a href="#"><span class="fa fa-flag"></span><span class="caret"></span></a></li>
                            <li><a href="#"><span class="fa fa-desktop"></span> Control Panel <span class="caret"></span></a></li>

                            <li class="dropdown"><a class="dropdown-header" data-toggle="dropdown" href="#"><span class="fa fa-user"></span> <b>Account <span class="caret"></span></b></a>

                                <ul class="dropdown-menu">
                                    <li><a href="#"><span class="fa fa-user"></span> Manage All Students</a></li>
                                    <li><a href="#"><span class="fa fa-user"></span> Setting</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#lg" data-dismiss="modal"><span class="fa fa-power-off"></span> Logout</a></li>


                                </ul>

                            </li>


                        </ul>

                    </div>
                </div>



            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="clearfix"></div>





<!-- logout here -->
<div class="modal fade" role="dialog" id="lg">
    <div class="modal-dialog" style="width: 40%; margin-top:8%">
        <div class="modal-content" style="height: 150px;">


             <div class="list-group">
                 
             <div class="list-group-item" style="background-color:red; width:100%">
                 
             <h4 align="center" style="color:white">Are you Sure to logout ?</h4></div>

             <div class="list-group-item">
                 
                 <center>
                     <span class="fa fa-close" style="font-size:65px; color:red"></span>
                     <br><br>
                 <a href="<?php echo $mainurl;?>Dashboard?lggout"><button type="button" class="btn btn-default btn-lg" style="border:solid 1px red">Yes</button></a>
                 &nbsp;&nbsp;
                 <a href="#"><button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">No</button></a>
</center>
                </div>




             </div>
            </div>
        </div>
    </div>




</body>
</html>
