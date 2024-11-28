<?php
include("../../static/connection.php");
include("../activeStatus/setActiveStatus.php");
include("../activeStatus/setActiveTime.php");
session_start();
$userId = $_SESSION["username"];
session_unset();
session_destroy();

if (setInactive($conn, $userId)) {
    setActiveTime($conn, $userId); //reset the active time before logged out
    header("Location:../../pages/landingPage.php");
}