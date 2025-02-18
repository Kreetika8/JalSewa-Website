<?php include 'header.php'; ?>
<style>
  /* body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f8ff;
  } */

  .index-container {
    text-align: center;
    margin: 50px auto;
    max-width: 80px;
  }

  .hero-section {
    background-color: #1072BA;
    color: white;
    width: 90%;
    max-width: 900px;
    height: 300px; /* Set a fixed height */
    margin: 30px auto;
    padding: 50px 20px;
    text-align: center;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }


  .hero-title {
    font-size: 32px;
    font-weight: bold;
    color: white;
  }

  .hero-subtitle {
    font-size: 18px;
    margin-top: 10px;
    color: white;
  }

  .index-link {
    display: inline-block;
    padding: 12px 25px;
    margin: 15px;
    font-size: 18px;
    color: #fff;
    background-color: #1072BA;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease-in-out;
  }

  .index-link:hover {
    background-color: #FF9800;
  }

  .about-section {
    margin-top: 40px;
    padding: 20px;
    text-align: justify;
    background: white;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
  }

  .about-title {
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 10px;
  }

  .about-text {
    font-size: 16px;
    line-height: 1.6;
  }
</style>

<!-- Hero Section -->
<div class="hero-section">
  <h1 class="hero-title">Welcome to Jal Sewa</h1>
  <p class="hero-subtitle">Your trusted water delivery service in Nepal.</p>
</div>

<!-- Main Content -->
<div style="display: flex; flex-direction: column; align-items: center; text-align: center; max-width: 400px; margin: 50px auto;">
  <a href="customerLogin.php" style="display: block; width: 200px; height: 50px; line-height: 50px; text-align: center; background-color: #1072BA; color: white; text-decoration: none; border-radius: 8px; font-size: 16px; font-weight: bold; margin-bottom: 15px; transition: background-color 0.3s;">
    I am a Customer
  </a>
  <a href="supplierLogin.php" style="display: block; width: 200px; height: 50px; line-height: 50px; text-align: center; background-color: #1072BA; color: white; text-decoration: none; border-radius: 8px; font-size: 16px; font-weight: bold; transition: background-color 0.3s;">
    I am a Water Supplier
  </a>
</div>




<!-- About Jal Sewa -->
<div class="about-section">
  <h2 class="about-title">About Jal Sewa</h2>
  <p class="about-text">
    Jal Sewa is a reliable online platform that connects customers with trusted water suppliers in Nepal. 
    Our mission is to ensure that clean and safe drinking water is delivered to homes, offices, and businesses with ease. 
    Whether you need water bottles, jars, or tankers, Jal Sewa provides a seamless ordering experience.
  </p>
</div>

<?php include 'footer.php'; ?>
