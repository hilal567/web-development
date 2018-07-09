<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>  Login </title>


	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

	<link rel="stylesheet" href="resources/stylelogin.css">


</head>

<body>

	<div class="login-wrap">
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked>
			<label for="tab-1" class="tab">Sign In</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up">
			<label for="tab-2" class="tab">Sign Up</label>
			<div class="login-form">
				<form action ="pages/users/login.php" method="">
					<div class="sign-in-htm">
						<div class="group">
							<label for="user" class="label">Username</label>
							<input id="user" type="text" name="loginusername" class="input">
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input id="pass" type="password" name="loginpassword" class="input" data-type="password">
						</div>
						<div class="group">
							<input id="check" type="checkbox"  class="check" checked>
							<label for="check">
								<span class="icon"></span> Keep me Signed in</label>
						</div>
						<div class="group">
							<input type="submit" class="button" value="Sign In">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
							<a href="#forgot">Forgot Password?</a>
						</div>
				</form>
				</div>
				<form action="pages/users/signup.php" method="">
				<div class="sign-up-htm">
					<div class="group">
						<label for="username" class="label">Username</label>
						<input id="username" type="text" name="signupusername" class="input">
					</div>

					<div class="group">
							<label for="lname" class="label">Name</label>
							<input id="fullname" type="text" name="fullname" class="input">
					</div>

					<div class="group">
							<label for="phone" class="label">Phone no.</label>
							<input id="phone" type="text" name="phone" class="input">
					</div>

					<div class="group">
							<label for="phone" class="label">National ID. No</label>
							<input id="id" type="text" name="id" class="input">
					</div>

					<div class="group">
							<label for="phone" class="label">Home Address</label>
							<input id="address" type="text" name="address" class="input">
					</div>

					<div class="group">
							<label for="phone" class="label">Gender</label>
							<input id="gender" type="text" name="gender" class="input">
					</div>

					<div class="group">
							<label for="phone" class="label">Email</label>
							<input id="email" type="text" name="email" class="input">
					</div>

					<div class="group">
						<label for="pass" class="label">Password</label>
						<input id="password" type="password" name="password" class="input" data-type="password">
					</div>
					<div class="group">
						<label for="pass" class="label">Repeat Password</label>
						<input id="passwordrepeat" type="password" name="passwordrepeat" class="input" data-type="password">
					</div>

					<div class="group">
							<label for="pass" class="label">Date Of Birth</label>
							<input id="dob" type="password" name="dob" class="input" data-type="password">
					</div>

					<div class="group">
						<input type="submit" class="button" value="Sign Up">
					</div>
					<div class="hr"></div>
					<div class="foot-lnk">
						<label for="tab-1" />Already Member?</a>
					</div>
				</div>
			</form>
			</div>
		</div>
	</div>



</body>

</html>