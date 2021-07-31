<?php include 'head.php' ?>

<body>
    <?php require_once 'newUser.php'; ?>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="card bg-dark" style="padding: 10px;">
                    <h6 class="card-title text-white ">WiFi-NET</h6>
                    <div class=" card-header text-white">
                        <h3 class="text-center">Create New Account</h3>
                    </div>
                    <div class="card-body">

                        <form action="newUser.php" method="post">
                            <div class="form-group">
                                <label class="text-white">Username</label>
                                <input class="form-control" type="text" name="username" placeholder="Please input your user name">
                            </div>
                            <div class="form-group">
                                <label class="text-white">Mobile</label>
                                <input class="form-control" type="phone" name="phone" placeholder="+233 XXXXXXXXX">
                            </div>
                            <div class="form-group">
                                <label class="text-white">E-mail</label>
                                <input class="form-control" type="email" name="email" placeholder="name@gmail.com">
                            </div>
                            <div class="form-group">
                                <label class="text-white">GH POST GPS ADDRESS</label>
                                <input class="form-control" type="text" name="address" placeholder="NS-XXX-XXXX">
                            </div>
                            <div class="form-group">
                                <label class="text-white">Password</label>
                                <input class="form-control" type="password" name="password">
                            </div>

                            <div class=" form-group text-center">
                                <button type="submit" name="save" class="btn btn-primary text-center">
                                    Register
                                </button>
                            </div>
                    </div>
                    <div class="card-footer text-center">

                        <h6>
                            <span class="text-white">Already have an account?</span><a href="index.html"> Click
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