<?php 

$title = " LOGIN PAGE";

include_once "config.php";

include 'head.php'; 

    if (isset($_POST['submit'])) {
        
        function check($data){

            $data = htmlspecialchars($data);
            $data = trim($data);
            $data = stripslashes($data);
    
            return $data;
        }
        
        $username = check($_POST['username']);
        $password = check(sha1($_POST['password']));


        $query = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username' AND password = '$password' ");

        $num = mysqli_num_rows($query);

        if ($num === 1) {
            
            $_SESSION['username'] = $username;
            header("location: dashboard.php");

        }else{
            
            echo "<div class=loginError> wrong admin name or password</div>";
        }

        $_SESSION['submit'] = true;

    }

?>



<body>

    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="card bg-dark ">
                    <h6 class="card-title text-white ">WiFi-NET</h6>
                    <div class=" card-header text-white">
                        <h3 class="text-center">User Account Dashboard </h3>
                    </div>

                    <div style="padding: 30px;">
                        <form action="" method="post">
                            <div class="form-group">
                                <label class="text-white">Username</label>
                                <input class="form-control" type="text" name="username" placeholder="Please input your user name" required>
                            </div>
                            <div class="form-group">
                                <label class="text-white">Password</label>
                                <input class="form-control" type="password" name="password" required>
                                    </div>
                         <div class=" form-group text-center">
                                <input type="submit" name="submit" value="Login" class="btn btn-primary text-center">
                                  
                            </div>
                            <div class="card-footer text-center">

                                <h6>
                                    <span class="text-white">Dont have an account?</span><a href="new account.php"> Click
                                        here to sign up</a>


                                </h6>

                            </div>
                        </form>
                    </div>
                    <div class="container h-100">
                        <div class="row h-100 justify-content-end" style="padding: 10px;">;
                            <a href="index.php" style="font-size:12px;">Internet Login</button>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

</body>

</html>