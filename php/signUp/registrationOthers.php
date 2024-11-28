<?php
$emaiilAddress = $_REQUEST["email"];
// echo gettype($emaiilAddress);

$username = strstr($emaiilAddress, '@', true);// strstr() builtin function that return the postfix of the givern element, if its true then it return the prefix of the given element
// echo $username;
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../style/registerPage.css">
</head>
<script src="../../js/jquery-3.7.1.js"></script>

<body>
    <div class="submit">
        <form class="from" action="submit.php" method="POST">
            <input class="elements" type="email" name="email" value="<?php echo $emaiilAddress ?>" required>
            <input class="elements" type="text" name="userId" value="<?php echo $username ?>" required>
            <input class="elements" type="text" name="userName" placeholder="Your Name" required>
            <input class="elements" type="password" name="password" id="password" placeholder="password" required>
            <input class="elements" type="password" name="passwordCheck" id="password-check"
                placeholder="Re-enter your password" required>
            <button class="button" name="submit" id="button">Submit</button>

        </form>
    </div>
</body>
<script>
    $('#password').focusout(function () {
        let password = document.getElementById("password").value;
        $('#password-check').focusout(function () {
            let confirmPassword = document.getElementById("password-check").value;
            if (password != confirmPassword) {
                alert("Password mismatch");
                $('#button').prop("disabled", true);
            }
            else {
                $('#button').prop("disabled", false);
            }
        });
    });
</script>

</html>