<div class="modal fade" role="dialog" id="addemp">
    <div class="modal-dialog" style="width: 80%;">
        <div class="modal-content" style="height: 590px;">

            <div class="col-md-12 col-xs-12">



                <div class="col-md-4 col-xs-12">

                    <img src="<?php echo $baseurl;?>images/emp.png" style="padding:20px;">

                </div>




                <div class="col-md-5 col-xs-12 col-md-offset-1">
                    <h3 align="center">Add Employee</h3>
                    <hr style="width:50%; border:solid 2px gray">


                    <form method="post">

                        <div class="form-group">
                            <input type="file" name="img" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <input type="text" name="fnm" placeholder="FirstName *" class="form-control">
                        </div>


                        <div class="form-group col-md-6">
                            <input type="text" name="lnm" placeholder="LastName *" class="form-control">
                        </div>



                        <div class="form-group">
                            <input type="text" name="em" placeholder="Email *" class="form-control">
                        </div>



                        <div class="form-group col-md-6">
                            <input type="password" name="pass" placeholder="Password *" class="form-control">
                        </div>


                        <div class="form-group col-md-6">
                            <input type="password" name="cpass" placeholder="Confirm password *" class="form-control">
                        </div>



                        <div class="form-group">
                            <textarea name="address" placeholder="Address *" class="form-control"></textarea>
                        </div>


                        <div class="form-group">
                            <input type="text" name="mob" placeholder="Mobile *" class="form-control">
                        </div>


                        <div class="form-group">
                            <select name="state" placeholder="State *" class="form-control">
                            <option value="">-select state--</option>
                            <option value=""></option>

                            </select>
                        </div>


                        <div class="form-group">
                            <select name="city" placeholder="City *" class="form-control">
                            <option value="">-select city--</option>
                            <option value=""></option>
                            
                            </select>
                        </div>



                        <div class="form-group">
                            <input type="submit" name="register" value="Register" class="btn btn-info btn-lg"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="reset" name="res" value="Clear" class="btn btn-danger btn-lg">

                        </div>
                    </form>

                </div>



            </div>





        </div>
    </div>
</div>