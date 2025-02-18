<?php include 'header.php'; ?>

    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Supplier</title>
    <link rel="stylesheet" href="../CSS/supplierHome.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  </head>

<body>
  <div style="margin-top:20px; margin-bottom: 50px; padding: 20px;">
  <div class="container1">
    

    <!-- Profile Information Section -->
    <div class="profile-section">
        <div class="profile-image">
            <label for="profile-upload">
                <img id="profile-pic" src="../IMAGE/profile.jpg" alt="User Profile">
            </label>
        </div>
        <div class="user-info">
            <h2 id="company-name">Dev Water Supplier Company</h2>
            <p id="location">Kalopul, Kathmandu</p>
            <p id="contact">+977 9800000000</p>
        </div>
    </div>
  </div>

    <div class="container2">
      <div class="header-Categories">
          <h1>Categories</h1>
          <i class="fas fa-plus"></i>
      </div>
      <div class="category-list">
          <div class="category-item">
              <div class="category-info">
                  <img src="../IMAGE/waterBottle.jpeg" alt="Image of a case of water bottles">
                  <div>
                      <h2>Water Bottle (1 Case)</h2>
                      <p>1 liter of water per bottle and 8 bottles per case.</p>
                  </div>
              </div>
              <div class="category-action">
                  <p>Rs. 180</p>
                  <button>Update</button>
              </div>
          </div>
          <div class="category-item">
              <div class="category-info">
                  <img src="../IMAGE/WaterJar.png" alt="Image of a water jar">
                  <div>
                      <h2>Water Jar (Per Jar)</h2>
                      <p>50 liters of water per jar.</p>
                  </div>
              </div>
              <div class="category-action">
                  <p>Rs. 50</p>
                  <button>Update</button>
              </div>
          </div>
          <div class="category-item">
              <div class="category-info">
                  <img src="../IMAGE/WaterTanker.jpeg" alt="Image of a water tanker">
                  <div>
                      <h2>Water Tanker</h2>
                      <p>2500 liters of water per order or tanker.</p>
                  </div>
              </div>
              <div class="category-action">
                  <p>Rs. 3000</p>
                  <button>Update</button>
              </div>
          </div>
      </div>
      <div class="DoneButton">
          <button>DONE</button>
      </div>
  </div>
</div>
</body>
</html> 
    <?php include 'footer.php'; ?>