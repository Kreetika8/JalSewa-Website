<?php
include 'dbConnection.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    echo json_encode(["error" => "Unauthorized access. Please log in."]);
    exit;
}

$user_id = $_SESSION['user_id'];
$email = $_SESSION['email'];

if (isset($_POST['water_bottle']) && isset($_POST['water_jar']) && isset($_POST['water_tanker'])) {
    $water_bottle = $_POST['water_bottle'];
    $water_jar = $_POST['water_jar'];
    $water_tanker = $_POST['water_tanker'];

    $conn = getDbConnection();

    $sql = "UPDATE suppliers SET 
                water_bottle = ?, 
                water_jar = ?, 
                water_tanker = ? 
            WHERE id = ? AND email = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("dddis", $water_bottle, $water_jar, $water_tanker, $user_id, $email);

        if ($stmt->execute()) {
           
            echo json_encode(["success" => "Prices updated successfully"]);
        } else {
           
            echo json_encode(["error" => "Failed to update prices. Please try again."]);
        }

    
        $stmt->close();
    } else {
    
        echo json_encode(["error" => "Database error. Please try again."]);
    }

    $conn->close();
} else {
    echo json_encode(["error" => "Missing required parameters."]);
}
?>
