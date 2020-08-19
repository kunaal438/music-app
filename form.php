<?php
include("./config.php");
include("classes/Account.php");
include("classes/Constant.php");

if (isset($_SESSION['userLoggedIn'])) {
    header('Location: index.php');
} else {
    $account = new Account($con);

    include("handlers/register.php");
    include("handlers/login.php");

    function gettingInputValues($param)
    {
        if (isset($_POST[$param])) {
            echo $_POST[$param];
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slotify: clone of spotify</title>

    <link rel="stylesheet" href="assets/css/form.css">

</head>

<body>
    <div class="form_container">
        <div class="loginForm">
            <h2>Log in</h2>
            <form action="form.php" method="POST">
                <p>
                    <?php echo '<span class="login-alert" style="color: #ffd900;position: absolute;top: 224px;left: 50%;transform: translateX(-50%);text-transform: capitalize;text-shadow: 0 0 10px #000;font-size: 12px;">' . $account->getError(Constant::$loginFailed) . '</span>' ?>
                    <label for="EmailInput">Email</label>
                    <input type="Email" name="loginEmail" placeholder="enter the email" id="EmailInput" value="<?php gettingInputValues('loginEmail') ?>" autocomplete="off" required>
                </p>
                <p>
                    <label for="passwordInput">Password</label>
                    <input type="password" name="loginPassword" id="passwordInput" placeholder="enter the password" value="<?php gettingInputValues('loginPassword') ?>" required>
                </p>

                <button name="submitLoginFormBtn" class="btn login-btn">Login</button>
            </form>

            <a class="linkToRegister">you don't have an account?? sign up</a>
        </div>

        <div class="registerForm">
            <h2>sign up</h2>
            <form action="form.php" method="POST">
                <p>
                    <?php echo '<span class="login-alert" style="color: #ffd900;position: absolute;top: 150px;left: 20px;/* transform: translateX(-50%); */text-transform: capitalize;text-shadow: 0 0 10px #000;font-size: 12px;">' . $account->getError(Constant::$usernameLength) . '</span>' ?>
                    <label for="registerUsernameInput">username</label>
                    <input type="text" name="username" placeholder="enter the username" id="registerUsernameInput" value="<?php gettingInputValues('username') ?>" autocomplete="off" required>
                </p>
                <p>
                    <?php echo '<span class="login-alert" style="color: #ffd900;position: absolute;top: 231px;left: 20px;/* transform: translateX(-50%); */text-transform: capitalize;text-shadow: 0 0 10px #000;font-size: 12px;">' . $account->getError(Constant::$invalidEmail) . '</span>' ?>

                    <?php echo '<span class="login-alert" style="color: #ffd900;position: absolute;top: 231px;left: 20px;/* transform: translateX(-50%); */text-transform: capitalize;text-shadow: 0 0 10px #000;font-size: 12px;">' . $account->getError(Constant::$EmailRegistered) . '</span>' ?>
                    <label for="emailInput">email</label>
                    <input type="email" name="email" placeholder="enter the email" autocomplete="off" id="emailInput" value="<?php gettingInputValues('email') ?>" required>
                </p>
                <p>
                    <?php echo '<span class="login-alert" style="color: #ffd900;position: absolute;top: 304px;left: 20px;/* transform: translateX(-50%); */text-transform: capitalize;text-shadow: 0 0 10px #000;font-size: 12px;">' . $account->getError(Constant::$passworLength) . '</span>' ?>

                    <?php echo '<span class="login-alert" style="color: #ffd900;position: absolute;top: 304px;left: 20px;/* transform: translateX(-50%); */text-transform: capitalize;text-shadow: 0 0 10px #000;font-size: 12px;">' . $account->getError(Constant::$passworCharacters) . '</span>' ?>

                    <label for="registerPasswordInput">Password</label>
                    <input type="password" name="password" placeholder="enter the password" id="registerPasswordInput" value="<?php gettingInputValues('password') ?>" required>
                </p>

                <button name="submitregisterFormBtn" class="btn register-btn">sign up</button>
            </form>

            <a class="linkToLogin">already have an account?? log in</a>
        </div>
    </div>
    <div class="content">
        <div class="content-box">
            <h2>get great music,<br> right here</h2>

            <h4>listen to tons of songs for free.</h4>

            <ul>
                <li><img src="assets/img/check.png" alt="check icon" class="check"> discover your favourite musics</li>
                <li><img src="assets/img/check.png" alt="check icon" class="check"> create your own playlist</li>
                <li><img src="assets/img/check.png" alt="check icon" class="check"> follow artist to keep up to date</li>
            </ul>
        </div>
    </div>

    <script src="assets/js/form.js"></script>

</body>

</html>