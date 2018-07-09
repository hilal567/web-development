<?php
session_start();
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../../resources/card.css">

<title> DIGITAL MAT</title>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


</head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%">
  <h3 class="w3-bar-item" >Digital Matatu</h3>
  
  
  <a href="find a matatu.php" class="w3-bar-item w3-button">Find a Matatu</a>
  <a href="your trips.php" class="w3-bar-item w3-button">Your Trips</a>
  <a href="your account.php" class="w3-bar-item w3-button">Your Account</a>
  <a href="settings.php" class="w3-bar-item w3-button">Settings</a>
  <a href="logout.php" class="w3-bar-item w3-button">Log Out</a>

</div>

<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-left" onclick="openLeftMenu()">&#9776;</button>

  <div class="w3-container">
    <center><h1 style = "font-family: Comic Sans MS, cursive, sans-serif;" >Digital Matatus </h1> </center>
    <center><p><b> Welcome <?php echo $_SESSION["user"]; ?> </b></p></center>
  </div>
</div>

