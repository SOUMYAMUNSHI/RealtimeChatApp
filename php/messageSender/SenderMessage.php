<?php
session_start();
include("../../static/connection.php");

$receiver = $_SESSION["username"]; //This is the active user, who had logged in to the system
$sender = $_REQUEST["senderName"];
//$sender = "SoumyaMunshi";

function senderMessage($receiver, $conn): int
{



    $shatSl = "SELECT * FROM `tempmessage` WHERE `receiverId` = '$receiver' ORDER BY `sl` DESC LIMIT 1";
    $shatResult = mysqli_query($conn, $shatSl);






    while ($row = mysqli_fetch_assoc($shatResult)) {

        $DateTime_DB = strtotime($row["DateTime"]); //converting string to time
        $DateTimeFormat = date("d/m/y h:i", $DateTime_DB); //formating the time

        ?>

        <?php
        if ($row["receiverId"] == $receiver) { ?>

            <!--Sender Messages message Messages, render at left side-->

            <p class="sender-msg message"><?php echo $row["message"] ?>
                <br><label class="sender-time"><?php echo $DateTimeFormat ?></label>
            </p>

            <!--Sender Messages Messages, render at left side End-->

            <script src="./js/scrollDown.js"></script>
            <!--Writing this code inside the while loop to runthis only when a data is fetched, othewrwise I will run for everytime if I write outside the loop, it was creating a bug thats why i write this inside the loop-->

            <?php
        }
    }
    return 0;
}

senderMessage($receiver, $conn);
?>