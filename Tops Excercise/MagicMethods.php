<?php

class A
{
    public function __construct() //predefined constructor
    {
        $a=30;
        $b=20;
        echo $a+$b."<br>";
    }
}
$obj=new A();
//$obj->__construct(); Do not to call function

?>

<?php

class B
{
    public function __destruct()
    {
        $name="My Name is: Mrunal"."<br>";
        echo $name;
    }
}
$obj=new B();
//$obj->__destruct();

?>

<?php

class C
{
    public function __get()
    {
        $a=30;
        $b=20;
        echo $a+$b;
    }
}
$obj=new C();

?>