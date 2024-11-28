<?php
session_start();
$userId = $_SESSION["username"];
include("../../static/connection.php");
include("../activeStatus/setActiveStatus.php");

$sql = "SELECT `status` FROM `userdetails` WHERE `userId` = '$userId'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    if ($row["status"] == 1) {
        setInactive($conn, $userId);
    }
}
?>