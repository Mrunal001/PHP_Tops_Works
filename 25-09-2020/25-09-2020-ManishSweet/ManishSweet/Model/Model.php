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

    //create a member function for select all data

    public function selalldata($table)

    {

    $select="select * from $table";
    $query=mysqli_query($this->connection,$select);
    
    while($result=mysqli_fetch_array($query))

    {
      
      $arr[]=$result;

    }

    return $arr;


    }


    //create a member function insert all data

    public function insertalldata($table,$data)
    {

      $k=array_keys($data);
      $kk=implode(",",$k);

      $v=array_values($data);
      $vv=implode("','",$v);

      $insert="insert into $table($kk) values('$vv')";
      $query=mysqli_query($this->connection,$insert);
      return $query;




    }

}



?>