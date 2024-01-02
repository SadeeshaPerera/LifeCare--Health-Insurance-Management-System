<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password | LifeCare</title>
    <link rel="stylesheet" type="text/css" href="../CSS/resetPwd.css">
    <link rel="icon" type="image/x-icon" href="../Images/logo.png">

    <script>
        function validatePasswords() {
            var password1 = document.getElementById("password1").value;
            var password2 = document.getElementById("password2").value;

            if (password1 !== password2) {
                alert("Please enter the same password in both fields.");
            } else if (password1 === "") {
                alert("Please enter a password.");
            } else {
                alert("Reset successfully.");
                document.getElementById("resetForm").reset(); // Reset the form
            }
        }

    </script>

</head>
<body>
    <div class="container">
        <img src="../Images/lock2.png" alt="lock">
        <h1>Reset Password</h1>

        <form id="resetForm" onsubmit= "return false;">
     
        <h4>Enter new password</h4>
        <div class="textbox">
            <input type="password" id="password1" name="password" placeholder="password" >
        </div>

        <h5>Confirm new password</h5>
        <div class="textbox">
            <input type="password" id="password2" name="password" placeholder="password">
        </div>
        <div class="button">
            <input type="submit" value="Reset" onclick="validatePasswords()">
        </div>
        <div class="button2">
            <input type="submit" value="Cancel">
        </div>
    </div>
</body>
</html>