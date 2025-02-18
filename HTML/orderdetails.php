<?php include 'header.php'; ?>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
  body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding-bottom: 50px; /* Adjust based on footer height */
  }
</style>

<div class="flex justify-center items-center min-h-screen p-8">
  <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
    <div class="flex flex-col items-center">
      <img alt="Profile picture" class="rounded-full w-24 h-24 mb-4" height="100" src="../IMAGE/profile.jpg" width="100"/>
      <h2 class="text-xl font-bold">
        <span class="customerName">Ram Tamang</span>
      </h2>
      <p class="text-gray-600 customerAddress">
        Kalopul, Kathmandu
      </p>
      <p class="text-gray-600 customerPhone">
        +977 9800000000
      </p>
    </div>
    <h3 class="text-xl font-bold mt-6 mb-2">
      Order Status
    </h3>
    <div class="border-b-2 border-black w-16 mb-4"></div>
    <div class="bg-blue-100 p-4 rounded-lg">
      <div class="flex justify-between mb-2">
        <span class="font-bold">
          Order Details
        </span>
        <span class="font-bold">
          Order No: <span class="orderNo">00001</span>
        </span>
      </div>
      <div class="flex justify-between mb-2">
        <span>Location:</span>
        <span class="location">Location</span>
      </div>
      <div class="flex justify-between mb-2">
        <span>Time:</span>
        <span class="time">Time</span>
      </div>
      <div class="flex justify-between mb-2">
        <span>Date:</span>
        <span class="date">Date</span>
      </div>
      <div class="flex justify-between mb-2">
        <span>Payment Method:</span>
        <span class="paymentMethod">Payment Method</span>
      </div>
      <div class="flex justify-between mb-2">
        <span>Status:</span>
        <span class="orderStatus">Pending</span>
      </div>
      <div class="mt-4">
        <div class="bg-blue-500 text-white p-4 rounded-lg mb-2 flex items-center">
          <img alt="Water Bottle (1 Case)" class="w-12 h-12 mr-4" height="50" src="../IMAGE/waterBottle.jpeg" width="50"/>
          <div>
            <h4 class="font-bold">Water Bottle (1 Case)</h4>
            <p class="text-sm">1 liter of water per bottle and 8 bottles per case.</p>
          </div>
        </div>
        <div class="bg-blue-500 text-white p-4 rounded-lg mb-2 flex items-center">
          <img alt="Water Jar (Per Jar)" class="w-12 h-12 mr-4" height="50" src="../IMAGE/WaterJar.png" width="50"/>
          <div>
            <h4 class="font-bold">Water Jar (Per Jar)</h4>
            <p class="text-sm">50 liters of water per jar.</p>
          </div>
        </div>
        <div class="bg-blue-500 text-white p-4 rounded-lg flex items-center">
          <img alt="Water Tanker" class="w-12 h-12 mr-4" height="50" src="../IMAGE/WaterTanker.jpeg" width="50"/>
          <div>
            <h4 class="font-bold">Water Tanker</h4>
            <p class="text-sm">2500 liters of water per order of tanker.</p>
          </div>
        </div>
      </div>
      <div class="flex justify-between mt-4">
        <span class="font-bold">Total:</span>
        <span class="font-bold totalPrice">Rs.1000</span>
      </div>
    </div>
    <div class="mt-4 flex justify-center">
      <button class="bg-red-500 text-white px-4 py-2 rounded-full">
        Pending
      </button>
    </div>
  </div>
</div>

<script>
  const urlParams = new URLSearchParams(window.location.search);
  const order_id = urlParams.get('order_id');

  if (order_id) {
    // Fetch order details
    $.ajax({
      url: '../server/fetchOrderDetailsFromOrderID.php',
      method: 'GET',
      data: { order_id: order_id },
      success: function(orderData) {
      
        if (orderData && !orderData.error) {
          // Populate the order details
          $(".orderNo").text(orderData.order_id);
          $(".location").text(orderData.delivery_address);
          $(".paymentMethod").text(orderData.payment_method);
          $(".orderStatus").text(orderData.status);
          $(".time").text(orderData.created_time);
          $(".date").text(orderData.created_date);
          
          // Fetch customer details using customer_id from order
          $.ajax({
            url: '../server/FetchCustomersData.php',
            method: 'GET',
            data: { customer_id: orderData.customer_id },
            success: function(customerData) {
             
              
              if (customerData && !customerData.error) {
                $(".customerName").text(customerData.full_name);
                $(".customerAddress").text(customerData.address);
                $(".customerPhone").text(customerData.phone);
              }
            }
          });

          // Fetch supplier details using supplier_id from order
          $.ajax({
            url: '../server/FetchSuppliersData.php',
            method: 'GET',
            data: { supplier_id: orderData.supplier_id },
            success: function(supplierData) {
              console.log("Supplier Data:", supplierData); 

              if (supplierData && !supplierData.error) {
                $(".supplierName").text(supplierData.factory_name);
                $(".supplierAddress").text(supplierData.factory_address);
                $(".supplierPhone").text(supplierData.phone);
                
                
                let pricePerUnit = 0;

            
                
                if (orderData.water_type === "jar") {
                  pricePerUnit = supplierData.water_jar;
                } else if (orderData.water_type === "mineral_water") {
                  pricePerUnit = supplierData.water_bottle;
                } else if (orderData.water_type === "water_tanker") {
                  pricePerUnit = supplierData.water_tanker;
                }

              
                const totalPrice = pricePerUnit * orderData.quantity;
                $(".totalPrice").text("Rs." + totalPrice); 
                $.ajax({
                  url: '../server/UpdateTotalPrice.php', 
                  method: 'POST',
                  data: {
                    order_id: orderData.order_id,
                    total_price: totalPrice
                  },
                  success: function(response) {
                    console.log("Total price updated successfully:", response);
                  },
                  error: function(error) {
                    console.log("Error updating total price:", error);
                  }
                });
             
              }
            }
          });
        }
      }
    });
  }
</script>

<?php include 'footer.php'; ?>
