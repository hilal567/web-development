<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {
  margin-top: 0;
  margin-left: 0;
  font-family: "Lato", sans-serif;}


/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 20%;
    height:750px;
    margin-top: 0;
    margin-left: 0;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 300px;
}
.new_project button{
  width: 15px;
  height: 10px;
  border-radius: 15px;
  background-color: #65ff65;
}
#navbar {
  overflow: hidden;
  background-color:#2196F3;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color:grey;
  color: white;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
</style>
</head>
<body>

<div id="navbar">
  <a class="active" href="javascript:void(0)">Home</a>
  <a href="javascript:void(0)">Contact</a>
  <a href="javascript:void(0)">Explore</a>
</div>

<div class="tab">
  <button class="new_project"><a href="index.html">+ new project</a></button>
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Memeber list</button>
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Finances</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Staff</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Active users
   <hr/></button>
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">To do</button>
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Promotions</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Analytics</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tasks
   <hr/></button>
    <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Reset Staff password</button>
 
  <button class="tablinks" onclick="openCity(event, 'Tokyo')" >Messages
   </button>
    <button class="tablinks" onclick="openCity(event, 'Paris')">Help</button>
  
  <button class="tablinks" onclick="openCity(event, 'Paris')">Logout</button>
  
   


</div>

<div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  
  <h6>this is where the page will be</h6>
  <ul>
    <li><a href="index.html"></a></li>
  </ul>
</div>

<script>
function openCity(evt,cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html> 
