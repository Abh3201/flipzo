<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
include('connection.php');

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
				echo "<br/>" . $paramName . " = " . $paramValue;
		}
	}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}
session_start();
// $username = $_SESSION['email'];
// echo $_COOKIE['cost'];
// //echo $username;
// $sql = "select charity from user where email = '$username' "; 
// $charity = mysqli_query($link, $sql) or die( mysqli_error($link->error));
// $row = mysqli_fetch_array($charity, MYSQLI_ASSOC); 
// $row['charity'] = $_POST['TXNAMOUNT'];
// //echo $row['charity'];
// $amt = $row['charity'];

// $sql1 = "UPDATE user SET charity = $amt where email = '$username'";

// $result = mysqli_query($link,$sql1) or die(mysqli_error($link->error));

?>


<html>
<head>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- color switch -->
    <link href="css/blast.min.css" rel="stylesheet" />
    <!-- portfolio -->
    <link href="css/portfolio.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

</head>
	<body>
	<h5 class="cont-form" data-blast="color">Confirmation Page</h5>
                    <div class="contact-form-wthreelayouts">

	<form action="customer.php" class="register-wthree">
    
    <input class="form-control" type="submit" value="OK"><br><br>
</form>
</div>
	</body>
</html>