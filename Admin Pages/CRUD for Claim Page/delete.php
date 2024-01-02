<?php
include "conn.php";

$id= $_GET['delete'];

$sql ="DELETE FROM claim WHERE Claim_ID='$id'";

if($conn->query($sql)){
    $_SESSION['success']="Record Successfully Deleted";
}else{
    $_SESSION['error']="No record deleted";
}

header("location:index.php");
?>