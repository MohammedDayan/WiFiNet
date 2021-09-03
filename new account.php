<?php

$title = " SINGUP";

include 'head.php';

include_once "config.php";

if (isset($_POST['save'])) {


    function check($data)
    {

        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);

        return $data;
    }
    $username = check($_POST['username']);
    $phone = check($_POST['phone']);
    $email = check($_POST['email']);
    $address = check($_POST['address']);
    $password = check(sha1($_POST['password']));
    $pack = '2 Cedis 400 Mb';


    $query = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");



    $num = mysqli_num_rows($query);

    if ($num === 1) {

        echo "<script>alert('User Already exists');</script>";
    } else {

        $insert = mysqli_query($connect, "INSERT INTO users(username, mobile, email, address ,password,currentPackage) VALUES( '$username','$phone','$email','$address','$password','$pack)");

        if ($insert) {
            echo "<script>window.location='dashboardLogin.php'</script>";
        } else {
            echo "<script>alert('An Error Occurred Try Again');</script>";
        }
    }
}

?>

<body>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="card bg-dark" style="padding: 10px;">
                    <h6 class="card-title text-white ">WiFi-NET</h6>
                    <div class=" card-header text-white">
                        <h3 class="text-center">Create New Account</h3>
                    </div>
                    <div class="card-body">

                        <form action="" method="post">
                            <div class="form-group">
                                <label class="text-white">Username</label>
                                <input class="form-control" type="text" name="username" placeholder="Please input your user name" required>
                            </div>
                            <div class="form-group">
                                <label class="text-white">Mobile</label>
                                <input class="form-control" type="phone" name="phone" placeholder="+233 XXXXXXXXX" required>
                            </div>
                            <div class="form-group">
                                <label class="text-white">E-mail</label>
                                <input class="form-control" type="email" name="email" placeholder="name@gmail.com" required>
                            </div>
                            <div class="form-group">
                                <label class="text-white">GH POST GPS ADDRESS</label>
                                <input class="form-control" type="text" name="address" placeholder="NS-XXX-XXXX" required>
                            </div>
                            <div class="form-group">
                                <label class="text-white">Password</label>
                                <input class="form-control" type="password" name="password" required>
                            </div>

                            <div class=" form-group text-center">
                                <button type="submit" name="save" class="btn btn-primary text-center">
                                    Register
                                </button>
                            </div>
                    </div>
                    <div class="card-footer text-center">

                        <h6>
                            <span class="text-white">Already have an account?</span><a href="dashboardLogin.php"> Click
                                here to sign-in
                            </a>
                        </h6>

                    </div>
                </div>


            </div>

            </form>
        </div>
    </div>

    </div>
    </div>
</body>

</html>