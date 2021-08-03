<html>

<head>
    <?php include 'head.php' ?>


</head>



<body>
    <div class="container " style="padding:20px;">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title text-center">Cash-Wallet</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">200.0 <span>GHc</span> </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title text-center">Current-Package</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center"> 1 cedi 1gb </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title text-center">Data-Balance</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center"> 400 mb </div>
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
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Internet Package </label>
                            <input type="text" class="form-control" name="quantity">
                        </div>
                        <div class="form-group">
                            <label>Quantity </label>
                            <input type="number" class="form-control" name="quantity">
                        </div>

                    </form>
                </div>
                <div class="text-center">
                    <div class="modal-footer ">

                        <button type="button" class="btn btn-primary">Proceed</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>