<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="../CSS/customerHome.css">
  <link rel="stylesheet" href="../CSS/supplier.css">
  <link rel="stylesheet" href="../CSS/customerProfile.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- <link rel="stylesheet" href="../CSS/styles.css"> -->
</head>
<body>
    <header>
        <nav>
        <div class="logo">
        <img src="../IMAGE/logo.png" alt="JalSewa Logo">
    </div>
            <ul id="nav-list">
                <?php if (isset($_SESSION['user'])): ?>
                    
                    <?php
                    if ($_SESSION['role'] === 'customer'): ?>
                        <li><a href="customerHome.php">Home</a></li>
                        <li><a href="customerProfile.php">My Profile</a></li>
                        <li><a href="order.php">Order Water</a></li>
                        <li><a href="supplierlist.php">Suppliers</a></li>
                        <li><a href="../server/logout.php">Logout</a></li>
                    <?php elseif ($_SESSION['role'] === 'supplier'): ?>
                        <li><a href="customerHome.php">Home</a></li>
                        <li><a href="supplierProfile.php">My Profile</a></li>
                        <li><a href="/manage">Manage Listings</a></li>
                        <li><a href="/ratings">View Ratings</a></li>
                        <li><a href="../server/logout.php">Logout</a></li>
                    <?php elseif ($_SESSION['role'] === 'admin'): ?>
                        <li><a href="/admin">Admin Dashboard</a></li>
                        <li><a href="../server/logout.php">Logout</a></li>
                    <?php endif; ?>
                <?php else: ?>
                    <li><a href="index.php">Home</a></li>
                    <div class="auth-button">
                        <button onclick="window.location.href='index.php';">Login</button>
                    </div>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    