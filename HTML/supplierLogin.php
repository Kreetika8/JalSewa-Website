<?php include 'header.php'; ?>

  <h1>Supplier Login</h1>

  <form action="../server/supplierLogin.php" method="POST">
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br><br>

    <button type="submit">Login</button>

  </form>

  <div>
    Don't have an account? <a href="supplierSignup.php">Register as a Supplier</a>
  </div>
  <?php include 'footer.php'; ?>

