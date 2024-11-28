<?php
session_start();
if (isset($_SESSION["username"])) {
  include("../static/connection.php");

  ?>

  <style>
    .show-profile_image {
      /* background-color: black; */
      position: absolute;
      top: 50%;
      right: 50%;
      transform: translate(50%, -50%);
      display: flex;
      align-items: center;
      width: 100%;
      height: 100%;
      background-color: hsl(217, 10%, 25%, 0.2);


    }

    #preview {
      width: 200px;
      height: auto;
      /* margin: 10px; */
      background-color: #97cba9;
    }

    .image_button {
      /* display: block; */
      background-color: #0092ca;
      width: 50px;
      height: 50px;
      border: none;
      border-radius: 50%;
      color: white;
      font-size: 20px;
      z-index: 10;
      position: relative;
      bottom: 30px;
    }

    .image-form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .close-image_button {
      background-color: #0092ca;
      margin-bottom: 0;
      width: 100%;
      height: 40px;
      color: white;

      /* width: 50px;
                              height: 50px;
                              border: none;
                              border-radius: 50%;
                              color: white;
                              font-size: 25px;
                              text-align: center;
                              margin-bottom: 0; */
    }

    .close {
      cursor: pointer;
      float: right;
      padding: 5px;
    }

    .hidden {
      display: none;
    }
  </style>

  <div class="load-user__profile">
    <span class="profile-heading">
      <h5>Profile</h5>
    </span>

    <span class="profile-picture">
      <div class="image" style="position: relative">
        <img src="<?php echo ("./pic/profile_pic/" . $_SESSION["profile_image"]) ?>" id="profile-pic" alt="user-image">
        <span hidden class="edit-icon" id="image-edit" style="position: absolute">
          <div class="edit-picture">
            <i class="fa-solid fa-camera"></i>
            <p class="paragraph">CHANGE<br> PROFILE PICTURE</p>
          </div>
        </span>
      </div>

      <span class="popup hidden" id="popup-box">
        <div class="close-button" id="close"><i class="fa-solid fa-circle-xmark"></i></div>
        <p class="view-image" id="view-user_image">View Image</p>
        <p class="update-image" id="update-user_image">Update Image</p>
      </span>

    </span>



    <span class="show-your__name">
      <p class="name-paragraph">Your Name</p>




      <?php
      $username = $_SESSION["username"];
      $sql = "SELECT `userName` FROM `userlist` WHERE `userId` = '$username'";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {

        ?>



        <h5 class="show-name"><?php echo $row["userName"] ?></h5>


        <?php
      } ?>





    </span>

    <span class="show-user__name">
      <p class="name-paragraph">Your User Id</p>
      <h5 class="show-name"><?php echo $_SESSION["username"] ?></h5>
    </span>

    <form action="./php/logout/logout.php" method="post" class="form">
      <span class="log-out">
        <button class="button">
          <div class="log-out__button" id="logout-button">
            <i class="fa-solid fa-right-from-bracket"></i>
            <p class="logout">Log out</p>
          </div>
        </button>
      </span>
    </form>

  </div>

  <div class="show-profile_image hidden">
    <!--This div will show and upload the image-->
    <form class="image-form" action="php/imageUpload/upload.php" method="post" enctype="multipart/form-data"
      onchange="previewImage()">
      <input hidden type="file" name="uploadedImage" id="image-upload" accept=".jpeg, .jpg">
      <div id="close-image_button" class="close-image_button">
        <p class="close"><i class="fa-solid fa-xmark"></i></p>
      </div>
      <img id="preview" src="#" alt="Image Preview" style="width: 200px; height: auto;">
      <button class="image_button" type="submit" value="submit"><i class="fa-solid fa-check"></i></button>
    </form>
    <!-- <button id="close-image_button" class="close-image_button"><i class="fa-solid fa-xmark"></i></button> -->
  </div>



  <script>
    $('#profile-pic').mouseenter(function () {
      // console.log("Hello world");
      let filter = document.getElementById("image-edit");
      filter.removeAttribute("hidden");
    });

    $('#profile-pic').mouseleave(function () {
      // console.log("Hello world");
      $('#image-edit').attr("hidden", true);
    });

    $('#image-edit').click(function () {
      // console.log("Hello");
      $('#popup-box').removeClass("hidden");
      let filter = document.getElementById("image-edit");
      filter.removeAttribute("hidden");

    });

    $('#close').click(function () { //onclick remove popup, filter from the image
      // console.log("Hello2");
      $('#popup-box').addClass("hidden");
      $('#image-edit').attr("hidden", true);
    });

    $('#view-user_image ').click(function () {
      console.log("Hello");
      $('#main-div').addClass("hidden");
      $('#user-image_div').removeClass("hidden");
      $('#user-image_div').load("./pages/showImage/showImage.php");//Load the setting
    });

    $('#update-user_image').click(function () {
      $('#image-upload').click();
    });
    // $(document).click(function (event) {
    //   if (!$('#image-edit').click()) {


    //     $('#popup-box').addClass("hidden");


    //   }
    // });

    function previewImage() {
      $(".show-profile_image").removeClass("hidden");
      $("#close-image_button").click(function () {
        $(".show-profile_image").addClass("hidden");
      })
      const input = document.getElementById("image-upload");
      const preview = document.getElementById("preview");

      if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function (e) {
          preview.src = e.target.result;
          preview.style.display = "block";
        };
        reader.readAsDataURL(input.files[0]);
      }
    }

  </script>
  <?php
}
?>