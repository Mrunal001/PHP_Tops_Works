<?php
error_reporting(0);
require_once("Model/AdminModel.php");
class AdminController extends AdminModel
{
  public function __construct()

  {
    parent::__construct();


    //admin login

    if (isset($_POST["log"])) {
      $em = $_POST["em"];
      $pass = $_POST["pass"];
      $chk = $this->adminlogin('tbl_admin', $em, $pass);

      if ($chk) {
        echo "<script>
           alert('You are Logged In as Admin Successfully')
           window.location='Dashboard';
           
           </script>";
      } else {
        echo "<script>
           alert('Your Email and Password are Incorrect try again ')
           window.location='./';
           
           </script>";
      }
    }


    //logout admin

    if (isset($_GET["Adminlogout"])) {

      $chk = $this->adminlogout();

      if ($chk) {

        echo "<script>
          alert('You are Logout Successfully')
          window.location='./';
          
          </script>";
      }
    }


    //forget your password

    if (isset($_POST["frg"])) 
    
    {
      $em = $_POST["em"];
      $chk = $this->adminforgetpassword('tbl_admin', 'password', 'email', $em, 'where');

      if ($chk) {

        echo "<script>
           
           alert('Your Password is :' + '$chk')
           window.location='./';
           
           </script>";
      } else {
        echo "<script>
           
          alert('Sorry This email  Id does not exist Try with Another')
          window.location='ForgetPassword';
          
          </script>";
      }
    }

    //add main category here

    if (isset($_POST["addmaincategory"])) {
      $mncat = $_POST["maincatname"];
      $rdate = date("d/m/y");
      $data = array("mcatname" => $mncat, "rdate" => $rdate);
      $chk = $this->insertalldata('tbl_maincategory', $data);
      if ($chk) {
        echo "<script>
           
        alert('Main Category Added Succefully')
        window.location='AddMainCategory';
        
        </script>";
      }
    }

    //fetch main category in category view

    $mcatnm = $this->selalldata('tbl_maincategory');

    //fetch all data in manage or show all main category
    $category_name = $this->selalldata('tbl_category');

    //fetch all data in manage main category
    $subcategory_name = $this->selalldata('tbl_subcategory');

    
    //fetch all data in manage main category
    $product = $this->selalldata('tbl_products');

    
    //fetch all data in manage main category
    $city = $this->selalldata('tbl_city');

    //insert a addcategory

    if (isset($_POST["addcategory"])) {
      $mcatname = $_POST["mcatname"];
      $catname = $_POST["catname"];
      $rdate = date("d/m/y");
      $data = array("categoryname" => $catname, "mcatid" => $mcatname, "rdate" => $rdate);
      $chk = $this->insertalldata('tbl_category', $data);
      if ($chk) {
        echo "<script>
           
        alert('Category Added Succefully')
        window.location='';
        
        </script>";
      }
    }


    //insert a subcategory

    if (isset($_POST["subcategory"])) {
      $mcatname = $_POST["mcatname"];
      $catname = $_POST["catname"];
      $subcategoryname = $_POST["subcatname"];
      $rdate = date("d/m/y");
      $data = array("mcatid" => $mcatname, "catid" => $catname, "subcategoryname" => $subcategoryname, "rdate" => $rdate);
      $chk = $this->insertalldata('tbl_subcategory', $data);
      if ($chk) {
        echo "<script>
           
        alert('SubCategory Added Succefully')
        window.location='';
        
        </script>";
      }
    }

    //insert a product

    if (isset($_POST["addproduct"])) {
      $mcatname = $_POST["mcatname"];
      $catname = $_POST["catname"];
      $subcatname = $_POST["subcatname"];
      $productname = $_POST["pname"];
      $price = $_POST["price"];
      $offprice = $_POST["offprice"];
      $qty = $_POST["qty"];
      $add_date = $_POST["add_date"];
      $dics = $_POST["discription"];
      $data = array("mcatid" => $mcatname, "catid" => $catname, "subcatid" => $subcatname, "pname" => $productname, "price" => $price,"offerprice" => $offprice,"qty" => $qty,"added_date" => $add_date,"descriptions" => $dics);
      $chk = $this->insertalldata('tbl_products', $data);
      if ($chk) {
        echo "<script>
           
        alert('Product Added Succefully')
        window.location='';
        
        </script>";
      }
    }

    //insert a subcategory

    if (isset($_POST["addcity"])) {
      $city = $_POST["cityname"];
    
      $data = array("ctname" => $city);
      $chk = $this->insertalldata('tbl_city', $data);
      if ($chk) {
        echo "<script>
           
        alert('City Added Succefully')
        window.location='';
        
        </script>";
      }
    }


    //load view in controller

    if ($_SERVER["PATH_INFO"]) {
      switch ($_SERVER["PATH_INFO"]) {
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


        case '/AddMainCategory':
          require_once("index.php");
          require_once("header.php");
          require_once("sidebar.php");
          require_once("maincategory.php");
          require_once("footer.php");

          break;



        case '/ManageMainCategory':
          require_once("index.php");
          require_once("header.php");
          require_once("sidebar.php");
          require_once("managemaincategory.php");
          require_once("footer.php");

          break;





        case '/AddCategory':
          require_once("index.php");
          require_once("header.php");
          require_once("sidebar.php");
          require_once("addcategory.php");
          require_once("footer.php");

          break;



        case '/ManageCategory':
          require_once("index.php");
          require_once("header.php");
          require_once("sidebar.php");
          require_once("managecategory.php");
          require_once("footer.php");

          break;
        case '/ManageCustomer':
          require_once("index.php");
          require_once("header.php");
          require_once("sidebar.php");
          require_once("managecustomer.php");
          require_once("footer.php");

          break;

        case '/SubCategory':
          require_once("index.php");
          require_once("header.php");
          require_once("sidebar.php");
          require_once("subcategory.php");
          require_once("footer.php");

          break;

        case '/ManageSubcategory':
          require_once("index.php");
          require_once("header.php");
          require_once("sidebar.php");
          require_once("managesubcategory.php");
          require_once("footer.php");

          break;

        case '/AddProduct':
          require_once("index.php");
          require_once("header.php");
          require_once("sidebar.php");
          require_once("addproduct.php");
          require_once("footer.php");

          break;

          case '/ManageProduct':
            require_once("index.php");
            require_once("header.php");
            require_once("sidebar.php");
            require_once("manageproduct.php");
            require_once("footer.php");
  
            break;
            case '/AddCity':
              require_once("index.php");
              require_once("header.php");
              require_once("sidebar.php");
              require_once("city.php");
              require_once("footer.php");
    
              break;

              case '/ManageCity':
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("managecity.php");
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


$obj = new AdminController();
