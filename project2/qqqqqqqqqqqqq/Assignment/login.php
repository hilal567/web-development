
<?php




 $loginusername = $_GET["usernamelogin"];
 $loginpassword = md5($_GET["passwordlogin"]); 



$con=mysqli_connect("localhost","root","qwerty","twitter");
// Check connection

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

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
        $_SESSION["user"] = $_GET["usernamelogin"];
        require_once("homepage.php");






  }else{

       require_once("wrongpassword.php");
       require_once("index.php");
  }
  
 
  // Free result set
  
  }
 


?>






