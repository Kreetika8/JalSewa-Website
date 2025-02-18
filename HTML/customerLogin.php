<?php include 'header.php'; ?>

<style>
  .login-container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
  }

  .login-container h1 {
    margin-bottom: 20px;
    font-size: 24px;
  }

  .login-container form {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .login-container label {
    font-weight: bold;
    text-align: left;
  }

  .login-container input[type="email"],
  .login-container input[type="password"] {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  .login-container button {
    padding: 10px;
    font-size: 16px;
    color: #fff;
    background-color: #1072BA;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .login-container button:hover {
    background-color: #FF9800;
  }

  .login-container div {
    margin-top: 15px;
    font-size: 14px;
  }

  .login-container a {
    color: #007BFF;
    text-decoration: none;
    font-weight: bold;
  }

  .login-container a:hover {
    text-decoration: underline;
  }

  .error-message {
    color: red;
    font-weight: bold;
    margin-bottom: 10px;
  }
</style>

<div class="login-container">
  <h1>Customer Login</h1>
  <?php if (isset($_SESSION['error'])) { ?>
    <div class="error-message">
      <?php echo $_SESSION['error']; ?>
    </div>
    <?php unset($_SESSION['error']); } ?>

  <form action="../server/customerLoginProcess.php" method="POST">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Login</button>
  </form>

  <div>
    Don't have an account? <a href="customerSignup.php">Register here</a>
  </div>
</div>

<?php include 'footer.php'; ?>
