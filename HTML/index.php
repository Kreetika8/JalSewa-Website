<?php include 'header.php'; ?>
<style>
  .index-container {
    text-align: center;
    margin-top: 50px;
  }

  .index-link {
    display: inline-block;
    padding: 10px 20px;
    margin: 10px;
    font-size: 18px;
    color: #fff;
    background-color: #1072BA;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
  }

  .index-link:hover {
    background-color: #FF9800;
  }

  .index-admin {
    margin-top: 20px;
    font-size: 16px;
  }

  .index-admin a {
    color:rgb(255, 255, 255);
    text-decoration: none;
    font-weight: bold;
  }

  .index-admin a:hover {
    text-decoration: underline;
  }
</style>
<div class="index-container">
  <a href="customerLogin.php" class="index-link">I am a Customer</a>
  <br>
  <a href="supplierLogin.php" class="index-link">I am a Water Supplier</a>
  <div class="index-admin">
    Are you an admin? 
    <a href="adminLogin.php" class="index-link">Click Here</a>
  </div>
</div>

<?php include 'footer.php'; ?>