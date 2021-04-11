
<?php   
    session_start();
    include('connection.php');  
    $username = $_POST['email'];  
    $password = $_POST['password']; 
 
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($link, $username);  
        $password = mysqli_real_escape_string($link, $password);  
      
        $sql = "select * from register where username = '$username' and password = '$password'"; 
        $sql1 =   "select * from register where username = '$username' and password = '$password'";
        
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
			
            $redirect = "company.php";
            
            $_SESSION["login"] = "ok";
            $_SESSION["username"] = $row['fnames'];
			setcookie('username', $row['username'], time() + (86400 * 30), "/");
            setcookie('aadhar', $row['aadhar'], time() + (86400 * 30), "/");
            $_SESSION["email"] = $row['email'];
            
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
