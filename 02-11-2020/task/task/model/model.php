<?php
class model
{
    public $connection="";
    public function __construct()
    {
    
        try
        {
              $this->connection=new mysqli("localhost","root","","task");

        }
        catch(exception $e)
        {
           die(mysqli_error($this->connection,$e));
           
        }

    }
}



?>