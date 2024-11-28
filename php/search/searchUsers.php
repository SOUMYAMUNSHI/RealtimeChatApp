<?php
session_start();

if (isset($_SESSION["username"])) {
    include("../../static/connection.php");
    $userName = $_REQUEST["userName"];
    // echo "Hello world " . $userName;
    $sql = "SELECT * FROM `userlist` WHERE `userName` LIKE '%$userName%'";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {


        // echo $row["userName"];

        ?>


        <div class="users" id="<?php echo $row["userSl"] ?>">
            <input hidden type="text" value="<?php echo $row["userId"] ?>" id="<?php echo $row["userId"] ?>">
            <img src="./pic/images.png" alt="user-image">
            <h5 class="user-name"><?php echo $row["userName"] ?></h5>
        </div>

        <script>

            $('#<?php echo $row["userSl"] ?>').click(function () {
                let value = document.getElementById("<?php echo $row["userId"] ?>").value;
                $('#chat-userDetails').load("./php/activeUser/loadMessage.php?sender=" + value);
            });
        </script>

        <?php
    }
}


?>