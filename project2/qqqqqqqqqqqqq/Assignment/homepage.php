<?php
        $title = "Sample File";
        $selected = "sample";
        require_once("header.php");

        $cookie_name = "user";
        $cookie_value =$_GET["usernamelogin"];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

?>
<script>
        function myFunction() {
                var name = document.getElementById("name").value;

                // Returns successful data submission message when the entered information is stored in database.

                var dataString = 'name1=' + name;


                if (name == '') {
                        alert(" At least write one character");
                } else {
                        // AJAX code to submit form.
                        $.ajax({
                                type: "POST",
                                url: "ajaxjs.php",
                                data: dataString,
                                cache: false,
                                success: function (html) {

                                }
                        });


                }
                return false;



        }



</script>

<script type="text/javascript">// <![CDATA[
        $(document).ready(function () {
                $.ajaxSetup({ cache: false }); // This part addresses an IE bug.  without it, IE will only load the first number and will never refresh
                setInterval(function () {
                        $('#load_updates').load('test.php');
                }, 5000); // the "1000" here refers to the time to refresh the div.  it is in milliseconds. 



        });
// ]]></script>



<body>
        <p>Welcome
                <?php  echo " ".$_SESSION["user"];
                       $sessionname=$_SESSION["user"];
                 ?>
        </p>

        <div class="row">
                <div class="leftcolumn">




                        <div class="card">
                                <style>
                                            #test_div_0{
                                                    background-color:red !important;
                                            }
                                </style>

                                <div class="card">
                                        <form id="form" class=""  name="form">
                                                <div>

                                                        <input id="name" type="text" placeholder="What's on your mind ?">
                                                        <br>
                                                        <center>
                                                                <input id="submit" onclick="myFunction()" type="button" value="POST">
                                                        </center>
                                                </div>
                                        </form </div>
                                </div>
                        </div>

                        <div class="card" id="load_updates">


                        </div>


                </div>




</body>
