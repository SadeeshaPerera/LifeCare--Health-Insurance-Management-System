<?php include "header_After_login1.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./Images/logo.png">
    <title>Manage Policy | LifeCare</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        #policy-body{
            margin-top:150px;
        }
    </style>
</head>
<body id ="policy-body">
    <div class="container my-5">
         <h2>Policy Details</h2><br>
        
         <a class="btn btn-primary" href="create.php" role="button">ADD NEW</a>
         <br><br>


         <table class="table">
            <thead>
                <tr>
                    <th>Policy_ID</th>
                    <th>Pkg_ID</th>
                    <th>Policy_Type</th>
                    <th>Effective_Date</th>
                    <th>Expiration_Date</th>
                    <th>Policy_Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

            <?php
              $servername = "localhost";
              $username = "root";
              $password = "";
              $database = "iwt_assignment";

              //create connection

              $connection = new mysqli($servername, $username,$password,$database);
              
                     if($connection -> connect_error){
                        die("connection failed:" . $connection->connect_error);
                     }

                     //read all row from table
                    $sql = "SELECT * FROM Policy";
                    $result = $connection->query($sql);

                    if(!$result){
                        die("Invalid query:" . $connection_error);
                    }


                    while($row = $result->fetch_assoc()){
                        echo "
                        <tr>
                    <td>$row[Policy_ID]</td>
                    <td>$row[Pkg_ID]</td>
                    <td>$row[Policy_Type]</td>
                    <td>$row[Effective_Date]</td>
                    <td>$row[Expiration_Date]</td>
                    <td>$row[Policy_Status]</td>

                    <td>
                        <a class='btn btn-primary btn-sm' href='edit.php?Policy_ID=$row[Policy_ID]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='delete.php?Policy_ID=$row[Policy_ID]'>Delete</a>
                    </td>
                </tr>
                        ";

                    }
                       
            ?>    

                
            </tbody>
         </table>
         
    </div>
</body>
</html>