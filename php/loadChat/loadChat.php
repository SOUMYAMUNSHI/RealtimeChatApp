<?php
function loadChat($conn)
{


    $receiver = $_SESSION["username"]; //current user who had logged in




    $sql = "SELECT DISTINCT combined.senderId
                 FROM (
                         (SELECT DISTINCT `senderId` FROM `chat`) 
                         UNION 
                         (SELECT DISTINCT `receiverId` FROM `chat`)
                       ) AS combined
                 INNER JOIN (
                         (SELECT DISTINCT `senderId` FROM `chat` WHERE `receiverId` = '$receiver') 
                         UNION 
                         (SELECT DISTINCT `receiverId` FROM `chat` WHERE `senderId` = '$receiver')
                         ) AS mrx_related
                 ON combined.senderId = mrx_related.senderId;"; //This query will give output for all username who had chat with active user


    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {

        $activeTime = lastActiveTime($conn, $row["senderId"]);// return active ststus
        $activeSymbol = lastActiveSymbol($conn, $row["senderId"]); //return an in-name which turn the active symbol to red

        ?>
        <div onclick="elementId(this)" class="user container" style="cursor:pointer;" id="<?php echo $row["senderId"] ?>">
            <div class="user-info">
                <div class="image-container">
                    <img class="user-icon" src="./pic/images.png" alt="user-icon" />
                </div>
                <div class="user-details">
                    <?php
                    $userId = $row["senderId"];// sender Id has been fetched from the previous query
                    $userNameSql = "SELECT `userName` FROM `userlist` WHERE `userId` = '$userId'";
                    $userName = mysqli_query($conn, $userNameSql);
                    while ($userNames = mysqli_fetch_assoc($userName)) {
                        ?>
                        <div class="user-name"><b><?php echo $userNames['userName'] ?></b></div><?php } ?>
                    <div class="user-status">
                        <label class="ststus-symbol " id="<?php echo $activeSymbol ?>"></label>
                        <label class="status-details"><?php echo $activeTime ?></label>
                    </div>
                </div>
            </div>
        </div>

        <script>


            setInterval(function () {
                let uId = ($("#<?php echo $row["senderId"] ?>").attr("id"));
                // $('.user-status').html("");
                // console.log(uId);
                $('#<?php echo $row["senderId"] ?> .user-status').load("./php/loadChat/autoUpdate.php?sender=" + uId);
            }, 2000);







        </script>

        <?php
    } ?>
    <script src="./js/reloadNewMessage.js"></script>
    <script>

        function elementId(element) {

            document.getElementById(`${element.id}`).addEventListener("click", $("#chat-userDetails").load("./php/activeUser/loadMessage.php?sender=" + element.id)); //sending the data to loadMessage.php page to load the messages while I click on the user on user chat list)
            document.getElementById(`${element.id}`).addEventListener("click", stopInterval());




            // $(`#${element.id}`).click(() => {
            //     $("#chat-userDetails").load("./php/activeUser/loadMessage.php?sender=" + element.id); //sending the data to loadMessage.php page to load the messages while I click on the user on user chat list
            // });
        }

    </script>
    <?php
}
?>