<?php include("../../dbconnect.php");


$distance = mysql_real_escape_string($_GET['distance']);
$duration = mysql_real_escape_string($_GET['duration']);
$price = mysql_real_escape_string($_GET['price']);


$query = mysql_query(" ") or die(mysql_error());  
?>