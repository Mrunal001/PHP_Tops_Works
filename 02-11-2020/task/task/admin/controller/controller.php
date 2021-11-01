<?php
require_once("model/model.php");
class controller extends model
{

    public function __construct()
    {
     
        parent:: __construct();
         
        //login as admin

        if(isset($_POST["log"]))
        {
            $em=$_POST["em"];
            $pass=$_POST["pass"];
            $chk=$this->adminlog('admin',$em,$pass);

            if($chk)

            {
                echo "<script>
                alert('You are Logged in as Admin  Successfuly')
                window.location='Dashboard';
                
                </script>";
            }

            else
            {
                echo "<script>
                alert('Your Email and Password are Incorect')
                window.location='./';
                
                </script>";
            }
        
        }

        //admin forget password here
        if(isset($_POST["frg"]))

        {
         
            $em=$_POST["em"];
            $chk=$this->adminfrgpaswsword('admin','password','email',$em);

            if($chk)
            {
             echo "<script>
             
             alert('Your password is :' + '$chk')
             window.location='./';
             
             </script>";

            }

            else
            {
            echo "<script>
             
             alert('Your Email does not Exist try again')
             window.location='ForgetPassword';
             
             </script>";
             
            }


        }

        //logout admin here

        if(isset($_REQUEST["lggout"]))
        {
            $chk=$this->logout();
            if($chk)
            {
                echo "<script>
                alert('You are Logout as admin Successfuly')
                window.location='./';
                
                </script>";

            }
        }
        //load your view here
        if($_SERVER["PATH_INFO"])
        {



            switch ($_SERVER["PATH_INFO"]) 
            {
                case '/':
                    
                    require_once("index.php");
                    require_once("login.php");
                    break;

                case '/ForgetPassword':
                    
                        require_once("index.php");
                        require_once("forgetpassword.php");

                     
                        break;

                    case '/Dashboard':
                    
                        require_once("index.php");
                        require_once("header.php");
                        require_once("sidebar.php");
                        require_once("dashboard.php");
                        require_once("footer.php");
                        break;
                    case '/ManageStudent':
                    
                            require_once("index.php");
                            require_once("header.php");
                            require_once("sidebar.php");
                            require_once("managestudent.php");
                            require_once("footer.php");
                            break;
                            
                            
                    case '/ManageFeedback':
                    
                                require_once("index.php");
                                require_once("header.php");
                                require_once("managefeedback.php");
                                require_once("footer.php");
                                break; 
                                
                     
                        
                        
                    case '/AddCourse':
                    
                        require_once("index.php");
                        require_once("header.php");
                        require_once("addcourse.php");
                        require_once("footer.php");
                        break;

                                   
                    case '/ManageContact':
                    
                        require_once("index.php");
                        require_once("header.php");
                        require_once("managecontact.php");
                        require_once("footer.php");
                        break; 
          
                    case '/AddState':
                    
                        require_once("index.php");
                        require_once("header.php");
                        require_once("addstate.php");
                        require_once("footer.php");
                        break;
                        
                    case '/AddCity':
                    
                        require_once("index.php");
                        require_once("header.php");
                        require_once("addcity.php");
                        require_once("footer.php");
                        break;     

                        
                    case '/ManagePaymants':
                    
                        require_once("index.php");
                        require_once("header.php");
                        require_once("managepayment.php");
                        require_once("footer.php");
                        break;   
                 
                 
                
                
                default:
                require_once("index.php");
                require_once("header.php");
                require_once("404.php");
                    
                require_once("footer.php");
                    
                    break;
            }
        }

    }
}
$obj=new controller;



?>