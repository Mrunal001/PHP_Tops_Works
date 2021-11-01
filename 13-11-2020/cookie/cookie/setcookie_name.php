<?php

setcookie("name","brijesh");

if($_COOKIE["name"])
{

    echo "cookie set succefully";
}

else
{
    echo "Not set Cookie";
}



?>