<!DOCTYPE html>
<html lang="en">
<head>
	<title>SignUp Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/addnav.css">
	
	
<!--===============================================================================================-->
</head>
<body>

    <!--<div class="container-fluid">-->

      
	
	
	<div id="nav" class="container-login100" style="background-image: url('images/bg-1.jpg');">
	
	  <nav>
	  <img id="logo" src="../img/logo.png" style="vertical-align:left;margin:-75px 10px"/>
			<ul>
				<li class="menu-active"><a href="../index.html">Home</a></li>
                <li><a href="#about">About Us</a></li>
				<li><a href="#services">Contact</a>
		 
          </li>
			</ul>
        </nav>
		
      
	
		<div class="wrap-login100 p-l-55 p-r-55 p-70 p-b-30" style="vertical-align:left;margin:30px 10px" >
			<form class="login100-form validate-form">
			<br><br>
				<span class="login100-form-title p-b-37">
					Sign Up
				</span>
				
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter your Name">
					<input class="input100" type="text" name="name" placeholder="enter your name">
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter your Guardian's Name">
					<input class="input100" type="text" name="name" placeholder="enter your guardian's name">
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Address">
					<input class="input100" type="text" name="address" placeholder="enter your address">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Email Id">
					<input class="input100" type="text" name="email" placeholder="enter email id">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="pass" placeholder="password">
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter Date of Birth">
				<input type="date" name="dob" placeholder="dd/mm/yyyy" class="input100" id="dob" onchange="document.getElementById('dob').style.backgroundColor='White';">
				<span class="focus-input100"></span>
				</div>
				
				
				
				<div class="wrap-input100 validate-input m-b-20" data-validate = "Insert your CV">
				<input class="input100" type="file" name="file_cv" id="file" value="insert CV">
				
				<span class="focus-input100"></span>
				</div>
				
				


				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Sign Up
					</button>
				</div>

				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Or login with
					</span>
				</div>

				<div class="flex-c p-b-112">
					<a href="#" class="login100-social-item">
						<i class="fa fa-facebook-f"></i>
					</a>

					<a href="#" class="login100-social-item">
						<img src="images/icons/icon-google.png" alt="GOOGLE">
					</a>
				</div>

				
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>