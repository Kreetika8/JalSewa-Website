<?php include 'header.php'; ?>
<style>
/* Order Container */
.order-container {
    background-color: #ffffff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 100%;
    max-width: 500px;
    margin: 20px auto; /* Centers it horizontally */
}

/* Order Title */
.order-title {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
}

/* Order Form */
.order-form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

/* Labels */
.order-label {
    font-size: 14px;
    font-weight: bold;
    color: #333;
    text-align: left;
    display: block;
}

/* Select & Input Fields */
.order-select,
.order-input,
.order-textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

/* Order Button */
.order-button {
    background-color: #1072BA;
    color: white;
    font-size: 16px;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.order-button:hover {
    background-color: #FF9800;
}
</style>

<div class="order-container">
    <h1 class="order-title">Place Your Water Order</h1>

    <form action="../server/processOrder.php" method="POST" class="order-form">
        
        <label for="water_type" class="order-label">Water Type:</label>
        <select name="water_type" id="water_type" class="order-select" required>
            <option value="jar">Jar</option>
            <option value="mineral_water">Mineral Water</option>
            <option value="water_tanker">Water Tanker</option>
        </select>

        <label for="quantity" class="order-label">Quantity:</label>
        <input type="number" id="quantity" name="quantity" class="order-input" min="1" required>

        <label for="delivery_address" class="order-label">Delivery Address:</label>
        <textarea id="delivery_address" name="delivery_address" class="order-textarea" rows="3" required></textarea>

        <label for="supplier" class="order-label">Choose Closest Supplier:</label>
        <select name="supplier_id" id="supplier" class="order-select" required>
            <?php
            
            session_start();
            
         
            include '../server/dbConnection.php';
            $conn = getDbConnection();
            
            // Fetch suppliers from the database
            $sql = "SELECT id, factory_address, factory_name FROM suppliers";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['factory_name'] . " - " . $row['factory_address'] . "</option>";
                }
            } else {
                echo "<option value=''>No suppliers available</option>";
            }

            ?>
        </select>

     
        <label for="payment_method" class="order-label">Payment Method:</label>
        <select name="payment_method" id="payment_method" class="order-select" required>
            <option value="qr">QR Payment</option>
            <option value="cash_on_delivery">Cash on Delivery</option>
        </select>

      
        <input type="hidden" name="customer_id" value="<?php echo $_SESSION['user_id']; ?>">

        <button type="submit" class="order-button">Place Order</button>
    </form>
</div>

<?php include 'footer.php'; ?>
