<?php include 'head.php' ?>

<body>
    <div class="container h-100">
        <div class="row justify-content-center align-items-center">
            <div class="col-8 col-offset-2" style="padding: 20px;">
                <div class=" card">
                    <div class="card-header bg-secondary">
                        <h6 class="card-title text-center text-white">Cash-Wallet Load</h6>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Network</label>
                                <select class="form-control" name="network">
                                    <option value="mtn">MTN</option>
                                    <option value="voda">Vodafone</option>
                                    <option value="airtel">Airtel-Tigo</option>

                                </select>

                            </div>
                            <div class="form-group">
                                <label> MoMo Number</label>
                                <input type="Phone" name="momo" class="form-control" value="">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-dark text-center" value="">proceed</button>
                        </form>

                    </div>

                </div>

            </div>
        </div>
</body>