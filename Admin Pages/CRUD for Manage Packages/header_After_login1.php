<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="CSS/header_Before_login.css">
    <style>

.header{
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: space-around;
    box-shadow: 0 0 8px rgba(0,0,0,0.5);
    background-color: rgb(5, 61, 87);
   font-family: arial;
    z-index: 1000;
}
/* background-color: rgb(56, 56, 56);*/

.logo{
    display: flex;
    align-items: center;
    margin: 10px;
}

.logo .site-name{
    font-size: 22px;
    font-weight: bold;
    color: rgb(241, 241, 241);
    font-family: 'Play', sans-serif;
}

.logo img{
    width: 50px;
    object-fit: cover;
}

.middle-list{
    
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.nav{
    list-style-type: none;
   padding: 0;
}

.nav li{
    float: left;
    margin-right: 10px;
    padding: 8px 15px;
    font-size: 17px;
    transition: color 0.4s;
}

 li a:hover{ 
    color: rgb(219, 222, 228);
}

.buttons button{
    padding: 8px 15px;   
    background-color: rgb(73, 138, 132);
    border: none;
    color: rgb(235, 235, 235);
    font-size: 15px;
    width: 100;
    border-radius: 40px;
    cursor: pointer;
    transition: opacity 0.2s;
    opacity: 1;
}

.buttons button:hover{
    opacity: 0.8;
}

.buttons button:active{
    opacity: 0.4;
}

.buttons{
    width: 180px;
    display: flex;
    justify-content: space-around;
}

.nav li a{
    text-decoration: none;
    color: rgb(85, 163, 157);
}
    </style>
</head>
<body>
    
    <div class="header">

        <div class="logo">
            <img src="images/logoheader.png" >
            <div class="site-name">LIFE CARE</div>
        </div>
    
        <div class="middle-list">
            <ul class="nav">
            <li><a href="../CRUD for Manage User Page/index.php">Manage Users</a></li>
            <li><a href="index.php">Manage Packages</a></li>
            <li><a href="../CRUD for Claim Page/index.php" class="action">Manage Claims</a></li>
            <li><a href="../CRUD for Manage Policy/">Manage Polices</a></li>
            <li><a href="../CRUD_for_HealthCare_Provider_Page/">Manage HealthCare Providers</a></li>
            <li><a href="#">Home</a></li>
            </ul>
        </div>
    
        <div class="right-section">
            <div class="buttons">
                <!-- <a href="PHP/signup.php"><button>Sign up</button></a>
                <a href="PHP/login.php"><button>Login</button></a> -->
            </div>
        </div>
    </div>
    
</body>
</html>