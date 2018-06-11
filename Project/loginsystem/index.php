<?php 
/* Main page with two forms: sign up and log in */
   include 'DBConnector';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div id="navbar">
  <a class="active" href="javascript:void(0)">Home</a>
  <a href="javascript:void(0)">Contact</a>
  <a href="javascript:void(0)">Explore</a>
</div>
<div id="overlay">

  <form class="modal-content" method="post" action="register.php">
    <div class="container">
      <h4>Sign Up</h4>
      <p>Please fill in this form to create an account.</p>
      <hr>
       <label for="name">Name</br></label>
      <input type="text" placeholder="first name" name="firstname" required style="width:30%">
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <input type="text" placeholder="first name" name="lastname" required style="width:30%"></br>
      <label for="email">Email</br></label>
      <input type="text" placeholder="Enter Email" name="email" required></br>

      <label for="psw">Password</br></label>
      <input type="password" placeholder="Enter Password" name="psw" required></br>

      <label for="psw-repeat">Repeat Password</br></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required></br>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
  <div id="description" style="color: white; font-size: 28px;top-margin: 40px">
    <p> Digital matatu</p>
  </div>
  </div>
<div id="signup">
</div>
<div class="section padding-in-section">
        <h2 class="heading">Benefits of Uber</h2>
        <div class="main-column">

        <div class="center-box">
            <div class="text-column">
                <div class="inner-box">
                    <h2 class="heading-small">Easiest way around</h2>
                    <p>One tap and a car comes directly to you. Hop in—your driver knows exactly where to go. And when you get there, just step out. Payment is completely seamless.</p>
                </div>
            </div>

            <div class="text-column">
                <div class="inner-box">
                    <h2 class="heading-small">Anywhere, anytime</h2>
                    <p>Daily commute. Errand across town. Early morning flight. Late night drinks. Wherever you’re headed, count on Uber for a ride—no reservations required.</p>
                </div>
            </div>

            <div class="text-column border-bottom-none">
                <div class="inner-box">
                    <h2 class="heading-small">Low-cost to luxury</h2>
                    <p>Economy cars at everyday prices are always available. For special occasions, no occasion at all, or when you just a need a bit more room, call a black car or SUV.</p>
                </div>
            </div>
        </div>
        </div>
    </div>

<div id="footer">
  <h2>Copyright 2018 Strathmore University</h2>

</div>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</body>
</html>
