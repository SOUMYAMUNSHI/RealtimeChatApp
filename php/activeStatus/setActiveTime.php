<?php

function setActiveTime($conn, $userName): void //this functoin will update last active time in database
{
    $dateTime = date("d-m-Y H:i:s");
    $updateDateTimeSQL = "UPDATE `userdetails` SET `DateTime` = '$dateTime' WHERE `userId` = '$userName'";
    $result = mysqli_query($conn, $updateDateTimeSQL);
}
?>