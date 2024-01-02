
<!DOCTYPE html>
<html>
<head>
    <title>My Profile | LifeCare</title>
    <link rel="stylesheet" type="text/css" href="../CSS/profilePage.css">
    <link rel="icon" type="image/x-icon" href="../Images/logo.png">  
</head> 
<style>
    .container{
        margin-top:15px;
    }
    #profilebody{
        margin-bottom:100px;

    }
    </style>
   
<body id="profilebody"> 

    <div class="container">
    <!-- <?php include "../header_Before_login.php"?>  -->
  
        <div class="sidebar">
            <div class = "salutation">
                <h3>Welcome</h3>
            </div>
            
            <div class="profile-section">
                <img src="../Images/user.png" alt="Profile Photo" width="100px" height="100px">
                <a href="#" class="overlay-button"><img src="../Images/cam1.png" width="40px" height="40px"></a>
                <h2>Name</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><img src="../Images/bars-level.png" width="20px" height="20px" style="margin-right: 5%;"><a href="#">Dashboard</a></li>
                    <li><img src="../Images/add.png" width="20px" height="20px" style="margin-right: 5%;"><a href="./claim.php">File a Claim</a></li>
                    <li><img src="../Images/telephone.png" width="20px" height="20px" style="margin-right: 5%;"><a href="#">Claim List</a></li>
                    <li><img src="../Images/time-control-tool.png" width="20px" height="20px" style="margin-right: 5%;"><a href="#">Pending List</a></li>
                    <li><img src="../Images/books-hand-drawn-stack.png" width="20px" height="20px" style="margin-right: 5%;"><a href="./history.php">History</a></li>
                    <li><img src="../Images/settings.png" width="20px" height="20px" style="margin-right: 5%;"><a href="#">My Settings</a></li>
                </ul>
            </div>
        </div>
        <div class="main-section">
            <div class="details">
                <h2>Profile Information</h2>
            </div>
            <div class="button1">
            <button type="submit" style="background-color: rgb(66, 227, 245);">Edit</button>
            </div>
            <table>
                <div class ="all-cont">
                <div class="header">
                <tr>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Phone Number</th>
                </tr>
                </div>
                <tr>
                    <div class="textbox">
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </div>
                </tr>
                <div class="header">
                <tr>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Address</th>
                </tr>
                </div>
                <tr>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
            </table>
            <div class="details">
            <h2>Policy Information</h2>
            </div>
            <div class="button1">
                <button type="submit" style="background-color: rgb(66, 227, 245);">Edit</button>
                </div>
            <table>
                <div class="header">
                <tr>
                    <th>Policy Number</th>
                    <th>Policy Type</th>
                
                </tr>
                </div>
                <tr>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    
                </tr>
                <div class="header">
                <tr>
                    <th>Policy Date</th>
                    <th>Issue State</th> 
                </tr>
                </div>
                <tr>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    
                </tr>
                <div class="header">
                    <tr>
                        <th>Policy Product</th>   
                    </tr>
                    </div>
                    <tr>
                        <td><input type="text"></td>
                        </tr>
                    </table>
                        
                    <div class="bullet"> 
                        <input type="radio">Joint Policy <br>
                        <input type="radio">Premium Financed
                    </div>
                    
                    <div class="agree">
                        <p>By clicking 'Agree', you acknowledge that you have read and agreed to our policy.</p>
                    </div>
                    <div class="button">
                        <a href="Privacy & Policy.php"><input type="submit" value="AGREE"></a> 
                    </div> 
                </div>
            </div>
        </div>
    </div>
</body>


</html>







