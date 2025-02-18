<?php

require_once 'dbConnection.php';


$conn = getDbConnection();


if (isset($_POST['order_id']) && isset($_POST['total_price'])) {
    $order_id = $_POST['order_id'];
    $total_price = $_POST['total_price'];

 
    $updateQuery = "UPDATE orders SET total_price = ? WHERE order_id = ?";
    $stmt = $conn->prepare($updateQuery);
    $stmt->bind_param("di", $total_price, $order_id);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Total price updated']);
    } else {
        echo json_encode(['error' => 'Failed to update total price']);
    }
    $stmt->close();
} else {
    echo json_encode(['error' => 'Missing order_id or total_price']);
}


$conn->close();
?>
