<?php
include("./static/connection.php");
function cronJob($conn)
{
    $sql = "UPDATE `userdetails` SET `status` = '0' WHERE `status` = '1'";
    mysqli_query($conn, $sql, );
}

cronJob($conn);
?>