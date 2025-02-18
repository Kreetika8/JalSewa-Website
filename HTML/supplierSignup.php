<?php include 'header.php'; ?>
<style>

/* Registration Container */
.supplier-registration-container {
    background-color: #ffffff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 100%;
    max-width: 500px;
    margin: 20px auto; /* Centers it horizontally */

}

/* Registration Title */
.supplier-registration-title {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
}

/* Form Styling */
.supplier-registration-form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

/* Labels */
.supplier-label {
    font-size: 14px;
    font-weight: bold;
    color: #333;
    text-align: left;
    display: block;
}

/* Input Fields */
.supplier-input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

/* File Input Fields */
.supplier-file-input {
    width: 100%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
}

/* Register Button */
.supplier-registration-button {
    background-color: #1072BA;
    color: white;
    font-size: 16px;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.supplier-registration-button:hover {
    background-color: #FF9800;
}

/* Login Link */
.supplier-login-link {
    margin-top: 15px;
    font-size: 14px;
}

.supplier-login-link a {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
}

.supplier-login-link a:hover {
    text-decoration: underline;
}
</style>
<div class="supplier-registration-container">
    <h1 class="supplier-registration-title">Supplier Registration</h1>

    <form action="../server/supplierRegister.php" method="POST" enctype="multipart/form-data" class="supplier-registration-form">
        
        <label for="factory_name" class="supplier-label">Factory Name:</label>
        <input type="text" id="factory_name" name="factory_name" class="supplier-input" required>

        <label for="business_number" class="supplier-label">Business Registration Number:</label>
        <input type="text" id="business_number" name="business_number" class="supplier-input" required>

        <label for="factory_address" class="supplier-label">Factory Address:</label>
        <input type="text" id="factory_address" name="factory_address" class="supplier-input" required>

        <label for="contact_person" class="supplier-label">Contact Person:</label>
        <input type="text" id="contact_person" name="contact_person" class="supplier-input" required>

        <label for="phone" class="supplier-label">Phone Number:</label>
        <input type="tel" id="phone" name="phone" class="supplier-input" pattern="[0-9]{10}" required>

        <label for="email" class="supplier-label">Email:</label>
        <input type="email" id="email" name="email" class="supplier-input" required>

        <label for="capacity" class="supplier-label">Daily Production Capacity (in liters):</label>
        <input type="number" id="capacity" name="capacity" class="supplier-input" required>

        <label for="water_type" class="supplier-label">Type of Water Offered:</label>
        <select id="water_type" name="water_type" class="supplier-input" required>
            <option value="Mineral Water">Mineral Water</option>
            <option value="Regular Jar Water">Regular Jar Water</option>
            <option value="Tanker Supply">Tanker Supply</option>
        </select>

        <label for="business_certificate" class="supplier-label">Upload Business Registration Certificate:</label>
        <input type="file" id="business_certificate" name="business_certificate" class="supplier-file-input" accept=".pdf,.jpg,.jpeg,.png" required>

        <label for="utility_bill" class="supplier-label">Upload Recent Utility Bill:</label>
        <input type="file" id="utility_bill" name="utility_bill" class="supplier-file-input" accept=".pdf,.jpg,.jpeg,.png" required>

        <label for="password" class="supplier-label">Password:</label>
        <input type="password" id="password" name="password" class="supplier-input" required>

        <label for="confirm_password" class="supplier-label">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" class="supplier-input" required>

        <button type="submit" class="supplier-registration-button">Register</button>
    </form>

    <div class="supplier-login-link">
        Already registered? <a href="supplierLogin.php">Login</a>
    </div>
</div>

<?php include 'footer.php'; ?>
