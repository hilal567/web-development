<!DOCTYPE html>


<html>
<head>
    <meta charset="utf-8">
	<title>  <?php echo "The title is $title"; ?></title>				
    <link rel="stylesheet" type="text/css" href="stylingfile.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>

</head>

<body>
	<header>
      
    <div class="header">
    <h1> <a href="index.php"><marquee></marquee></a> </h1>
    </div>
        <?php
             if(isset($_SESSION['user'])) {
                require_once("required/navbar.php");
            } 
        ?>
    </header>
    
 
   