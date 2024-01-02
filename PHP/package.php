<?php include 'header_Before_login.php';?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages | LifeCare</title>
    <link rel="stylesheet" href="../CSS/packageStyles.css">
    <link rel="icon" type="image/x-icon" href="../Images/logo.png">
   
</head>
<body>
    <div class="main-content">
        <h1 id="mainTopic">Packages</h1>
        <p class="description">
            "Welcome to our Health Insurance Packages page! 
            We offer a range of comprehensive health insurance packages 
            tailored to meet your specific needs. Each package provides different levels 
            of coverage to ensure that you have access to the necessary healthcare services and support. 
            Our packages are designed to offer various benefits and coverage options, including hospitalization 
            expenses, regular health check-ups, prescription medication coverage, dental and vision coverage, and 
            specialist consultations. We understand that every individual has unique healthcare requirements, and our 
            packages are designed to cater to those diverse needs."
        </p>
    </div>
    
    <hr>
    <div>
        <h2 class="pack-heading"><u>Health Insurance Plans Offered</u></h2>
        <div class="packages">
            <div class="pack">
                <h3 class="pack-sub-head">Package 01</h3>
                <ul>
                    <li>Coverage for hospitalization expenses</li>
                    <li>Regular health check-ups</li>
                    <li>Prescription medication coverage</li>
                </ul>
                <p class="price">Rs.20,000/month</p>
                <center><a href="payment.php"><button class="pack-btn">Get</button></a></center>
            </div>
    
            <div class="pack">
                <h3 class="pack-sub-head">Package 02</h3>
                <ul>
                    <li>Full coverage for hospitalization expenses</li>
                    <li>Regular health check-ups</li>
                    <li>Prescription medication coverage</li>
                    <li>Dental and vision coverage</li>
                </ul>
                <p class="price">Rs.50,000/month</p>
                <center><a href="payment.php"><button class="pack-btn">Get</button></a></center>
            </div>
    
            <div class="pack">
                <h3 class="pack-sub-head">Package 03</h3>
                <ul>
                    <li>Full coverage for hospitalization expenses</li>
                    <li>Regular health check-ups</li>
                    <li>Prescription medication coverage</li>
                    <li>Dental and vision coverage</li>
                    <li>Specialist consultations</li>
                </ul>
                <p class="price">Rs.80,000/month</p>
                <center><a href="payment.php"><button class="pack-btn">Get</button></a></center>
            </div>
        </div>
    </div>

    <hr>
    <div class="sub-content">
        <div class="mem-details">
            <h3 class="mem-sub-head">Membership Details</h3>
            <div style="display: flex;">
                <img src="../Images/gold_pkg.jpg" alt="Image" class="shield">
                <p style="font-size: 1.2em; padding: 20px 0 0 0; font-weight: 600;">Gold</p>
                <p style="text-align: left; padding: 20px 10px 0 100px;" class="mem-des">THE PLAN PAYS<br><span>70%</span><br>OF YOUR HEALTH COSTS</p>
            </div>
            <div style="display: flex;">
                <img src="../Images/silver_pkg.png" alt="Image" class="shield">
                <p style="font-size: 1.2em; padding: 20px 0 0 0; font-weight: 600;">Silver</p>
                <p style="text-align: left; padding: 20px 10px 0 90px;" class="mem-des">THE PLAN PAYS<br><span>60%</span><br>OF YOUR HEALTH COSTS</p>
            </div>
            <div style="display: flex;">
                <img src="../Images/bronze_pkg.jpg" alt="Image" class="shield">
                <p style="font-size: 1.2em; padding: 20px 0 0 0; font-weight: 600;">Bronze</p>
                <p style="text-align: left; padding: 20px 10px 0 80px;" class="mem-des">THE PLAN PAYS<br><span>50%</span><br>OF YOUR HEALTH COSTS</p>
            </div>
        </div>
    
        <div class="ben-details">
            <h3 class="ben-sub-head">Health Insurance Benefits</h3>
            <div class="icons">
                <div class="ic">
                    <p class="ic-des">Medical Services Coverage</p>
                    <img src="../Images/ic1_pkg.png" alt="Image" class="ic-img">
                </div>
                <div class="ic">
                    <p class="ic-des">Prescription Drug Coverage</p>
                    <img src="../Images/ic2_pkg.png" alt="Image" class="ic-img">
                </div>
                <div class="ic">
                    <p class="ic-des">Mental Health Services</p>
                    <img src="../Images/ic3_pkg.png" alt="Image" class="ic-img">
                </div>
                <div class="ic">
                    <p class="ic-des">Laboratory and Diagnostic Tests</p>
                    <img src="../Images/ic4_pkg.png" alt="Image" class="ic-img">
                </div>
                <div class="ic">
                    <p class="ic-des">Maternity and Childbirth Benefits</p>
                    <img src="../Images/ic5_pkg.png" alt="Image" class="ic-img">
                </div>
                <div class="ic">
                    <p class="ic-des">Rehabilitation Services</p>
                    <img src="../Images/ic6_pkg.png" alt="Image" class="ic-img">
                </div>
            </div>
        </div>
    </div>

    <hr>

</body>
<!-- <?php include 'footer.php';?>  -->
</html>