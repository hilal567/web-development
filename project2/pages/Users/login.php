
<?php

$con=mysqli_connect("localhost","root","qwerty","project");
// Check connection

if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }



$loginusername = $_GET["loginusername"];
$loginpassword = $_GET["loginpassword"]; 




$sql="SELECT `username`, `password` FROM `user` WHERE `username` ='$loginusername' AND `password`='$loginpassword' ";

if ($result=mysqli_query($con,$sql))
 {
                /*
 // Return the number of rows in result set

 printf("Result set has %d rows",$rowcount);
       */
 $rowcount=mysqli_num_rows($result); 
 
 if($rowcount==1){
       
       session_start();
       $_SESSION["user"] = $_GET["loginusername"];
       


       if($_SESSION["user"]=="admin"){
            header("Location:  ../admin/memberslist.php ");

       }else{
              header("Location:../../userhome.php ");
       }






 }else{

      echo "<script> alert('USERNAME OR PASSWORD IS WRONG !!'); </script>";
      header("Location:../../index.php ");

 }
 

 // Free result set
 
 }



?>






