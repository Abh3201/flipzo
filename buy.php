<script>
if (sessionStorage.getItem("login1") != "ok"){
	window.location.replace('index.html');
}
</script>
<?php
if ( isset($_POST['submit']) ){
	include ('connection.php');
	$Pername = $_POST['firstname'].$_POST['lastname'];
	$Delivphone = $_POST['phone'];
	$Delivaddress = $_POST['Address'];
	$Cropadress = $_COOKIE['address'];
	$Farmaadhar = $_COOKIE['aadhar'];
	$CropImage = $_COOKIE['image'];
	$Custname = $_COOKIE['username'];
	$Cropname = $_COOKIE['cropname'];
	$sql = "INSERT into buy (Custname,Pername,Farm_aadhar,Crop_image,Crop_address,delivAdress,Deliv_Phone,Cropname) 
	VALUES ('$Custname','$Pername','$Farmaadhar','$CropImage','$Cropadress','$Delivaddress','$Delivphone','$Cropname')" ;
	if (mysqli_query($link, $sql)) {
	echo "New record created successfully";
	$sql1 = "UPDATE cropdetails SET stock='0' WHERE CropImage = '$CropImage'";
		if (mysqli_query($link, $sql1)) { 
		setcookie('msg', '1', time() + (86400 * 30), "/"); // 86400 = 1 day
		echo"Cresated successfully";
		#header("Location: customer.php"); 
		header('Location:TxnTest.php');
		}
		else{echo "Error: " . $sql . "<br>" . mysqli_error($link);setcookie('msg', '-1', time() + (86400 * 30), "/");  header('Location: customer.php');}
	} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($link);
	
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<LINK REL="STYLESHEET" TYPE="TEXT/CSS" HREF="register1.CSS">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Buy a Product</title>
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color:rgb(0,0,0,0.9);">
        <div class="container"><a class="navbar-brand" href="#" style="color:white;">FlipZo</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="customer.php" onClick='function1()' style="color:white;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color:white;">Contact us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color:white;">Help</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color:white;">Dropdown </a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br>
	<div class="main">
    <div class="regform">
        <h1>
 Buy a Product</h1>
 <!--<p style="color:red">(Only Cash on delivery option is available)</p>-->
</div>
        <form action = "buy.php" method="POST">
            <div id="name">
                <h2 class="name">

Person Name</h2>
<input class="firstname" type="text" name="firstname" required ><br>
                <label class="firstlabel">first name</label>
                <input class="lastname" type="text" name="lastname" required><br>
                <label class="lastlabel">last name</label>
            </div>
<h2 class="name">

Phone</h2>
            <input class="number" type="tel" name="phone" pattern = "[0-9]{10}" required placeholder="Enter your Phone Number" >
            <!--<label class="phone-number">Phone Number</label>-->
            <h2 class="name">
Address. </h2>
<input class="Address" type="text" name="Address" required placeholder="Enter your Address">
			<h2 class="name">

    
            <button type="submit" value='submit' name='submit'>Buy</button>
    
    
        </form>
</div>

</body>
</html>
<script>
function function1(){
	document.cookie = "image=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
	document.cookie = "address=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
	document.cookie = "aadhar=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
	
	//window.location.replace = "index.html";
}
</script>