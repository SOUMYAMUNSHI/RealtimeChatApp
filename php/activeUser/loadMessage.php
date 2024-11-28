<script src="./js/scrollDown.js"></script>



<?php
session_start();

if (isset($_SESSION['username'])) {

  include("../../static/connection.php");
  include("../activeStatus/inactiveTime.php");

  $sender = $_REQUEST["sender"]; //Getting the user Id data from index page using request method

  $sql = "SELECT `userName` FROM `userlist` WHERE `userId` = '$sender'";
  $result = mysqli_query($conn, $sql);

  $lastActive = lastActiveTime($conn, $sender); // return the last active time of sender


  while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <span class="chat-user-info">
      <img class="user-icon" src="./pic/images.png" alt="user-image" />
      <div class="sender-user-details">
        <div class="user-name"><?php echo $row["userName"] ?></div>
        <div class="user-last-active"><?php echo $lastActive ?></div> <!-- This show the last active time -->
      </div>
    </span>

    <?php

  }

  ?><!--chat div here-->

  <div class="show-message" id="message-container"> <!--Messages-->

    <?php
    $receiver = $_SESSION["username"]; //This is the active user, who had logged in to the system
  
    $shatSl = "SELECT * FROM `chat` WHERE (`senderId` = '$sender' AND `receiverId` = '$receiver') OR (`receiverId` = '$sender' AND `senderId` = '$receiver') ORDER BY `sl`";
    $shatResult = mysqli_query($conn, $shatSl);





    while ($row = mysqli_fetch_assoc($shatResult)) {

      $DateTime_DB = strtotime($row["DateTime"]); //converting string to time
      $DateTimeFormat = date("d/m/y h:i", $DateTime_DB); //formating the time
  
      if ($row["senderId"] == $sender) {
        ?>




        <!--Sender Messages-->
        <span class="sender-message" id="">
          <p class="sender-msg message"><?php echo $row["message"] ?>
            <br><label class="sender-time"><?php echo $DateTimeFormat ?></label>
          </p>
        </span>
        <!--Sender Messages End-->



      <?php } else { ?>



        <!--Reciever Messages-->
        <span class="receiver-message" id="">
          <p class="reciver-msg message"><?php echo $row["message"] ?>
            <br><label class="receiver-time"><?php echo $DateTimeFormat ?></label>
          </p>
        </span>
        <!--Reciever Messages End-->



        <?php
      }
    }
} ?>
  <span class="sender-message" id="show-message"></span><!--Sender Messages hidden, to load live send messages-->
  <span class="receiver-message" id="show-message"></span><!--Reciever Messages hidden, to load live send messages-->
  <span class="receiver-message"
    id="delete-message"></span><!--Delete tempmessage Messages hidden, to load live send messages-->

</div>



<div class="write-message container"><!--This is the message input field-->

  <div hidden id="loadMesg"><input id="sender-name" type="text" value='<?php echo $sender; ?>'></div>
  <!--This will load the sendMesg for temporary-->

  <!--Bottom input message divition-->
  <div class="input-group flex-nowrap">
    <input type="text" class="form-control" id="message" placeholder="Enter text here....." aria-label="Username"
      aria-describedby="addon-wrapping" />
    <span style="cursor:pointer" class="input-group-text" id="addon-wrapping"
      onclick="sendMessage()"><!--sendMessage() function is present in index.php page--><i
        class="bi bi-send-fill"></i></span>
  </div>

  <script src="./js/reloadNewMessage.js"></script>

  <script>
    var button = document.getElementById("addon-wrapping");

    function emptyMessageField() {
      $('#message').val("");
    }

    button.addEventListener("click", emptyMessageField);

    myInterval;//this methos is present in js file which will render any new message in receiver side

    // setInterval(function () {
    // $('.user-last-active').text("<?php //echo lastActiveTime($conn, $sender); ?>");
    // }, 1000);
  </script>

</div>