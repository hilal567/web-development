<?php   
session_start(); //to ensure you are using same session
session_unset(); 
session_destroy(); 
header("Location:../../index.php ");
exit();
?>