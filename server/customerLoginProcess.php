<?php
session_start();
include_once 'dbConnection.php'; // Include the database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Establish the connection
    $conn = getDbConnection(); // Get the DB connection

    // Get the submitted data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to check if the user exists in the database
    $query = "SELECT * FROM customers WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the email exists and verify password
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
    
        // Assuming you have hashed passwords in your database, use password_verify() for validation
        if (password_verify($password, $user['password'])) {
            // Login successful: Store user session
            $_SESSION['user'] = $user;
            $_SESSION['role'] = 'customer'; // Store role as 'customer'
    
            // Redirect to homepage/dashboard
            header('Location: ../HTML/index.php'); // Redirect to homepage
            exit(); // Stop further script execution after the redirect
        } else {
            // Invalid password
            $_SESSION['error'] = "Invalid email or password!";
            header('Location: ../HTML/customerLogin.php');  // Redirect back to login page with error
            exit(); // Stop further script execution after the redirect
        }
    } else {
        // No user found
        $_SESSION['error'] = "No user found with that email!";
        header('Location: ../HTML/customerLogin.php');  // Redirect back to login page with error
        exit(); // Stop further script execution after the redirect
    }
    if (isset($_SESSION['error'])) {
        echo '<div class="error-message">' . $_SESSION['error'] . '</div>';
        unset($_SESSION['error']);
    }
}

?>
