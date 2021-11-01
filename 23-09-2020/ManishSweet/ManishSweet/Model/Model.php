<?php
//Model will handel to create a Member function and database connectivity
class Model
{
 
     public $connection="";
     public function __construct()

     {
       try
       {
        
        $this->connection=new mysqli("localhost","root","","manish_sweet");

            // if($this->connection)
            // {
            //     echo "Connection Success";

            // }


       }

       catch(Exception $e)
       {
             die(mysqli_error($this->connection));
       }
     
    
    }

}



?>