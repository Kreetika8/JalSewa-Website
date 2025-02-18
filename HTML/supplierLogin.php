<?php include 'header.php'; ?>
<style>
  /* Login Container */
.supplier-login-container {
    background-color: #ffffff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 100%;
    max-width: 400px;
    margin: 20px auto;
}

/* Login Title */
.supplier-login-title {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
}

/* Form Styling */
.supplier-login-form {
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

/* Login Button */
.supplier-login-button {
    background-color: #1072BA;
    color: white;
    font-size: 16px;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.supplier-login-button:hover {
    background-color: #FF9800;
}

/* Register Link */
.supplier-register-link {
    margin-top: 15px;
    font-size: 14px;
}

.supplier-register-link a {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
}

.supplier-register-link a:hover {
    text-decoration: underline;
}
</style>
<div class="supplier-login-container">
    <h1 class="supplier-login-title">Supplier Login</h1>

    <form action="../server/supplierLogin.php" method="POST" class="supplier-login-form">
        
        <label for="email" class="supplier-label">Email:</label>
        <input type="email" id="email" name="email" class="supplier-input" required>
        
        <label for="password" class="supplier-label">Password:</label>
        <input type="password" id="password" name="password" class="supplier-input" required>
        
        <button type="submit" class="supplier-login-button">Login</button>

    </form>

    <div class="supplier-register-link">
        Don't have an account? <a href="supplierSignup.php">Register as a Supplier</a>
    </div>
</div>

<?php include 'footer.php'; ?>
