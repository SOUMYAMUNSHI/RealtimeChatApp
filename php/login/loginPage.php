<!--                                                Attention                                              -->
<!--Add *Action="action-page"* *method="post/Get"* in form while required, for now it will not change page-->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../style/signUp.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

</head>

<body>
    <div class="Login__page-form">
        <h1>Welcome back</h1>
        <form class="login__form" method="POST" action="../login/userLogin.php">
            <input class="login__form-email" type="text" name="userName" placeholder="Email address" required>
            <input class="login__form-email" type="password" name="password" placeholder="Password" required>

            <a id="Email__wrong-alert"></a>

            <input name="submit" class="login__form-button" type="submit" value="Continue">
        </form>
        <h5>Dont have any account? <a href="../signUp/signUp.php">Sign up</a></h5>
        <hr>
        <p>OR</p>
        <div class="Login__other-option">
            <button class="Login__with-google"> <i class="fa-brands fa-google"></i> Continue with google</button>
        </div>
    </div>



    <script src="../Script/Alert.js"></script>


</body>

</html>