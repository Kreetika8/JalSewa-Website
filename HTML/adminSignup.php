<?php include 'header.php'; ?>

  <h1>Admin Signup</h1>

  <form action="../server/register_admin.php" method="POST">
    
    <label for="name">Full Name:</label>
    <input type="text" id="name" name="name" required>
    <br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br><br>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
    <br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br><br>

    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required>
    <br><br>

    <button type="submit">Register</button>

  </form>

  <div>
    Already have an account?<a href="adminLogin.php">Login</a>
 </div>
 <?php include 'footer.php'; ?>

