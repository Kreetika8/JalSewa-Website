<?php include 'header.php';
include '../server/dbConnection';
session_start(); 

/**  from session assign the user id and email onto the id and email variable, then 
* then connect the db , and sql query the id and email and fetch all the data,
* assing the fetched data onto the corresponding variables from sql, 
* then use php inscript to insert the data onto the table below.
*/


// session values assigned onto the vraibles

$id = $_SESSION['user_id'];
$email= $_SESSION['email'];

// connection to the database
$conn = getDbConnection();

    

    // Prepare SQL to fetch supplier by email
    $sql = "SELECT * FROM suppliers WHERE id = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $id,$email);
    $stmt->execute();
    $stmt->store_result();


        $stmt->bind_result(); // Bind the columns from the database
        $stmt->fetch();

     


        //continue xD
?>

  <h1>Supplier Profile</h1>

  <div>
    <h2>Factory Information</h2>
    <p><strong>Factory Name: </strong> ABC Water Factory</p>
    <p><strong>Business Registration Number:</strong> 123456789</p>
    <p><strong>Factory Address:</strong> 123 Main Street, Cityville</p>
    <p><strong>Daily Production Capacity:</strong> 5000 liters</p>
    <p><strong>Water Types Offered:</strong> Mineral Water, Regular Jar Water</p>
  </div>

  <div>
    <h2>Contact Information</h2>
    <p><strong>Contact Person:</strong> John Doe</p>
    <p><strong>Email:</strong> johndoe@example.com</p>
    <p><strong>Phone Number:</strong> 9876543210</p>
  </div>

  <div>
    <h2>Uploaded Documents</h2>
    <p><strong>Business Registration Certificate:</strong> <a href="path_to_certificate.pdf" target="_blank">View Document</a></p>
    <p><strong>Recent Utility Bill:</strong> <a href="path_to_utility_bill.pdf" target="_blank">View Document</a></p>
  </div>

  <div>
    <h2>Account Actions</h2>
    <button onclick="location.href=''">Edit Profile</button>
    <button onclick="location.href=''">View Orders</button>
    <button onclick="location.href=''">Logout</button>
  </div>
  <?php include 'footer.php'; ?>
