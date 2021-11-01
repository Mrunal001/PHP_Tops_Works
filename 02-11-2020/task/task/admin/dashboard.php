<?php

if(!isset($_SESSION["aid"]))
{
    echo "<script>
    
    window.location='./';
    </script>";

}



?>
            <!-- content panel start here -->
            <div class="col-md-9 col-xs-12" id="content-panel">

                <div class="col-md-4 col-xs-12">
                    <div class="well wll-lg">
                        <h3><a href="#" style="color: black;" data-toggle="modal" data-target="#addemp"><span class="fa fa-plus-circle"></span> AddEmployee</a></h3>
                    </div>

                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="well wll-lg">
                        <h3><span class="fa fa-plus-circle"></span> ManageEmployee</h3>
                    </div>

                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="well wll-lg">
                        <h3><span class="fa fa-user-plus"> <span class="badge badge-lg" style="background-color: red; color: white;">0</span> </span> Total Employee</h3>
                    </div>

                </div>


                <img src="<?php echo $baseurl;?>images/emp.png" style="width:80%; height:390px">


            
            </div>


            </div>

</div>
</div>
