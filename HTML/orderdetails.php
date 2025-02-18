<?php include 'header.php' ?>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
  body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding-top: 80px; /* Adjust based on navbar height */
    padding-bottom: 50px; /* Adjust based on footer height */
}
  </style>

 <body class="bg-gray-100 flex flex-col items-center p-4">
 <div class="mt-20 mb-10">
  <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
   <div class="flex flex-col items-center">
    <img alt="Profile picture " class="rounded-full w-24 h-24 mb-4" height="100" src="" width="100"/>
    <h2 class="text-xl font-bold">
     Ram Tamang
    </h2>
    <p class="text-gray-600">
     Kalopul, Kathmandu
    </p>
    <p class="text-gray-600">
     +977 9800000000
    </p>
   </div>
   <h3 class="text-xl font-bold mt-6 mb-2">
    Order Status
   </h3>
   <div class="border-b-2 border-black w-16 mb-4">
   </div>
   <div class="bg-blue-100 p-4 rounded-lg">
    <div class="flex justify-between mb-2">
     <span class="font-bold">
      Order Details
     </span>
     <span class="font-bold">
      Order No:00001
     </span>
    </div>
    <div class="flex justify-between mb-2">
     <span>
      Location:
     </span>
     <span>
      Location
     </span>
    </div>
    <div class="flex justify-between mb-2">
     <span>
      Time:
     </span>
     <span>
      Time
     </span>
    </div>
    <div class="flex justify-between mb-2">
     <span>
      Date:
     </span>
     <span>
      Date
     </span>
    </div>
    <div class="flex justify-between mb-2">
     <span>
      Payment Method:
     </span>
     <span>
      Payment Method
     </span>
    </div>
    <div class="flex justify-between mb-2">
     <span>
      Status:
     </span>
     <span>
      Pending
     </span>
    </div>
    <div class="mt-4">
     <div class="bg-blue-500 text-white p-4 rounded-lg mb-2 flex items-center">
      <img alt="Water Bottle (1 Case)" class="w-12 h-12 mr-4" height="50" src="../IMAGE/waterBottle.jpeg" width="50"/>
      <div>
       <h4 class="font-bold">
        Water Bottle (1 Case)
       </h4>
       <p class="text-sm">
        1 liter of water per bottle and 8 bottles per case.
       </p>
      </div>
     </div>
     <div class="bg-blue-500 text-white p-4 rounded-lg mb-2 flex items-center">
      <img alt="Water Jar (Per Jar)" class="w-12 h-12 mr-4" height="50" src="../IMAGE/WaterJar.png" width="50"/>
      <div>
       <h4 class="font-bold">
        Water Jar (Per Jar)
       </h4>
       <p class="text-sm">
        50 liters of water per jar.
       </p>
      </div>
     </div>
     <div class="bg-blue-500 text-white p-4 rounded-lg flex items-center">
      <img alt="Water Tanker" class="w-12 h-12 mr-4" height="50" src="../IMAGE/WaterTanker.jpeg" width="50"/>
      <div>
       <h4 class="font-bold">
        Water Tanker
       </h4>
       <p class="text-sm">
        2500 liters of water per order of tanker.
       </p>
      </div>
     </div>
    </div>
    <div class="flex justify-between mt-4">
     <span class="font-bold">
      Total:
     </span>
     <span class="font-bold">
      Rs.1000
     </span>
    </div>
   </div>
   <div class="mt-4 flex justify-center">
    <button class="bg-red-500 text-white px-4 py-2 rounded-full">
     Pending
    </button>
    
   </div>
  </div>
</div>
<?php include 'footer.php'; ?>