<?php
session_start();
include("../../static/connection.php");

$receiver = $_SESSION["username"]; //This is the active user, who had logged in to the system
$sender = $_REQUEST["senderName"];
//$sender = "SoumyaMunshi";

$deleteSql = "DELETE FROM `tempmessage` WHERE `senderId` = '$sender'";
$del = mysqli_query($conn, $deleteSql);

?>