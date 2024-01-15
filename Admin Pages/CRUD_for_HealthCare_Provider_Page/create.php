<?php include "header_After_login1.php"?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "iwt_assignment";

//create connection

$connection = new mysqli($servername, $username,$password,$database);


 $HCP_ID="";
 $HCP_Name="";
 $HCP_Email="";
 $HCP_PNo="";
 $HCP_Address="";
 $Specialization="";
 $Service="";
 $Certification="";
 $License="";


 $errorMessage = "";
 $successMessage = "";

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $HCP_ID=$_POST["HCP_ID"];
    $HCP_Name=$_POST["HCP_Name"];
    $HCP_Email=$_POST["HCP_Email"];
    $HCP_PNo=$_POST["HCP_PNo"];
    $HCP_Address=$_POST["HCP_Address"];
    $Specialization=$_POST["Specialization"];
    $Service=$_POST["Service"];
    $Certification=$_POST["Certification"];
    $License=$_POST["License"];

   
      do{
           if(empty($HCP_ID) || empty($HCP_Name) || empty($HCP_Email) ||  empty($HCP_PNo) ||  empty($HCP_Address) ||  empty($Specialization) ||  empty($Service) ||  empty($Certification) ||  empty($License)  ){
             
            $errorMessage = "All the fields are required";
            break;

           }

           //add new client to database
            
           $sql = "INSERT INTO health_care_provider(HCP_ID,HCP_Name,HCP_Email,HCP_PNo,HCP_Address,Specialization,Service,Certification,License)" .
                  "VALUES ('$HCP_ID','$HCP_Name','$HCP_Email','$HCP_PNo','$HCP_Address','$Specialization','$Service','$Certification','$License')";
                  $result= $connection->query($sql);

                  if(!$result){
                    $errorMessage = "Invalid Input:" . $connection->error;
                    break;
                  }

           $HCP_ID="";
           $HCP_Name="";
           $HCP_Email="";
           $HCP_PNo="";
           $HCP_Address="";
           $Specialization="";
           $Service="";
           $Certification="";
           $License="";
          

           $successMessage = "Added correctly";
      
           header("location: index.php");
           exit;


      }while(false);
 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./Images/logo.png">
    <title>LifeCare</title>
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
        <h2 style="margin-bottom:25px;">New Healthcare Provider</h2>



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
                    <button style="margin-left:240px;" type="submit" class="btn btn-primary">Submit</button>
                </div> 

                


            </div>








        </form>

    </div>
    
</body>
</html>