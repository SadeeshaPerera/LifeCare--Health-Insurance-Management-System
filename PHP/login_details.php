<?php
session_start();
include "db_conn.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
   $username = $_POST["username"];
   $pwd = md5($_POST["pwd"]);

   if(empty($username)) {
      header("Location: login.php?error=usernameisrequired");
      exit();
   }
   else if(empty($pwd)) {
      header("Location: login.php?error=passwordisrequired");
      exit();
   }
   else {
      $sql = "SELECT * FROM registered_user WHERE Username ='".$username."' AND Password ='".$pwd."';";

      $result = mysqli_query($conn , $sql);
   
      $row = mysqli_fetch_array($result);

      if($row["User_Type"] == "User")
      {
         $_SESSION["Username"] = $username;
         header("Location: profilePage.php");
      }
      else if($row["User_Type"] == "Admin")
      {
         $_SESSION["Username"] = $username;
         header("Location: admin.php");
      }
      else
      {
         header("Location: login.php?error=IncorrectUsernameOrPassword");
         exit();
      }
   }  
}
else{
	header("Location: login.php");
	exit();
}
?>