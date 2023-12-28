<style>
    body{
        background-attachment: fixed;
        background-color:#eee;
        font-family:century gothic;
    }

    #divheader{
        margin:auto;
        width:500px;
        border-radius:3px;
        padding:10px;
        background:#fff;
    }

    input[type=text]{
        width:100%;
    }

    #table{
        border-collapse:collapse;
        padding: 5px;
    }

    tr td{
        padding: 6px;
    }

    button[type=submit]{
        padding: 10px;
        background:rgba(106, 176, 76,1.0);
        color:#fff;
        border-radius:3px;
        border:1px solid green;
        margin-left:30px;
        margin-top: 20px;
        cursor: pointer;
    }

    button[type=submit]:hover{
        background:rgba(0, 148, 50,1.0);
    }
    
    .edit-delete-button{
        background-color: #d60e00;
        color:white;
        font-size: 10px;
        padding: 5px 10px;
        text-decoration: none;
    }

    #edit-form{
        display: flex;
        justify-content: center;
        align-items: center; 
        height: 100vh; 
    }

    #editform{
        background-color: aliceblue;
        padding: 10px 10px;
        padding: 50px;
    }

    #mainUpdatebutton{
        display: flex;
        float:right;
    }
</style>

<?php
    include "conn.php";

    $Pkg_ID =$_GET['edit'];
    
    $sql ="SELECT * FROM package WHERE Pkg_ID ='$Pkg_ID'";
    $query=$conn->query($sql);
    $row =$query->fetch_assoc();
?>

<html>
    <head>
<title>Edit Package Details | LifeCare</title>
    <link rel="icon" type="image/x-icon" href="./Images/logo.png">
    </head>
<div id="edit-form">
    <form action="update.php" method="post" id="editform">
        <table width="100%" id="packages">
            <h1><center>Update Package Details</center></h1>
            <tr>
                <td>Package ID</td>
                <td><input type="text" value="<?=$row['Pkg_ID'];?>" name="Pkg_ID" required readonly></td>
            </tr>

            <tr>
                <td>Package Name</td>
                <td><input type="text" value="<?=$row['Pkg_Name'];?>" name="Pkg_Name" required></td>
            </tr>

            <tr>
                <td>Package Description</td>
                <td><input type="text" value="<?=$row['Pkg_Description'];?>" name="Pkg_Description" required></td>
            </tr>

            <tr>
                <td>Deductible</td>
                <td><input type="text" value="<?=$row['Deductible'];?>" name="Deductible" required></td>
            </tr>

            <tr>
                <td>Co-Payment</td>
                <td><input type="text" value="<?=$row['Co_Payment'];?>" name="Co_Payment" required></td>
            </tr>

            <tr>
                <td>Maximum Coverage Limit</td>
                <td><input type="text" value="<?=$row['Max_Coverage_Limit'];?>" name="Max_Coverage_Limit" required></td>
            </tr>

            <tr>
                <td>Payment Interval</td>
                <td><input type="text" value="<?=$row['Payment_Interval'];?>" name="Payment_Interval" required></td>
            </tr>

            <tr>
                <td>Waiting Period</td>
                <td><input type="text" value="<?=$row['Waiting_Period'];?>" name="Waiting_Period" required></td>
            </tr>

            <tr>
                <td>Premium Amount</td>
                <td><input type="text" value="<?=$row['Premium_Amount'];?>" name="Premium_Amount" required></td>
            </tr>

            <tr>
                <td>Regulation</td>
                <td><input type="text" value="<?=$row['Regulation'];?>" name="Regulation" required></td>
            </tr>
            
            <tr>
                <td>Total Amount</td>
                <td><input type="text" value="<?=$row['Total_Amount'];?>" name="Total_Amount" required></td>
            </tr>

            <tr>
                <td></td>
                <td><button type="submit" name="submit" id="mainUpdatebutton">UPDATE</button></td>
            </tr>
        </table>
    </form>
</div>
</html>