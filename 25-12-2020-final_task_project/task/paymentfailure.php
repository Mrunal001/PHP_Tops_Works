

<!-- content start here -->
<div class="content" style="height: auto">
    <!-- <div class="container-fluid"> -->
    <div class="row">
<!-- content panel start here -->
<div class="col-md-12 col-xs-12" id="content-panel" style="height: auto;">



<?php
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];

$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="";

// Salt should be same Post Request 

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  } else {
        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
         }
		 $hash = hash("sha512", $retHashSeq);
  
       if ($hash != $posted_hash) {
	       echo "Invalid Transaction. Please try again";
		   } else {
         echo "<h3>Your order status is ". $status .".</h3>";
         echo "<h4>Your transaction id for this transaction is ".$txnid.". You may try making the payment by clicking the link below.</h4>";
		 } 
?>






<center>
         <a href="<?php echo $mainurl;?>Checkout"><button type="button" class="btn btn-lg btn-danger" style="margin-left:35%">Dont Worry Go On Checkout Page From Here<span class="fa fa-file-o"></span></button></a>

        </center>





<div class="clearfix"></div>

            </div>
        </div>
    </div>