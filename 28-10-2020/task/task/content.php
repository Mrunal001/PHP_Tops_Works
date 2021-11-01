<!-- content start here -->
<div class="content">
    <!-- <div class="container-fluid"> -->
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <!-- sidebar -->

            <!-- sidebar start here -->
            <div class="col-md-3 col-xs-12" id="sidebar">
                <br><br>

                <center>
                    <img src="<?php echo $baseurl;?>images/users.png" class="img img-circle" style="width: 100px; height: 100px; border:solid 1px gray; padding:15px">

                    <center>

            </div>


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


                <!-- manage all employee -->

                <table class="table table-responsive table-stripped table-bordered table-hover" align="center">

                    <tr>
                        <th>#Emplid</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Salary</th>
                        <th>Department</th>
                        <th>State</th>
                        <th>city</th>

                        <th>
                            <center>Action</center>
                        </th>

                    </tr>

                    <tr>
                        <td>#Emplid</td>
                        <td>Photo</td>
                        <td>Name</td>
                        <td>Address</td>
                        <td>Salary</td>
                        <td>Department</td>
                        <td>State</td>
                        <td>city</td>

                        <td colspan="4">
                            <a href="#"><button type="button" class="btn btn-sm btn-success">SendWhatsap <span class="fa fa-whatsapp"></span></button></a> |

                            <a href="#"><button type="button" class="btn btn-sm btn-danger">Delete <span class="fa fa-trash"></span></button></a> |

                            <a href="#"><button type="button" class="btn btn-sm btn-info">Edit <span class="fa fa-edit"></span></button></a>


                        </td>

                    </tr>



                </table>


            </div>



            <!-- 
            </div> -->
        </div>
    </div>
</div>