<!-- content start here -->
<div class="content">
    <!-- <div class="container-fluid"> -->
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <!-- sidebar -->
            <!-- content panel start here -->
            <div class="col-md-12 col-xs-12" id="content-panel">          
            <div class="col-md-4 col-xs-12">
                    <div class="well well-lg">
                        <h4 align="center"><a href="#" style="color: black;"><span class="fa fa-users"></span> Welcome :<?php echo $_SESSION["fname"];?></a></h4>

                        <ul class="sidebar-navbar">
                        <li><a href="<?php echo $mainurl;?>ManageProfile"><span class="fa fa-user"></span> Manage Profile</a></li>
                                            <li><a href="<?php echo $mainurl;?>ChangePassword"><span class="fa fa-lock"></span> Chanage Password</a></li>
                                            
                                            <li><a href="<?php echo $mainurl;?>ManageProfile?delstdprof=<?php echo $prof[0]["stdid"];?>" onclick="return confirm('Are You sure to delete Profile')"><span class="fa fa-trash"></span> Delete Account</a></li>
                                            
                                        
                                            <li><a href="#" class="btn btn-block btn-danger" style="color:white; width:50%" data-toggle="modal" data-target="#lg"><span class="fa fa-power-off"></span> Logout Here ?</a></li>
                                            
                                        
                        </ul>


                    </div>

                </div>
                <!-- content area of employee -->
                <div class="col-md-8 col-xs-12">
                <div class="well well-lg">
                 
                    <h2 align="center">Manage Your Profile</h2>
                    <hr style="width: 100%; border: solid 2px lightskyblue;">
                    
                    <form method="post" id="frm1" enctype="multipart/form-data">

<div class="form-group">
    <div clas="thumbnail">
        <img src="<?php echo $prof[0]["student_photo"];?>" style="width: 80%; height: 200px;">
    </div>
    <br>
    <input type="file" name="img" class="form-control" data-bvalidator="required">
</div>

<div class="form-group col-md-6">
    <input type="text" name="fnm" value="<?php echo $prof[0]["firstname"];?>" placeholder="FirstName *" class="form-control" data-bvalidator="required,alpha">
</div>


<div class="form-group col-md-6">
    <input type="text" name="lnm" value="<?php echo $prof[0]["lastname"];?>" placeholder="LastName *" class="form-control" data-bvalidator="required,alpha">
</div>



<div class="form-group">
    <input type="text" name="em" value="<?php echo $prof[0]["email"];?>" placeholder="Email *" class="form-control" data-bvalidator="required,email">
</div>

<div class="form-group">
    <textarea name="address" placeholder="Address *" class="form-control" data-bvalidator="required"> <?php echo $prof[0]["address"];?> </textarea>
</div>


<div class="form-group">
    <input type="text" name="mob" value="<?php echo $prof[0]["mobile"];?>" placeholder="Mobile *" class="form-control" data-bvalidator="required,minlen[10],maxlen[10],digit">
</div>



<div class="form-group">
    <select name="country" placeholder="Country *" class="form-control" data-bvalidator="required">
    <option value="">-select Country--</option>
    <?php
    foreach($shwcn as $shwcn1)
    {
        if($shwcn1["cid"]==$prof[0]["cid"])
        {
    ?>

    <option value="<?php echo $prof[0]["cid"];?>" selected="selected"><?php echo $prof[0]["cname"];?></option>

     <?php
    }
    else
    {
    ?>
        <option value="<?php echo $shwcn1["cid"];?>"><?php echo $shwcn1["cname"];?></option>

        <?php
    }
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
        if($shwst1["sid"]==$prof[0]["sid"])
        {
    ?>
    <option value="<?php echo $prof[0]["sid"];?>" selected="selected"><?php echo $prof[0]["sname"];?></option>

     <?php
    }
    else
    {
    ?>
    
    <option value="<?php echo $shwst1["sid"];?>"><?php echo $shwst1["sname"];?></option>
<?php
    }
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
        if($shwct1["ctid"]==$prof[0]["ctid"])
        {
    ?>
    <option value="<?php echo $prof[0]["ctid"];?>" selected="selected"><?php echo $prof[0]["ctname"];?></option>

     <?php
    }
    else
    {
    ?>
    
    <option value="<?php echo $shwct1["ctid"];?>"><?php echo $shwct1["ctname"];?></option>
<?php
    }
}
?>
    </select>
    
    </select>
</div>



<div class="form-group">
    <input type="submit" name="upd" value="UPDATE!" class="btn btn-info btn-lg"> &nbsp;
</div>



                </div>

</form>


</div>
                </div>


                <!-- 
            </div> -->
            </div>
        </div>
    </div>