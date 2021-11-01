<?php
require_once("model/model.php");
class controller extends model
{

    public function __construct()
    {
     
        parent:: __construct();

        //show gallery images of student

        $shwgall=$this->sellalldata('tbl_gallery');

        //load your view here
        if($_SERVER["PATH_INFO"])
        {

            switch ($_SERVER["PATH_INFO"]) 
            {
                case '/':
                    
                    require_once("index.php");
                    require_once("header.php");
                    require_once("slider.php");
                    require_once("content.php");
                    require_once("footer.php");
                    require_once("addemployee.php");
                break;

                case '/Gallery':
                    
                        require_once("index.php");
                        require_once("header.php");
                        require_once("gallery.php");
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