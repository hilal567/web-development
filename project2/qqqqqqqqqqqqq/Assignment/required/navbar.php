<div class="navbar">
        <div class="dropdown">

        <a href="" id="homebtn" name="homebtn" class="btn btn-info" style =" color: white; text-align: right;" >
            &nbsp;&nbsp;&nbsp;
            <b> Home<b></a>

        </div>

        <div class="dropdown">
            <button class="dropbtn">Profile
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>



        
        <a href="logout.php" id="logout" name="logout" class="btn btn-info" style =" color: white; text-align: right;" >&nbsp;&nbsp;&nbsp;<b> Log Out<?php echo "&nbsp;&nbsp;of&nbsp;&nbsp;".$_SESSION["user"]; ?><b></a>
 
    </div>

    <?php
                
                $_SESSION["user"] = $_GET["usernamelogin"];

    ?>
