<?php include "header_After_login1.php"?>
<?php
    include "conn.php";
?>
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
        background:blue;
        color:#fff;
        border-radius:3px;
        border:1px solid green;
        margin-left:70px;
        margin-top: 20px;
        cursor: pointer;
    }
    button[type=submit]:hover{
        background:darkblue;
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
    .container{
        margin-top:120px;
    }
    h1{
        font-family: 'Poppins';
        
    }
</style>
<html>

    <head>
        <title>Claim Details | LifeCare</title>
    </head>
    <body>
        <div class='container'>
        <h1><center>Add Claim Details</center></h1>
        <div id="divheader">
            <form action="insert.php" method="post">
                <table width="100%">
                    <tr>
                        <td>Claim ID</td>
                        <td><input type="text" name="Claim_ID" required></td>
                    </tr>
                    <tr>
                        <td>Policy ID</td>
                        <td><input type="text" name="Policy_ID" required></td>
                    </tr>
                    <tr>
                        <td>User ID</td>
                        <td><input type="text" name="User_ID" required></td>
                    </tr>

                    <tr>
                        <td>HCP ID</td>
                        <td><input type="text" name="HCP_ID" required placeholder="HealthCare Provider ID"></td>
                    </tr>
                    <tr>
                        <td>Claim Type</td>
                        <td><input type="text" name="Claim_Type" required></td>
                    </tr>

                    <!-- userid ekata crud damme na -->
                    
                   
                    <tr>
                        <td>Amount</td>
                        <td><input type="text" name="Amount" required></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><input type="text" name="Status_Type" required></td>
                    </tr>

                    <!-- <tr>
                        <td>Status</td>
                        <td>
                        <label for="mySelect"></label>
                            <select id="Select" name="Status_Type" required>
                                <option value="Pending">Pending</option>
                                <option value="Approved">Approved</option>
                                <option value="Denied">Denied</option>
                            </select>

                    </td>
                    </tr> -->

                    <tr>
                        <td>Submission Date</td>
                        <td><input type="date" name="Submission_Date" required></td>
                    </tr>
                    <tr>
                        <td>Processing Date</td>
                        <td><input type="date" name="Processing_Date" required></td>
                    </tr>
                    <tr>
                        <td>Payment Date</td>
                        <td><input type="date" name="Payment_Date" required></td>
                    </tr>

                    <tr>
                        <td>Reason</td>
                        <td><input type="textbox" name="Reason" required  id="reason"></td>
                    </tr>
                    

                    <tr>
                        <td></td>
                        <td><button type="submit" name="submit">Add a Claim</button></td>
                    </tr>
                </table>
            </form>
            <?php
                if(isset($_SESSION['success'])){
                    echo  "<div style='background:green;color:#fff;padding:3px;border-radius:3px'>".$_SESSION['success']."</div>";
                    unset($_SESSION['success']);
                }
                if(isset($_SESSION['error'])){
                    echo  "<div style='background:red;color:#fff;padding:3px;border-radius:3px'>".$_SESSION['error']."</div>";
                    unset($_SESSION['error']);
                }
            ?>
        <br>
           
        </div>
        <h1><center>Claim Details</center></h1>
        <table border="1" width="100%" id="table">
                <tr style="background:blue;color:#fff">
                    <th align="center">Claim ID</th>
                    <th align="center">Policy ID</th>
                    <th align="center">User ID</th>
                    <th align="center">HCP ID</th>
                    <th align="center">Claim Type</th>
                    <th align="center">Amount</th>
                    <th align="center">Status</th>
                    <th align="center">Submission Date</th>
                    <th align="center">Processing Date</th>
                    <th align="center">Payment Date</th>
                    <th align="center">Reason</th>
                    <th align="center">Action</th>
                </tr>
                <?php
                    $sql ="SELECT * FROM claim";
                    $query =$conn->query($sql);
                    while($row=$query->fetch_assoc()){

                ?>
                <tr>
                    <td><?=$row['Claim_ID'];?></td>
                    <td><?=$row['Policy_ID'];?></td>
                    <td><?=$row['User_ID'];?></td>
                    <td><?=$row['HCP_ID'];?></td>
                    <td><?=$row['Claim_Type'];?></td>
                    <td><?=$row['Amount'];?></td>
                    <td><?=$row['Status_Type'];?></td>
                    <td><?=$row['Submission_Date'];?></td>
                    <td><?=$row['Processing_Date'];?></td>
                    <td><?=$row['Payment_Date'];?></td>
                    <td><?=$row['Reason'];?></td>
                    <td align="right">
                        <a href="edit.php?edit=<?=$row['Claim_ID'];?>" class="edit-delete-button">EDIT</a>
                        <a href="delete.php?delete=<?=$row['Claim_ID'];?>"class="edit-delete-button">DELETE</a>
                    </td>
                </tr>

                <?php } ?>
            </table>
            <h4 style="color:blue;"><center>LifeCare</center></h4>
        </div>
    </body>
</html>