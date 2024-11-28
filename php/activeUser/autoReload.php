<script src="./js/scrollDown.js"></script>



<?php
session_start();
include("../../static/connection.php");

$receiver = $_SESSION["username"]; //This is the active user, who had logged in to the system
$sender = $_REQUEST["senderName"];

$shatSl = "SELECT * FROM `chat` WHERE `senderId` = '$receiver' ORDER BY `sl` DESC LIMIT 1";
$shatResult = mysqli_query($conn, $shatSl);





while ($row = mysqli_fetch_assoc($shatResult)) {

    $DateTime_DB = strtotime($row["DateTime"]); //converting string to time
    $DateTimeFormat = date("d/m/y h:i", $DateTime_DB); //formating the time

    ?>

    <?php
    if ($row["senderId"] == $receiver) { ?>



        <!--Current user message Messages, render at right side-->
        <p class="reciver-msg message"><?php echo $row["message"] ?>
            <br><label class="receiver-time"><?php echo $DateTimeFormat ?></label>
        </p>
        <!--Current user message Messages, render at right side End-->


        <?php
    }
} ?>