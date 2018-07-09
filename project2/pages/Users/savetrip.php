<?php
    session_start();
    date_default_timezone_set("Africa/Nairobi");
   include '../../dbconnect.php';

   $price = $_GET["price"]." Ksh";
   $duration = $_GET["duration"];
   $source = $_GET["source"];
   $destination = $_GET["destination"];
   $time = date("h:i");
 
   $username = $_SESSION["user"] ;

   $stuff="SELECT vehicle FROM drivers ORDER BY RAND() LIMIT 1";
   $result = $conn->query($stuff);
   if ($result->num_rows > 0) 
    {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $vehicle = $row["vehicle"];
            }
     } else {
        echo "No Matatu Found";
            }

  
 


   
    $sql="INSERT INTO `trips`( `username`, `start`, `end`, `time`, `vehicle`, `fare`) VALUES ('$username','$source','$destination','$time','$vehicle','$price')";

        if ($conn->query($sql) === TRUE) {
        echo "<script> alert('THE TRIP HAS BEEN SAVED !!'); </script>";
        header("Location: find a matatu.php");

        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }


        $conn->close();
?>