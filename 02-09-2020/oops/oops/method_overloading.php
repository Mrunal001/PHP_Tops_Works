<?php
class A
{
    public function add($a,$b)

    {
          
        $c=$a+$b;
        
        echo "Additions ".$c."<br>";

    }


}

class B extends A
{
    public function add($b,$c,$d)

    {
          
        $g=$b*$c*$d;
        echo "multiplications ".$g."<br>";

    }

}


$obj=new B();
$obj->add(10,20,2);

?>