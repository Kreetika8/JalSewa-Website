<?php
session_start();
header("Content-Type: application/json");
require_once 'dbConnection.php'; 

$conn = getDbConnection();


if (!isset($_SESSION['user_id']) || !isset($_SESSION['email'])) {
    echo json_encode(["error" => "Unauthorized access"]);
    exit;
}

$order_id = isset($_GET['order_id']) ? $_GET['order_id'] : null;

if (!$order_id) {
    echo json_encode(["error" => "Order ID is required"]);
    exit;
}

// Prepare SQL query to fetch the order details based on order_id
$sql = "SELECT * from orders WHERE order_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $order_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $order = $result->fetch_assoc();
    echo json_encode($order); 
} else {
    echo json_encode(["error" => "Order not found"]);
}

$stmt->close();
$conn->close();
?>
