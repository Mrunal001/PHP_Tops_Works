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
            $chk=$this->adminlog('tbl_admin',$em,$pass);

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
            $chk=$this->adminfrgpaswsword('tbl_admin','password','email',$em);

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

        //add student gallery images

        if(isset($_POST["addgallery"]))
        {
            date_default_timezone_set("Asia/Calcutta");

            $tmp_name=$_FILES["simg"]["tmp_name"];
            $type=$_FILES["simg"]["type"];
            $size=$_FILES["simg"]["size"]/1024;
            $path="uploads/studentimages/".$_FILES["simg"]["name"];
            move_uploaded_file($tmp_name,$path);
            $rdate=date("m/d/y");
            $data=array("gallery_image"=>$path,"registered_date"=>$rdate);
            $chk=$this->insertalldata('tbl_gallery',$data);
            if($chk)
            {
                echo "<script>
             
                alert('Student gallery Uploaded successfuly')
                window.location='AddStudentImages';
                
                </script>";
            }

            
            
            
        }



        //show all student gallery images

        $shwgall=$this->sellalldata('tbl_gallery');


        //show all student data

        $shwstd=$this->sellalldata('tbl_student');

        //add country in admin

        if(isset($_POST["addcountry"]))
        {
           

            $cname=$_POST["cname"];

            $data=array("cname"=>$cname);
            $chk=$this->insertalldata('tbl_country',$data);
            if($chk)
            {
                echo "<script>
             
                alert('Country Added successfuly')
                window.location='AddCountry';
                
                </script>";
            }

            
            
            
        }

        
        //add state in admin

        if(isset($_POST["addstate"]))
        {
            

            $cname=$_POST["cname"];
            $sname=$_POST["sname"];

            $data=array("sname"=>$sname,"cid"=>$cname);
            $chk=$this->insertalldata('tbl_state',$data);
            if($chk)
            {
                echo "<script>
             
                alert('State Added successfuly')
                window.location='AddState';
                
                </script>";
            }

            
            
            
        }

         
        //add city in admin

        if(isset($_POST["addcity"]))
        {
            
            $sname=$_POST["sname"];
            $ctname=$_POST["ctname"];
           

            $data=array("sid"=>$sname,"ctname"=>$ctname);
            $chk=$this->insertalldata('tbl_city',$data);
            if($chk)
            {
                echo "<script>
             
                alert('City Added successfuly')
                window.location='AddCity';
                
                </script>";
            }

            
            
            
        }

        //fetch country in state  in view dropdown

        $cn=$this->sellalldata('tbl_country');
        //fetch state in city in view dropdown
        $st=$this->sellalldata('tbl_state');

        $stjoin=$this->seljointable('tbl_state','tbl_country');

        //fetch and display city

        $ct=$this->sellalldata('tbl_city');

        //fetch subject here
        $subj=$this->sellalldata('tbl_subject');
        
        //fetch teacher here
        $teach=$this->sellalldata('tbl_teacher');

        
        //fetch all course details
        $course=$this->sellalldata('tbl_course');

        //add course here

        if(isset($_POST["addcourse"]))
        {
            date_default_timezone_set("Asia/Calcutta");
            $subnm=$_POST["subname"];       
            $tmp_name=$_FILES["subjectimg"]["tmp_name"];
            $type=$_FILES["subjectimg"]["type"];
            $size=$_FILES["subjectimg"]["size"]/1024;
            $path="uploads/subject_photo/".$_FILES["subjectimg"]["name"];
            move_uploaded_file($tmp_name,$path);
            $code=$_POST["code"]; 
            $fees=$_POST["fees"]; 
            $pmode=$_POST["paymentmode"]; 
            $teachnm=$_POST["teachername"]; 

            $added_date=date("m/d/y");

            $data=array("subjid"=>$subnm,"photo"=>$path,"coursecode"=>$code,"Fees"=>$fees,"mode"=>$pmode,"teacherid"=>$teachnm,"addedd_date"=>$added_date);

            $chk=$this->insertalldata('tbl_course',$data);
            if($chk)
            {
                echo "<script>
             
                alert('Course Added successfuly')
                window.location='AddCourse';
                
                </script>";
            }   
            
        }

        //delete state data
        if(isset($_GET["delstate"]))
        {
            $delid=$_GET["delstate"];
            $id=array("sid"=>$delid);
            $chk=$this->deldata('tbl_state',$id);
            if($chk)
            {
                echo "<script>
                alert('Data Deleted Succefully')
                window.location='AddState';
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
        if(($_SERVER["PATH_INFO"]))
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
                        case '/AddStudentImages':
                    
                            require_once("index.php");
                            require_once("header.php");
                            require_once("sidebar.php");
                            require_once("addstudentgallery.php");
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
                                require_once("sidebar.php");
                                require_once("managefeedback.php");
                                require_once("footer.php");
                                break; 
                                
                     
                        
                        
                    case '/AddCourse':
                    
                        require_once("index.php");
                        require_once("header.php");
                        require_once("sidebar.php");
                        require_once("addcourse.php");
                        require_once("footer.php");
                        break;

                                   
                    case '/ManageContact':
                    
                        require_once("index.php");
                        require_once("header.php");
                        require_once("sidebar.php");
                        require_once("managecontact.php");
                        require_once("footer.php");
                        break; 
                    case '/AddCountry':
                    
                            require_once("index.php");
                            require_once("header.php");
                            require_once("sidebar.php");
                            require_once("addcountry.php");
                            require_once("footer.php");
                            break;
                    case '/AddState':
                    
                        require_once("index.php");
                        require_once("header.php");
                        require_once("sidebar.php");
                        require_once("addstate.php");
                        require_once("footer.php");
                        break;
                        
                    case '/AddCity':
                    
                        require_once("index.php");
                        require_once("header.php");
                        require_once("sidebar.php");
                        require_once("addcity.php");
                        require_once("footer.php");
                        break;     

                        
                    case '/ManagePayments':
                    
                        require_once("index.php");
                        require_once("header.php");
                        require_once("sidebar.php");
                        require_once("managepayment.php");
                        require_once("footer.php");
                        break;   
                 
                 
                
                
                default:
                require_once("index.php");
              
                require_once("404.php");
                    
                    
                    break;
            }
        }

    }
}
$obj=new controller;



?>