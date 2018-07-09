<?php
require_once("header.php");
/*IF SESSION IS SET....SHOW THE NAVBAR*/
require_once("navbar.php");
?>
<?php
                    include '../../dbconnect.php';

                    $sql="SELECT  `sacco_name`, `description`, `isActive` FROM `sacco` ";
                    $result = $conn->query($sql);
                    ?>

<head>
    <link rel="stylesheet" type="text/css" href="../../resources/card.css">

</head>

<div class="row">
    <div class="leftcolumn">




        <div class="card">


            <div class="card">
                <div class="card">
                <h1 style="color:black;margin-left:30px;font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;">The Following are the currently active registered Saccos : </h1>
                   
                </div>



                    <?php
                    if ($result->num_rows > 0) {
                        echo "<table id='customers' ><tr><th>Sacco Name</th><th>Routes Description</th></tr>";
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["sacco_name"]."</td><td>".$row["description"]."</td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "0 results";
                    }
                    ?>

            </div>
        </div>

   


    </div>

    
    <div class="rightcolumn">
                <div class="card">

                        <div class="" id="signupform">
                                <form class="" id="registration" action="saccosave.php" method="get">
                                        <div class="">


                                                <h4>Sacco Registration</h4>
                                                <p>Enter The Sacco details to register them</p>
                                                <hr>

                                                <label for="name">Full Sacco Name</br>
                                                        <input type="text" name="name" id="name" minlength="3" placeholder="Enter Full name" class="form-control" />
                                                        <span id="availabilityname"></span>
                                                        </br>
                                                </label>

                                                <label for="username">Total Registered Members</br>
                                                        <input type="text" name="username" minlength="3" id="username" placeholder="Enter desired username" class="form-control"
                                                        />
                                                       

                                                        </br>

                                                </label>

                                                <label for="email">Sacco Description</br>
                                                        <input type="text" name="description" id="email" placeholder="Enter your Email" class="form-control" />

                                                        </br>
                                                </label>


                                                <label>
                                                        <input type="checkbox" checked="checked" name="remember" class="form-control" style="margin-bottom:15px"> Remember me
                                                </label>

                                                <p>By Registering this Sacco, it has complied to our
                                                        <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                                                <div class="clearfix">
                                                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                                        <button type="submit" name="register" class="btn btn-info" id="register" >Register</button>
                                                </div>






                                        </div>
                                </form>
                        </div>




                </div>


        </div>