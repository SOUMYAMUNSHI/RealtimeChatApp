<?php
session_start();
if (isset($_SESSION['username'])) {

    $current_user = $_SESSION["username"];
    $file_Name = "";

    include("../../static/connection.php");

    $sql = "SELECT `userSl` FROM `userlist` WHERE `userid` = '$current_user'";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $file_Name = $row["userSl"];
    }
    $location = "../../pic/profile_pic/" . $file_Name . ".png";
    if (move_uploaded_file($_FILES["uploadedImage"]["tmp_name"], $location)) {
        echo "Done";
    } else {
        echo "No";
    }
}
?>