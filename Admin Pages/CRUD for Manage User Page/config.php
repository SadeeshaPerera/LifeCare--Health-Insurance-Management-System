<?php
$mysqli = new mysqli("localhost","root","","iwt_assignment");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else{
    echo 'connected';
}
?>