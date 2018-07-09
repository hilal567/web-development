<?php
                    include '../../dbconnect.php';

                    $sql="SELECT vehicle FROM drivers ORDER BY RAND() LIMIT 1";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo $row["vehicle"];
                            }
                        } else {
                            echo "No Matatu Found";
                        }


                ?>