
<?php
include('session.php');

if(isset($_POST['submit'])){
	require_once 'server.php';

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sqlinsert = "UPDATE `users` SET `username`='".$username."',`email`='".$email."',`password`= '".$password."' WHERE `username` = '".$login_session."' ";


	if (!mysqli_query($db, $sqlinsert)) {
		die('error updating profile');
	}else{echo "success";}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>EDIT PROFILE</title>

</head>
<body>

	<form action="change.php" method="post">

		<p class="detail"> Update <?php echo $login_session; ?>'s profile</p>
		Username: <input type="text" name="username" required><br><br>
		Email: <input type="email" name="email" required><br><br>
		Password: <input type="password" name="password" required><br><br>
		<input type="submit" name="submit" value="Update Data">
	</form>

</body>
</html>






