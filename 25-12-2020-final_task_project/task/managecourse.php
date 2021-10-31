<!-- content start here -->
<div class="content">
    <!-- <div class="container-fluid"> -->
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <!-- sidebar -->




            <!-- content panel start here -->
            <div class="col-md-12 col-xs-12" id="content-panel">

                <div class="col-md-4 col-xs-12">
                    
                <div class="well wll-lg">
                        <h4><a href="#" style="color: black;" data-toggle="modal" data-target="#addemp"><span class="fa fa-plus-circle"></span> Manage Online Course</a></h4>
                    </div>


                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="well wll-lg">
                        <h4><span class="fa fa-plus-circle"></span> Online Support and Practical Solved Query</h4>
                    </div>

                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="well wll-lg">
                        <h4><a href="<?php echo $mainurl;?>ManageAllCourse"><span class="fa fa-address-book"></span> Total Course <span class="badge badge-lg" style="background-color: red; color: white;">
                     
                        <?php
                         
                         echo $countsubj[0]["total"];

                        ?>
                    
                    
                    </span> </a></h4>
                    </div>

                </div>


                <!-- content area of employee -->
                <div class="col-md-12 col-xs-12">
                    <h2 align="center">Add Course in Your Cart from Here</h2>
                    <hr style="width: 50%; border: solid 2px lightskyblue;">
                    
                    <?php
                    foreach($coursedata as $c1)
                    {
                    ?>
                    <div class="col-md-4 col-xs-12">
                    <div class="well wll-lg">
                        <center>
                     <div class="thumbnail">
                         <img src="admin/<?php echo $c1["photo"];?>" style="width:100%; height: 250px;">
                     </div>
                     
                    <address>
                        <h4><?php echo $c1["subjectname"];?></h4>
                        
                        <h5><del>Rs. 45000</del> Rs.<?php echo $c1["Fees"];?></h5>
                        
                        <h5><?php echo $c1["subjectname"];?></h5>
                        
                        <h5><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-half-star"></span></h5>
                        <h5><a href="<?php echo $mainurl;?>CourseDetails?course_details_id=<?php echo $c1["courseid"];?>"><button type="button" class="btn btn-danger btn-sm">click for More Details</button></a></h5>

                    </address>

                        </center>
                    </div>
                    </div>

                    <?php
                    }
                    ?>





                </div>

                <!-- 
            </div> -->
            </div>
        </div>
    </div>