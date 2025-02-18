<?php
include_once '../server/dbConnection.php';

$conn = getDbConnection();

if ($conn) {
    echo "Connection successful!";
} else {
    echo "Connection failed!";
}

$conn->close(); // Don't forget to close the connection
?>
