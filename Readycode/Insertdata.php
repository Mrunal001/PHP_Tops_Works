//Insert data into database table, write code in Controller.php file //

      if(isset($_POST["reg"]))

      {
        date_default_timezone_set("Asia/Calcutta");

        $em=$_POST["em"];
        $uname=$_POST["uname"];
        $pass=base64_encode($_POST["pass"]);
        $cpass=base64_encode($_POST["cpass"]);
        $tmp_name=$_FILES["img"]["tmp_name"];
        $path="uploads/".$_FILES["img"]["name"];
        $type=$_FILES["img"]["type"];
        $size=$_FILES["img"]["size"]/1024;
        move_uploaded_file($tmp_name,$path);
        $g=$_POST["gender"];
        $h=implode(",",$_POST["chk"]);
        $dob=$_POST["dob"];
        $city=$_POST["city"];
        $rdate=date("d/m/Y");
        $rtime=date("H:i:s a");
        
        if ($pass==$cpass) {
            $data=array("email"=>$em,"username"=>$uname,"password"=>$pass,"photo"=>$path,"gender"=>$g,"hobby"=>$h,"dob"=>$dob,"ctid"=>$city,"registered_date"=>$rdate,"registered_time"=>$rtime);

            $this->insertalldata('customer', $data);

            echo "<script>
            alert('Thanks for Create Your Account with Us!')
            window.location='./';

            </script>";
        
          }

        else
        {

          echo "<script>
          alert('Password Does not Matched Try again!')
          window.location='/';

          </script>";

        }


//create a member function for selectalldata, write code in Model.php //
    
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
  
  
 //create a member function for insertalldata into database, Write code in Model.php file //

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

