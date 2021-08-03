<?php

$title = " DASHBOARD";

include_once "config.php";

include 'head.php';

if (!isset($_SESSION['submit'])) {

    echo "<h6  class='loginError'>You Have to Login. <a href='dashboardLogin.php'>Click Here to Login</a></h6>";
} else {


?>
    <div class="dash-container">


        <!-- side bar -->
        <?= include_once "sideBar.php"; ?>


        <div class="main-content">

            <div class="header">

                <!-- open toggle btn -->
                <div class="toggle-btn open-toggle-btn ">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </div>

                <!-- open toggle btn -->
                <div class="toggle-btn close-toggle-btn ">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </div>


                <h6 class="msg"><?= "welcome: " . $_SESSION['username'] ?></h6>
            </div>

            <iframe class="embed-responsive-item" height="800ox" width="100%" src="account.php" name="iframe_a"></iframe>


        </div>

    </div>



<?php } ?>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/toggle-fun.js"></script>