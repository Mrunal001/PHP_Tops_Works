<?php
$file=fopen("ajax545.txt","r") or die("file does not exist try agian");

if($file)
{
    echo "File opened succefully";
}

else
{
   
    echo "file does not exist try again";


}

fclose($file);




?>