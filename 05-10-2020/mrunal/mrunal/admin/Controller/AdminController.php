<?php
require_once("Model/AdminModel.php");
class AdminController extends AdminModel
{
  public function __construct()

  {
      parent:: __construct();

     
      //admin login

      if(isset($_POST["log"]))
      {
        $em=$_POST["em"];
        $pass=$_POST["pass"];
        $chk=$this->adminlogin('admin',$em,$pass);

        if($chk)
        
        {
           echo "<script>
           alert('You are Logged In as Admin Successfully')
           window.location='Dashboard';
           
           </script>";
        }



        else
        {
           echo "<script>
           alert('Your Email and Password are Incorrect try again ')
           window.location='./';
           
           </script>";
        }
      }
     

      //logout admin

      if(isset($_GET["Adminlogout"]))
      {
          
        $chk=$this->adminlogout();

        if($chk)
        {

          echo "<script>
          alert('You are Logout Successfully')
          window.location='./';
          
          </script>";

        }

      }


      //forget your password

      if(isset($_POST["frg"]))
      {
        $em=$_POST["em"];
        $chk=$this->adminforgetpassword('admin','password','email',$em,'where');

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
                 require_once("login.php");
                 break;

            case '/Dashboard':
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("dashboard.php");
                require_once("footer.php");
                break;



         
              case '/ForgetPassword':
                  require_once("index.php");
                  require_once("forgetpassword.php");
                  
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


$obj=new AdminController();

?>