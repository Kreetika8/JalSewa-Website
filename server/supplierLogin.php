<?php
require_once 'dbConnection.php';
session_start();  // Start the session to store user data

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = getDbConnection();

    // Get user input
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL to fetch supplier by email
    $sql = "SELECT * FROM suppliers WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Check if email exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $dbEmail, $dbPassword); // Bind the columns from the database
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $dbPassword)) {
            // Set session data for the supplier user
            $_SESSION['user_id'] = $id;
            $_SESSION['email'] = $email;
            $_SESSION['role'] = 'supplier'; // Define user role as 'supplier'
            
            // Redirect to the supplier profile page
            header('Location: ../HTML/supplierProfile.php');
            exit();
        } else {
            // Incorrect password
            echo "Login failed! Incorrect password.";
        }
    } else {
        // Email not found
        echo "Login failed! No user found with that email.";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
