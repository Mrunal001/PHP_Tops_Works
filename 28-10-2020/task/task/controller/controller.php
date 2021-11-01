<?php
require_once("model/model.php");
class controller extends model
{

    public function __construct()
    {
     
        parent:: __construct();

        //load your view here
        if($_SERVER["PATH_INFO"])
        {

            switch ($_SERVER["PATH_INFO"]) 
            {
                case '/':
                    
                    require_once("index.php");
                    require_once("header.php");
                    // require_once("sidebar.php");
                    require_once("content.php");
                    require_once("footer.php");
                    require_once("addemployee.php");
                    
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