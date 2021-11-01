<?php

// syntax 
// switch ($variable) {
//     case 'value':
//         # code...
//         break;
    
//     default:
//         # code...
//         break;
// }


$grade="C";
switch($grade)
{
   case 'A':
    echo "<h2 align='center'>You are Topper &#9786";
   break;
   
   case 'B':
    echo "<h2 align='center'>You are Average &#9786";
   break;
   
   case 'C':
    echo "<h2 align='center'>You are Failed &#9785";
   break;
     
   default:
   echo "<h2 align='center'>Yor grade not found tray again";
   break;

}



?>