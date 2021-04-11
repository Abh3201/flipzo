<script>
//document.cookie = "Cimage=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
</script>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Customer HomePage</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <script src="fire.js"></script>
    <script src="control.js"></script>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" data-bs-hover-animate="pulse" href="#">farmMart</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown </a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                    </li>
                    <li class="nav-item" ><a class="nav-link" ><h4 style="text-shadow: 0 0 3px #FF0000;">Hello, <?php
                        echo $_COOKIE["username"];
            
                      ?> </h4></a></li>
                                 <li class="nav-item"><button onclick="logout()" class="btn btn-primary btn-block" id="btnLogin" type="submit">Logout</button> </li>
                </ul>
        </div>
        </div>
    </nav>
    <center>
        
        
        <div class="btn-group-vertical"><br>
            <input type="button" onclick="view_details()" class="btn btn-primary btn-lg" name="" id="" value="View Farmer Details"><br>
            <!--<input type="button" class="btn btn-primary btn-lg" name="" id="" value="Buy a Produce"><br>-->
            <input type="button" onclick = 'quality()'class="btn btn-primary btn-lg" name="" id="" value="View Customer Details"><br>
            <input type="button" onClick = 'cart()'class="btn btn-primary btn-lg" name="" id="" value="Quality Check Status"><br>
        </div>

    </center>
    <div class="footer-basic" style="margin-top: 100px;">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">farmMart © 2017</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
    <script src="login.js"></script>

    <script>
        function view_details(){
			sessionStorage.setItem("login1", "ok");
            window.location.replace('Cust_ViewDetail.php');
        }
        function logout(){
			document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
	sessionStorage.clear();
				document.cookie = "image=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
				document.cookie = "address=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
				document.cookie = "aadhar=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
				document.cookie = "msg=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
				document.cookie = "cost=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
				document.cookie = "cropname=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
				document.cookie = "msg=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
				document.cookie = "msg1=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            window.location.replace('index.html');
        }
		function quality(){
			sessionStorage.setItem("login1", "ok");
            window.location.replace('quality_check.php');
		}
		function cart(){
			sessionStorage.setItem("login1", "ok");
            window.location.replace('CustOrderProduct.php');
		}
    </script>
</body>

</html>