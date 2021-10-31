<?php

// class Declaration

class Test
{
    public function display()
    {
        $name="My Name is: Mrunal"."<br>";
        echo $name;
    }
}

$obj=new Test(); //new object create of class Test
$obj->display(); //function call

//Single Inheritance

class Test1 extends Test
{
    public function display1()
    {
        $name1="My Surname is: Popat";
        echo $name1;
    }

}

$obj=new Test1();
$obj->display1();

?>
