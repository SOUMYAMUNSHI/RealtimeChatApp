<?php
session_start();
include("../../static/connection.php");


if (isset($_POST["submit"])) {

    $emailAdd = $_POST["email"];

    $isEmailAveliableSql = "SELECT DISTINCT `status` FROM `userdetails` WHERE `email` = '$emailAdd'";
    $isEmailAveliableResult = mysqli_query($conn, $isEmailAveliableSql);

    //echo boolval($isEmailAveliableResult);

    $flag = 0;
    while ($aveliable = mysqli_fetch_assoc($isEmailAveliableResult)) {
        if ($aveliable["status"]) {//checking if the email is alrady present or not
            $flag = 1;  // if email is alrady present flag = 1
        }
    }

    if ($flag) { //if flaf = 1
        header("location: ../login/loginPage.php");
    } else {//else if flag = 0
        header("Location: ./registrationOthers.php?email=" . $emailAdd);
    }
}
?>