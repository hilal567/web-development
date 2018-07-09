<?php
                                          include '../../dbconnect.php';
                                        $sacconame = $_GET["sacco_name"];
                                        $saccodescription = $_GET["description"];

                                        $sql2="INSERT INTO `sacco`(`sacco_name`, `description`) VALUES ($sacconame, $saccodescription)";
                                        $result2 = $conn->query($sql2);
                                        header("Location: memberslist.php");
?>