<?php include 'header.php' ?>
    <title>Customer Service Status</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .status-dropdown {
            appearance: none;
            background-color: transparent;
            border: none;
            padding: 0;
            margin: 0;
            font-size: inherit;
            font-family: inherit;
            cursor: pointer;
        }
        .status-dropdown option {
            background-color: white;
            color: black;
        }
        .status-pending {
            background-color: #D9D9D9;
            color: black;
        }
        .status-completed {
            background-color: #00AC4F;
            color: black;
        }
        .status-cancelled {
            background-color: #FF0000;
            color: black;
        }
        .status-ongoing {
            background-color: #FFB700;
            color: black;
        }
    </style>
</head>
<body class="bg-gray-100">
<div class="max-w-4xl mx-auto p-4">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-xl font-bold">Customer</h1>
        <button class="text-xl font-bold">Update Service</button>
    </div>
    <a href="/HTML/ordersDetails.html">
    <div class="bg-white p-4 rounded-lg shadow-md mb-4 border border-gray-200">
        <div class="flex items-center">
            <img alt="Profile picture of Ram Tamang" class="w-16 h-16 rounded-full mr-4" height="100" src="../IMAGE/profile.jpg" width="100"/>
            <div class="flex-1">
                <h2 class="text-lg font-medium">Ram Tamang</h2>
                <p class="text-gray-600">Kapan, Kathmandu</p>
                <p class="text-gray-600">+977 9800000000</p>
            </div>
            <select class="status-dropdown status-pending px-3 py-1 rounded-full">
                <option class="status-pending" value="pending">Pending</option>
                <option class="status-completed" value="completed">Completed</option>
                <option class="status-cancelled" value="cancelled">Cancelled</option>
                <option class="status-ongoing" value="ongoing">Ongoing</option>
            </select>
        </div>
    </div>
  </a>

  <a href="/HTML/ordersDetails.html">
    <div class="bg-white p-4 rounded-lg shadow-md mb-4 border border-gray-200">
        <div class="flex items-center">
            <img alt="Profile picture of Hari Tamang" class="w-16 h-16 rounded-full mr-4" height="100" src="../IMAGE/profile.jpg" width="100"/>
            <div class="flex-1">
                <h2 class="text-lg font-medium">Hari Tamang</h2>
                <p class="text-gray-600">Kapan, Kathmandu</p>
                <p class="text-gray-600">+977 9800000000</p>
            </div>
            <select class="status-dropdown status-completed px-3 py-1 rounded-full">
                <option class="status-pending" value="pending">Pending</option>
                <option class="status-completed" value="completed">Completed</option>
                <option class="status-cancelled" value="cancelled">Cancelled</option>
                <option class="status-ongoing" value="ongoing">Ongoing</option>
            </select>
        </div>
    </div>
  </a>

  <a href="/HTML/ordersDetails.html">
    <div class="bg-white p-4 rounded-lg shadow-md mb-4 border border-gray-200">
        <div class="flex items-center">
            <img alt="Profile picture of Bishnu Tamang" class="w-16 h-16 rounded-full mr-4" height="100" src="../IMAGE/profile.jpg" width="100"/>
            <div class="flex-1">
                <h2 class="text-lg font-medium">Bishnu Tamang</h2>
                <p class="text-gray-600">Kapan, Kathmandu</p>
                <p class="text-gray-600">+977 9800000000</p>
            </div>
            <select class="status-dropdown status-cancelled px-3 py-1 rounded-full">
                <option class="status-pending" value="pending">Pending</option>
                <option class="status-completed" value="completed">Completed</option>
                <option class="status-cancelled" value="cancelled">Cancelled</option>
                <option class="status-ongoing" value="ongoing">Ongoing</option>
            </select>
        </div>
    </div>
  </a>


    <a href="/HTML/ordersDetails.html">
    <div class="bg-white p-4 rounded-lg shadow-md mb-4 border border-gray-200">
        <div class="flex items-center">
            <img alt="Profile picture of Dev Tamang" class="w-16 h-16 rounded-full mr-4" height="100" src="../IMAGE/profile.jpg" width="100"/>
            <div class="flex-1">
                <h2 class="text-lg font-medium">Dev Tamang</h2>
                <p class="text-gray-600">Kapan, Kathmandu</p>
                <p class="text-gray-600">+977 9800000000</p>
            </div>
            <select class="status-dropdown status-ongoing px-3 py-1 rounded-full">
                <option class="status-pending" value="pending">Pending</option>
                <option class="status-completed" value="completed">Completed</option>
                <option class="status-cancelled" value="cancelled">Cancelled</option>
                <option class="status-ongoing" value="ongoing">Ongoing</option>
            </select>
        </div>
    </div>
  </a>
</div>
<?php include 'footer.php'; ?>