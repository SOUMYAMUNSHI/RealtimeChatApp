<?php
// include("../../static/connection.php");

date_default_timezone_set("Asia/Kolkata");





function lastActiveTime($conn, $userId): string //this function return the time when the user was active if the user is not active curently other wisr return "active now" status
{
    $timeNow = time(); //return time in second from january 1 1970

    $sql = "SELECT DISTINCT `DateTime`, `status` FROM `userdetails` WHERE `userId` = '$userId'";
    $result = mysqli_query($conn, $sql);




    while ($row = mysqli_fetch_assoc($result)) {

        $pastTime = strtotime($row["DateTime"]);

        $munites = floor(($timeNow - $pastTime) / 60);
        // $hours = floor(($timeNow - $pastTime) / 3600);
        // $day = floor(($timeNow - $pastTime) / 86400);


        if ($row["status"] == 1) {
            return "Active Now";
        } else if ($row["status"] == 0) {

            if ($munites < 1) { //for seconds
                return "Few seconds ago";
            } else if ($munites >= 1 && $munites < 60) {  //for munites
                return (string) $munites . " Munites ago";
            } else if ($munites >= 60 && $munites < 1440) { // for hour
                return (string) floor(($timeNow - $pastTime) / 3600) . " Hour ago"; //(1 hour = 3600 seconds)
            } else if ($munites >= 1440 && $munites < 14400) { //for day
                return (string) floor(($timeNow - $pastTime) / 86400) . " Day ago"; //(1 day = 86400) seconds
            } else if ($munites >= 14400) { //(10 days = 14400 munites)
                return "More than 10 days ago";
            } else {
                return "Error"; //To check error
            }

        }

    }
    return "Hello"; //to check error
}

function lastActiveSymbol($conn, $userId): string
{
    $sql = "SELECT DISTINCT `status` FROM `userdetails` WHERE `userId` = '$userId'";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        if ($row["status"] == 1) {
            return "0";
        } else {
            return "inactive-status";
        }
    }
    return "0";
}
?>