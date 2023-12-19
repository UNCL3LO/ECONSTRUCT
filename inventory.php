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
                <li><a href="profile.php">Dashboard</a></li>
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
