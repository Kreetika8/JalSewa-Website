<?php
require_once 'dbConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = getDbConnection();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        header('Location: ../HTML/adminProfile.php');
        exit();
    } else {

        echo "Login failed!! password or email is wrong";
    }

    $stmt->close();
    $conn->close();
}
?>