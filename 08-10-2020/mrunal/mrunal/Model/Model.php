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

    //create a member function for selectalldata
    
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

    //create a member function for insertalldata

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

    //create a member function for forget password

    public function forgetpassword($table,$columnname,$columnname1,$em,$where)
    {
      
        $select="select $columnname from $table $where $columnname1='$em'";
        $query=mysqli_query($this->connection,$select);
        $result=mysqli_fetch_array($query);
        $no=mysqli_num_rows($query);

        if($no==1)
        {
            $p=base64_decode($result["password"]);

            return $p;
        }

        else
        {
            return false;
        }


    }


}
?>