<?php
require_once 'dbConnection.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = getDbConnection();

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to find the user by email and password
    $sql = "SELECT * FROM customers WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // If user is found, store their data in session
        $customer = $result->fetch_assoc();
        $_SESSION['user_id'] = $customer['id'];
        $_SESSION['email'] = $customer['email'];
        $_SESSION['role'] = 'customer';  // User role is 'supplier'
        
        // Redirect to the profile page
        header('Location: ../HTML/customerHome.php');
        exit();
    } else {
        echo "Login failed! Incorrect email or password.";
    }

    // Clean up
    $stmt->close();
    $conn->close();
}
?>
