//Code for Image Upload, write code in Controlloer.php file//


<?php

$tmp_name=$_FILES["img"]["tmp_name"];
        $path="uploads/".$_FILES["img"]["name"];
        $type=$_FILES["img"]["type"];
        $size=$_FILES["img"]["size"]/1024;
        move_uploaded_file($tmp_name,$path);

?>