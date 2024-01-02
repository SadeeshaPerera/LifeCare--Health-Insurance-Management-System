<?php
    include "conn.php";

    if(isset($_POST['submit'])){

        $FNAME = $_POST['Claim_ID'];
        $MI = $_POST['Policy_ID'];
        $HCP_ID = $_POST['HCP_ID'];
        $LNAME = $_POST['Claim_Type'];
        $User_ID =$_POST['User_ID'];
        $Amount = $_POST['Amount'];
        $Status_Type = $_POST['Status_Type'];
        $Submission_Date = $_POST['Submission_Date'];
        $Processing_Date = $_POST['Processing_Date'];
        $Payment_Date = $_POST['Payment_Date'];
        $Reason = $_POST['Reason'];

        // $Claim_ID =$_POST['Claim_ID'];
        // $FNAME =$_POST['Policy_ID'];
        // $MI=$_POST['HCP_ID'];
        // $LNAME=$_POST['Claim_Type'];
        // $Status=$_POST['Status'];

        $sql ="UPDATE claim SET Claim_ID='$FNAME',Policy_ID ='$MI',Claim_Type ='$LNAME',User_ID='$User_ID',Amount ='$Amount',Status_Type ='$Status_Type',Submission_Date ='$Submission_Date',Processing_Date ='$Processing_Date',Payment_Date ='$Payment_Date',Reason ='$Reason' WHERE Claim_ID='$FNAME'";

        if($conn->query($sql)){
            $_SESSION['success']="Record successfully updated";
        }else{
            $_SESSION['error']="No record updated";
        }

    }
    header("location:index.php");
?>