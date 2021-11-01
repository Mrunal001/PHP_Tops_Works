<?php
class add
{
    public function addition()
    {   $a=10;
        $b=30;
        $c=$a+$b;
        echo "Additions is :".$c."<br>";
    }
}

class subs extends add
{
    public function substraction()
    {   $a=10;
        $b=30;
        $c=$a-$b;
        echo "Substractions is :".$c."<br>";
    }

}

class mult extends subs
{
    public function multiplication()
    {   $a=10;
        $b=30;
        $c=$a*$b;
        echo "Multiplications is :".$c."<br>";
    }

}

class div extends mult
{
    public function division()
    {   $a=10;
        $b=30;
        $c=$a/$b;
        echo "Divions is :".$c."<br>";
    }

}


$obj=new div();
$obj->addition();
$obj->substraction();
$obj->multiplication();
$obj->division();

?>