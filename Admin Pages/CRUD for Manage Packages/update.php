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

        $sql ="UPDATE package SET Pkg_ID='$P_ID',Pkg_Name ='$P_Name',Pkg_Description ='$P_Des',Deductible='$Deductible',Co_Payment='$C_Payment',Max_Coverage_Limit ='$Max_Cov',Payment_Interval ='$Pay_Interval',Waiting_Period ='$Wait_Period',Premium_Amount ='$Prem_Amount',Regulation ='$Regulation',Total_Amount ='$Tot_Amount' WHERE Pkg_ID='$P_ID'";

        if($conn->query($sql)){
            $_SESSION['success']="Record successfully updated";
        }else{
            $_SESSION['error']="No record updated";
        }

    }
    header("location:index.php");
?>