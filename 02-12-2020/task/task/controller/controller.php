<?php
require_once("model/model.php");
class controller extends model
{

    public function __construct()
    {
     
        parent:: __construct();

        //show gallery images of student

        $shwgall=$this->sellalldata('tbl_gallery');
       //fetch city in  student
        $shwcn=$this->sellalldata('tbl_country');
       //fetch state in  student
        $shwst=$this->sellalldata('tbl_state');
        //fetch city in  student

        $shwct=$this->sellalldata('tbl_city');

        //add or register student from here

        if(isset($_POST["register"]))
        {
            date_default_timezone_set("Asia/Calcutta");

            $tmp_name=$_FILES["img"]["tmp_name"];
            $type=$_FILES["img"]["type"];
            $size=$_FILES["img"]["size"]/1024;
            $path="uploads/".$_FILES["img"]["name"];
            move_uploaded_file($tmp_name,$path);

            $fnm=$_POST["fnm"];
            $lnm=$_POST["lnm"];
            $em=$_POST["em"];
            $pass=base64_encode($_POST["pass"]);
            $cpass=base64_encode($_POST["cpass"]);
            $add=$_POST["address"];
            $mob=$_POST["mob"];
            $cn=$_POST["country"];
            $st=$_POST["state"];
            $ct=$_POST["city"];
            
            $rdate=date("m/d/y H:i:s");

            if($pass==$cpass)
            {
            
            $data=array("photo"=>$path,"firstname"=>$fnm,"lastname"=>$lnm,"email"=>$em,"password"=>$pass,"address"=>$add,"mobile"=>$mob,"cid"=>$cn,"sid"=>$st,"ctid"=>$ct,"registered_time_date"=>$rdate);
            
            $chk=$this->insertalldata('tbl_student',$data);

            if($chk)
            {
                echo "<script>
             
                alert('Student Resgistered successfuly')
                window.location='./';
                
                </script>";
            }
        }

        else

        {

            
            echo "<script>
             
            alert('Password does not matched Try again')
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
                    require_once("header.php");
                    require_once("slider.php");
                    require_once("content.php");
                    require_once("footer.php");
                    require_once("addstudent.php");
                break;

                case '/Gallery':
                    
                        require_once("index.php");
                        require_once("header.php");
                        require_once("gallery.php");
                        require_once("footer.php");
                        require_once("addstudent.php");
                    
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