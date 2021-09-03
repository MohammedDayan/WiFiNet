<html>

<head>
    <?php include 'head.php' ?>
    <?php include_once "config.php";

    ?>
</head>



<body>

    <?php
    $query = $connect->query("SELECT * FROM `users` WHERE `username` = '$_SESSION[username]' ") or die(mysqli_error($connect));
    $fetch = $query->fetch_array();
    $Data = $fetch['Data'];

    switch ($Data) {
        case $Data > '1024':
            $bal = $Data / 1024;
            $unit = 'Gb';
            break;

        default:
            $bal = $Data;
            $unit = 'Mb';
            break;
    }

    ?>
    <div class="container " style="padding:20px;">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title text-center">Cash-Wallet</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <?php echo $fetch['walletBal'] ?> <span>GHc</span> </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title text-center">
                            Current-Package</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <?php echo $fetch['currentPackage'] ?> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title text-center">Data-Balance</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <?php echo $bal ?> <span><?php echo $unit ?></span> </div>

                    </div>
                </div>
            </div>

        </div>

    </div>


    </div>
    <div class="text-center">
        <button type="button" data-toggle="modal" data-target="#buyModal" class="btn btn-dark text-white ">Buy Bundle

        </button>
    </div>

    <!-- Modal -->

    <div class="modal fade" id="buyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="topUp.php" method="POST" name="transac">
                        <div class="form-group">
                            <label>Internet Package </label>
                            <select class="form-control" name="package" id="package">
                                <option value="2">2 Cedis 400 Mb</option>
                                <option value="5">5 Cedis 1 Gb</option>
                                <option value="10">10 Cedi 3 Gb</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Quantity </label>
                            <input type="number" class="form-control" name="quantity">
                        </div>


                </div>
                <div class="text-center">
                    <div class="modal-footer ">

                        <button type="button" onclick="verify()" data-toggle="modal" data-target="#verifymodal" class="btn btn-primary" data-dismiss="modal">Proceed</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Verify Modal -->
    <div class="modal fade" id="verifymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body h-100 container align-items-center">


                    <div class="row ">
                        <h6 class="col offset-3">
                            <span class="col">Package: </span>
                            <span id="verifypack" class="text-danger"></span>
                        </h6>
                    </div>
                    <div class="row ">
                        <h6 class="col offset-3">
                            <span class="col">Quantity: </span>
                            <span id="verifyqnty" class="text-danger"></span>
                        </h6>

                    </div>

                    <div class=" row ">
                        <h6 class="col offset-3">
                            <span class="col">Total Cost: </span>
                            <span id="verifytotal" class="text-danger"></span>
                        </h6>

                    </div>





                </div>
                <div class=" text-center">
                    <div class="modal-footer ">

                        <button type="submit" name="submit" class="btn btn-primary">Confirm</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>

    <!-- Task doneModal -->
    <div class="modal fade" id="buyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">


                    </form>
                </div>
                <div class="text-center">
                    <div class="modal-footer ">

                        <button type="button" data-dismiss="modal" class="btn btn-primary">Okay</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>