<?php   
	session_destroy();
    session_start();
    include('connection.php');  
    $username = $_POST['email'];  
    $password = $_POST['password']; 
 
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($link, $username);  
        $password = mysqli_real_escape_string($link, $password);  
      
        $sql = "select * from customerregister where Username = '$username' and Password = '$password'"; 
        $sql1 =   "select * from customerregister where Username = '$username' and Password = '$password'";
        
        $names = mysqli_query($link, $sql1) or die( mysqli_error($link));
        $row = $names->fetch_assoc();
        $result = mysqli_query($link, $sql) or die( mysqli_error($link->error)); 
        
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        
        $count = mysqli_num_rows($result);  
          echo $count;
        if($count == 1){
            if($username=='admin'&& $password=='admin')
            {
                header("Location: admin.php");
              
            } 
            else{
  
            $redirect = "customer.php";
            
            $_SESSION["login"] = "OK Suraj";
            $_SESSION["username"] = $row['fnames'];
            $_SESSION["email"] = $row['email'];
			setcookie('username', $row['Username'], time() + (86400 * 30), "/");
          
            
            header("Location: $redirect");

            exit();
            }  
        }  
        else{  
            echo "<script>alert('Username or Password incorrect!')</script>";
			setcookie("Error", 'Incorrect Username or Password');
            header("Location: index.html?success=0");
              
        }     
?>  