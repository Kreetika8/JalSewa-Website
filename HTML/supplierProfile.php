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

<center><h1>Supplier Profile</h1></center>

<div id="supplier-profile-container">
  
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
                document.getElementById("supplier-profile-container").innerHTML = "<p>Error: " + supplier.error + "</p>";
            } else {
                var profileHTML = `
                <center>
                    <div>
                        <h2>Factory Information</h2>
                        <p><strong>Factory Name: </strong> ${supplier.factory_name}</p>
                        <p><strong>Business Registration Number:</strong> ${supplier.business_number}</p>
                        <p><strong>Factory Address:</strong> ${supplier.factory_address}</p>
                        <p><strong>Daily Production Capacity:</strong> ${supplier.capacity}</p>
                        <p><strong>Water Types Offered:</strong> ${supplier.water_type}</p>
                    </div>

                    <div>
                        <h2>Contact Information</h2>
                        <p><strong>Contact Person:</strong> ${supplier.contact_person}</p>
                        <p><strong>Email:</strong> ${supplier.email}</p>
                        <p><strong>Phone Number:</strong> ${supplier.phone}</p>
                    </div>

                    <div>
                        <h2>Uploaded Documents</h2>
                        <p><strong>Business Registration Certificate:</strong> <a href="${supplier.business_certificate}" target="_blank">View Document</a></p>
                        <p><strong>Recent Utility Bill:</strong> <a href="${supplier.utility_bill}" target="_blank">View Document</a></p>
                    </div>

                    <div>
                        <h2>Account Actions</h2>
                        <button onclick="location.href='editProfile.php'">Edit Profile</button>
                        <button onclick="location.href='../HTML/orderlist.php'">View Orders</button>
                        <button onclick="location.href='../server/logout.php'">Logout</button>
                    </div>
                    </center>
                `;
                document.getElementById("supplier-profile-container").innerHTML = profileHTML;
            }
        } else {
            document.getElementById("supplier-profile-container").innerHTML = "<p>Error fetching data.</p>";
        }
    };
    
    xhr.send("user_id=" + userId + "&email=" + email);
});
</script>

<?php include 'footer.php'; ?>
