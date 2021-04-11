<script>
if (sessionStorage.getItem("login1") != "ok"){
	window.location.replace('index.html');
}
</script>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>buyPest</title>
    <link rel="stylesheet" href="assets1/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets1/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets1/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets1/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets1/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets1/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets1/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets1/css/Header-Blue.css">
    <link rel="stylesheet" href="assets1/css/styles.css">
</head>

<body>
    <div>
        <div class="header-blue" style="height: 33px;">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
                <div class="container-fluid"><a class="navbar-brand" href="#">FlipZo</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown </a>
                                <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                            </li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group"><label for="search-field"></label><input class="form-control search-field" type="search" id="search-field" name="search"></div>
                        </form><span class="navbar-text"> <a class="login" onclick="function1()" href="#">Logout</a></span><a class="btn btn-light action-button" role="button" onClick= "function2()"href="#">Go Back</a></div>
                </div>
            </nav>
            <div class="container hero">
                <div class="row">
                    <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                        <div class="phone-mockup">
                            <div class="screen"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="features-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Delivery Details</h2>
                <p class="text-center">All you Product Delivery details you can get here</p>
            </div>
            <div class="row justify-content-center features">
			
<?php 
include('connection.php'); 
$displayquery = "select * from buy";
$querydisplay = mysqli_query($link, $displayquery);
while($result = mysqli_fetch_array($querydisplay)){
	if ($result['Custname'] == $_COOKIE['username']){
?>
					<div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i><img src="<?php echo $result['Crop_image'];?>" height = '150px' width: '150px'></i><br>
                        <h3 class="name"><?php echo $result['Cropname']?> <br>Delivery Adress-</h3><?php echo $result['delivAdress']?><br><h5>Contact No.</h5><h7><?php echo $result['Deliv_Phone']?></h7>
                        <p class="description">
						<h6><?php 
						if($result['Delivered'] == '0')
						{
							echo 'Delivery Pending'; ?>
							<!--<br><a class="btn btn-light action-button" style="background-color:#e7e7e7; color: black;"role="button" onClick= "function3('<?php// echo $result['Crop_image'];?>')"href="#">Click for Quality Check</a>--><?php } 
						else{echo 'Product Delivered';}?></h6>
						</p><a class="learn-more" href="#">See More Details »</a></div>
                </div>
				<?php	
}}
?>
<!--
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-clock-o icon"></i>
                        <h3 class="name">Always available</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-list-alt icon"></i>
                        <h3 class="name">Customizable </h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-leaf icon"></i>
                        <h3 class="name">Organic </h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-plane icon"></i>
                        <h3 class="name">Fast </h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-phone icon"></i>
                        <h3 class="name">Mobile-first</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a></div>
                </div>-->
            </div>
        </div>
    </div>
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Company Name © 2017</p>
        </footer>
    </div>
    <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Legacy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Careers</h3>
                        <ul>
                            <li><a href="#">Job openings</a></li>
                            <li><a href="#">Employee success</a></li>
                            <li><a href="#">Benefits</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">Company Name © 2017</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Company Name © 2017</p>
            </div>
        </footer>
    </div>
    <script src="assets1/js/jquery.min.js"></script>
    <script src="assets1/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<script>
function function1(){
	document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
	document.cookie = "image=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
	document.cookie = "address=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
	document.cookie = "aadhar=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
	document.cookie = "cost=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
	document.cookie = "cropname=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
	document.cookie = "msg=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
	document.cookie = "msg1=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
	sessionStorage.clear();
	
  window.location.replace('index.html');
}
function function2(){
	window.location.replace('customer.php');
}
//function function3(image,aadhar,address,cost,cropname){
//	document.cookie = 'image='+ image+';expires=Wed, 1 Jan 2070 13:47:11 UTC; path=/';
//	document.cookie = "aadhar="+ aadhar+';expires=Wed, 1 Jan 2070 13:47:11 UTC; path=/';
//	document.cookie = "address="+ address+';expires=Wed, 1 Jan 2070 13:47:11 UTC; path=/';
//	document.cookie = "cost="+ cost+';expires=Wed, 1 Jan 2070 13:47:11 UTC; path=/';
//	document.cookie = "cropname="+ cropname+';expires=Wed, 1 Jan 2070 13:47:11 UTC; path=/';
//	window.location.replace('buy.php');
//}
</script>