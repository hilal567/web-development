<div class="card" >

<?php
                                
                                $conn=mysqli_connect("localhost","root","qwerty","twitter");
                                // Check connection

                                if (mysqli_connect_errno())
                                {
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                }

                                $sql="SELECT * FROM `updates`  ORDER BY updateid DESC";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                        // output data of each row
                                        $count =0;
                                        while($row = $result->fetch_assoc()) {
                                            echo "<div id=test_div_$count ><hr><br><br><br>  ". $row["username"]. ":   ". $row["content"]. "  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;    ". $row["dateposted"]."</div>";
                                            $count++;
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                

                                
                         ?>

</div>