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


    //create a member function for count total  all data
    public function sellalltotalcount($table,$clmname)
    {
       $select="select count($clmname) as total from $table";
       $query=mysqli_query($this->connection,$select);
       while($result=mysqli_fetch_array($query))
       {
           $arr[]=$result;
       }
       return $arr;
    }

    //create a member function for manage profile data 
    public function sellallprof($tab,$tab1,$tab2,$tab3,$where,$where1,$where2,$clmname,$stdid)
    {
       $select="select * from $tab join $tab1 on $where join $tab2 on $where1 join $tab3 on $where2 where $clmname='$stdid'"; 
       $query=mysqli_query($this->connection,$select);
       while($result=mysqli_fetch_array($query))
       {
           $arr[]=$result;
       }
       return $arr;
    }
    

    //update data create a meber function 
    public function upddata($table,$path,$fnm,$lnm,$em,$add,$mob,$cn,$st,$ct,$rdate,$data,$clmname,$stdid)
    {
        $upd="update $table set student_photo='$path',firstname='$fnm',lastname='$lnm',email='$em',address='$add',mobile='$mob',cid='$cn',sid='$st',ctid='$ct',registered_time_date='$rdate' where $clmname='$stdid'";
        $query=mysqli_query($this->connection,$upd);
        return $query;
        

    }
    //create a member function for count and  total cart items added by user
    public function sellalltotcrt($table,$clnm,$clnm1,$stdid)
    {
       $select="select count($clnm) as total from $table where $clnm1='$stdid'"; 
       $query=mysqli_query($this->connection,$select);
       while($result=mysqli_fetch_array($query))
       {
           $arr[]=$result;
       }
       return $arr;
    }
    
    //create a member function for join tables
    public function joindata($tab,$tab1,$where)
    {
       $select="select * from $tab join $tab1 on  $where"; 
       $query=mysqli_query($this->connection,$select);
       while($result=mysqli_fetch_array($query))
       {
           $arr[]=$result;
       }
       return $arr;
    }  

    
    //create a member function for join tables more than 3 tables
    public function joindata1($tab,$tab1,$tab2,$where,$where1,$stdid)
    {
        $select="select * from $tab join $tab1 on $where join $tab2 on  $where1 where $tab.stdid='$stdid'"; 
       $query=mysqli_query($this->connection,$select);
       while($result=mysqli_fetch_array($query))
       {
           $arr[]=$result;
       }
       return $arr;
    }  


    
    //create a member function for join tables and display course details

    public function joindatadetails($tab,$tab1,$where,$id)
    {
       $select="select * from $tab join $tab1 on  $where where courseid='$id'"; 
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
    //create a meber function for login as a student
    public function studentlog($table,$em,$pass)
    {
        $select="select * from $table where email='$em' and password='$pass'";
        $query=mysqli_query($this->connection,$select);
        $result=mysqli_fetch_array($query);
        $no=mysqli_num_rows($query);
        if($no==1)
        {
             
            $_SESSION["stdid"]=$result["stdid"];
            $_SESSION["em"]=$result["email"];
            $_SESSION["fname"]=$result["firstname"];
            
            return true;
        }

        else
        {
            return false;
        }

    }

    //create a  member function for fogetpassword of admin
    public function frgpaswsword($table,$password,$columnname,$em)
    {
        $select="select $password from $table where $columnname='$em'";
        $query=mysqli_query($this->connection,$select);
        $result=mysqli_fetch_array($query);
        $no=mysqli_num_rows($query);
        if($no>0)
        {
            $p=base64_decode($result["password"]);
            
            return $p;
        }

        else
        {
            return false;
        }
    }

 //change password a data from user
public function changepassword($table,$opass,$npass,$cpass,$clnm,$stdid)
{
         
    $select="select password from $table where $clnm='$stdid'";
    $query=mysqli_query($this->connection,$select);
    $result=mysqli_fetch_array($query);
    $p=$result["password"];
    if($p==$opass && $npass==$cpass)
    {
      $upd="update $table set password='$npass' where $clnm='$stdid'";
      $query=mysqli_query($this->connection,$upd);
      return $query;
    }
    else
    {

        return false;
    }

}


    //delete a data from user
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

     //create a meber function for sum of subtotal in cart
     public function subtotsum($table,$clnm,$clnm1,$stdid)
     {
        $select="select sum($clnm) as total from $table where $clnm1='$stdid'"; 
        $query=mysqli_query($this->connection,$select);
        while($result=mysqli_fetch_array($query))
        {
            $arr[]=$result;
        }
        return $arr;
     }  
 
    //create a member function for logout as student
    public function logout()
    {
        unset($_SESSION["emplid"]);
        unset($_SESSION["em"]);
        unset($_SESSION["fname"]);
        session_destroy();
        return true;
    }



    
}



?>