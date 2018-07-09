
<?php include("../../dbconnect.php");


$uid = mysql_real_escape_string($_GET['uid']);
$firstname = mysql_real_escape_string($_GET['firstname']);
$username = mysql_real_escape_string($_GET['surname']);


$query = mysql_query("INSERT INTO `table1`(`uid`, `fname`, `sname`) VALUES ('$uid','$firstname','$username')") or die(mysql_error());  
?>