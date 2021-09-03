<?php
include 'config.php';
include 'head.php';

$query = $connect->query("SELECT * FROM `users` WHERE `username` = '$_SESSION[username]' ") or die(mysqli_error($connect));
$fetch = $query->fetch_array();

?>
<div class="container ">
    <table class="row align-items-center justify-content-center ">
        <th class="text-center">
            <h3>User Personal Information</h3>
        </th>
        <tr>
            <td>USER NAME</td>
            <td><?php echo $_SESSION['username'] ?></td>
        </tr>
        <tr>
            <td>MOBILE</td>
            <td><?php echo $fetch['mobile']; ?></td>
        </tr>
        <tr>
            <td>E-Mail</td>
            <td>
                <E-Mail><?php echo $fetch['email']; ?></E-Mail>
            </td>
        </tr>
        <tr>
            <td>
                ADDRESS
            </td>
            <td>
                <?php echo $fetch['address']; ?>

            </td>
        </tr>
    </table>
</div>