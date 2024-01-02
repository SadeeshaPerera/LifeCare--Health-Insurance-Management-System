<?php

if (isset($_GET["HCP_ID"])) {
    $HCP_ID = $_GET["HCP_ID"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "iwt_assignment";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Prepare and bind the DELETE statement
    $stmt = $connection->prepare("DELETE FROM health_care_provider WHERE HCP_ID = ?");
    $stmt->bind_param("s", $HCP_ID);

    // Execute the statement
    $stmt->execute();

    // Close the prepared statement
    $stmt->close();
}

// Redirect to the index page
header("location: index.php");
exit;

?>
