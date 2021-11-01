<?php
require_once("Model/Model.php");
class Controller extends Model
{
  public function __construct()

  {
    
    parent:: __construct();

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