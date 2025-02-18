<?php
require_once 'dbConnection.php';
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    $factory_name = $_POST['factory_name'];
    $business_number = $_POST['business_number'];
    $factory_address = $_POST['factory_address'];
    $contact_person = $_POST['contact_person'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $capacity = $_POST['capacity'];
    $water_type = $_POST['water_type'];
    $password = $_POST['password'];
  

    $business_certificate = $_FILES['business_certificate'];
    $utility_bill = $_FILES['utility_bill'];
    $business_certificate_dir = "img/supplier_business_certificate/";
    $utility_bill_dir = "img/supplier_utility_bill/";

    // concatinating factoryname+utility_bill and factoryname+business_number and renaming the imgs
    $business_certificate_name = $factory_name . "_business_certificate.".pathinfo($business_certificate["name"], PATHINFO_EXTENSION);
    $utility_bill_name = $factory_name . "_utility_bill.".pathinfo($utility_bill["name"], PATHINFO_EXTENSION);

   //directory path at server/img/
    $business_certificate_path = $business_certificate_dir . $business_certificate_name; 
    $utility_bill_path = $utility_bill_dir . $utility_bill_name;

    //moving the files from local tmp to folder
    if (move_uploaded_file($business_certificate["tmp_name"],
     $business_certificate_path) && move_uploaded_file($utility_bill["tmp_name"],
      $utility_bill_path)) {

        $conn = getDbConnection();
        $sql = "INSERT INTO suppliers (factory_name, business_number, factory_address, contact_person, phone, email, capacity, water_type, business_certificate, utility_bill, password) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssssss", 
            $factory_name, 
            $business_number, 
            $factory_address, 
            $contact_person, 
            $phone, 
            $email, 
            $capacity, 
            $water_type, 
            $business_certificate_path, 
            $utility_bill_path, 
            $password
        );

        if ($stmt->execute()) {
            $stmt->close();
            $conn->close();
            header('Location: ../HTML/supplierProfile.php');
          
        } else {
            echo "error register";
        }

       
    } else {
        echo "Error uploading files.";
    }

    
    

}
?>
