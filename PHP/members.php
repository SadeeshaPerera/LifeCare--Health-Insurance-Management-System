<?php  

if (isset($_SESSION['Username']) && isset($_SESSION['User_ID'])) {
    
    $sql = "SELECT * FROM registered_user ORDER BY User_ID ASC";
    $res = mysqli_query($conn, $sql);
}else{
	header("Location: login.php");
} 