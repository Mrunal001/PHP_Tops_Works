<html>

<head>

    <link rel="stylesheet" href="<?php echo $baseurl;?>index_files/vlb_files1/vlightbox1.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $baseurl;?>index_files/vlb_files1/visuallightbox.css" type="text/css" media="screen" />
    <script src="<?php echo $baseurl;?>index_files/vlb_engine/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo $baseurl;?>index_files/vlb_engine/visuallightbox.js" type="text/javascript"></script>
</head>

</html>


<!-- content start here -->
<div class="content">
    <!-- <div class="container-fluid"> -->
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <!-- sidebar -->

            <div class="well wll-lg">
                <h3><a href="#" style="color: black;"><span class="fa fa-plus-circle"></span> Manage Gallery</a></h3>
            </div>

            <?php
             foreach($shwgall as $shwgall1)
             {
            ?>
                <div class="col-md-3 col-xs-12">


                    <a class="vlightbox1" href="admin/<?php echo $shwgall1["gallery_image"];?>" title="brijesh"><img src="admin/<?php echo $shwgall1["gallery_image"];?>" alt="brijesh" style="width:100%; height:250px" /></a>



                </div>

                <?php
             }
             ?>




                    <!-- 
            </div> -->
        </div>
    </div>
</div>


<script src="<?php echo $baseurl;?>index_files/vlb_engine/thumbscript1.js" type="text/javascript"></script>
<script src="<?php echo $baseurl;?>index_files/vlb_engine/vlbdata1.js" type="text/javascript"></script>