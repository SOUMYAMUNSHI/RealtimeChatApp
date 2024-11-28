<?php

session_start();

if (isset($_SESSION["username"])) {


    $current_user = $_SESSION["username"];
    session_abort();

    $profile_image = "";

    $sql = "SELECT `userSl` FROM `userlist` WHERE `userid` = '$current_user'";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $userSl = $row["userSl"];
        $profile_image = $userSl . ".png";
    }
}

?>