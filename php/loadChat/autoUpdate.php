<!-- This program will auto update the active ststus of the users-->
<sctipt src="../../js/jquery-3.7.1.js"></sctipt>
<?php
session_start();
$userId = $_REQUEST["sender"];
include("../../static/connection.php");
include("../activeStatus/inactiveTime.php");

function autoUpdate($conn, $receiver): void
{

    $sql = "SELECT DISTINCT `status` FROM `userdetails` WHERE `userId` = '$receiver'";
    $result = mysqli_query($conn, $sql);

    while ($status = mysqli_fetch_assoc($result)) {
        if ($status["status"] == "0") {

            $activeTime = lastActiveTime($conn, $receiver);// return active ststus
            $activeSymbol = lastActiveSymbol($conn, $receiver); //return an in-name which turn the active symbol to red

            ?>



            <label class="ststus-symbol " id="<?php echo $activeSymbol ?>"></label>
            <label class="status-details"><?php echo $activeTime ?></label>



            <?php


        } else {
            ?>
            <label class="ststus-symbol " id=""></label>
            <label class="status-details">Active Now</label>
            <?php
        }
    }





}

?>




<?php

autoUpdate($conn, $userId);
?>