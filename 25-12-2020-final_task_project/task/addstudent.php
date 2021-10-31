<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='<?php echo $baseurl;?>js/jquery.bvalidator.min.js'></script>
    <script src='<?php echo $baseurl;?>js/default.min.js'></script>
    <script src='<?php echo $baseurl;?>js/gray.js'></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $("#frm1").bValidator();


        });
    </script>


</head>

<body>


<div class="modal fade" role="dialog" id="addemp">
    <div class="modal-dialog" style="width: 80%;">
        <div class="modal-content" style="height: 680px;">

            <div class="col-md-12 col-xs-12">



                <div class="col-md-4 col-xs-12">

                    <img src="<?php echo $baseurl;?>images/emp.png" style="padding:20px;">

                </div>




                <div class="col-md-5 col-xs-12 col-md-offset-1">
                    <h3 align="center">Register Here</h3>
                    <hr style="width:50%; border:solid 2px gray">


                    <form method="post" id="frm1" enctype="multipart/form-data">

                        <div class="form-group">
                            <input type="file" name="img" class="form-control" data-bvalidator="required">
                        </div>

                        <div class="form-group col-md-6">
                            <input type="text" name="fnm" placeholder="FirstName *" class="form-control" data-bvalidator="required,alpha">
                        </div>


                        <div class="form-group col-md-6">
                            <input type="text" name="lnm" placeholder="LastName *" class="form-control" data-bvalidator="required,alpha">
                        </div>



                        <div class="form-group">
                            <input type="text" name="em" placeholder="Email *" class="form-control" data-bvalidator="required,email">
                        </div>



                        <div class="form-group col-md-6">
                            <input type="password" name="pass" placeholder="Password *" class="form-control" data-bvalidator="required,minlen[4],maxlen[10]">
                        </div>


                        <div class="form-group col-md-6">
                            <input type="password" name="cpass" placeholder="Confirm password *" class="form-control" data-bvalidator="required,minlen[4],maxlen[10]">
                        </div>



                        <div class="form-group">
                            <textarea name="address" placeholder="Address *" class="form-control" data-bvalidator="required"></textarea>
                        </div>


                        <div class="form-group">
                            <input type="text" name="mob" placeholder="Mobile *" class="form-control" data-bvalidator="required,minlen[10],maxlen[10],digit">
                        </div>



                        <div class="form-group">
                            <select name="country" placeholder="Country *" class="form-control" data-bvalidator="required">
                            <option value="">-select Country--</option>
                            <?php
                            foreach($shwcn as $shwcn1)
                            {
                            ?>
                            <option value="<?php echo $shwcn1["cid"];?>"><?php echo $shwcn1["cname"];?></option>

                             <?php
                            }
                            ?>
                            </select>
                        </div>


                        <div class="form-group">
                            <select name="state" placeholder="State *" class="form-control" data-bvalidator="required">
                            <option value="">-select state--</option>
                            <?php
                            foreach($shwst as $shwst1)
                            {
                            ?>
                            <option value="<?php echo $shwst1["sid"];?>"><?php echo $shwst1["sname"];?></option>

                             <?php
                            }
                            ?>
                            </select>
                            </select>
                        </div>


                        <div class="form-group">
                            <select name="city" placeholder="City *" class="form-control" data-bvalidator="required">
                            <option value="">-select city--</option>
                            <?php
                            foreach($shwct as $shwct1)
                            {
                            ?>
                            <option value="<?php echo $shwct1["ctid"];?>"><?php echo $shwct1["ctname"];?></option>

                             <?php
                            }
                            ?>
                            </select>
                            
                            </select>
                        </div>



                        <div class="form-group">
                            <input type="submit" name="register" value="Register" class="btn btn-info btn-lg"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="reset" name="res" value="Clear" class="btn btn-danger btn-lg">

                        </div>

                        <div class="form-group">
        <b>Already Have an Account <a href="<?php echo $mainurl;?>Login">Login Here</a></b>
    </div>
                    </form>

                </div>



            </div>





        </div>
    </div>
</div>