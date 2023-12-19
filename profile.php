<?php
session_start();
if (isset($_SESSION['user_name'])) {
    $user_name = $_SESSION['user_name'];
}

include 'dbconnect.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>User Profile</title>
    </head>
    <body>
        <header>
            <ul>
                <li>Profile</li>
                <li><a href="inventory.php">Inventory</a></li>
                <li>Workers</li>
                <li>Projects</li>
            </ul>
            <hr>
        </header>
        <?php
                    // Retrieve user information from session variables
                    $user_name = $_SESSION['user_name'];
                    $user_type = $_SESSION['user_type'];
                    $dob = $_SESSION['dob'];
                    $phone_number = $_SESSION['phone_number'];
                    $job_title = $_SESSION['job_title'];
                    ?>

         <!-- HTML content of the profile page -->

         <h1>Welcome, <?php echo $title . " " . $user_name; ?>!</h1>

<h2>Profile</h2>

<p>Username: <?php echo $user_name; ?></p>
<p>User Type: <?php echo $user_type; ?></p>
<p>Birthdate: <?php echo $dob; ?></p>
<p>Phone Number: <?php echo $phone_number; ?></p>
<p>Job Title <?php echo $job_title; ?></p>

    </body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management Dashboard</title>
    <link rel="stylesheet" href="styles.css"> <!-- Add your styles if needed -->
</head>
<body>
    <div class="dashboard">
        <h1>Welcome to the Inventory Management Dashboard</h1>
        
        <!-- Navigation Menu -->
        <nav>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="inventory.php">Inventory Overview</a></li>
                <li><a href="add_update.php">Add/Update Items</a></li>
                <li><a href="order_management.php">Order Management</a></li>
                <li><a href="reports.php">Reports</a></li>
                <li><a href="settings.php">Settings</a></li>
            </ul>
        </nav>
        
        <!-- Display Key Metrics on Dashboard -->
        <div class="metrics">
            <!-- You can dynamically fetch and display key metrics here -->
            <p>Total Inventory Value: $XXX</p>
            <p>Low-Stock Alerts: XX items</p>
            <!-- Add more metrics as needed -->
        </div>
    </div>
</body>
</html>

