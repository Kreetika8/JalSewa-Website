<?php
require_once 'dbConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = getDbConnection();

    $full_name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password =$_POST['password'];

    $sql = "INSERT INTO customers (full_name,email,phone,address,password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $full_name, $email, $phone, $address, $password);

    if ($stmt->execute()) {
        header('Location:../HTML/customerProfile.html'); 
    } else {
        echo "registration failed" . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
