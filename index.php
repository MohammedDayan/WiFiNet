<?php include 'head.php' ?>

<body>

    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-4">

                <div class="card bg-dark ">


                    <div style="padding: 30px;">

                        <div class="card-head">
                            <h3 class="card-title text-white text-center">WiFi-NET</h3>

                        </div>
                        <form action="" method="post">
                            <div class="form-group">
                                <label class="text-white">Username</label>
                                <input class="form-control" type="text" name="name" placeholder="Please input your user name">
                            </div>
                            <div class="form-group">
                                <label class="text-white">Password</label>
                                <input class="form-control" type="password" name="name" ">
                                    </div>
                         <div class=" form-group text-center">
                                <button type="submit" class="btn btn-primary text-center">
                                    CONNECT
                                </button>
                            </div>
                            <div class="card-footer text-center">

                                <h6>
                                    <span class="text-white">Dont have an account?</span><a href="new account.php"> Click
                                        here to
                                        sign
                                        up</a>
                                </h6>

                            </div>
                        </form>
                    </div>
                    <div class="container h-100">
                        <div class="row h-100 justify-content-end" style="padding: 10px;">;
                            <a href="dashboardLogin.php" style="font-size:12px;">User Dashboard login</button>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

</body>

</html>