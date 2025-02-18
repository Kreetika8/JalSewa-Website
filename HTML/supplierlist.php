<?php include 'header.php'; ?>
<?php include '../server/dbConnection.php';?>

<div class="supplier-container">
    <a href="javascript:history.back()" class="back-button">⬅ Back</a>
    <h1 class="supplier-header">Water Supplier</h1>

    <div class="order-history">Order History</div>

    <?php
    // Establish database connection
    $conn = getDbConnection();
    
    if (!$conn) {
        echo "<p class='error-message'>Database connection failed.</p>";
    } else {
        // Fetch suppliers from the database
        $sql = "SELECT factory_name, factory_address, phone FROM suppliers";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='supplier-card'>";
                // echo "<div class='supplier-logo'><img src='" . htmlspecialchars($row['logo']) . "' alt='Supplier Logo'></div>";
                echo "<div class='supplier-info'>";
                echo "<h2 class='supplier-name'>" . htmlspecialchars($row['factory_name']) . "</h2>";
                echo "<p class='supplier-location'>" . htmlspecialchars($row['factory_address']) . "</p>";
                echo "<p class='supplier-contact'>" . htmlspecialchars($row['phone']) . "</p>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p class='no-suppliers'>No suppliers found.</p>";
        }
        $conn->close();
    }
    ?>
</div>

<?php include 'footer.php'; ?>
