<?php
require_once 'dbConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = getDbConnection();

    $full_name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "INSERT INTO admin (full_name,email,phone, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $full_name, $email, $phone, $password);

    if ($stmt->execute()) {
        header('Location: ../HTML/adminProfile.php');
        exit();
    } else {
        echo "Registration failed " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
