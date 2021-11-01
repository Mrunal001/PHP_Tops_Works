<?php
require_once("Model/Model.php");
class Controller extends Model
{

    public function __construct()

    {
       
        parent:: __construct();

        //load country in customer view

        $cn=$this->selalldata('country');

        //load state in customer view

        $sn=$this->selalldata('state');

        //load city in customer view

        $ct=$this->selalldata('city');
    
        //insert all data in customer table

        if(isset($_POST["reg"]))
        {

         $tmp_name=$_FILES["img"]["tmp_name"];
         $path="customer_photo/".$_FILES["img"]["name"]; 
         $size=$_FILES["img"]["size"]/1024;
         $type=$_FILES["img"]["type"];         
         move_uploaded_file($tmp_name,$path);
         
         $em=$_POST["em"];
         $pass=$_POST["pass"];
         $cpass=$_POST["cpass"];
         $fnm=$_POST["fname"];
         $lnm=$_POST["lname"];
         $mob=$_POST["mob"];
         $pin=$_POST["pin"];
         $add=$_POST["add"];
         $g=$_POST["gender"];
         $c=$_POST["country"];
         $s=$_POST["state"];
         $ct=$_POST["city"];

         if ($pass==$cpass) {
             $data=array("photo"=>$path,"email"=>$em,"password"=>$pass,"firstname"=>$fnm,"lastname"=>$lnm,"mobile"=>$mob,"pincode"=>$pin,"address"=>$add,"gender"=>$g,"cid"=>$c,"sid"=>$s,"ctid"=>$ct);

             $chk=$this->insertalldata('customer',$data);

             if ($chk) {
                 echo "<script>
             alert('You are Registered with Us Successfully')
             
             window.location='./';

             </script>";
             }
         }
        else
        {

            echo "<script>
            alert('Your Password does not Matched Try again')
            
            window.location='./';

            </script>";
           

        }

}

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