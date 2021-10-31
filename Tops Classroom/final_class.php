<?php
final class A
{
    public function test()
    {
        echo "Hi i am Final class"."<br>";
    }
}
class B extends A
{
    public function test1()
    {
        echo "Hi i am Exends Final class";
    }
}
$obj=new B();
$obj->test();
$obj->test1();
?>