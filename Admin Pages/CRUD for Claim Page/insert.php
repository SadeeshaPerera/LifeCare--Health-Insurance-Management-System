<?php
    include "conn.php";


        // $sql ="INSERT INTO claim (Claim_ID,Policy_ID,Claim_Type,Status) VALUES('$FNAME','$MI','$LNAME','$Status')";
        // if($conn->query($sql)){
        //     $_SESSION['success']="Record successfully inserted";
        // }else{
        //     $_SESSION['error']="No record created!";
        // }



        if (isset($_POST['submit'])) {
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
        
            // Check if the User ID exists in the User table
            $checkUserQuery = "SELECT User_ID FROM registered_user WHERE User_ID ='$User_ID'";
            $stmtUser = $conn->prepare($checkUserQuery);
            // $stmtUser->bind_param("s", $User_ID);
            $stmtUser->execute();
            $stmtUser->store_result();
        
            // Check if the policy ID exists in the policy table
            $checkPolicyQuery = "SELECT Policy_ID FROM policy WHERE Policy_ID = '$MI'";
            $stmtPolicy = $conn->prepare($checkPolicyQuery);
            // $stmtPolicy->bind_param("s",$MI );
            $stmtPolicy->execute();
            $stmtPolicy->store_result();
            
            // Check if the HCP ID exists in the healthcare provider table
            $checkHCPQuery = "SELECT HCP_ID FROM health_care_provider WHERE HCP_ID = '$HCP_ID'";
            $stmtHCP = $conn->prepare($checkHCPQuery);
            // $stmtPolicy->bind_param("s",$MI );
            $stmtHCP->execute();
            $stmtHCP->store_result();
        
            if ($stmtUser->num_rows > 0 && $stmtPolicy->num_rows > 0  && $stmtHCP->num_rows > 0) {
                // Both User ID ,Policy ID,HCP ID exist, proceed with the insert
                $sql = "INSERT INTO claim  VALUES ('$FNAME','$MI','$User_ID','$HCP_ID','$LNAME','$Amount','$Status_Type','$Submission_Date','$Processing_Date','$Payment_Date','$Reason')";
                // (Claim_ID, Policy_ID, HCP_ID,Claim_Type, User_ID,Status)

               
                // $FNAME='$FNAME';
                // $MI='$MI';
                // $Uer_ID='$User_ID';
                // $HCP_ID='$HCP_ID';
                // $LNAME='$LNAME';
                // $Amount='$Amount';
                // $Status='$Status_Type';
                // $Submission_Date='$Submission_Date';
                // $Processing_Date='$Processing_Date';
                // $Payment_Date='$Payment_Date';
                // $Reason='$Reason';
                $stmt = $conn->prepare($sql);

                    // $column1Value = "$FNAME";
                    // $column2Value = "$MI";
                    // $column3Value = "$User_ID";
                    // $column4Value = "$HCP_ID";
                    // $column5Value = "$LNAME";
                    // $column6Value = "$Amount";
                    // $column7Value = "$Status_Type";
                    // $column8Value = "$Submission_Date";
                    // $column9Value = "$Processing_Date";
                    // $column10Value = "$Payment_Date";
                    // $column11Value = "$Reason";
                  
                // $stmt->bind_param("sssssssssss", $column1Value,$column2Value,$column3Value,$column4Value,$column5Value,$column6Value,$column7Value,$column8Value,$column9Value,$column10Value,$column11Value);
        //$FNAME, $MI, $User_ID, $HCP_ID, $LNAME, $Amount, $Status_Type, $Submission_Date, $Processing_Date, $Payment_Date, $Reason
                if ($stmt->execute()) {
                    $_SESSION['success'] = "Record successfully inserted.";
                } else {
                    $_SESSION['error'] = "Error: " . $stmt->error;
                }
            } 
            else {
                $_SESSION['error'] = "Invalid User_ID or Policy_ID. Please provide valid values.";
            }
        
            $stmtUser->close();
            $stmtPolicy->close();
            $stmtHCP->close();
        
        

        

    //     $stmt = $conn->prepare($sql);
    //     $column1Value = "$FNAME";
    //     $column2Value = "$MI";
    //     $column3Value = "$LNAME";
    //     $column4Value = "$Status";
    //     $stmt->bind_param("ssss", $column1Value,$column2Value,$column3Value,$column4Value);

    //     $stmt->execute();

    //     if ($stmt->error) {
    //         echo "Error: " . $stmt->error;
    //    } else {
    //         echo "Record inserted successfully.";
    //     }

    //    $stmt->close(); 
    
    header("location:index.php");
    }?>