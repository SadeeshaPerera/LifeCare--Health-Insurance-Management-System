<?php include "header_After_login1.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care Providers</title>
    <link rel="icon" type="image/x-icon" href="./Images/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        #policy-body{
            margin-top:100px;
        }
    </style>
</head>
<body id ="policy-body">
    <div class="container my-5">
         <h2>List of Healthcare Providers</h2><br>
        
         <a class="btn btn-primary"  href="create.php" role="button">ADD NEW</a>
         <br><br>
         
         <table class="table">
            <thead>
                <tr>
                    <th>HCP_ID</th>
                    <th>HCP_Name</th>
                    <th>HCP_Email</th>
                    <th>HCP_PNo</th>
                    <th>HCP_Address</th>
                    <th>Specialization</th>
                    <th>Service</th>
                    <th>Certification</th>
                    <th>License</th>
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
                    $sql = "SELECT * FROM health_care_provider";
                    $result = $connection->query($sql);

                    if(!$result){
                        die("Invalid query:" . $connection_error);
                    }


                    while($row = $result->fetch_assoc()){
                        echo "
                        <tr>
                    <td>$row[HCP_ID]</td>
                    <td>$row[HCP_Name]</td>
                    <td>$row[HCP_Email]</td>
                    <td>$row[HCP_PNo]</td>
                    <td>$row[HCP_Address]</td>
                    <td>$row[Specialization]</td>
                    <td>$row[Service]</td>
                    <td>$row[Certification]</td>
                    <td>$row[License]</td>

                    <td>
                        <a style='margin-bottom:10px;padding-right:25px;' class='btn btn-primary btn-sm' href='edit.php?HCP_ID=$row[HCP_ID]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='delete.php?HCP_ID=$row[HCP_ID]'>Delete</a>
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