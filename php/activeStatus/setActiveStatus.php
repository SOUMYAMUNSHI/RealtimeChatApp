<?php
function setActive($conn, $userId)
{
    $sql = "UPDATE `userdetails` SET `status` = '1' WHERE `userId` = '$userId';";
    mysqli_query($conn, $sql);
}

function setInactive($conn, $userId): int
{
    $sql = "UPDATE `userdetails` SET `status` = '0' WHERE `userId` = '$userId';";
    mysqli_query($conn, $sql);
    return 1;
}
?>