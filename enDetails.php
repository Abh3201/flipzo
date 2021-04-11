<script>
if (sessionStorage.getItem("login1") != "ok"){
	window.location.replace('index.html');
}
</script>
<?php
session_start();
$_SESSION["login"] = "ok";
?>
<?php

if (isset($_POST['Submit'])){
include('connection.php');  
$state_name = $_POST["Statename"];
$city_name = $_POST["Cityname"];
$phone = $_POST["phone"];
$cost = $_POST['cost'];
$pweight = $_POST["weight"];
$pname = $_POST["Pname"];
$addres = $_POST['Address'];
	$files = $_FILES['file'];
	$filename = $files['name'];
	$fileerror = $files['error'];
	$filetemp = $files['tmp_name'];
	$fileext = explode('.',$filename);
	$filecheck = strtolower(end($fileext));
	$fileextstored = array('png','jpeg','jpg');
	
	if(in_array($filecheck, $fileextstored)){
		$destinationfile = 'upload/'.$filename;
		move_uploaded_file($filetemp,$destinationfile);
	}
//print_r($filename);
$username = $_COOKIE["username"];
$sql1 =  "select * from register where username = '$username'";
$names = mysqli_query($link, $sql1) or die( mysqli_error($link));
        $row = $names->fetch_assoc();
$aadhar = $row['aadhar'];
$sql = "INSERT INTO cropdetails ( State, City, Phone, CropWeight, CropName, Address , CropImage,cost,aadhar)
	VALUES ('$state_name', '$city_name', $phone ,$pweight, '$pname' ,'$addres' ,'$destinationfile','$cost','$aadhar')";
	//echo "Suraj entry".$aadhar;
    
	if (mysqli_query($link, $sql)) {
	echo "New record created successfully";
        header("Location: farmer.php");
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
	<LINK REL="STYLESHEET" TYPE="TEXT/CSS" HREF="enterdetailsfarmer.CSS">
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
    <title>Enter Crop Details</title>
</head>
<body>
<nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color:rgb(0,0,0,0.9);">
        <div class="container"><a class="navbar-brand" href="#" style="color:white;">FlipZo</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#" onClick = 'myFunction()'style="color:white;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color:white;">Contact us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color:white;">Help</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color:white;">Dropdown </a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br>
    <script src="control.js"></script>

    <div class="regform">
        <h1>
Enter Crop Details</h1>
</div>
<div class="main">
        <form method="POST" action="enDetails.php" enctype="multipart/form-data">
            <div id="name">
                <h2 class="name">
Place </h2>
<input class="firstname" type="text" name="Statename" required ><br>
                <label class="firstlabel"> State Name</label>
                <input class="lastname" type="text" name="Cityname" required><br>
                <label class="lastlabel"> City Name</label>
            </div>
<h2 class="name">


Phone</h2>
            <input class="number" type="tel" name="phone" pattern = "[0-9]{10}" required placeholder="Enter your Phone Number" >
            
    
    
            <h2 class="name">
Produce Weight </h2>
<input class="weight" type="tel" name="weight"  required placeholder = "Enter your Produce Weight">
            <h2 class="name">
Cost </h2>
<input class="weight" type="tel" name="cost"  required placeholder = "Enter the Cost you expect">
            <h2 class="name">
Produce Name </h2>
<input class="Pname" type="text" name="Pname" required placeholder="Enter your Produce name">
            <h2 class="name">
Address. </h2>
<input class="Address" type="text" name="Address" required placeholder="Enter your Address">
			<h2 class="name">
Upload Image </h2><div class="upload">
<input type="file" name="file"  required ></div>
			<h2 class = 'name'>
    
            <button type="submit" id="insert" value="submit" name="Submit" >Done</button>
			
    
        </form>
</div>

</body>
</html>
<script>
$(document).ready(function(){
	$('#insert').click(function(){
		var image_name = $('#image').val();
		if(image_name == '')
		{
			alert("Please Select an Image");
			return false;
		}
		else{
		var extension = $('#image').val().split('.').pop().toLowerCase();
		if (jQuery.inArray(extension),['gif','png','jpg','jpeg'] == -1)
			{
				alert('Invalid Image File');
				$('#image').val('');
				return false;
			}
		}
		});
});
function myFunction(){
	//document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
	//sessionStorage.clear();
	
  window.location.replace('company.php');
}
</script>