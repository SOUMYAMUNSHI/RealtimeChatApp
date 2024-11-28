var myInterval =
  //This setInterval() tun for every 800 ms and check for any new messages
  setInterval(senderMessages, 1000);

function senderMessages() {
  try {
    const sender = document.getElementById("sender-name").value;

    if (!sender) {
      throw new Error("Sender element not found");
    }

    console.log("Hello, I am waiting for a new message " + sender);
    $("#message-container").append("<span class='sender-message' ></span>"); //this will create a blank container to load the auto reloaded message

    $(".sender-message:last").load(
      "./php/messageSender/SenderMessage.php?senderName=" + sender,
      /*This will autoreload the message*/ function () {
        $("#delete-message").load(
          "./php/messageSender/deleteTempMessage.php?senderName=" + sender
        ); //this will delete the temporary messages
        //callback function is use to call the second function after the execution of the first function
      }
    );
  } catch (error) {
    console.error("Exception handeling => An error occurred: " + error.message);
  }
}

function stopInterval() {
  clearInterval(myInterval);
  // console.log("Stop");
}
