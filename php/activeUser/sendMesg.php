<?php
/*This line page will load the newmessage uisng auto reload, the auto reload function is on index.php page*/
session_start();
if (isset($_SESSION["username"])) {
    include("../../static/connection.php");

    $receiver = $_REQUEST["senderName"];
    $sender = $_SESSION["username"];
    $newMessage = $_REQUEST["message"]; // This is the new message


    $sendNewMsgSql = "INSERT INTO `chat` (`senderId`, `receiverId`, `message`, `DateTime`, `MessageStatus`) VALUES ('$sender', '$receiver', '$newMessage', NOW(), '0')";
    $messageSend = mysqli_query($conn, $sendNewMsgSql);

    $tempNewMsg = "INSERT INTO `tempmessage` (`senderId`, `receiverId`, `message`, `DateTime`, `status`) VALUES ('$sender', '$receiver', '$newMessage', NOW(), '0')";
    $tempNewMsgResult = mysqli_query($conn, $tempNewMsg);
}
?>

<input hidden type="text" id="message-status" value="<?php echo $messageSend ?>">

<script>

    function autoReload() {
        let messageStatus = document.getElementById("message-status").value;
        if (messageStatus) {
            let sender = document.getElementById("sender-name").value;

            $('#message-container').append("<span class='receiver-message' ></span>"); //this will create a blank container to load the auto reloaded message
            $('.receiver-message:last').load("./php/activeUser/autoReload.php?senderName=" + sender); //This will autoreload the message
            // console.log(sender);

        }
    }
    autoReload(); //creating the function and calling here because, For 2nd button click it wsa throwing an error saying that 'messageStatus' was decleared

</script>