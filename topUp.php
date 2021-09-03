<?php
include 'head.php';
include 'config.php';
if (isset($_POST['submit'])) {

    $pack = ($_POST['package']);
    $qnty = ($_POST['quantity']);
    $total = $pack * $qnty;
    $datalAloc = 0;
    switch ($pack) {
        case '2':
            $datalAloc = 400;
            $packName = '2 Cedis 400 Mb';
            break;
        case '5':
            $datalAloc = 1024;
            $packName = '5 Cedi 1 Gb';
            break;
        case '10':
            $datalAloc = 3072;
            $packName = '10 Cedi 3 Gb';
            break;

        default:
            echo ('transaction error');

            break;
    }

    // $insert = mysqli_query($connect, "UPDATE INTO users() VALUES( '$username','$phone','$email','$address','$password')");
    $query = $connect->query("SELECT * FROM `users` WHERE `username` = '$_SESSION[username]' ") or die(mysqli_error($connect));
    $fetch = $query->fetch_array();
    $availableBal = $fetch['walletBal'];
    $data = $qnty * $datalAloc;
    $dataBal = $fetch['Data'];
    $newDataBal = $dataBal + $data;
    //updating package
    $query = $connect->query("UPDATE users SET currentPackage='$packName' WHERE username='$_SESSION[username]'");



    if ($total > $availableBal) {

        echo ('<script>
            var approve=false;
            </script>');
    } elseif ($availableBal >= $total) {
        $tempBal = $availableBal - $total;
        $query = $connect->query("UPDATE users SET walletBal='$tempBal' WHERE username='$_SESSION[username]'");
        //UPDATING BAL
        $query = $connect->query("UPDATE users SET Data='$newDataBal' WHERE username='$_SESSION[username]'");

        echo ('<script>
            var approve=true;
            </script>');
    }
};

?>

<body>
    <!-- Task doneModal -->
    <div class="modal fade" id="myModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 class="text-center">Transaction successfull</h3>
                </div>
                <div class="text-center">
                    <div class="modal-footer ">

                        <button type="button" onclick="refresh()" data-dismiss="modal" class="btn btn-primary">Okay</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Disapproval -->
    <div class="modal fade" id="disapprovalModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 class="text-danger text-center">You have Insufficient Balance to perform this transaction</h3>
                </div>
                <div class="text-center">
                    <div class="modal-footer ">

                        <button type="button" onclick="refresh()" data-dismiss="modal" class="btn btn-primary">Okay</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    if (approve == true) {
        $('#myModal').modal('show');

    } else if (approve == false) {
        $('#disapprovalModal').modal('show');

    }

    function refresh() {
        window.location.replace("account.php")
        console.log('hmm');
    }
</script>