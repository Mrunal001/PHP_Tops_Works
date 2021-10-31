<!-- manage all employee -->
<html>

<head>
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
    <h2 align="center">Add State</h2>
        <hr style="width:50%; border:solid 1px red">

        <div class="jumbotron" style="padding:25px; height:200px">
            <form id="frm" method="post" enctype="multipart/form-data">
            

            <div class="form-group col-md-7">
                    <select  name="cname"  class="form-control" placeholder="Enter Country Name*" data-bvalidator="required">
                    <option value="">-select Country-</option>
                    <?php
                    
                    foreach($cn as $cn1)
                    {
                    ?>
                    <option value="<?php echo $cn1["cid"];?>"><?php echo $cn1["cname"];?></option>

                     <?php
                    }
                    ?>

                    </select>
                </div>

                <div class="form-group col-md-7">
                    <input type="text" name="sname"  class="form-control" placeholder="Enter State Name*" data-bvalidator="required">
                </div>
                <div class="form-group col-md-7">
                    <input type="submit" name="addstate" class="btn btn-lg btn-danger" value="Addstate">
                </div>


            </form>
        </div>



        <h2 align="center">Manage All State</h2>

        <table class="table table-responsive table-stripped table-bordered table-hover" align="center" style="overflow:auto">

            <tr>
                <th>#Id</th>
                <th>Country Name</th>
                <th>State Name</th>
                
            
                <th>
                    <center>Action</center>
                </th>

            </tr>

            <?php
              foreach($stjoin as $st1)
              {
             ?>

            <tr>
                <td><?php echo $st1["sid"];?></td>
               
                <td><?php echo $st1["cname"];?></td>
                <td><?php echo $st1["sname"];?></td>
                <td align="center" colspan="4">
                   
                    <a href="<?php echo $mainurl;?>AddState?delstate=<?php echo $st1["sid"];?>"  onclick="return confirm('Are You sure to Delete state')"><button type="button" class="btn btn-sm btn-danger">Delete <span class="fa fa-trash"></span></button></a> |

                    <a href="#"><button type="button" class="btn btn-sm btn-info">Edit <span class="fa fa-edit"></span></button></a>


                </td>

            </tr>


            <?php
              }
              ?>


        </table>


    </div>

    </div>
    </div>

    <script src="<?php echo $baseurl;?>js/jquery-ui.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {


            $("#rdate").datepicker();

        });
    </script>