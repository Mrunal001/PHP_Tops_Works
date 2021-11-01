<?php
class AdminModel
{
    public $connection="";
    public function __construct()

    {
        session_start();
        try 
        {
            $this->connection=new mysqli("localhost", "root", "", "mrunal_mvc");
        } catch (Exception $e) {
            die(mysqli_error($this->connection, $e));
        }
    }

    //create a member function for admin Login
    
     public function adminlogin($table,$em,$pass)
    {
     $select="select * from $table where email='$em' and password='$pass'";
     $query=mysqli_query($this->connection,$select);
     $no=mysqli_num_rows($query);
     $result=mysqli_fetch_array($query);
     if($no==1)
     {
         $_SESSION["aid"]=$result["aid"];
         $_SESSION["em"]=$result["email"];
         $_SESSION["time_exp_executions"]=time();
         return $query;

     }

     else
     {
         return false;
     }
         
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

    public function adminforgetpassword($table,$columnname,$columnname1,$em,$where)
    {
      
        $select="select $columnname from $table $where $columnname1='$em'";
        $query=mysqli_query($this->connection,$select);
        $result=mysqli_fetch_array($query);
        $no=mysqli_num_rows($query);

        if($no==1)
        {
            $p=$result["password"];

            return $p;
        }

        else
        {
            return false;
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
    


        public function AddproductCategory($table,$data)
        {
            $k=array_keys($data);
            $kk=implode(",",$k);
            
            $v=array_values($data);
            $vv=implode("','",$v);
     
            $insert="insert into $table($kk) values('$vv')";
            $query=mysqli_query($this->connection,$insert);
     
            return $query;
     
        }
     
     

 // reate a member function for logout admin

 public function adminlogout()

 {
     unset($_SESSION["aid"]);
     
     unset($_SESSION["em"]);

     session_destroy();
     
     return true;
     

 }


 }
