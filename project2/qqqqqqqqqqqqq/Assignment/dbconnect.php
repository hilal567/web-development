
<?php
/*    //CREATING AND CHECKING CONNECTION TO DB 
$con = mysqli_connect("localhost","root","qwerty","twitter");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{

    echo "Connection Succesful";
  }


*/
?>



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
 
 $name = $_GET["name"];
 $username = $_GET["username"];
 $password =  md5($_GET["passwordrepeat"]);
 $email = $_GET["email"];


 $sql = "INSERT INTO `user` (`Name`, `username`, `password`, `email`) VALUES ('$name', '$username', '$password', '$email');";
 $sql2 = "INSERT INTO `userinfo`(`name`, `username`, `password`, `email` ) VALUES ('$name', '$username', '$password', '$email');";
 
 
 if ($conn->query($sql) === TRUE) {

    require_once("index.php");
    if ($conn->query($sql2) === TRUE) {

      require_once("index.php");
      
  
   }


 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 
 $conn->close();
 
 ?>
 

<?php

/*
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

*/
?>



<?php
/*
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
*/
?>



