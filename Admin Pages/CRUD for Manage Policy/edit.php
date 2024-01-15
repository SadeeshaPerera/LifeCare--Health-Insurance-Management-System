<?php include "header_After_login1.php"?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "iwt_assignment";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

$Policy_ID = "";
$Pkg_ID= "";
$Policy_Type = "";
$Effective_Date = "";
$Expiration_Date = "";
$Policy_Status = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (!isset($_GET["Policy_ID"])) {
        header("location: index.php");
        exit;
    }

    $Policy_ID = $_GET["Policy_ID"];

    $sql = "SELECT * FROM Policy WHERE Policy_ID='$Policy_ID'";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: index.php");
        exit;
    }

    $Policy_ID = $row["Policy_ID"];
    $Pkg_ID = $row["Pkg_ID"];
    $Policy_Type = $row["Policy_Type"];
    $Effective_Date = $row["Effective_Date"];
    $Expiration_Date = $row["Expiration_Date"];
    $Policy_Status = $row["Policy_Status"];
}

else {
    $Policy_ID = $_POST["Policy_ID"];
    $Pkg_ID = $_POST["Pkg_ID"];
    $Policy_Type = $_POST["Policy_Type"];
    $Effective_Date = $_POST["Effective_Date"];
    $Expiration_Date = $_POST["Expiration_Date"];
    $Policy_Status = $_POST["Policy_Status"];
    
    if (empty($Policy_ID) || empty($Pkg_ID) || empty($Policy_Type) || empty($Effective_Date) || empty($Expiration_Date) || empty($Policy_Status) ) {
        $errorMessage = "All fields are required";
    } else {
        $sql = "UPDATE Policy SET Pkg_ID='$Pkg_ID', Policy_Type='$Policy_Type', Effective_Date='$Effective_Date', Expiration_Date='$Expiration_Date', Policy_Status='$Policy_Status' WHERE Policy_ID='$Policy_ID'";

        if ($connection->query($sql) == true) {
            $successMessage = "Record updated successfully";
            header("location: index.php");
            exit;
        } else {
            $errorMessage = "Error updating record: " . $connection->error;
        }
    }
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./Images/logo.png">
    <title>Edit Policy Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        #policy-body{
            margin-top:150px;
        }
    </style>
</head>
<body id ="policy-body">

     <div class="container my-5">
        <h2 style="margin-bottom:25px;">New Policy</h2>



        <?php 
            if( !empty($errorMessage)){
                echo "
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>$errorMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            ";
            

            }


           


        ?>
               
        <form method="post">
            <input type="hidden" name= "Policy_ID" value="<?php echo $Policy_ID?>">

            <div class="row mb-3" >
                <label  class="col-sm-3">Policy_ID</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Policy_ID" value="<?php echo $Policy_ID?>">
                </div>
            </div>

            <div class="row mb-3" >
                <label  class="col-sm-3">Pkg_ID</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Pkg_ID" value="<?php echo $Pkg_ID?>">
                </div>
            </div>


            <div class="row mb-3" >
                <label  class="col-sm-3">Policy_Type</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Policy_Type" value="<?php echo $Policy_Type?>">
                </div>
            </div>

            <div class="row mb-3" >
                <label  class="col-sm-3">Effective_Date</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" name="Effective_Date" value="<?php echo $Effective_Date?>">
                </div>
            </div>


            <div class="row mb-3" >
                <label  class="col-sm-3">Expiration_Date</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" name="Expiration_Date" value="<?php echo $Expiration_Date?>">
                </div>
            </div>


            <div class="row mb-3" >
                <label  class="col-sm-3">Policy_Status</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Policy_Status" value="<?php echo $Policy_Status?>">
                </div>
            </div>

            <?php   
             
             if(!empty($successMessage))
             echo "
             <div class='row mb-3'>
                 <div class='offset-sm-3 col-sm-6'>
                     <div class='alert alert-success alert-dismissible fade show' role='alert'>
                         <strong>$successMessage</strong>
                         <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                     </div>
                 </div>
             </div>
         ";
             
             
             
             
             ?>









            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div> 

                <div class="col-sm-3 d-grid">
                    <button class="btn btn-outline-primary" href="/adithya/index.php">Cancel</button>
                </div> 


            </div>








        </form>

    </div>
    
</body>
</html>