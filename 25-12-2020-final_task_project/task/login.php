

<!-- content start here -->
<div class="content">
    <!-- <div class="container-fluid"> -->
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <!-- sidebar -->

            <!-- content panel start here -->
            <div class="col-md-12 col-xs-12" id="content-panel">

            <div class="col-md-4 col-xs-12">

<img src="<?php echo $baseurl;?>images/emp.png" style="padding:20px;">

</div>




<div class="col-md-5 col-xs-12 col-md-offset-1">
<h3 align="center">Login Here</h3>
<hr style="width:50%; border:solid 2px gray">


<form method="post" id="frm1" enctype="multipart/form-data">


    <div class="form-group">
        <input type="text" name="em" placeholder="Email *" class="form-control" data-bvalidator="required,email">
    </div>



    <div class="form-group">
        <input type="password" name="pass" placeholder="Password *" class="form-control" data-bvalidator="required,minlen[4],maxlen[10]">
    </div>



    <div class="form-group">
        <input type="submit" name="log" value="Login" class="btn btn-info btn-lg"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="<?php echo $mainurl;?>ForgetPassword">ForgetPassword?</a>

    </div>
    <div class="form-group">
        <b>Don't Have an Account <a href="#" data-toggle="modal" data-target="#addemp" data-dismiss="modal">Create Your Account</a></b>
    </div>
</form>

</div>





                </div>

                <!-- 
            </div> -->
            </div>
        </div>
    </div>