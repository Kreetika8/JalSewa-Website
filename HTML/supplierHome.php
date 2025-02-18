<?php 
include 'header.php'; 

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id'])) {
    echo "You are not logged in.";
    exit;
}

$user_id = $_SESSION['user_id'];
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Supplier</title>
    <link rel="stylesheet" href="../CSS/supplierHome.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  </head>

<body>
  <div style="margin-top:20px; margin-bottom: 50px; padding: 20px;">
    <div class="container1">
      
      <div class="profile-section">
          <div class="profile-image">
              <label for="profile-upload">
                  <img id="profile-pic" src="../IMAGE/profile.jpg" alt="User Profile">
              </label>
          </div>
          <div class="user-info">
              <h2 id="company-name">Loading...</h2>
              <p id="location">Loading...</p>
              <p id="contact">Loading...</p>
          </div>
      </div>
    </div>

    <div class="container2">
      <div class="header-Categories">
          <h1>Categories</h1>
          <i class="fas fa-plus"></i>
      </div>
      <div class="category-list" id="category-list">
        
      </div>
      <div class="DoneButton">
          <button id="done-btn">DONE</button>
      </div>
    </div>
  </div>

<script>

document.addEventListener("DOMContentLoaded", function() {
    var userId = <?php echo json_encode($user_id); ?>;
    var email = <?php echo json_encode($email); ?>;
    

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../server/FetchSuppliersData.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onload = function() {
        if (xhr.status == 200) {
            var supplier = JSON.parse(xhr.responseText);
            
            if (supplier.error) {
                document.getElementById("company-name").innerText = supplier.error;
                document.getElementById("location").innerText = '';
                document.getElementById("contact").innerText = '';
                document.getElementById("category-list").innerHTML = "<p>Error fetching categories.</p>";
            } else {
             
                document.getElementById("company-name").innerText = supplier.factory_name;
                document.getElementById("location").innerText = supplier.factory_address;
                document.getElementById("contact").innerText = supplier.phone;

                
                   if (supplier.business_certificate) {
                    document.getElementById("profile-pic").src = "../server/" + supplier.business_certificate;
                } else {
                  
                    document.getElementById("profile-pic").src = "../IMAGE/default-profile.jpg";
                }

         
                var categoriesHTML = '';
                var categories = [
                    {name: "Water Bottle", img: "../IMAGE/waterBottle.jpeg", price: supplier.water_bottle, description: "1 liter of water per bottle and 8 bottles per case."},
                    {name: "Water Jar", img: "../IMAGE/WaterJar.png", price: supplier.water_jar, description: "50 liters of water per jar."},
                    {name: "Water Tanker", img: "../IMAGE/WaterTanker.jpeg", price: supplier.water_tanker, description: "2500 liters of water per order or tanker."}
                ];

                categories.forEach(function(category, index) {
                    if (category.price > -1) {
                        categoriesHTML += `
                        <div class="category-item">
                            <div class="category-info">
                                <img src="${category.img}" alt="Image of ${category.name}">
                                <div>
                                    <h2>${category.name} (Per Unit)</h2>
                                    <p>${category.description}</p>
                                </div>
                            </div>
                            <div class="category-action">
                                <p>Rs. </P> <input type="number" id="category-price-${index}" value="${category.price}" />
                                
                            </div>
                        </div>`;
                    }
                });

                
                if (categoriesHTML === '') {
                    categoriesHTML = "<p>No water categories available.</p>";
                }

               
                document.getElementById("category-list").innerHTML = categoriesHTML;
            }
        } else {
            document.getElementById("company-name").innerText = "Error fetching data.";
        }
    };
    
    xhr.send("user_id=" + userId + "&email=" + email);


    document.getElementById("done-btn").addEventListener("click", function() {
        var waterBottlePrice = document.getElementById("category-price-0").value;
        var waterJarPrice = document.getElementById("category-price-1").value;
        var waterTankerPrice = document.getElementById("category-price-2").value;

       
        var updatedPrices = {
            water_bottle: waterBottlePrice,
            water_jar: waterJarPrice,
            water_tanker: waterTankerPrice
        };

       
        var updateXhr = new XMLHttpRequest();
        updateXhr.open("POST", "../server/SupplierWaterPriceUpdate.php", true);
        updateXhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        updateXhr.onload = function() {
            if (updateXhr.status == 200) {
               
                window.location.href = "../HTML/supplierHome.php";
            } else {
                alert("Error updating prices.");
            }
        };

        updateXhr.send("user_id=" + userId + "&email=" + email + "&water_bottle=" + updatedPrices.water_bottle + "&water_jar=" + updatedPrices.water_jar + "&water_tanker=" + updatedPrices.water_tanker);
    });
});
</script>

</body>
</html>

<?php include 'footer.php'; ?>
