<?php
// apply payment gateway using payu money

$MERCHANT_KEY = "FH2qsrBv";
$SALT = "StCMXYEpZ3";
// Merchant Key and Salt as provided by Payu.

$PAYU_BASE_URL = "https://secure.payu.in";		// For Sandbox Mode
//$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>




<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='<?php echo $baseurl;?>js/jquery.bvalidator.min.js'></script>
    <script src='<?php echo $baseurl;?>js/default.min.js'></script>
    <script src='<?php echo $baseurl;?>js/gray.js'></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $("#frm2").bValidator();


        });
    </script>



<script type="text/javascript">

var hash = '<?php echo $hash ?>';
function submitPayuForm() {
  if(hash == '') {
    return;
  }
  var payuForm = document.forms.payuForm;
  payuForm.submit();
}
</script>



</head>

<body onLoad="submitPayuForm()">

<!-- content start here -->
<div class="content" style="height: auto">
    <!-- <div class="container-fluid"> -->
    <div class="row">
<!-- content panel start here -->
<div class="col-md-12 col-xs-12" id="content-panel" style="height: auto;">

<div class="col-md-8 col-xs-12" style="left:7%">

<h4 style="padding:15px;">Enter Customer Details * <span class="badge badge-lg badge-danger" style="background-color: red; color:white"></h4>
<b style="margin-left:2%">Note : All field are required <span style="color:red">(*)</span></b>



<form method="post" action="<?php echo $action; ?>" name="payuForm" id="frm2">
<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
          <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
          <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
        

<div class="form-group col-md-8">

<input name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" class="form-control" placeholder="Enter Testing Ammount">

</div>


<div class="form-group col-md-8">


    <input type="text" name="firstname" placeholder="FirstName *" class="form-control" data-bvalidator="required,alpha" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>">
</div>


<div class="form-group col-md-8">
    <input type="text" name="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" placeholder="Email *" class="form-control" data-bvalidator="required,email">
</div>


<div class="form-group col-md-8">
    <input type="text" name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" placeholder="Mobile *" class="form-control" data-bvalidator="required,minlen[10],maxlen[10],digit">
</div>



<div class="form-group col-md-8">
<textarea name="productinfo" class="form-control"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea>
</div>


          <!-- <td>Success URI: </td> -->
        <input type="hidden" name="surl" value="<?php echo $mainurl;?>PaymentSuccess" size="64" />
          <!-- <td>Failure URI: </td> -->
<input type="hidden" name="furl" value="<?php echo $mainurl;?>PaymentFailure" size="64" />
        


<div class="form-group col-md-8">
    <input type="text" name="lnm" value="<?php echo $prof[0]["lastname"];?>" placeholder="LastName *" class="form-control" data-bvalidator="required,alpha">
</div>

<div class="form-group col-md-8">
    <textarea name="address" placeholder="Address *" class="form-control" data-bvalidator="required">
    <?php echo $prof[0]["address"];?>
    </textarea>
</div>


<div class="form-group col-md-8">
    <select name="country" placeholder="Country *" class="form-control" data-bvalidator="required">
    <option value="">-select Country--</option>
    <?php
    foreach($shwcn as $shwcn1)
    {

        if($prof[0]["cid"]==$shwcn1["cid"])
        {
    ?>

    <option value="<?php echo $prof[0]["cid"];?>" selected="selected"><?php echo $prof[0]["cname"];?></option>

     <?php
    }
}
    ?>
    </select>
</div>


<div class="form-group col-md-8">
    <select name="state" placeholder="State *" class="form-control" data-bvalidator="required">
    <option value="">-select state--</option>
    <?php
    foreach($shwst as $shwst1)
    {
        
        if($prof[0]["sid"]==$shwst1["sid"])
        {
    ?>

    <option value="<?php echo $prof[0]["sid"];?>" selected="selected"><?php echo $prof[0]["sname"];?></option>

     <?php
    }
}
    ?>
    </select>
    </select>
</div>


<div class="form-group col-md-8">
    <select name="city" placeholder="City *" class="form-control" data-bvalidator="required">
    <option value="">-select city--</option>
    <?php
    foreach($shwct as $shwct1)
    {
        
        if($prof[0]["ctid"]==$shwct1["ctid"])
        {
    ?>

    <option value="<?php echo $prof[0]["ctid"];?>" selected="selected"><?php echo $prof[0]["ctname"];?></option>

     <?php
    }
}
    ?>
    </select>
    
    </select>
</div>
</div>

<div class="col-md-4 col-xs-12" style="margin-top:5.5%; margin-left:0%">
<div class="card" style="box-shadow: 2px 2px 2px 2px gray;">
<div class="card-body">
    
<h3 style="padding:15px;">Total Items in Cart  <span class="badge badge-lg badge-danger" style="background-color: red; color:white"><?php echo $crttot[0]["total"]; ?></span></h3>
    
<table class="table table-responsive">
    <thead>
        <tr>
        <th>image</th>
           <th>CourseName</th>
            <th>qty</th>
            <th>Subtotal</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
         foreach($crt as $crt1)
         {
        ?>
        <tr>

        
            <td><img src="admin/<?php echo $crt1["photo"];?>" style="width: 50px; height: 50px;"></td>
            <td><?php echo $crt1["coursename"];?></td>
            <td><?php echo $crt1["qty"];?></td>
            <td><?php echo $crt1["subtotal"];?></td>
            
        </tr>
        <?php
        }
        ?>

        <tr>
        <td align="center" colspan="8">
            <div class="jumbotron" style="padding:10px; background-color: lightskyblue; height: 100px; width: 100%;">

            <h5 align="right" style="color:red">Subtotal of Products :Rs.<?php echo $sumcrt[0]["total"];?>
            </h5>

            <input type="hidden" name="service_provider" value="payu_paisa" size="64" />




            <?php if(!$hash) { ?>
            
              
            <input type="submit" class="btn btn-block btn-danger pull-right" style="font-size: 18px; letter-spacing: 2px;" value="Go For Online  Payments >>" />
           
          
          <?php } ?>
       


        
</form>

            </div>
        </td>
        </tr>
    </tbody>
</table>
</div>
</div>
</div>


<div class="clearfix"></div>

            </div>
        </div>
    </div>