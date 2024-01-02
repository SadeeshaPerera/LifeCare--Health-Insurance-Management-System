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
	<title>Sign Up | LifeCare</title>
    <link rel="stylesheet" type="text/css" href="../CSS/registerStyles.css">
    <script src="../JS/registerJS.js"></script>
    <link rel="icon" type="image/x-icon" href="../Images/logo.png">

    <style>
        /*Error and success styles*/
        #error {
            background-color: #dd2020;
            color: white;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
            text-align: center;
        }
 
        #success {
            background: #0ec138;
            color: white;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
            text-align: center;
        }

        #bday{
            margin-bottom: 15px;
        }

        #country{
            margin-bottom: 15px;
        }

        #name-feild{
            margin-bottom:10px;
        }

    </style>
</head>

<body>
    <div class="wrapper">
        <span class="icon-close"><a href="../index.php" style="color: white;"><ion-icon name="close"></ion-icon></a></span>
        <div class="form-box register">
            <h2>Registration</h2>
            <form action="signup-check.php" id="form" method="POST" onsubmit="return checkPassword()">

            <?php if (isset($_GET['error'])) { ?>
     		    <p id="error"><?php echo $_GET['error']; ?></p>
     	    <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
               <p id="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>

            <div class="input-box">
                <label for="name">Name</label>
                <div class="column">
                    <?php if (isset($_GET['name'])) { ?>
                        <input type="text" name="name" placeholder="First Name" required id="name-feild" value="<?php echo $_GET['name']; ?>"><br>
                    <?php }else{ ?>
                        <input type="text" 
                            name="name" 
                            placeholder="First Name"
                            id="name-feild"><br>
                    <?php }?>
                    <input type="text" name="lname" placeholder="Last Name" required>
                </div>
            </div>

            <div class="input-box">
               <label for="NIC">NIC</label>
               <input type="text" name="userid" placeholder="NIC" required>
            </div>

            <div class="input-box">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="ex:myName@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required>
            </div>

            <div class="column">
                <div class="input-box">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="phone" name="phone" placeholder="xxxxxxxxxx" pattern="[0-9]{10}" required>
                </div>
    
                <div class="input-box">
                    <label for="birthday">Date of Birth</label>
                    <input type="date" name="bday" id="bday" required>
                </div>
            </div>

            <div class="gender-box">
                <h3>Gender</h3>
                <div class="gender-option">
                    <div class="gender">
                        <input type="radio" id="check-male" name="gender" value="Male" checked>
                        <label for="check-male">Male</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-female" name="gender" value="Female">
                        <label for="check-female">Female</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-custom" name="gender" value="Custom">
                        <label for="check-custom">Custom</label>
                    </div>
                </div>
            </div>

            <div class="input-box">
                <label for="address">Address</label>
                <div class="column">
                    <input type="text" name="homeno" placeholder="Home No" required>
                    <input type="text" name="street" placeholder="Street" required>
                </div>
                    
                <div class="column">
                    <input type="text" name="city" placeholder="City" required>
                    <input type="number" name="postalcode" placeholder="Postal Code" required>
                </div>
                    
                <input type="text" name="country" placeholder="Country" id="country" required>
            </div>

            <div class="uType-box">
                <h3>User Type</h3>
                <div class="uType-option">
                    <div class="uType">
                        <input type="radio" id="check-user" name="usertype" value="User" checked>
                        <label for="check-user">User</label>
                    </div>
                    <div class="uType">
                        <input type="radio" id="check-admin" name="usertype" value="Admin">
                        <label for="check-admin">Admin</label>
                    </div>
                    <div class="uType">
                        <input type="radio" id="check-developer" name="usertype" value="Developer">
                        <label for="check-developer">Developer</label>
                    </div>
                    <div class="uType">
                        <input type="radio" id="check-agent" name="usertype" value="Agent">
                        <label for="check-agent">Agent</label>
                    </div>
                </div>
            </div>

            <div class="input-box">
                <label for="username">Username</label>
                <?php if (isset($_GET['uname'])) { ?>
                    <input type="text" id="username" name="uname" placeholder="Username" required value="<?php echo $_GET['uname']; ?>"><br>
                <?php }else{ ?>
                    <input type="text" 
                      name="uname" 
                      placeholder="Username"><br>
                <?php }?>
            </div>

            <div class="input-box">
                <label for="password">Password</label>
                <input type="password" id="pwd" name="password" placeholder="Password" required>
            </div>

            <div class="input-box">
                <label for="reEnterPassword">Re-Enter Password</label>
                <input type="password" id="cnfrmpwd" name="re_password" placeholder="Re-Enter Password" required>
            </div>

            <div class="check">
                <input type="checkbox" class="inputStyle" id="checkbox" onclick="enableButton()">I have read and agree to the <a href="./Terms and Conditions.php" class="link">Terms & Conditions</a>
            </div>
                
            <input type="submit" value="Register" name="submit" id="submitBtn" disabled>

            <div class="line"></div>

            <div class="login-register">
                <p>Already have an account?  <a href="./login.php" class="link-login">Login</a></p>
            </div>
        </form>
    </div>  
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>