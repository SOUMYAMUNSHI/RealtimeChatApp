<?php

date_default_timezone_set("Asia/Kolkata"); //setting php timezone

include("./static/connection.php");
include("./php/activeStatus/setActiveStatus.php"); //including setActiveStatus.php to set active status
// include("./php/cron_job/cron_job.php"); //Tjis needed to learn properly, This function in not perfect
include("./static/userImage.php");

session_start();
if (isset($_SESSION['username'])) {

  $userId = $_SESSION['username'];
  setActive($conn, $userId); //set Status to active


  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&family=Jost:ital,wght@0,100..900;1,100..900&family=Karla:ital,wght@0,200..800;1,200..800&display=swap"
      rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&family=Jost:ital,wght@0,100..900;1,100..900&family=Karla:ital,wght@0,200..800;1,200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
      rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet">



    <link rel="stylesheet" href="./style/styleSheet.css" />
    <link rel="stylesheet" href="./style/userProfile.css">
    <link rel="stylesheet" href="./style/setting.css">
    <link rel="stylesheet" href="./style/search.css">
    <link rel="stylesheet" href="./style/showImage.css">

    <script src="./js/jquery-3.7.1.js"></script> <!--jquery linking-->

    <style>
      .user:hover {
        background-color: #f4f6f6;
        border-radius: 5px;
      }

      /*This is to style the font style of p tag text for change profile image*/
      .paragraph {
        font-family: "Afacad Flux", sans-serif;
        font-optical-sizing: auto;
        font-weight: 200;
        font-style: normal;
        font-variation-settings:
          "slnt" 0;
        ;
      }

      .name-paragraph {
        font-family: "Afacad Flux", sans-serif;
        font-optical-sizing: auto;
        font-weight: 500;
        font-style: normal;
        font-variation-settings:
          "slnt" 0;
        ;
      }

      .show-name {
        font-family: "Open Sans", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        font-variation-settings:
          "wdth" 100;
      }

      .logout {
        font-family: "Open Sans", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        font-variation-settings:
          "wdth" 100;
      }

      .user-name {
        font-family: "Open Sans", sans-serif;
        font-optical-sizing: auto;
        font-weight: 500;
        font-style: normal;
        font-variation-settings:
          "wdth" 100;
      }


      .view-image,
      .update-image {
        font-family: "PT Sans", sans-serif;
        font-weight: 200;
        font-style: normal;
      }
    </style>



    <title>Chat App</title>

  </head>

  <body>


    <div class="show-profile_image hidden" id="user-image_div">
      <!--Load user image here-->
    </div>

    <div class="main-div" id="main-div">
      <!--Main div here-->


      <div class="current-user"> <!--The left most container which holds user components-->

        <div class="chat icon" id="chat">
          <i class="fa-solid fa-comments"></i>
        </div>

        <div class="chat icon" id="search">
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>

        <div class="chat icon" id="setting">
          <i class="fa-solid fa-gear"></i>
        </div>


        <div class="user" id="logged-user">
          <img src="<?php echo ("pic/profile_pic/" . $profile_image); ?>" alt="user-image">
        </div>

      </div>

      <div class="User-list">
        <!--User List div here-->

      </div>

      <div id="chat-userDetails" class="user-chat">
        <!--Messages will load here-->
      </div>
    </div>

    <script>
      function sendMessage() {
        let message = document.getElementById("message").value;
        let sender = document.getElementById("sender-name").value;

        $('#show-message').load("./php/activeUser/sendMesg.php?message=" + encodeURIComponent(message) + "&senderName=" + sender);
      }

    </script>



  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>







  <!-- Load the chat-user list while the page is being load -->
  <script>

    $(document).ready(function () {
      $('.User-list').load("./pages/chatList.php");//Load the chat-user list while the page is being load
    });

    $("#logged-user").click(function () {
      // console.log("Hello");
      $('.User-list').load("./pages/userProfile.php");//load the profile page
    });

    $('#chat').click(function () {
      $('.User-list').load("./pages/chatList.php");//Load the chat-user list
    });

    $('#setting').click(function () {
      // console.log("Hello");
      $('.User-list').load("./pages/setting.php");//Load the setting
    });

    $('#search').click(function () {
      // console.log("Hello");
      $('.User-list').load("./pages/search.php");//Load the setting
    });

    window.addEventListener("beforeunload", function () {
      $(document).load("./php/activeStatus/checkActiveStatus.php");
    });


  </script>







  </html>
<?php } else {
  header("Location: ./php/login/loginPage.php");
}
?>