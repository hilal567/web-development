<?php
        $title = "Sample File";
        $selected = "sample";
        require_once("header.php");
?>


<script>

        /*SIGN UP DIV TO DISSAPEAR*/
        $(document).ready(function () {

                $("#loginform").hide();
                $("#signin").click(function () {
                        $("#signupform").hide();
                        $("#loginform").show();
                        $("#loginform").fadeIn(3000);


                });

                $("#signingup").click(function () {

                        $("#loginform").hide();
                        $("#signupform").show();
                });


                $('#username').blur(function () {

                        var username = $(this).val();

                        $.ajax({
                                url: 'check.php',
                                method: "GET",
                                data: { user_name: username },
                                success: function (data) {
                                        if (data != '0') {
                                                $('#availability').html('<span style="color: red;" class="text-danger">Username NOT AVAILABLE</span>');
                                                $('#register').attr("disabled", true);

                                        }
                                        else {
                                                $('#availability').html('<span style="color: green;" class="text-success">Username Available</span>');
                                                $('#register').attr("disabled", false);
                                        }
                                }
                        })

                });






        });

</script>




<div class="row">
        <div class="leftcolumn">
                <div class="card">
                        <h2 id="kk">WELCOME TO THE SITE
                                <br>
                                <p>

                        </h2>
                        <h5>Description of the Website
                                <br>
                        </h5>
                </div>
        </div>




                        /*SIGN UP FORM*/






        <div class="rightcolumn">
                <div class="card">

                        <div class="" id="signupform">
                                <b>Already a user ?</b>
                                <button id="signin">Log In</button>
                                <form class="" id="registration" action="dbconnect.php" method="get">
                                        <div class="">


                                                <h4>Sign Up</h4>
                                                <p>Please fill in this form to create an account.</p>
                                                <hr>

                                                <label for="name">Full Names</br>
                                                        <input type="text" name="name" id="name" minlength="3" placeholder="Enter Full name" class="form-control" />
                                                        <span id="availabilityname"></span>
                                                        </br>
                                                </label>

                                                <label for="username">Username</br>
                                                        <input type="text" name="username" minlength="3" id="username" placeholder="Enter desired username" class="form-control"
                                                        />
                                                        <center>
                                                                <span id="availability"></span>
                                                        </center>

                                                        </br>

                                                </label>

                                                <label for="email">Email</br>
                                                        <input type="text" name="email" id="email" placeholder="Enter your Email" class="form-control" />

                                                        </br>
                                                </label>

                                                <label for="password">Password</br>
                                                        <input type="password" placeholder="Enter Password" class="form-control" name="password" required>
                                                        </br>

                                                </label>


                                                <label for="psw-repeat">Repeat Password</br>
                                                        <input type="password" placeholder="Repeat Password" class="form-control" name="passwordrepeat" required>
                                                        <span id="passwordmatch"></span>
                                                        </br>
                                                </label>

                                                <label>
                                                        <input type="checkbox" checked="checked" name="remember" class="form-control" style="margin-bottom:15px"> Remember me
                                                </label>

                                                <p>By creating an account you agree to our
                                                        <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                                                <div class="clearfix">
                                                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                                        <button type="submit" name="register" class="btn btn-info" id="register" >Sign Up</button>
                                                </div>






                                        </div>
                                </form>
                        </div>


                                        /*LOGIN FORM */


                        <div class="" id="loginform">
                                <b>New User ? </b>
                                <button id="signingup">Click here to Sign Up</button>
                                <form class="" action="login.php">
                                        <div class="">


                                                <h4>Log In</h4>

                                                <hr>



                                                <label for="username">Username</br>

                                                        <input type="text" placeholder="Enter Your Username" class="form-control" id="usernamelogin" name="usernamelogin" required>
                                                        </br>
                                                </label>



                                                <label for="psw">Password</br>

                                                        <input type="password" placeholder="Enter Password" class="form-control" name="passwordlogin" required>
                                                        </br>
                                                </label>



                                                <label>
                                                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                                                </label>


                                                <div class="clearfix">

                                                        <button type="submit" class="signupbtn">Log In</button>
                                                </div>




                                        </div>
                                </form>
                        </div>



                </div>


        </div>
</div>








<?php
require_once("footer.php");
?>