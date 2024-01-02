<?php
include "conn.php";

$id= $_GET['delete'];

$sql ="DELETE FROM registered_user WHERE User_ID='$User_ID'";

if($conn->query($sql)){
    $_SESSION['success']="Record Successfully Deleted";
}else{
    $_SESSION['error']="No record deleted";
}

header("location:index.php");
?>