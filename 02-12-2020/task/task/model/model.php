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
    //create a member function for select all data

     public function sellalldata($table)
     {
        $select="select * from $table";
        $query=mysqli_query($this->connection,$select);
        while($result=mysqli_fetch_array($query))
        {
            $arr[]=$result;
        }
        return $arr;
     }  


     //register student data create a member function

      //create a member function insertall data
    public function insertalldata($table,$data)
    {

        $k=array_keys($data);
        $kk=implode(",",$k);
        $v=array_values($data);
        $vv=implode("','",$v);

     $insert="insert into $table($kk) values ('$vv')";
        $query=mysqli_query($this->connection,$insert);
        return $query;
    }


    
}



?>