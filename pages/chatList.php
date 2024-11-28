<?php
session_start();
if (isset($_SESSION['username'])) {
    include("../static/connection.php");
    include("../php/activeStatus/inactiveTime.php");
    include("../php/loadChat/loadChat.php");
    ?>


    <div class="search-bar">
        <span>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </span>
    </div>
    <div class="user-container"> <!--Div to show user-->
        <?php //php code to view user from chatList
        
            loadChat($conn); // this function will load the chat and update them    
}
?>
</div>