
<?php
 

 $servername = "localhost";
 $username = "root";
 $password = "qwerty";
 $dbname = "twitter";
 
         // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
         // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 } 

 $name2 = $_POST['name1'];
 $user="";
 $time ="";


 $sql = "INSERT INTO `updates`(`content`, `username`, `dateposted`) VALUES ('$name2','$user','$time')";
 
 
 if ($conn->query($sql) === TRUE) {
echo "yes";
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 
 $conn->close();
 
 ?>