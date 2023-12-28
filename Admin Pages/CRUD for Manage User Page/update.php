<?php
    include "conn.php";

    if(isset($_POST['submit'])){

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
        $DOB = $_POST['DOB'];
        $Gender = $_POST['Gender'];
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];
        

      

        $sql ="UPDATE registered_user SET User_ID='$User_ID',User_Type ='$User_Type',First_Name ='$First_Name',Last_Name='$Last_Name',U_Email ='$U_Email',Home_No ='$Home_No',Street ='$Street',City ='$City',Postal_Code ='$Postal_Code',Country ='$Country',U_PNumber ='$U_PNumber',DOB ='$DOB',Gender ='$Gender',Username ='$Username',Password ='$Password' WHERE User_ID='$User_ID'";

        if($conn->query($sql)){
            $_SESSION['success']="Record successfully updated";
        }else{
            $_SESSION['error']="No record updated";
        }

    }
    header("location:index.php");
?>