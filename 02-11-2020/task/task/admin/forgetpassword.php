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
        <script src='<?php echo $baseurl;?>js/bootstrap.min.js'></script>
        <style>
            body {
                width: 100%;
                height: 678px;
                background-color: #00203e;
                background: -webkit-linear-gradient(#00203e, gray);
                background: -IE-linear-gradient(#00203e, gray);
                background: linear-gradient(#00203e, gray);
            }
        </style>
    </head>
    <!-- content start here -->
    <div class="content">
        <!-- <div class="container-fluid"> -->
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <!-- sidebar -->


                <!-- content panel start here -->
                <div class="col-md-12 col-xs-12" id="content-panel">


                    <div class="col-md-4 col-xs-12">

                        <img src="<?php echo $baseurl;?>images/emp.png">

                    </div>


                    <div class="col-md-8 col-xs-12">

                        <br><br><br><br><br>
                        <div class="col-md-8 col-xs-12">

                            <div class="well wll-lg">
                                <h2 align="center" style="color: black;">Forget Password here</h2>
                                <form method="POST">
                                    <div class="form-group">
                                        <input type="text" name="em" placeholder="Email *" class="form-control">

                                    </div>



                                    <div class="form-group">
                                        <input type="submit" name="frg" value="Submit" class="btn btn-block btn-info">


                                    </div>

                            </div>
                            </form>


                        </div>


                        <table class="table table-responsive table-stripped table-bordered table-hover" align="center">




                        </table>


                    </div>



                    <!-- 
            </div> -->
                </div>
            </div>
        </div>