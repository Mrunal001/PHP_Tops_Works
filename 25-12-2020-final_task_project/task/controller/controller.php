<?php
error_reporting(0);
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

        //fetch all course in user dropdown

        $alcourse=$this->sellalldata('tbl_subject');

         //fetch all course in user dropdown

         $alcourse=$this->sellalldata('tbl_subject');

        //count subject in user panel

        $countsubj=$this->sellalltotalcount('tbl_subject','subjid');

        //join subject and add couse tables
        
        $coursedata=$this->joindata('tbl_course','tbl_subject','tbl_course.subjid=tbl_subject.subjid');

        //course details

        if(isset($_GET["course_details_id"]))
        {
            $id=$_GET["course_details_id"];

            $coursedata=$this->joindatadetails('tbl_course','tbl_subject','tbl_course.subjid=tbl_subject.subjid',$id);  

        }

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
            
            $data=array("student_photo"=>$path,"firstname"=>$fnm,"lastname"=>$lnm,"email"=>$em,"password"=>$pass,"address"=>$add,"mobile"=>$mob,"cid"=>$cn,"sid"=>$st,"ctid"=>$ct,"registered_time_date"=>$rdate);
            
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


        //delete a cart 

        if(isset($_GET["delcrt"]))
        {
         
            $delid=$_GET["delcrt"];
            $id=array("cartid"=>$delid);
            $chk=$this->deldata('tbl_cart',$id);

            if($chk)
            {
                echo "<script>
             
                alert('Cart Succefuly Deleted')
                window.location='ViewCart';
                </script>";
            }

        }

        //sum of subtotal in cart

        if(isset($_SESSION["stdid"]))
        {
            $stdid=$_SESSION["stdid"];
            $sumcrt=$this->subtotsum('tbl_cart','subtotal','stdid',$stdid);
        }

        //login as student

        if(isset($_POST["log"]))
        {
            $em=$_POST["em"];
            $pass=base64_encode($_POST["pass"]);
            $log=$this->studentlog('tbl_student',$em,$pass);
            if($log)
            {
                

                echo "<script>
             
                alert('You are Logged in as Student Successfuly')
                window.location='./';
                </script>";
            }

            else
            {

                echo "<script>
             
                alert('Your email and password are incorrect')
                window.location='Login';
                
                </script>";
            }
        }

        //add course in cart

        if(isset($_POST["addcourse"]))
        {
            date_default_timezone_set("Asia/Calcutta");

            $courseid=$_POST["courseid"];
            $stdid=$_SESSION["stdid"];
            $subj=$_POST["subjname"];
            $qty=$_POST["qty"];
            $price=$_POST["price"];
            $subtot=$qty*$price;
            $adate=date("m/d/y H:i:s");

            
            $data=array("courseid"=>$courseid,"stdid"=>$stdid,"coursename"=>$subj,"qty"=>$qty,"price"=>$price,"subtotal"=>$subtot,"added_date"=>$adate);
            
            $chk=$this->insertalldata('tbl_cart',$data);

            if($chk)
            {
                echo "<script>
             
                alert('Course Added In Cart successfuly')
                window.location='ViewCart';
                
                </script>";
            }
        }

        //forgetpassword of user here

        if(isset($_POST["frg"]))
        {
            $em=$_POST["em"];
            $frg=$this->frgpaswsword('tbl_student','password','email',$em);

            if($frg)
            {
                echo "<script>
                alert('Your password id :'+'$frg')
                window.location='Login';
                </script>";
            }

            else
            {
                echo "<script>
                alert('Your Email does not exist try again')
                window.location='ForgetPassword';
                </script>";

            }

        }

        //total of cart added by student 
        if(isset($_SESSION["stdid"]))
        {
            $stdid=$_SESSION["stdid"];
            //echo $stdid;
            $crttot=$this->sellalltotcrt('tbl_cart','cartid','stdid',$stdid);
        }

        //display 
        if(isset($_SESSION["stdid"]))
        {
        $stdid=$_SESSION["stdid"];
        $crt=$this->joindata1('tbl_cart','tbl_course','tbl_student','tbl_cart.courseid=tbl_course.courseid','tbl_student.stdid=tbl_cart.stdid',$stdid);

        }

        //manage students profile here
        if(isset($_SESSION["stdid"]))
        {
            $stdid=$_SESSION["stdid"];
            $prof=$this->sellallprof('tbl_student','tbl_country','tbl_state','tbl_city','tbl_student.cid=tbl_country.cid','tbl_student.sid=tbl_state.sid','tbl_student.ctid=tbl_city.ctid','stdid',$stdid);
        }

        //update student profile data

        if(isset($_POST["upd"]))
        {
            $std=$_SESSION["stdid"];
            date_default_timezone_set("Asia/Calcutta");
            $tmp_name=$_FILES["img"]["tmp_name"];
            $type=$_FILES["img"]["type"];
            $size=$_FILES["img"]["size"]/1024;
            $path="uploads/".$_FILES["img"]["name"];
            move_uploaded_file($tmp_name,$path);
            $fnm=$_POST["fnm"];
            $lnm=$_POST["lnm"];
            $em=$_POST["em"];
            $add=$_POST["address"];
            $mob=$_POST["mob"];
            $cn=$_POST["country"];
            $st=$_POST["state"];
            $ct=$_POST["city"];  
            $rdate=date("m/d/y H:i:s");
            $data=array("student_photo"=>$path,"firstname"=>$fnm,"lastname"=>$lnm,"email"=>$em,"address"=>$add,"mobile"=>$mob,"cid"=>$cn,"sid"=>$st,"ctid"=>$ct,"registered_time_date"=>$rdate);
            
            $chk=$this->upddata('tbl_student',$path,$fnm,$lnm,$em,$add,$mob,$cn,$st,$ct,$rdate,$data,'stdid',$stdid);

            if($chk)
            {
                echo "<script>
             
                alert('Student  Data Updated successfuly')
                window.location='./ManageProfile';
                
                </script>";
            }
        }
            
         //delete a  student Profile
         if(isset($_GET["delstdprof"]))
         {
    
             $delid=$_GET["delstdprof"];
             $id=array("stdid"=>$delid);
             $chk=$this->deldata('tbl_student',$id);
 
             if($chk)
             {
               
                $stdid=$_SESSION["stdid"];
                session_destroy();

                 echo "<script>
                 alert('Profile Succefuly Deleted')
                 window.location='./Login';
                 </script>";
             }
 
         }

         //change password of user

         if(isset($_POST["chng"]))
         {
             $stdid=$_SESSION["stdid"];
             $opass=base64_encode($_POST["opass"]);
             $npass=base64_encode($_POST["npass"]);
             $cpass=base64_encode($_POST["cpass"]);
             $chk=$this->changepassword('tbl_student',$opass,$npass,$cpass,'stdid',$stdid);

             if($chk)
             {
                echo "<script>
                alert('Password changed Successfuly')
                window.location='ManageProfile';
                </script>";
             }
             else
             {
                echo "<script>
                alert('Your OldPass,NewPass and ConfirmPassword doesn not mached try again')
                window.location='ChangePassword';
                </script>";

             }
         }
         
 
        //logout as student here

        if(isset($_GET["lgout"]))
        {

            $lg=$this->logout();
            if($lg)
            {
                echo "<script>
             
                alert('You are Logout Successfuly')
                window.location='Login';
                
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


                case '/Login':
                    
                    require_once("index.php");
                    require_once("header.php");
                    require_once("login.php");
                    require_once("footer.php");
                    require_once("addstudent.php");                   
                break;

                case '/ForgetPassword':
                    
                    require_once("index.php");
                    require_once("header.php");
                    require_once("forgetpassword.php");
                    require_once("footer.php");
                    require_once("addstudent.php");                   
                break;
                case '/ManageProfile':
                    
                    require_once("index.php");
                    require_once("header.php");
                    require_once("manageprofile.php");
                    require_once("footer.php");
                break;

                case '/ChangePassword':
                    
                    require_once("index.php");
                    require_once("header.php");
                    require_once("changepassword.php");
                    require_once("footer.php");
                                   
                break;


                case '/Gallery':
                    
                        require_once("index.php");
                        require_once("header.php");
                        require_once("gallery.php");
                        require_once("footer.php");
                        require_once("addstudent.php");
                    
                    break;


                case '/ManageAllCourse':
                    
                        require_once("index.php");
                        require_once("header.php");
                        require_once("managecourse.php");
                        require_once("footer.php");
                        require_once("addstudent.php");
                    
                    break;

                case '/CourseDetails':
                    
                        require_once("index.php");
                        require_once("header.php");
                        require_once("coursedetails.php");
                        require_once("footer.php");
                        require_once("addstudent.php");
                    
                    break;

                case '/ViewCart':
                    
                        require_once("index.php");
                        require_once("header.php");
                        require_once("viewcart.php");
                        require_once("footer.php");
                        
                    
                    break;

                case '/Checkout':
                
                    require_once("index.php");
                    require_once("header.php");
                    require_once("checkout.php");
                    require_once("footer.php");                    
                break;
                case '/PaymentSuccess':
                
                    require_once("index.php");
                    require_once("header.php");
                    require_once("paymentsuccess.php");
                    require_once("footer.php");                    
                break;
                case '/PaymentFailure':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("paymentfailure.php");
                    require_once("footer.php");                    
                break;


                case '/PrintBill':
                    require_once("index.php");
                    require_once("billprint.php");
                                        
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