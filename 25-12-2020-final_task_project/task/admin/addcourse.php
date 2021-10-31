<!-- manage all employee -->
<html>

<head>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> 

<script type="text/javascript">

$(document).ready(function(){

$("#frm").bValidator();


});

</script>
    <link rel="stylesheet" href="<?php echo $baseurl;?>css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo $baseurl;?>css/gray.css">
</head>

</html>

<body>

    <div class="col-md-9 col-xs-12" id="content-panel" style="overflow:auto; height:550px">
        <h2 align="center">Add Course</h2>
        <hr style="width:50%; border:solid 1px red">

        <div class="jumbotron" style="padding:25px; height:400px">
            <form id="frm" method="post" enctype="multipart/form-data">
              
             
            <div class="form-group col-md-7">
                    <select  name="subname" data-bvalidator="required" class="form-control">
                    
                <option value="">-Select Subject-</option>
                <?php
                foreach($subj as $subj1)
                {
                ?>
                <option value="<?php echo $subj1['subjid'];?>"><?php echo $subj1['subjectname'];?></option>
                
             <?php
                }
                ?>
            </select>
                </div>
            
            <div class="form-group col-md-7">
                    <input type="file" name="subjectimg" data-bvalidator="required">
                </div>


                
                <div class="form-group col-md-7">
                    <input type="text" name="code"  class="form-control" placeholder="Enter Subject Code*" data-bvalidator="required">
                </div>

                <div class="form-group col-md-7">
                    <input type="text" name="fees"  class="form-control" placeholder="Enter Fees Ammount Inr *" data-bvalidator="required">
                </div>

              
            <div class="form-group col-md-7">
                    <select  name="paymentmode" data-bvalidator="required" class="form-control">
                    
                <option value="">-Select Payment Mode-</option>
                
                <option value="1">Online Payment</option>
                
                <option value="2">Offline Payment</option>
               
              
            </select>



            </div>

            <div class="form-group col-md-7">
                    <select  name="teachername" data-bvalidator="required" class="form-control">
                    
                <option value="">-Select Teacher-</option>
                <?php
                foreach($teach as $teach1)
                {
                ?>
                <option value="<?php echo $teach1['teacherid'];?>"><?php echo $teach1['name'];?></option>
                
             <?php
                }
                ?>
            </select>
                </div>
            
               

                <div class="form-group col-md-7">
                    <input type="submit" name="addcourse" class="btn btn-lg btn-danger" value="AddCourse">
                </div>

            </form>
        </div>



        <h2 align="center">Manage All Course</h2>

        <div class="table-responsive" style="width:105%; overflow: auto;">

        <table id="addCourse" class="table table-responsive table-stripped table-bordered table-hover" align="center" style="overflow:auto">

           <thead>
            <tr>
                <th>#Id</th>
                <th>Subject</th>
                <th>Photo</th>
                <th>CourseCode</th>
                <th>Fees</th>
                <th>PaymentMode</th>
                <th>TeacherName</th>
                <th>Added_Date</th>
              
                <th colpsan="4" style="width:150% !important">
                    Action
                </th>
                

            </tr>
           </thead>

           <tbody>

            <?php
              foreach($course as $course1)
              {
             ?>

            <tr>
                <td><?php echo $course1["courseid"];?></td>
                <td><?php echo $course1["subjid"];?></td>
                <td><img src="<?php echo $course1["photo"];?>" width="80px" height="80px" ></td>
                <td><?php echo $course1["coursecode"];?></td>
                <td><?php echo $course1["Fees"];?></td>
                <td><?php echo $course1["mode"];?></td>
                <td><?php echo $course1["teacherid"];?></td>
                <td><?php echo $course1["addedd_date"];?></td>

                <td  colspan="4" style="width:150% !important">
                   
                    <a href="#"><button type="button" class="btn btn-sm btn-danger">Delete <span class="fa fa-trash"></span></button></a> |

                    <a href="#"><button type="button" class="btn btn-sm btn-info">Edit <span class="fa fa-edit"></span></button></a>


                </td>

            </tr>


            <?php
              }
              ?>

           </tbody>


        </table>


        </div>
    </div>

    </div>
    </div>

    <script src="<?php echo $baseurl;?>js/jquery-ui.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {


            $("#rdate").datepicker();

        });
    </script>



<script>


$(document).ready(function() {
    $('#addCourse').DataTable();
} );


</script>