<?php
//class a
//interface a
trait a
{
    public function test()

    {

        $name="Brijesh";
        echo $name;

    }
}
class b
{
 
    use a;

}

$obj=new b();
$obj->test();

?>