<?php include 'header.php'; ?>

  <h1>Admin Login</h1>


  <form action="../server/adminLogin.php" method="POST">
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Login</button>
  </form>

  <div>
    Don't have an account? <a href="adminSignup.php">Register</a>
  </div>
  <?php include 'footer.php'; ?>

