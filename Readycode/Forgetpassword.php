//Code for Forgetpassword, write code in Controller.php file //

if(isset($_POST["frg"]))
      {
        $em=$_POST["em"];
        $chk=$this->forgetpassword('customer','password','email',$em,'where');

        if($chk)
        {
  
           echo "<script>
           
           alert('Your Password is :' + '$chk')
           window.location='./';
           
           </script>";

        }


        else
        {
          echo "<script>
           
          alert('Sorry This email  Id does not exist Try with Another')
          window.location='ForgetPassword';
          
          </script>";

        }
      
      
      }


    
    //create a member function for forget password, write code in Model.php file //
    
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

