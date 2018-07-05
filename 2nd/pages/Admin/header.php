
<html>
<title>  DIGITAL MATATUS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<head>
<link rel="stylesheet" type="text/css" href="../../resources/card.css">
</head>
<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="leftMenu">
  <button onclick="closeLeftMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
  <a href="memberslist.php" class="w3-bar-item w3-button">Member List</a>
  <a href="finances.php" class="w3-bar-item w3-button">Finances</a>
  <a href="staff.php" class="w3-bar-item w3-button">Staff</a>
  <a href="users.php" class="w3-bar-item w3-button">Users</a>
  <a href="promotions.php" class="w3-bar-item w3-button">Promotions</a>
  <a href="to-do.php" class="w3-bar-item w3-button">To-do</a>
  <a href="reports.php" class="w3-bar-item w3-button">Reports and Data</a>
  <a href="announcements.php" class="w3-bar-item w3-button">Announcements</a>
  
</div>



<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-left" onclick="openLeftMenu()">&#9776;</button>

  <div class="w3-container">
    <h1>My Page</h1>
  </div>
</div>


     
<script>


function openLeftMenu() {
    document.getElementById("leftMenu").style.display = "block";
}
function closeLeftMenu() {
    document.getElementById("leftMenu").style.display = "none";
}

function openRightMenu() {
    document.getElementById("rightMenu").style.display = "block";
}
function closeRightMenu() {
    document.getElementById("rightMenu").style.display = "none";
}
</script>
     
</body>
</html>
