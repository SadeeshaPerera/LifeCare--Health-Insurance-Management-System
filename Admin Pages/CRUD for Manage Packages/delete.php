<?php
include "conn.php";

$id = $_GET['delete'];

// Delete the child rows from the 'claim' table
$sqlClaim = "DELETE FROM claim WHERE Policy_ID IN (SELECT Policy_ID FROM policy WHERE Pkg_ID = '$id')";
$conn->query($sqlClaim);

// Delete the child rows from the 'policy' table
$sqlPolicy = "DELETE FROM policy WHERE Pkg_ID = '$id'";
$conn->query($sqlPolicy);

// Delete the parent row from the 'package' table
$sqlPackage = "DELETE FROM package WHERE Pkg_ID = '$id'";
if ($conn->query($sqlPackage)) {
    $_SESSION['success'] = "Record Successfully Deleted";
} else {
    $_SESSION['error'] = "No record deleted";
}

header("location:index.php");
?>