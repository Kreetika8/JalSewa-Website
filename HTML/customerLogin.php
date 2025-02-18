<?php include 'header.php'; ?>

  <h1>Customer Login</h1>
  <?php if (isset($_SESSION['error'])) {
    // Display the error message
    echo '<div style="color: red; font-weight: bold;">' . $_SESSION['error'] . '</div>';
    // Clear the error message after displaying it
    unset($_SESSION['error']);
}
?>

  <form action="../server/customerLoginProcess.php" method="POST">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br><br>

    <button type="submit">Login</button>

  </form>

  <div>
    Don't have an account? <a href="customerSignup.php">Register here</a>
  </div>
  <?php include 'footer.php'; ?>

