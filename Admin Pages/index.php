 <?php include 'header_Before_login.php';?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/home.css">
    <link rel="icon" type="image/x-icon" href="./Images/logo.png">
    <title>LifeCare</title>
</head>
 <style>
  #indexbody{
    max-width:100%;
  }
  </style>
<body id="indexbody" style="max-width:100%;">
<!-- <div class="slideshow-container">
<div class="mySlides fade">
  
  
  <img src="images/canva2.png" alt="snow" style="width:100%">
  <div class="text">
   

    <div class="hero-image">
      <div class="hero-text">
        <h1 style="font-size:75px">Your life is Our Strength</h1>
      </div>
    </div>
  </div>
  <div class="register">
    <button class="main-learnmore">Learn More</button>
  </div>
</div>

<div class="mySlides fade">
  <img src="/images/whatsapp.png" style="width:100%">

    
    <div class="hero-image">
      <div class="hero-text">
        <h1 style="font-size:75px">We are LifeCare</h1>
        <p>Live Your Life with Care</p>
      </div>
    </div>

  <div class="login-register">
 
  <div class="register">
    <button class="main-learnmore">Learn More</button>
  </div>
  </div>
</div>

<div class="mySlides fade">
  <img src="/images/whatsapp.png" style="width:100%">  

    <div class="hero-image">
      <div class="hero-text">
        <h1 style="font-size:50px">Sri Lanka<br> Best Health Insurance Company</h1>
      </div>
    </div>
  <div class="register">
    <button class="main-learnmore">Learn More</button>
  </div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div> -->

  <div class="slideshow-container;background-color:blue;">
    <div class="mySlides fade" style="margin-top:70px;">
      <img src="./Images/canva2.png" style="width:100%;">
    </div>

    <div class="mySlides fade" style="margin-top:70px;">
      <img src="./Images/sunsetcanva1.png" style="width:100%">
    </div>

    <div class="mySlides fade" style="  margin-top:70px;">
      <img src="./Images/fam1canva.png" style="width:100%"> 
    </div>
  </div>
  <br>

  <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
  </div>

<!--Quote-->

  <div class="quote1">
    <h3 id="quote1">For Healthier, Longer and better lives</h3>
    <p>We want to genuinely engage in your life, providing the right financial/insurance solutions for you and your family in a constantly changing world.</p>
  </div>

  <section class="container1" id="about_in_home">
    <div class="image1">
      <img id="about_img" src="./Images/handshaking2.jpg">
    </div>

    <div class="text1">
      <span id="aboutus">About Us</span>
      <div class="textbox1">
        <p id="para1">LifeCare, one of the largest Life Insurance solutions providers in the country has been in the business of protecting lives, empowering people achieve their dreams, and providing peace of mind to thousands of Sri Lankans since 1987. The Company offers a range of Life Insurance solutions and services that cater to different stages of the life cycle of an individual, ensuring our customers enjoy a wholesome life.</p>
        <a href="./PHP/about.php"><button id="aboutbttn" style="margin-right:100px;">Click for more</button></a>
      </div>
    </div>
  </section>

  <div class="container2">
    <section id="pkgsection">
      <div class="text2">
        <h2 id="packages">Packages</h2>

        <div id="packageimage">
          <img id="package_img" src="./Images/fam2.jpg" style="margin-top:-50px;">
        </div>
      
        <div class="textbox2">
          <p id="para2">Health insurance packages provide individuals and families with essential financial protection and access to quality healthcare services. These packages are designed to offer a range of coverage options to cater to different needs and budgets. Whether you're seeking basic coverage for routine check-ups and preventive care or comprehensive protection for unexpected medical expenses, health insurance packages are tailored to provide peace of mind and ensure that you receive the necessary medical care when you need it most.</p>
          <a href="./PHP/package.php"><button id="packages_bttn">Click for more</button></a>
        </div>
      </div>
    </section>
  </div>

  <section id="provider-section">
    <div class="container3">
 
      <div class="text3">
        <h2 id="providers"><center>HealthCare Providers</center></h2>

        <div id="providerimage">
          <img id="provider_img" src="./Images/Hemas logo.png">
          <img id="provider_img" src="./Images/leasons.png">
          <img id="provider_img" src="./Images/Asiri logo.png">
          <br>
      <!-- <br> -->
      <!-- <img id="provider_img" src="images/lhd dark.png"> -->
<!--       
      <button id="provider_bttn">Learn more</button> -->
      <!-- <div>
      <img id="doc_img" src="images/doc3canva.png">
      </div> -->
        </div>
    
        <div class="textbox3">
          <p id="para3">Health care providers play a vital role in the healthcare ecosystem by offering a wide range of services, including preventive care, diagnostics, surgeries, rehabilitation, and ongoing medical management. They may specialize in specific fields such as primary care, cardiology, pediatrics.
            <a href="./PHP/HCP.php"><button id="provider_bttn">Learn more</button></a>    
          </p> 
        </div>
      </div>
    </div>
  </section>

  <div class="container4">
    <div class="text4">
      <h2 id="claim" style="font-weight:500;"><b>File a Claim</b></h2>
    
    <!-- <div class="icons">
      <img src="images/Sadeeimages/Asiri logo.png">
    </div> -->
      <div id="help">
      <!-- <img id="claim_img" src="images/Sadeeimages/packages.jpg"> -->
        <div class="help-section">
          <h1 id="support-heading" style="font-weight:700;">Help & Support</h1>
          <div id="textbox5"style="margin-right: -40px;"> 
            <p>Learn how to use LifeCare, fix a problem, and get answers to your questions.</p>
            <p><center>GET IN TOUCH</center><br><center>We love to hear from you</center></p>
            <a href="./PHP/ContactUs.php"><button id="claim_bttn" style="margin-left:500px;";>Contact Us</button></a>
          </div>
          <!-- <div class="contact-icon"><center>
          <img src="images/phone-call.png" class="contact-photo">
          <img src="images/email icon.jpg"class="contact-photo">
          <a href="#"><img src="images/faq icon.png"class="contact-photo"></a>
          </center> -->
<!--           

          <div class="row">
            <div class="card">
            <div class="column">
              <a href="#"><img src="/images/callyellow.png" alt="Snow" style="width:100%" class="img-card"></a>
            </div>
            <div class="container">
                <h4 id="pno"><b><center>07756455162</center></b></h4> 
            </div>
            </div>
    
            <div class="card">
                <div class="column">
                  <a href="#"><img src="/images/emailyellow.png" alt="Snow" style="width:100%"></a>
                </div>
                <div class="container">
                    <h4 id="email"><b>LifeCare@gmail.com</b></h4> 
                </div>
            </div>
           
            <div class="card">
                <div class="column">
                  <a href="#"><img src="images/questionyellow.png" alt="Snow" style="width:100%"></a>
                </div>
                <div class="container">
                    <h4><b>FAQ</b></h4>
                </div>
            </div>
        </div> -->
        </div>
      </div>
    </div>
     
    <div class="textbox4">
      <p id="para4" style="margin-right: 300px;background-color:aliceblue;"> Have a problem with a package? Sign into your profile, provide us with the details and track the process as we put all hands on deck to investigate your claim to see how we can make things right.</p>
      <a href="./PHP/login.php"><button id="claim_bttn" style="margin-left:500px;";>File a Claim Now</button></a>
    </div>
  </div>
  <br><br>

  <?php include "footer.php";
        include "cookie_banner.php";
  ?> 
   
  <script src="./JS/home.js"></script>
</body>
 

</html>