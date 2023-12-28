<?php
    session_start();
    include "db_conn.php";
?>    

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | LifeCare</title>
    <link rel="stylesheet" href="../CSS/loginStyles.css">
    <script src="../JS/loginJS.js"></script>
    <link rel="icon" type="image/x-icon" href="../Images/logo.png">
</head>

<body>
    <div class="wrapper">
        <span class="icon-close"><a href="../index.php" style="color: white;"><ion-icon name="close"></ion-icon></a></span>
        <div class="form-box login">
            <h2>Login</h2>
            <form action="login_details.php" method="POST">

                <?php
                if(isset($_GET["error"])) {
                    if($_GET["error"] == "usernameisrequired") {
                        echo '<div class="error">Username is Required!</div>';
                    }
                    else if($_GET["error"] == "passwordisrequired") {
                        echo '<div class="error">Password is Required!</div>';
                    }
                    else if($_GET["error"] == "IncorrectUsernameOrPassword") {
                        echo '<div class="error">Incorrect Username or Password!</div>';
                    }
                }
                ?>

                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" name="username" required>
                    <label for="username">Username</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="password" name="pwd" required>
                    <span class="eye"><ion-icon name="eye-outline" id="eyeClose" onclick="toggle()"></ion-icon></span>
                    <label for="password">Password</label>
                </div>

                <div class="remember-forgot">
                    <label for="rememberPassword"><input type="checkbox">Remember Me</label>
                    <a href="./forgotPwd.php">Forgot Password?</a>
                </div>

                <button type="submit" name="submit" class="btn">Login</button>
                
                <div class="login-register">
                    <p>Don't have an account? <a href="./signup.php" class="register-link">Register</a></p>
                </div>

                <div class="line"></div>

                <div class="media-options">
                    <a href="#" class="field facebook">
                        <ion-icon name="logo-facebook" class="facebook-icon"></ion-icon>
                        <span>Login with Facebook</span>
                    </a>
                </div>

                <div class="media-options">
                    <a href="#" class="field google">
                        <img src="../Images/google_login.png" alt="Image of Google Logo" class="google-img">
                        <span>Login with Google</span>
                    </a>
                </div>

            </form>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>