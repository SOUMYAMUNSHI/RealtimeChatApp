<?php
session_start();
if (isset($_SESSION["username"])) {

    include("../static/connection.php");
    ?>


    <div class="search-page">

        <span class="search-heading">
            <h5>Search</h5>
        </span>

        <div class="search">
            <span>
                <div class="d-flex" role="search">
                    <input id="search-user__name" class="form-control me-2" type="search" placeholder="Search"
                        aria-label="Search" />
                    <button class="btn btn-outline-success" id="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </span>
        </div>

        <span class="search-result">

            <!-- <div class="users">
                <img src="./pic/images.png" alt="user-image">
                <h5 class="user-name">Soumya Munshi</h5>

            </div> -->


        </span>
    </div>
    <?php
} ?>

<script>
    $('#submit').click(function () {
        let userName = document.getElementById("search-user__name").value;
        // console.log(userName);
        $('.search-result').load("./php/search/searchUsers.php?userName=" + userName);

    });



</script>