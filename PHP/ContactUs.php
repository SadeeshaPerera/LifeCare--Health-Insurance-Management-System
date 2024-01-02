<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | LifeCare</title>
    <link rel="stylesheet" href="../CSS/ContactUs.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../Images/logo.png">
</head>

<body>
    <div class="all-container"> 
        <div class="header">

            <div class="logo">
                <img src="../Images/logoheader.png" >
                <div class="site-name">LIFE CARE</div>
            </div>
        
            <div class="middle-list">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="./package.php">Packages</a></li>
                    <li><a href="#" class="action">Contact us</a></li>
                    <li><a href="./about.php">About us</a></li>
                </ul>
            </div>
        
            <div class="right-section">
                <div class="buttons">
                    <button>Sign up</button> 
                    <button>Login</button>
                </div>
            </div>
        </div>

        <div class="sidebar">

            <div class="main-details">
                <div class="message-image">
                    <img src="../Images/calling.jpg" style="width:75%;margin-left:30px;">
                </div>

                <div class="address">
                    <div class="card">
                        <img src="../Images/location.png" >
                    Address
                    </div>
                    <div class="details">
                        <a href="#"> No.17, Horton Place, Cinnamon Garden, Sri Lanka.</a>
                    </div>
                </div>

                <div class="contact">
                    <div class="card"> <img src="../Images/phone.png" >
                        Contact Number</div>
                
                    <div class="details">
                        011 293 5195
                    </div>
                </div>

                <div class="mail">
                    <div class="card">
                        <img src="../Images/email.png" >
                        General Support
                    </div>
                
                    <div class="details">
                        <a href="#">lifecare@gmail.com</a>
                    </div>
                </div>
            </div>      
        </div>

        <div class="container">     
            <div class="middle-picture">
                <div class="caption">Let's Talk About Everything </div>
                <img src="../Images/picture.png">
        
                <div class="icon-bar">
                    <div class="icon">
                        <a href="#" class="image"> <img src="../Images/facebook.png" ></a>
                        <div class="tooltip">Facebook</div>
                    </div>        
                    <div class="icon">
                        <a href="#" class="image"><img src="../Images/twitter.png" ></a>
                        <div class="tooltip">Twitter</div>
                    </div>
        
                    <div class="icon">
                        <a href="#" class="image" ><img src="../Images/linkedin1.png" ></a>
                        <div class="tooltip">linkedIn</div>
                    </div>

                    <div class="icon">
                        <a href="#" class="image"><img src="../Images/instagram.png" ></a>
                        <div class="tooltip">Instagram</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="right-content"> 
            <div class="right-container">
                <div class="message-text">
                    Send us a Message
                </div>  
            
                <div class="name">
                    <label for="name">Name <input type="text"></label>
                </div>

                <div class="email">
                    <label for="mail">Email <input type="email"></label>
                </div>

                <div class="phone">
                    <label for="phone">Phone Number <input type="phone" maxlength="10" required></label>
                </div>

                <div class="subject">
                    <label for="subject">Subject <input type="text"></label>
                </div>

            
                <div class="message">
                    Message 
                <textarea name="message"  cols="40" rows="8"></textarea>
                </div>

                <button>
                    <img src="../Images/send.png" >
                    Send
                </button>
            </div>
           
        </div>
    </div>
</body>
</html>