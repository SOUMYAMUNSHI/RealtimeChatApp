<?php
include("../../static/connection.php");
include("../activeStatus/setActiveTime.php");

if (isset($_POST['submit'])) {
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `userdetails` WHERE `userId` = '$userName' OR `email` = '$userName'";
    $result = mysqli_query($conn, $sql);
    if ($rows = mysqli_fetch_array($result)) {
        if ($rows["password"] == $password) {

            setActiveTime($conn, $userName); //this function will set logged in time in database

            session_start();

            $_SESSION["username"] = $userName;
            $_SESSION["password"] = $password;
            $_SESSION["profile_image"] = "";

            //This code is to get user image url

            $sql = "SELECT `userSl` FROM `userlist` WHERE `userId` = '$userName'";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                $userSl = $row["userSl"];
                $_SESSION["profile_image"] = $userSl . ".png";
            }
            //picture url is set inside $_SESSION["profile_image"] 

            header("Location:../../index.php");
        } else {
            ?>
            <script>
                alert("Invalid Password");
                window.location.href = "http://localhost/chatApp3/php/login/loginPage.php";
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            alert("Invalid Username");
            window.location.href = "http://localhost/chatApp3/php/login/loginPage.php";
        </script>
        <?php
    }
}
