<?php
require_once("Model/Model.php");
class Controller extends Model
{
  public function __construct()

  {
    
    parent:: __construct();

    //load city in register view
    
    $ct=$this->selalldata('city');

    //insert all data in customer tables 

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
         

      }


      //forget your password

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

    
    //load view in controller

     if($_SERVER["PATH_INFO"])
     {
         switch ($_SERVER["PATH_INFO"]) 
         {
             case '/':
                 require_once("index.php");
                 require_once("header.php");
                 require_once("content.php");
                 require_once("footer.php");
                 break;
            case '/index':
                require_once("index.php");
                require_once("header.php");
                require_once("content.php");
                require_once("footer.php");
                break;
            case '/Register':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("register.php");
                    require_once("footer.php");
                    break;
            case '/ForgetPassword':
                      require_once("index.php");
                      require_once("header.php");
                      require_once("forgetpassword.php");
                      require_once("footer.php");
                      break;


            case '/About-Us':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("about.php");
                        require_once("footer.php");
                        break;    
                        
                        

            
            case '/Products':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("products.php");
                        require_once("footer.php");
                        break;                
    

            
                
                
                
             default:
             require_once("header.php");
             require_once("404.php");
             require_once("footer.php");
        
                break;
         }
     }


      
  }


}


$obj=new Controller();

?>