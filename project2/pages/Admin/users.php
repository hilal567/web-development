



<?php
require_once("header.php");
/*IF SESSION IS SET....SHOW THE NAVBAR*/
require_once("navbar.php");
?>
<?php
                    include '../../dbconnect.php';

                    $sql="SELECT * FROM `user`";
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
                <h3 style="color:black;margin-left:30px;font-family: "Trebuchet MS", Arial, Helvetica, sans-serif; ">
                    Registered Users :: </h3>
                   
                </div>
                    <?php
                    if ($result->num_rows > 0) {
                        echo "<table id='customers' ><tr><th>First Name</th><th>Last Name</th><th>Phone</th><th>ID No.</th><th>Address</th><th>Gender</th><th>Email</th></tr>";
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["telephone"]."</td><td>".$row["national_id"]."</td><td>".$row["address"]."</td><td>".$row["gender"]."</td><td>".$row["email"]."</td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "0 results";
                    }
                    ?>

            </div>
        </div>

        <div class="card" id="load_updates">


        </div>


    </div>
    <div class="rightcolumn">
    <div class="card">
  
            <script type="text/javascript" src="//sa.entireweb.com/sense2.js"></script>
    </div>
    </div>