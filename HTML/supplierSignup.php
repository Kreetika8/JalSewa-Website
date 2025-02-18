<?php include 'header.php'; ?>


  <form action="../server/supplierRegister.php" method="POST" enctype="multipart/form-data">
    
    <label for="factory_name">Factory Name:</label>
    <input type="text" id="factory_name" name="factory_name" required>
    <br><br>

    <label for="business_number">Business Registration Number:</label>
    <input type="text" id="business_number" name="business_number" required>
    <br><br>

    <label for="factory_address">Factory Address:</label>
    <input type="text" id="factory_address" name="factory_address" required>
    <br><br>

    <label for="contact_person">Contact Person:</label>
    <input type="text" id="contact_person" name="contact_person" required>
    <br><br>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
    <br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br><br>

    <label for="capacity">Daily Production Capacity (in liters):</label>
    <input type="number" id="capacity" name="capacity" required>
    <br><br>

    <label for="water_type">Type of Water Offered:</label>
    <select id="water_type" name="water_type" required>
      <option value="Mineral Water">Mineral Water</option>
      <option value="Regular Jar Water">Regular Jar Water</option>
      <option value="Tanker Supply">Tanker Supply</option>
    </select>
    <br><br>

    <label for="business_certificate">Upload Business Registration Certificate:</label>
    <input type="file" id="business_certificate" name="business_certificate" accept=".pdf,.jpg,.jpeg,.png" required>
    <br><br>

    <label for="utility_bill">Upload Recent Utility Bill:</label>
    <input type="file" id="utility_bill" name="utility_bill" accept=".pdf,.jpg,.jpeg,.png" required>
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
    Already registered?
    <a href="supplierLogin.php">Login</a>
  </div>
  <?php include 'footer.php'; ?>

