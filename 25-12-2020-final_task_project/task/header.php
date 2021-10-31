<?php
$mainurl="http://localhost/task/";
$baseurl="http://localhost/task/assets/";
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Student Techno Task Management systems | Home Page </title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/bootstrap.min.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/font-awesome.min.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/style.css'>
        <link rel='stylesheet' type='text/css' media='screen' href="<?php echo $baseurl;?>css/gray.css">
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

                        <div class="col-md-4 col-xs-12">
                            <div id="logo">
                                <h3 style="margin-left:2%"><img src="<?php echo $baseurl;?>images/logofinal.png"></h3>
                            </div>
                        </div>
                        <div class="col-md-8 col-xs-12">
                            <div id="right-header">
                                <ul>
                                    <li><a href="<?php echo $mainurl;?>"><span class="fa fa-home"></span> Home</a></li>
                                    <li><a href="#"> About</a></li>
                                    <li class="dropdown"><a class="dropdown" data-toggle="dropdown" href="#"> All Course <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                    <?php
                                     foreach($alcourse as $c1)
                                     {  
                                     ?>
                                     
                                     <li><a href="<?php echo $mainurl;?>CourseDetails?course_details_id=<?php echo $c1["subjid"];?>">
                                     <?php echo $c1["subjectname"];?>
                                     </a></li>

                                     <?php
                                     }
                                     ?>

                                    </ul> 
                                    </li>
                                    <li><a href="<?php echo $mainurl;?>Gallery"> Gallery</a></li>
                                    <li><a href="#"> OurTeams</a></li>

                                    <?php
                                     if(!isset($_SESSION["stdid"]))
                                     {
                                    ?>

<li><a href="<?php echo $mainurl;?>ViewCart"> Cart <span class="badge badge-lg badge-danger" style="background-color: red; color:white">0</span></a></li>

                                    <?php
                                    }
                                    else
                                    {
                                        ?>
                                    <li><a href="<?php echo $mainurl;?>ViewCart"> Cart <span class="badge badge-lg badge-danger" style="background-color: red; color:white"><?php echo $crttot[0]["total"]; ?></span></a></li>
                                    
                                    <?php
                                    }
                                    ?>
                                    <?php
                                     if(!isset($_SESSION["stdid"]))
                                     {
                                    ?>


                                    <li class="dropdown"><a class="dropdown-header" data-toggle="dropdown" href="#"><span class="fa fa-user"></span> MyAccount <span class="caret"></span></b></a>

                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo $mainurl;?>Login"><span class="fa fa-user"></span> SignIn</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#addemp"><span class="fa fa-user"></span> SignUp</a></li>
                                                </ul>

                                    </li>
                                      <?php
                                     }
                                     else
                                     {
                                     ?>
                                   
                                    

                                    <li class="dropdown"><a class="dropdown-header" data-toggle="dropdown" href="#"><span class="fa fa-user"></span> Welcome :<b style="color:red; letter-spacing: 2px;"><?php echo ucfirst($_SESSION["fname"]);?></b><span class="caret"></span></b></a>

                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo $mainurl;?>ManageProfile"><span class="fa fa-user"></span> Manage Profile</a></li>
                                            <li><a href="<?php echo $mainurl;?>ChangePassword"><span class="fa fa-lock"></span> Chanage Password</a></li>
                                            
                                            <li><a href="#"><span class="fa fa-trash"></span> Delete Account</a></li>
                                            
                                        
                                            <li><center><a href="#" class="btn btn-block btn-danger" style="color:white; margin-left:17%" data-toggle="modal" data-target="#lg"><span class="fa fa-power-off"></span> Logout Here ?</a></center></li>
                                            
                                        
                                        </ul>

                                    </li>

                                    <?php
                                     }
                                     ?>


                                </ul>

                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>





        
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
                 <a href="<?php echo $mainurl;?>?lgout"><button type="button" class="btn btn-default btn-lg" style="border:solid 1px red">Yes</button></a>
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