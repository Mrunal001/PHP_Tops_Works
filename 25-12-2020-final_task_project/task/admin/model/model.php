<?php
class model
{
    public $connection="";
    public function __construct()
    {

        session_start();
    
        try
        {
            $this->connection=new mysqli("localhost","root","","task");
        }
        catch(exception $e)
        {
           die(mysqli_error($this->connection,$e));
           
        }

    }


    //create  a member function for login as admin

    public function adminlog($table,$em,$pass)
    {
        
        $select="select * from $table where email='$em' and password='$pass'";
        $query=mysqli_query($this->connection,$select);
        $result=mysqli_fetch_array($query);
        $no=mysqli_num_rows($query);
        if($no==1)
        {
             
            $_SESSION["aid"]=$result["aid"];
            $_SESSION["em"]=$result["email"];
            
            return true;
        }

        else
        {
            return false;
        }

    }

    //create a member function insertall data
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


    //create a  member function for fogetpassword of admin
    public function adminfrgpaswsword($table,$password,$columnname,$em)
    {
       $select="select $password from $table where $columnname='$em'";
        $query=mysqli_query($this->connection,$select);
        $result=mysqli_fetch_array($query);
        $no=mysqli_num_rows($query);
        if($no>0)
        {
            $p=$result["password"];
            
            return $p;
        }

        else
        {
            return false;
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



      //create a member function for join for two tables

      public function seljointable($table,$table1)
      {
          $select="select $table.*,cname  from $table join $table1 on $table.cid=$table1.cid"; 
         $query=mysqli_query($this->connection,$select);
         while($result=mysqli_fetch_array($query))
         {
             $arr[]=$result;
         }
         return $arr;
      }  
 
    //create a member function for delete data
    public function deldata($table,$id)
    {
        $k=array_keys($id);
        $fielid=implode(",",$k);
        $v=array_values($id);
        $id=implode("','",$v);
        $delete="delete from $table where $fielid='$id'";
        $query=mysqli_query($this->connection,$delete);
        return $query;
    }

    //create  a member function logout gere
    public function logout()

    {

        unset($_SESSION["aid"]);
        unset($_SESSION["em"]);
        session_destroy();
        return true;
    }

}



?>