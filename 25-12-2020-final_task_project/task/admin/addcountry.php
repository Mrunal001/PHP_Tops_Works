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
        <h2 align="center">Add Country</h2>
        <hr style="width:50%; border:solid 1px red">

        <div class="jumbotron" style="padding:25px; height:200px">
            <form id="frm" method="post" enctype="multipart/form-data">
            

                <div class="form-group col-md-7">
                    <input type="text" name="cname"  class="form-control" placeholder="Enter Country Name*" data-bvalidator="required">
                </div>
                <div class="form-group col-md-7">
                    <input type="submit" name="addcountry" class="btn btn-lg btn-danger" value="AddCountry">
                </div>

            </form>
        </div>



        <h2 align="center">Manage All Country</h2>

        <table class="table table-responsive table-stripped table-bordered table-hover" align="center" style="overflow:auto">

            <tr>
                <th>#Id</th>
                <th>Cname</th>
               
            
                <th>
                    <center>Action</center>
                </th>

            </tr>

            <?php
              foreach($cn as $cn1)
              {
             ?>

            <tr>
                <td><?php echo $cn1["cid"];?></td>
           
                <td><?php echo $cn1["cname"];?></td>

                <td align="center" colspan="4">
                  
                    <a href="#"><button type="button" class="btn btn-sm btn-danger">Delete <span class="fa fa-trash"></span></button></a> |

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