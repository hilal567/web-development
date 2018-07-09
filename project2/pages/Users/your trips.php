<?php
session_start();
$username = $_SESSION["user"] ;
/*IF SESSION IS SET....SHOW THE NAVBAR*/
require_once("navbar.php");
?>
<?php
                    include '../../dbconnect.php';

                    $sql="SELECT  `start`, `end`, `time`, `vehicle`, `fare` FROM `trips` WHERE `username` = '$username'";
                    $result = $conn->query($sql);
                    ?>

<head>
    <link rel="stylesheet" type="text/css" href="../../resources/card.css">

</head>

<div class="row">
    <div class="leftcolumn">




        <div class="card" style >


            <div class="card" align=left >
                <div class="card">
                <h1 style="color:black;margin-left:30px;font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;">  Your Trips  : </h1>
                   
                </div>



                    <?php
                    if ($result->num_rows > 0) {
                        echo "<table id='customers' >
                        <tr>
                            <th>Start</th>
                            <th>End</th>
                            <th>Time</th>
                            <th>Vehicle</th>
                            <th>Fare</th>
                        </tr>";
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                        <td>".$row["start"]."</td>
                                        <td>".$row["end"]."</td>
                                        <td>".$row["time"]."</td>
                                        <td>".$row["vehicle"]."</td>
                                        <td>".$row["fare"]."</td>
                                 </tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "0 results";
                    }
                    ?>

            </div>
        </div>

   


    </div>

    