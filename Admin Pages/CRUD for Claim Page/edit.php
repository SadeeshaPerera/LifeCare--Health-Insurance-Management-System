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
    #reason{
        padding: 30px 100px;
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
  justify-content: center; /* Horizontal centering */
  align-items: center; /* Vertical centering */
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
 /* table style */
/* 
 #claims {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#claims td, #claims th {
  border: 1px solid #ddd;
  padding: 8px;
}

#claims tr:nth-child(even){background-color: #f2f2f2;}

#claims tr:hover {background-color: #ddd;}

#claims th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
} */
</style>
<?php
    include "conn.php";

    $Claim_ID =$_GET['edit'];
    
    $sql ="SELECT * FROM claim WHERE Claim_ID ='$Claim_ID'";
    $query=$conn->query($sql);
    $row =$query->fetch_assoc();
?>
<div id="edit-form">
<form action="update.php" method="post" id="editform">
    <table width="100%" id="claims">
        <h1><center>Update Claim Details</center></h1>
    <tr>
            <td>Claim_ID</td>
            <td><input type="text" value="<?=$row['Claim_ID'];?>" name="Claim_ID" required readonly></td>
        </tr>
        <tr>
            <td>Policy ID</td>
            <td><input type="text" value="<?=$row['Policy_ID'];?>" name="Policy_ID" required readonly></td>
        </tr>
        <tr>
            <td>HCP ID</td>
            <td><input type="text" value="<?=$row['HCP_ID'];?>" name="HCP_ID" required readonly></td>
        </tr>
        <tr>
            <td>Claim Type</td>
            <td><input type="text" value="<?=$row['Claim_Type'];?>" name="Claim_Type" required></td>
        </tr>

        <tr>
            <td>User ID</td>
            <td><input type="text" value="<?=$row['User_ID'];?>" name="User_ID" required></td>
        </tr>


        <tr>
            <td>Amount</td>
            <td><input type="text" value="<?=$row['Amount'];?>" name="Amount" required></td>
        </tr>

        <tr>
            <td>Status</td>
            <td><input type="text" value="<?=$row['Status_Type'];?>" name="Status_Type" required></td>
        </tr>

        <tr>
            <td>Submission Date</td>
            <td><input type="date" value="<?=$row['Submission_Date'];?>" name="Submission_Date" required></td>
        </tr>

        <tr>
            <td>Processing Date</td>
            <td><input type="date" value="<?=$row['Processing_Date'];?>" name="Processing_Date" required></td>
        </tr>

        <tr>
            <td>Payment Date</td>
            <td><input type="date" value="<?=$row['Payment_Date'];?>" name="Payment_Date" required></td>
        </tr>
        <tr>
            <td>Reason</td>
            <td><input type="text" value="<?=$row['Reason'];?>" name="Reason" required></td>
        </tr>

        <tr>
            <td></td>
            <td><button type="submit" name="submit" id="mainUpdatebutton">UPDATE</button></td>
        </tr>
    </table>
</form>
</div>