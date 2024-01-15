<?php include "header_After_login1.php"?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "iwt_assignment";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

$HCP_ID = "";
$HCP_Name = "";
$HCP_Email = "";
$HCP_PNo = "";
$HCP_Address = "";
$Specialization = "";
$Service = "";
$Certification = "";
$License = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (!isset($_GET["HCP_ID"])) {
        header("location: index.php");
        exit;
    }

    $HCP_ID = $_GET["HCP_ID"];

    $sql = "SELECT * FROM health_care_provider WHERE HCP_ID='$HCP_ID'";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: index.php");
        exit;
    }

    $HCP_ID = $row["HCP_ID"];
    $HCP_Name = $row["HCP_Name"];
    $HCP_Email = $row["HCP_Email"];
    $HCP_PNo = $row["HCP_PNo"];
    $HCP_Address = $row["HCP_Address"];
    $Specialization = $row["Specialization"];
    $Service = $row["Service"];
    $Certification = $row["Certification"];
    $License = $row["License"];
}

else {
    $HCP_ID = $_POST["HCP_ID"];
    $HCP_Name = $_POST["HCP_Name"];
    $HCP_Email = $_POST["HCP_Email"];
    $HCP_PNo = $_POST["HCP_PNo"];
    $HCP_Address = $_POST["HCP_Address"];
    $Specialization = $_POST["Specialization"];
    $Service = $_POST["Service"];
    $Certification = $_POST["Certification"];
    $License = $_POST["License"];
    
    if (empty($HCP_ID) || empty($HCP_Name) || empty($HCP_Email) || empty($HCP_PNo) || empty($HCP_Address) || empty($Specialization) || empty($Service) || empty($Certification) || empty($License)) {
        $errorMessage = "All fields are required";
    } else {
        $sql = "UPDATE health_care_provider SET HCP_Name='$HCP_Name', HCP_Email='$HCP_Email', HCP_PNo='$HCP_PNo', HCP_Address='$HCP_Address', Specialization='$Specialization', Service='$Service', Certification='$Certification', License='$License' WHERE HCP_ID='$HCP_ID'";

        if ($connection->query($sql) === true) {
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
    <title>Edit Details | Lifcare</title>
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
        <h2 style="margin-bottom:25px;">Update Details</h2>



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
            <input type="hidden" name= "HCP_ID" value="<?php echo $HCP_ID?>">

            <div class="row mb-3" >
                <label  class="col-sm-3">HCP_ID</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="HCP_ID" value="<?php echo $HCP_ID?>">
                </div>
            </div>

            <div class="row mb-3" >
                <label  class="col-sm-3">HCP_Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="HCP_Name" value="<?php echo $HCP_Name?>">
                </div>
            </div>


            <div class="row mb-3" >
                <label  class="col-sm-3">HCP_Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="HCP_Email" value="<?php echo $HCP_Email?>">
                </div>
            </div>

            <div class="row mb-3" >
                <label  class="col-sm-3">HCP_PNo</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="HCP_PNo" value="<?php echo $HCP_PNo?>">
                </div>
            </div>


            <div class="row mb-3" >
                <label  class="col-sm-3">HCP_Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="HCP_Address" value="<?php echo $HCP_Address?>">
                </div>
            </div>


            <div class="row mb-3" >
                <label  class="col-sm-3">Specialization</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Specialization" value="<?php echo $Specialization?>">
                </div>
            </div>


            <div class="row mb-3" >
                <label  class="col-sm-3">Service</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Service" value="<?php echo $Service?>">
                </div>
            </div>



            <div class="row mb-3" >
                <label  class="col-sm-3">Certification</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Certification" value="<?php echo $Certification?>">
                </div>
            </div>



            <div class="row mb-3" >
                <label  class="col-sm-3">License</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="License" value="<?php echo $License?>">
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
                    <button class="btn btn-outline-primary" href="index.php">Cancel</button>
                </div> 


            </div>








        </form>

    </div>
    
</body>
</html>