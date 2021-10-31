

<!-- content start here -->
<div class="content" style="height: auto">
    <!-- <div class="container-fluid"> -->
    <div class="row">
<!-- content panel start here -->
<div class="col-md-12 col-xs-12" id="content-panel" style="height: auto;">


<h2 style="font-size:30px; letter-spacing:2px; color:green">Thanks For Payments with Us </h2> 
<hr style="border:green solid 3px">

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
        echo "<h3 style='color:green'>Thank You. Your order status is ". $status .".</h3>";
        echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
        echo "<h4 style='color:#136900; font-size:24px'>We have received a payment of Rs. " ."<b style='color:red'>". $amount ."</b>". ". Your order will soon be shipped.</h4>";
		   } else {
          echo "<h3>Thank You. Your order status is ". $status .".</h3>";
          echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
          echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
		   }
?>	





 <center>
         <a href="<?php echo $mainurl;?>PrintBill"><button type="button" class="btn btn-lg btn-danger" style="margin-left:35%">Go For Print Bill <span class="fa fa-file-o"></span></button></a>

        </center>








<div class="clearfix"></div>

            </div>
        </div>
    </div>