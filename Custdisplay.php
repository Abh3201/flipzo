
<html>
<body>
<?php
//setcookie("Duplicate", "", time() - 3600); deleting a cookie
//setcookie("Error", "", time() - 3600); deleting a cookie
$fname = $_POST["first_name"];
$lname = $_POST["last_name"];
$Cname = $_POST["Cname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$username = $_POST["Username"];
$password = $_POST['Password'];
$cpassword = $_POST["CPassword"];



if( !empty($fname) &&  !empty($lname) && !empty($Cname) && !empty($email) && !empty($phone) && !empty($username) && !empty($password) && !empty($cpassword) )
{
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "farmer";
	
	//create_connection
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
	
	if ($password != $cpassword ){
		setcookie("Pass", $fname." ".'Please enter a correct password'); 
	header("Location: CusRegister.html");
	}
	elseif($password == $cpassword ){
    
	$sql = "INSERT INTO customerregister (fname,lname,Compname ,Email ,Phone , Username, Password)
	VALUES ('$fname', '$lname' ,'$Cname','$email', $phone ,'$username' ,'$password')";
	//echo "Suraj entry".$aadhar;

	if (mysqli_query($conn, $sql)) {
	echo "<script>'New record created successfully'</script>";
        header("Location: index.html");
	} 

	else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	setcookie("Duplicate", $fname." ".'Please enter different Username or a valid Adhar number'); 
	header("Location: CusRegister.html");
}}

	mysqli_close($conn);
	}
else {
	echo '<script>alert("Please Enter all the details")</script>';
	setcookie("Error", $fname." ".'Please Enter all Fields ');
	header("Location: CusRegister.html");
}
?>
Welcome <?php echo $_POST["first_name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>