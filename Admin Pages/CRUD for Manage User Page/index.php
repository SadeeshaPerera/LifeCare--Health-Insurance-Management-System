<?php include "header_After_login1.php"?>

<?php
    include "conn.php";
?>
<style>
    h1{
        font-family: 'Poppins';
        
    }
    h2{
        font-size: 25px;
        font-family: 'Poppins';
       
    }
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
    td{
        font-family: tahoma;
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
        border:1px solid black;
        margin-left:20px;
        margin-top: 20px;
        cursor: pointer;
    }
    button[type=submit]:hover{
        background:darkblue;
    }
    

    .edit-delete-button{
        background-color: #d60e00;
        color:white;
        font-size: 10px;
        padding: 5px 10px;
        text-decoration: none;
        margin:10px;
        display:flex;
        text-align: center;
    }
    .edit-delete-button:hover{
        background: darkred;
    }
    .container{
        margin-top:120px;
    }
</style>
<html>
    <head>
        <title>Manage Users | LifeCare</title>
    </head>
    <body>
        <div class="container">
        <h1><center>Add Members</center></h1>
        <div id="divheader">
            <form action="insert.php" method="post">
                <table width="100%">
                    <tr>
                        <td>User ID</td>
                        <td><input type="text" name="User_ID" required></td>
                    </tr>
                    <tr>
                        <td>User Type</td>
                        <td><input type="text" name="User_Type" required></td>
                    </tr>
                    <tr>
                        <td>First name</td>
                        <td><input type="text" name="First_Name" required></td>
                    </tr>

                    <tr>
                        <td>Last name</td>
                        <td><input type="text" name="Last_Name" required></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="U_Email" required></td>
                    </tr>

               
                    <tr>
                        <td>Home Number</td>
                        <td><input type="text" name="Home_No" required></td>
                    </tr>
                    <tr>
                        <td>Street</td>
                        <td><input type="text" name="Street" required></td>
                    </tr>

                  

                    <tr>
                        <td>City</td>
                        <td><input type="text" name="City" required></td>
                    </tr>
                    <tr>
                        <td>Postal Code</td>
                        <td><input type="text" name="Postal_Code" required></td>
                    </tr>
                    <tr>
                        <td>Country</td>
                        <td><input type="text" name="Country" required></td>
                    </tr>

                    <tr>
                        <td>Phone Number</td>
                        <td><input type="textbox" name="U_PNumber" required></td>
                    </tr>
                    
                    <tr>
                        <td>DOB</td>
                        <td><input type="date" name="DOB" required></td>
                    </tr>

                    <tr>
                        <td>Gender</td>
                        <td><input type="text" name="Gender" required></td>
                        
                    </tr>

                    <tr>
                        <td>Username</td>
                        <td><input type="textbox" name="Username" required></td>
                    </tr>

                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="Password" required></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><button type="submit" name="submit">Submit</button></td>
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
        <h2><center>Member Details</center></h2>
        <table border="2" width="100%" id="table">
                <tr style="background:rgba(0, 50, 50,1.0);color:#fff; font-size:16px; font-family:'Poppins'">
                    <th align="center">User ID</th>
                    <th align="center">User Type</th>
                    <th align="center">First Name</th>
                    <th align="center">Last Name</th>
                    <th align="center">Email</th>
                    <th align="center">Home No</th>
                    <th align="center">Street</th>
                    <th align="center">City</th>
                    <th align="center">Postal_Code</th>
                    <th align="center">Country</th>
                    <th align="center">Phone No</th>
                    <th align="center">DOB</th>
                    <th align="center">Gender</th>
                    <th align="center">Username</th>
                    <th align="center">Password</th>
                    <th align="center"></th>
                </tr>
                <?php
                    $sql ="SELECT * FROM registered_user";
                    $query =$conn->query($sql);
                    while($row=$query->fetch_assoc()){

                ?>
                <tr>
                    <td><?=$row['User_ID'];?></td>
                    <td><?=$row['User_Type'];?></td>
                    <td><?=$row['First_Name'];?></td>
                    <td><?=$row['Last_Name'];?></td>
                    <td><?=$row['U_Email'];?></td>
                    <td><?=$row['Home_No'];?></td>
                    <td><?=$row['Street'];?></td>
                    <td><?=$row['City'];?></td>
                    <td><?=$row['Postal_Code'];?></td>
                    <td><?=$row['Country'];?></td>
                    <td><?=$row['U_PNumber'];?></td>
                    <td><?=$row['DOB'];?></td>
                    <td><?=$row['Gender'];?></td>
                    <td><?=$row['Username'];?></td>
                    <td><?=$row['Password'];?></td>
                    <td align="right">
                        <a href="edit.php?edit=<?=$row['User_ID'];?>" class="edit-delete-button">EDIT</a>
                        <a href="delete.php?delete=<?=$row['User_ID'];?>"class="edit-delete-button">DELETE</a>
                    </td>
                </tr>

                <?php } ?>
            </table>
            <h4 style="color:blue;"><center>LifeCare</center></h4>
                    </div>
    </body>
                    
</html>