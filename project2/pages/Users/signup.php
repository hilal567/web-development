

<?php
 

 include '../../dbconnect.php';
 $username = $_GET["signupusername"];
 $fullname = $_GET["fullname"];
 $phone = $_GET["phone"];
 $nationalid = $_GET["id"];
 $address = $_GET["address"];
 $gender = $_GET["gender"];
 $email = $_GET["email"];
 $password = $_GET["password"];
 $dob = $_GET["dob"];



 $sql = "INSERT INTO `user`(`username`, `lastname`, `telephone`, `national_id`, `address`, `gender`, `email`, `password`, `dob`) VALUES ('$username','$fullname','$phone','$nationalid','$address','$gender','$email','$password','$dob')";
 $sql2 = "INSERT INTO `card`(`username`) VALUES ('$username')";
 
 
 if ($conn->query($sql) === TRUE) {

    
    header("Location:../../index.php ");
    if ($conn->query($sql2) === TRUE) {

        header("Location:../../index.php ");
      
  
   }


 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 
 $conn->close();
 
 ?>
 

