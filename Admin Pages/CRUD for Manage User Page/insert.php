<?php
    include "conn.php";


        if (isset($_POST['submit'])) {
            $User_ID = $_POST['User_ID'];
            $User_Type = $_POST['User_Type'];
            $First_Name = $_POST['First_Name'];
            $Last_Name = $_POST['Last_Name'];
            $U_Email =$_POST['U_Email'];
            $Home_No = $_POST['Home_No'];
            $Street = $_POST['Street'];
            $City = $_POST['City'];
            $Postal_Code = $_POST['Postal_Code'];
            $Country = $_POST['Country'];
            $U_PNumber = $_POST['U_PNumber'];
            $DOB = $_POST['DOB'];
            $Gender = $_POST['Gender'];
            $Username = $_POST['Username'];
            $Password = $_POST['Password'];

           
        
        $stmt = $conn->prepare("INSERT INTO registered_user (User_ID, User_Type, First_Name, Last_Name, U_Email, Home_No, Street, City, Postal_Code, Country, U_PNumber, DOB, Gender, Username, Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("sssssssssssssss", $User_ID, $User_Type, $First_Name, $Last_Name, $U_Email, $Home_No, $Street, $City, $Postal_Code, $Country, $U_PNumber, $DOB, $Gender, $Username, $Password);

        
        if ($stmt->execute()) {
                    $_SESSION['success'] = "Record successfully inserted.";
                } else {
                    $_SESSION['error'] = "Error: " . $stmt->error;
                }
                $stmt->close();
            } 
            else {
                $_SESSION['error'] = "Invalid User_ID. Please provide valid values.";
            }
        
    
    header("location:index.php");
    }?>