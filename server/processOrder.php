<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    echo "You need to be logged in to place an order.";
    exit;
}


include '../server/dbConnection.php';


$customer_id = $_POST['customer_id']; 
$supplier_id = $_POST['supplier_id'];
$water_type = $_POST['water_type'];
$quantity = $_POST['quantity'];
$delivery_address = $_POST['delivery_address'];
$payment_method = $_POST['payment_method'];


$status = "pending";

$created_date = date("Y-m-d");
$created_time = date("H:i:s");


$conn = getDbConnection();


$sql = "INSERT INTO orders (customer_id, supplier_id, water_type, quantity, delivery_address, payment_method, status, created_date, created_time)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";


$stmt = $conn->prepare($sql);


$stmt->bind_param("sssssssss", $customer_id, $supplier_id, $water_type, $quantity, $delivery_address, $payment_method, $status, $created_date, $created_time);


if ($stmt->execute()) {
   
    echo "Order placed successfully! Redirecting...";
    $order_id = $stmt->insert_id;

    // Redirected to orderdetails.php and passing the order_id as a query parameter
    header("Location: ../HTML/orderdetails.php?order_id=" . $order_id);
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
