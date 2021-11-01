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
        <h2 align="center">Add Student Gallery</h2>
        <hr style="width:50%; border:solid 1px red">

        <div class="jumbotron" style="padding:25px; height:200px">
            <form id="frm" method="post" enctype="multipart/form-data">
                <div class="form-group col-md-7">
                    <input type="file" name="simg" data-bvalidator="required">
                </div>

                <div class="form-group col-md-7">
                    <input type="text" name="rdate" id="rdate" class="form-control" placeholder="Enter Registered Date*" data-bvalidator="required">
                </div>
                <div class="form-group col-md-7">
                    <input type="submit" name="addgallery" class="btn btn-lg btn-danger" value="AddGallery">
                </div>

            </form>
        </div>



        <h2 align="center">Manage All gallery</h2>

        <table class="table table-responsive table-stripped table-bordered table-hover" align="center" style="overflow:auto">

            <tr>
                <th>#Id</th>
                <th>Photo</th>
                <th>Registered Date</th>
            
                <th>
                    <center>Action</center>
                </th>

            </tr>

            <?php
              foreach($shwgall as $shwgall1)
              {
             ?>

            <tr>
                <td><?php echo $shwgall1["galid"];?></td>
                <td><img src="<?php echo $shwgall1["gallery_image"];?>" width="80px" height="80px" ></td>
                <td><?php echo $shwgall1["registered_date"];?></td>
                <td align="center" colspan="4">
                    <a href="#"><button type="button" class="btn btn-sm btn-success">SendWhatsap <span class="fa fa-whatsapp"></span></button></a> |

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