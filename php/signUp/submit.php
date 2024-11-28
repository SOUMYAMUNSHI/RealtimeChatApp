<?php
session_start(); {
    include("../../static/connection.php");

    if (isset($_POST["submit"])) {
        $emailAddress = $_POST["email"];
        $userId = $_POST["userId"];
        $userName = $_POST["userName"];
        $password = $_POST["passwordCheck"];


        $sqlUserList = "INSERT INTO `userlist` (`userId`, `userName`, `ActiveStatus`) VALUES ('$userId','$userName', '1')";
        mysqli_query($conn, $sqlUserList);

        $userSerialNumber = "SELECT DISTINCT `userSl` FROM `userlist` WHERE `userId` = '$userId'";
        $result = mysqli_query($conn, $userSerialNumber);

        while ($row = mysqli_fetch_assoc($result)) {
            $userSl = $row["userSl"];
            $userDetailsSql = "INSERT INTO `userdetails` (`userSl`, `userId`, `password`, `DateTime`, `status`, `email`) VALUES ('$userSl', '$userId', '$password', NOW(), '1', '$emailAddress')";
            mysqli_query($conn, $userDetailsSql);
        }



    }
}
?>