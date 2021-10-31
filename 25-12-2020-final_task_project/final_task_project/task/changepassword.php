

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

<h2 align="center">Change Password</h2>
<hr style="width:50%; border:solid 2px gray">

<form method="post" id="frm1" enctype="multipart/form-data">


    <div class="form-group">
        <input type="password" name="opass" placeholder="Opass Password *" class="form-control" data-bvalidator="required,minlen[3],maxlen[10]">
    </div>
    
    <div class="form-group">
        <input type="password" name="npass" placeholder="New Password *" class="form-control" data-bvalidator="required,minlen[3],maxlen[10]">
    </div>
    
    <div class="form-group">
        <input type="password" name="cpass" placeholder="Confirm Password *" class="form-control" data-bvalidator="required,minlen[3],maxlen[10]">
    </div>

    <div class="form-group">
        <input type="submit" name="chng" value="Submit" class="btn btn-info btn-lg"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    </div>

</form>

</div>





                </div>

                <!-- 
            </div> -->
            </div>
        </div>
    </div>