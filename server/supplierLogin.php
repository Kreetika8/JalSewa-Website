<?php
require_once 'dbConnection.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = getDbConnection();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM suppliers WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $supplier = $result->fetch_assoc();
        $_SESSION['user_id'] = $supplier['id'];
        $_SESSION['email'] = $supplier['email'];
        $_SESSION['role'] = 'supplier'; 
        
    
        header('Location: ../HTML/supplierHome.php');
        exit();
    } else {
        echo "Login failed! Incorrect email or password.";
    }

    $stmt->close();
    $conn->close();
}
?>
