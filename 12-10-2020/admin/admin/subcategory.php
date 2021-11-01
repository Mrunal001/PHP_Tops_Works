<!DOCTYPE html>

<head>
    <title>Admin | Main category</title>
    <!--sidebar end-->
    <!--main content start-->

    <!-- validate a maincategory form -->

    <!-- <script type="text/javascript">
        function valid() {

            if (document.frm.catname.value == "") {
                alert('Please Enter Your Category Here !!')
                document.frm.catname.focus();
                return false;

            }

            var mn = /^([a-zA-Z]+\s)*[a-zA-Z]+$/; //check and accpet only alphabetic character regular expression

            if (!mn.test(document.frm.catname.value)) {

                alert('Enter Only Alphabetic Character only')
                document.frm.catname.focus();
                return false;


            }


            if (document.frm.rdate.value == "") {
                alert('Please Enter Your Date !!')
                document.frm.rdate.focus();
                return false;

            }


        }
    </script> -->

</head>

<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <!-- page start-->
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Category
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form name="frm" class="form-horizontal" method="POST" onsubmit="return valid(this.value)">



                                    <div class="input-group">

                                        <select name="mcatname" class="form-control" placeholder="Enter Main Category" style="width:628px">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user" style="height: 5px !important;"></i></span>

                                            <option value="">--Select MainCategory--</option>

                                            <?php
                                            foreach ($mcatnm as $mcatnm1) {
                                            ?>
                                                <option value="<?php echo $mcatnm1["mcatid"]; ?>"><?php echo $mcatnm1["mcatname"]; ?></option>
                                            <?php
                                            }
                                            ?>

                                        </select>

                                    </div>

                                    <div class="input-group">

                                        <select name="catname" class="form-control" placeholder="Enter Main Category" style="width:628px">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user" style="height: 5px !important;"></i></span>

                                            <option value="">--Select Category--</option>

                                            <?php
                                            foreach ($category_name as $category_name1) {
                                            ?>
                                                <option value="<?php echo $category_name1["catid"]; ?>"><?php echo $category_name1["categoryname"]; ?></option>
                                            <?php
                                            }
                                            ?>

                                        </select>

                                    </div>

                                    <div class="input-group">

                                        <input type="text" name="subcatname" class="form-control" placeholder="Enter Main Category">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user" style="height: 5px !important;"></i></span>

                                    </div>

                                    <div class="input-group">

                                        <input type="date" name="rdate" class="form-control" id="exampleInputEmail1" placeholder="Enter Date">

                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar" style="height: 5px !important;"></i></span>
                                    </div>



                                    <button type="submit" name="subcategory" class="btn btn-info">AddCategory</button>
                                </form>
                            </div>

                        </div>
                    </section>

                </div>

            </div>

        </div>

        </div>
        </div>


        <!-- page end-->
        </div>
    </section>
    <!-- / footer -->
</section>

<!--main content end-->
</section>