<?php
session_start();
header("Content-Type: application/json");
require_once 'dbConnection.php'; 

$conn = getDbConnection();


if (!isset($_SESSION['user_id']) || !isset($_SESSION['email'])) {
    echo json_encode(["error" => "Unauthorized access"]);
    exit;
}
$user_id = $_SESSION['user_id'];
$email = $_SESSION['email'];
$sql = "SELECT * FROM customers WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $supplier = $result->fetch_assoc();
    echo json_encode($supplier);
} else {
    echo json_encode(["error" => "Supplier not found"]);
}
$stmt->close();
$conn->close();
?>
