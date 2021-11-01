<?php

#w.a.p to find compound interest

# formula A=p(1+r/n)nt

# $a=$principle * (pow((1 + $rate / 100), $time)); 

$p=25000;
$r=5;
$n=2;


$a=$p* (pow((1+$r/100), $n));

echo "Compond Interest is :".$a;

?>