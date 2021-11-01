<?php
require('textlocal.class.php');
require('creadential.php');
if(isset($_POST["sub"]))

{
$textlocal = new Textlocal(false, false, API_KEY);
$mob=$_POST["mob"];
$numbers = array(MOBILE);
$otp=mt_rand(100000,999999);
$sender = 'TXTLCL';
$message = 'This is a Secured One time Password is send By addidas India Pvt Ltd Please verify it and Please do not share with anyone:'.$otp;

try 

{


    $result = $textlocal->sendSms($numbers, $message, $sender);
    setcookie('otp',$otp);

//    echo "<h3 align='center'>We Succefully Send OTP at your Mobile Number Please Verify</h3>";

//     header('refresh:3,verify.php');

echo "<script>
alert('We Succefully Send OTP at your Mobile Number Please Verify')
window.location='verify.php';



</script>";


}

catch

(Exception $e) 

{
    die('Error: ' . $e->getMessage());
}

}
?>


<html>

<center>

<h3>Send OTP</h3>
<hr>

<form method="post">

Enter Your Mobile :<input type="text" name="mob" placeholder="Mobile *" required>

<input type="submit" name="sub" value="Send OTP">


</form>
</center>
</html>
