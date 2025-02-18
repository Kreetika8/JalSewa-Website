<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Water Factory Portal</title>
    <link rel="stylesheet" href="../CSS/styles.css">
</head>
<body>
    <header>
        <nav>
            <ul id="nav-list">
                <li><a href="index.php">Home</a></li>
                <?php if (isset($_SESSION['user'])): ?>
                    <li><a href="/profile">My Profile</a></li>
                    <li><a href="/logout">Logout</a></li>
                    <?php
                    if ($_SESSION['role'] === 'customer'): ?>
                        <li><a href="/order">Order Water</a></li>
                    <?php elseif ($_SESSION['role'] === 'supplier'): ?>
                        <li><a href="/manage">Manage Listings</a></li>
                        <li><a href="/ratings">View Ratings</a></li>
                    <?php elseif ($_SESSION['role'] === 'admin'): ?>
                        <li><a href="/admin">Admin Dashboard</a></li>
                    <?php endif; ?>
                <?php else: ?>
                    <li><a href="/login">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    
    <script src="script.js"></script>