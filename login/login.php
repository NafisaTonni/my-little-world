<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v10 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<div style="background-color: white; margin-top: 50px; height: auto;">
					
					<form action="logdata.php" method="post">
						<h3>Login</h3>
						<input type="text" class="form-control" placeholder="Mail" name="Mail">
					<br>
						<input type="password" class="form-control" placeholder="Password" name='pass'>
						<br>
					<input type="submit" value="Login" name="" style="border:none;width:100%;height:49px;
						cursor:pointer;display:flex;align-items:center;justify-content:center;padding:0;background:blue;
						color:#fff;text-transform:uppercase;font-family:'Muli-SemiBold';font-size: 15px;letter-spacing: 2px;
                        transition: all 0.5s;position: relative;overflow: hidden;">
            </form>
				</div>
					<br>
                        	<br><br>
                        	<br>
				<form action="../signdata.php" method="post">

					<h3>New Account?</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" placeholder="Username" name="Username">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="text" class="form-control" placeholder="Phone Number" name="Phone_number">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="text" class="form-control" placeholder="Mail" name="Mail">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Password" id='pass' name='Password'>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Confirm Password" id="cpass">
					</div>
					<div class="form-holder">
						<label> Gender</label>
						<input type="radio" name="Gender" value="male"> Male
						<input type="radio" name="Gender" value="female"> Female
						<input type="radio" name="Gender" value="other"> Other
						<br />
					</div>
					
						<input type="submit" name="" value="SignUp" style="border:none;width:100%;height:49px;margin-top:50px;
						cursor:pointer;display:flex;align-items:center;justify-content:center;padding:0;background:#99ccff;
						color:#fff;text-transform:uppercase;font-family:'Muli-SemiBold';font-size: 15px;letter-spacing: 2px;
                        transition: all 0.5s;position: relative;overflow: hidden;">
                        
				</form>

				<img src="images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>

		<script type="text/javascript">
	
	var password = document.getElementById("pass")
  , confirm_password = document.getElementById("cpass");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>