<?php
session_start();
?>
<div class="profile-image_container">
    <img class="user-image" src="<?php echo ("./pic/profile_pic/" . $_SESSION["profile_image"]); ?>" alt="user-image">
</div>
<span class="image-close_icon" id="close-button"><i class="fa-solid fa-circle-xmark"></i></span>

<script>
    $('#close-button').click(function () {
        console.log("Hello");
        $('#user-image_div').addClass("hidden");
        $('#main-div').removeClass("hidden");
    })
</script>