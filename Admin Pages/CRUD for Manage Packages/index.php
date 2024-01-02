<?php include "header_After_login1.php"?>
<?php
    include "conn.php";
?>

<style>
    body{
        background-attachment: fixed;
        background-color: #eee;
        font-family:century gothic;
    }

    #divheader{
        margin:auto;
        width:500px;
        border-radius:3px;
        padding:10px;
        background:#fff;
    }

    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fira+Sans&family=IBM+Plex+Sans:wght@500&family=Merriweather&family=Poppins:wght@800&family=Roboto&display=swap');
    
    h1{
        font-family: 'Bebas Neue';
        
    }

    h2{
        font-size: 25px;
    }

    input[type=text]{
        width:100%;
    }

    #table{
        border-collapse:collapse;
        padding: 5px;
    }

    td{
        font-family:'Fira Sans';
        font-size: 20px;
    }
   
    tr td{
        padding: 6px;
    }

    button[type=submit]{
        padding: 10px;
        background: #021f4a;
        color: #fff;
        border-radius:3px;
        border:1px solid black;
        margin-left:70px;
        margin-top: 20px;
        cursor: pointer;
    }

    button[type=submit]:hover{
        background: #06022b;
    }

    #descrip{
        padding: 50px 100px;
    }

    .edit-delete-button{
        background-color: #d60e00;
        color:white;
        font-size: 10px;
        font-weight: 600;
        font-family: 'arial';
        padding: 4px 10px;
        text-decoration: none;
        margin:10px;
        display:flex;
    } 

    .edit-delete-button:hover{
        background: rgb(128,0,0);

    }
    .container{
        margin-top:120px;
    }

</style>

<html>
    <head>
        <title>Package Details | LifeCare</title>
        <link rel="icon" type="image/x-icon" href="logo.png">
    </head>
    <body>
        <div class="container">
        <h1><center>Add Package Details</center></h1>
        <div id="divheader">
            <form action="insert.php" method="post">
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
            <br>
                <table width="100%">
                    <tr>
                        <td>Package ID</td>
                        <td><input type="text" name="Pkg_ID" required></td>
                    </tr>
                    <tr>
                        <td>Package Name</td>
                        <td><input type="text" name="Pkg_Name" required></td>
                    </tr>
                    <tr>
                        <td>Package Description</td>
                        <td><input type="textbox" name="Pkg_Description" required  id="descrip"></td>
                    </tr>
                    <tr>
                        <td>Deductible</td>
                        <td><input type="text" name="Deductible" required></td>
                    </tr>
                    <tr>
                        <td>Co-Payment</td>
                        <td><input type="text" name="Co_Payment" required></td>
                    </tr>   
                    <tr>
                        <td>Maximum Coverage Limit</td>
                        <td><input type="text" name="Max_Coverage_Limit" required></td>
                    </tr>
                    <tr>
                        <td>Payment Interval</td>
                        <td><input type="text" name="Payment_Interval" required></td>
                    </tr>
                    <tr>
                        <td>Waiting Period</td>
                        <td><input type="text" name="Waiting_Period" required></td>
                    </tr>
                    <tr>
                        <td>Premium Amount</td>
                        <td><input type="text" name="Premium_Amount" required></td>
                    </tr>
                    <tr>
                        <td>Regulation</td>
                        <td><input type="textbox" name="Regulation" required  id="descrip"></td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td><input type="text" name="Total_Amount" required></td>
                    </tr> 

                    <tr>
                        <td></td>
                        <td><button type="submit" name="submit">Add a Package</button></td>
                    </tr>
                </table>
            </form>
         
            <br>
            <br>
        </div>
        <h2><center>Package Details</center></h2>
        <table border="3" width="100%" id="table">
            <tr style="background:#3a8efc;color:#fff">
                <th align="center">Package ID</th>
                <th align="center">Package Name</th>
                <th align="center">Package Description</th>
                <th align="center">Deductible</th>
                <th align="center">Co-Payment</th>
                <th align="center">Maximum Coverage Limit</th>
                <th align="center">Payment Interval</th>
                <th align="center">Waiting Period</th>
                <th align="center">Premium Amount</th>
                <th align="center">Regulation</th>
                <th align="center">Total Amount</th>
                <th align="center">Action</th>
            </tr>

            <?php
                $sql ="SELECT * FROM package;";
                $query =$conn->query($sql);
                while($row=$query->fetch_assoc()){
            ?>
            <tr>
                <td><?=$row['Pkg_ID'];?></td>
                <td><?=$row['Pkg_Name'];?></td>
                <td><?=$row['Pkg_Description'];?></td>
                <td><?=$row['Deductible'];?></td>
                <td><?=$row['Co_Payment'];?></td>
                <td><?=$row['Max_Coverage_Limit'];?></td>
                <td><?=$row['Payment_Interval'];?></td>
                <td><?=$row['Waiting_Period'];?></td>
                <td><?=$row['Premium_Amount'];?></td>
                <td><?=$row['Regulation'];?></td>
                <td><?=$row['Total_Amount'];?></td>
                <td align="right">
                    <a href="edit.php?edit=<?=$row['Pkg_ID'];?>" class="edit-delete-button" style="margin-bottom:15px;float:center;padding-left:22px; text-align: center;">EDIT</a>
                    <a href="delete.php?delete=<?=$row['Pkg_ID'];?>"class="edit-delete-button">DELETE</a>
                </td>
            </tr>

            <?php } ?>
        </table>
        <br><br>
        <h4 style="color:blue;"><center>LifeCare</center></h4>
        </div>
    </body>
</html>