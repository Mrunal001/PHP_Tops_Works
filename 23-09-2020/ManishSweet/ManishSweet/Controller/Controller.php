<?php
require_once("Model/Model.php");
class Controller extends Model
{

    public function __construct()

    {
       
        parent:: __construct();
        
        //load your template or view
        
        if($_SERVER["PATH_INFO"])
        {
         
            switch($_SERVER["PATH_INFO"])
            {
             case '/':
                require_once('header.php');
                require_once('slider.php');
                require_once('content.php');
                require_once('footer.php');
                require_once('login.php');
                require_once('register.php');
                require_once('forgetpassword.php');
                require_once('enquiry.php');
                require_once('careers.php');
             break;

             case '/index':
                require_once('header.php');
                require_once('slider.php');
                require_once('content.php');
                require_once('footer.php');
                require_once('login.php');
                require_once('register.php');
                require_once('forgetpassword.php');
                require_once('enquiry.php');
                require_once('careers.php');
             break;



             case '/Contact-Form':
                require_once('header.php');
                require_once('contact.php');
                require_once('footer.php');
                
                require_once('login.php');
                require_once('register.php');
                require_once('forgetpassword.php');
                require_once('enquiry.php');
                require_once('careers.php');
             break;

             default:
             require_once('header.php');
             require_once('404.php');
             require_once('footer.php');
            break;




            }


        }

         
    }


}

$obj=new Controller();
?>