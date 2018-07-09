<?php   
session_start(); //to ensure you are using same session
session_unset(); 
session_destroy(); 
require_once("index.php");
exit();
?>