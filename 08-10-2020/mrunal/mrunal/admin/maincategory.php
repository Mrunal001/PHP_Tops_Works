<!DOCTYPE html>

<head>
    <title>Admin | Main category</title>
    <!--sidebar end-->
    <!--main content start-->

    <!-- validate a maincategory form -->

    <script type="text/javascript">
        function valid() {

            if (document.frm.maincatname.value == "") {
                alert('Please Enter Your Main Category Here !!')
                document.frm.maincatname.focus();
                return false;

            }

            var mn = /^([a-zA-Z]+\s)*[a-zA-Z]+$/; //check and accpet only alphabetic character regular expression

            if (!mn.test(document.frm.maincatname.value)) {

                alert('Enter Only Alphabetic Character only')
                document.frm.maincatname.focus();
                return false;


            }


            if (document.frm.rdate.value == "") {
                alert('Please Enter Your Date !!')
                document.frm.rdate.focus();
                return false;

            }


        }
    </script>

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
                            Add Main Category
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form name="frm" class="form-horizontal" method="POST" onsubmit="return valid(this.value)">

                                    <div class="input-group">

                                        <input type="text" name="maincatname" class="form-control" placeholder="Enter Main Category">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user" style="height: 5px !important;"></i></span>

                                    </div>

                                    <div class="input-group">

                                        <input type="date" name="rdate" class="form-control" id="exampleInputEmail1" placeholder="Enter Date">

                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar" style="height: 5px !important;"></i></span>
                                    </div>



                                    <button type="submit" name="addmaincategory" class="btn btn-info">AddMainCategory</button>
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