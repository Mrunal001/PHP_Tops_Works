<?php
class a
{
    public function test()
    {
        $name="Kumar"."<br>";
        echo $name;
    }
}
class b extends a
{
    public function test1()
    {
        $name="Manish"."<br>";
        echo $name;
    }
 

}


class c extends b a
{
    public function test2()
    {
        $name="Manish"."<br>";
        echo $name;
    } 

}


$obj=new c();
$obj->test();
$obj->test1();
$obj->test2();