<?php
class Model
{
    public $connection="";
    public function __construct()

    {
      
        try
        {

            $this->connection=new mysqli("localhost","root","","mrunal_mvc");

        }

        catch(Exception $e)
        {
            die(mysqli_error($this->connection,$e));
        }

    }
}
?>