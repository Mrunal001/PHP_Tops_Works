<?php


echo "Today the date is :".date("l/M/Y")."<br>";

echo "Tommarow the date is :".date("l/M/Y",strtotime("1 day"))."<br>";

echo "after one month the date is :".date("l/M/Y",strtotime("1 month"))."<br>";

echo "4 days befor the date is :".date("l/M/Y",strtotime("-6 day"))."<br>";


//today is 22nd of july 2020
//today is Wed/July/2020
//find the diffrence between two dates




?>