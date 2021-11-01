<?php

// how to set cookie
setcookie(name,value,path,expire,time)

// how to set or retrive data in cookie
$_COOKIE["name"];
$_COOKIE["value"];

// how to destroy any cookie
setcookie(name,value,time()-60*60*24)

//how to set any cookie for one day
setcookie(name,value,time()+60*60*24)


?>