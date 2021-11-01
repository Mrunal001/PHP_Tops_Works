<?php
$mainurl="http://localhost/mrunal/admin/";
$baseurl="http://localhost/mrunal/admin/assets/";
?>

<!DOCTYPE html>
<head>
<title>Mvc Admin | Admin Login Page</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?php echo $baseurl;?>css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?php echo $baseurl;?>css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo $baseurl;?>css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo $baseurl;?>css/font.css" type="text/css"/>
<link href="<?php echo $baseurl;?>css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="<?php echo $baseurl;?>css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="<?php echo $baseurl;?>css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="<?php echo $baseurl;?>js/jquery2.0.3.min.js"></script>
<script src="<?php echo $baseurl;?>js/raphael-min.js"></script>
<script src="<?php echo $baseurl;?>js/morris.js"></script>

</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Admin Login</h2>
		<form method="post">
			<input type="email" name="em" class="ggg" name="Email" placeholder="E-MAIL" required="">
			<input type="password" name="pass" class="ggg" name="Password" placeholder="PASSWORD" required="">
			<span><input type="checkbox" />Remember Me</span>
			<h6><a href="<?php echo $mainurl;?>ForgetPassword">Forgot Password?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" name="log" value="Sign In" name="login">
		</form>
	
</div>
</div>
