<?php
    include "conn.php";

    if(isset($_POST['submit'])){
        $P_ID = $_POST['Pkg_ID'];
        $P_Name = $_POST['Pkg_Name'];
        $P_Des = $_POST['Pkg_Description'];
        $Deductible = $_POST['Deductible'];
        $C_Payment =$_POST['Co_Payment'];
        $Max_Cov = $_POST['Max_Coverage_Limit'];
        $Pay_Interval = $_POST['Payment_Interval'];
        $Wait_Period = $_POST['Waiting_Period'];
        $Prem_Amount = $_POST['Premium_Amount'];
        $Regulation = $_POST['Regulation'];
        $Tot_Amount = $_POST['Total_Amount'];

        $sql ="INSERT INTO package VALUES('$P_ID','$P_Name','$P_Des','$Deductible','$C_Payment','$Max_Cov','$Pay_Interval','$Wait_Period','$Prem_Amount','$Regulation','$Tot_Amount')";
        if($conn->query($sql)){
            $_SESSION['success']="Record successfully inserted";
        }else{
            $_SESSION['error']="No record created!";
        }
    }
    header("location:index.php");
?>