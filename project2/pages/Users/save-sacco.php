<?php
   include 'dbconnect.php';

   $name = $_GET["name"];
   $description = $_GET["description"];
 $sql="INSERT INTO `sacco`( `sacco_name`, `description`) VALUES (' $name',' $description')";

 if ($conn->query($sql) === TRUE) {
echo'Go home';
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>