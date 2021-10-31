<?php
$em="manager@gmail.com";
$pass="m12345";

if($em=='developer@gmail.com' && $pass=='d12345')

{

    echo "<h2 align='center' style='color:green'>Welcom To Developer logged in";
}

elseif($em=='facult@gmail.com' && $pass=='f12345')
{

    echo "<h2 align='center' style='color:green'>Welcom To Faculty logged in";
}



elseif($em=='manager@gmail.com' && $pass=='m12345')
{

    echo "<h2 align='center' style='color:green'>Welcome To Manager logged in";
}

else

{
    echo "<h2 align='center' style='color:green'>Sorry we dont find any users in this name try again";

}


?>
