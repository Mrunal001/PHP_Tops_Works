<script type="text/javascript">
function sub()
{
var p=document.getElementById("price").value;
var q=document.getElementById("qty").value;
var t=p*q;
document.getElementById("subtot").innerHTML=t;

}

function login()
{

    alert('Want to Add Course in Cart Please Login First')
    window.location='Login';

}

</script>

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
                     
                        </center>
                    </address>
                    </div>
                    </div>
                    
                    <div class="col-md-8 col-xs-12">
                        <form method="post">
                        <input type="text" name="courseid" value="<?php echo $c1["courseid"];?>" readonly style="border:none; display:none">

                        <h4>
                        

                        <input type="text" name="subjname" value="<?php echo $c1["subjectname"];?>" readonly style="border:none"></h4>
                        
                        Select Number of Course :<input type="number" name="qty" id="qty" value="1" min="1" max="10" onchange="return sub(this.value)"> 

                        <h5><del>Rs. 45000</del> Rs.<input type="text" name="price" id="price" value="<?php echo $c1["Fees"];?>" readonly style="border:none"></h5>
                        
                        
                        <h5><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-half-star"></span></h5>

                        <h4 style="color:red; letter-spacing:2px">Subtotal of Course Rs.
                    
                    <label id="subtot"><?php echo $c1["Fees"];?></label></h4>

                        <h5><a href="<?php echo $mainurl;?>ManageAllCourse"><button type="button" class="btn btn-success btn-sm">Continues Add</button></a> 
                         
                       <?php
                       if(!isset($_SESSION["stdid"]))
                       {
                       ?>

                        <button type="button" class="btn btn-danger btn-sm" onclick="login()">AddToCart</button>
                    
                        <?php
                        }
                        else
                        {
                        ?>



                        <button type="submit" name="addcourse" class="btn btn-danger btn-sm">AddToCart</button>
                    
                    </h5>

                    </address>

                        </center>

                        </form>
                    </div>
                    </div>

                    <?php
                    }
                }
                    ?>





                </div>

                <!-- 
            </div> -->
            </div>
        </div>
    </div>