
<?php


// mysqli_connect() function opens a new connection to the MySQL server.
include('server.php');


// Storing Session
$user_check = $_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User



$query = "SELECT username from users where username = '$user_check'";
$ses_sql = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];


$query = "SELECT email from users where username = '$user_check'";
$sess_sql = mysqli_query($db, $query);
$rows = mysqli_fetch_assoc($sess_sql);
$emailie = $rows['email'];

?>
