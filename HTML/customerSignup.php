<?php include 'header.php'; ?>
<style>
/* Registration Container */
.customer-registration-container {
    background-color: #ffffff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 100%;
    max-width: 400px;
    margin: 20px auto; /* Centers it horizontally */

}

/* Registration Title */
.customer-registration-title {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
}

/* Form Styling */
.customer-registration-form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

/* Labels */
.customer-label {
    font-size: 14px;
    font-weight: bold;
    color: #333;
    text-align: left;
    display: block;
}

/* Input Fields */
.customer-input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

/* Register Button */
.customer-registration-button {
    background-color: #1072BA;
    color: white;
    font-size: 16px;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.customer-registration-button:hover {
    background-color: #FF9800;
}

/* Login Link */
.customer-login-link {
    margin-top: 15px;
    font-size: 14px;
}

.customer-login-link a {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
}

.customer-login-link a:hover {
    text-decoration: underline;
}
</style>
<div class="customer-registration-container">
    <h1 class="customer-registration-title">Customer Registration</h1>

    <form action="../server/register_customer.php" method="POST" class="customer-registration-form">
        
        <label for="name" class="customer-label">Full Name:</label>
        <input type="text" id="name" name="name" class="customer-input" required>

        <label for="email" class="customer-label">Email:</label>
        <input type="email" id="email" name="email" class="customer-input" required>

        <label for="phone" class="customer-label">Phone Number:</label>
        <input type="tel" id="phone" name="phone" class="customer-input" pattern="[0-9]{10}" required>

        <label for="address" class="customer-label">Address:</label>
        <input type="text" id="address" name="address" class="customer-input" required>

        <label for="password" class="customer-label">Password:</label>
        <input type="password" id="password" name="password" class="customer-input" required>

        <label for="confirm_password" class="customer-label">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" class="customer-input" required>

        <button type="submit" class="customer-registration-button">Register</button>

    </form>

    <div class="customer-login-link">
        Already have an Account? <a href="customerLogin.php">Login</a>
    </div>
</div>

<?php include 'footer.php'; ?>
