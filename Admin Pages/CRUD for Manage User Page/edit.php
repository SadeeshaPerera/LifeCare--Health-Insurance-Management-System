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
 
</style>
<?php
    include "conn.php";

    $User_ID =$_GET['edit'];
    
    $sql ="SELECT * FROM registered_user WHERE User_ID ='$User_ID'";
    $query=$conn->query($sql);
    $row =$query->fetch_assoc();
?>
<html>
    <head>
<title>Edit Member Details | LifeCare</title>
    <link rel="icon" type="image/x-icon" href="./Images/logo.png">
    </head>
<div id="edit-form">
<form action="update.php" method="post" id="editform">
    <table width="100%" id="claims">
        <h1><center>Update Member Details</center></h1>
    <tr>
            <td>User_ID</td>
            <td><input type="text" value="<?=$row['User_ID'];?>" name="User_ID" required readonly></td>
        </tr>
        <tr>
            <td>User_Type</td>
            <td><input type="text" value="<?=$row['User_Type'];?>" name="User_Type" required></td>
        </tr>
        <tr>
            <td>First_Name</td>
            <td><input type="text" value="<?=$row['First_Name'];?>" name="First_Name" required></td>
        </tr>
        <tr>
            <td>Last_Name</td>
            <td><input type="text" value="<?=$row['Last_Name'];?>" name="Last_Name" required></td>
        </tr>

        <tr>
            <td>U_Email</td>
            <td><input type="text" value="<?=$row['U_Email'];?>" name="U_Email" required></td>
        </tr>


        <tr>
            <td>Home_No</td>
            <td><input type="text" value="<?=$row['Home_No'];?>" name="Home_No" required></td>
        </tr>

        <tr>
            <td>Street</td>
            <td><input type="text" value="<?=$row['Street'];?>" name="Street" required></td>
        </tr>

        <tr>
            <td>City</td>
            <td><input type="text" value="<?=$row['City'];?>" name="City" required></td>
        </tr>

        <tr>
            <td>Postal_Code</td>
            <td><input type="text" value="<?=$row['Postal_Code'];?>" name="Postal_Code" required></td>
        </tr>

        <tr>
            <td>Country</td>
            <td><input type="text" value="<?=$row['Country'];?>" name="Country" required></td>
        </tr>
        <tr>
            <td>U_PNumber</td>
            <td><input type="text" value="<?=$row['U_PNumber'];?>" name="U_PNumber" required></td>
        </tr>

        <tr>
            <td>DOB</td>
            <td><input type="date" value="<?=$row['DOB'];?>" name="DOB" required></td>
        </tr>

        <tr>
            <td>Gender</td>
            <td><input type="radio" value="<?=$row['Gender'];?>" name="Gender" required>Male</td>
            <td><input type="radio" value="<?=$row['Gender'];?>" name="Gender" required>Female</td>
        </tr>

        <tr>
            <td>Username</td>
            <td><input type="text" value="<?=$row['Username'];?>" name="Username" required></td>
        </tr>

        <tr>
            <td>Password</td>
            <td><input type="password" value="<?=$row['Password'];?>" name="Password" required readonly></td>
        </tr>

        


        <tr>
            <td></td>
            <td><button type="submit" name="submit" id="mainUpdatebutton">UPDATE</button></td>
        </tr>
    </table>
</form>
</div>
</html>