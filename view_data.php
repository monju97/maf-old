<?php
// Connect to the database (Replace 'username', 'password', and 'database_name' with your database credentials)
$conn = new mysqli('localhost', 'monju97', '/M[n(47hd[Cftdo6', 'local_network');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement to select all data from the database
$sql1 = "SELECT * FROM network_info";

// Execute the query
$result = $conn->query($sql1);

// Check if there are any rows in the result


// Close the connection
$conn->close();
?>



<!DOCTYPE html>
<html>
<head>
    <title>View Data</title>
</head>
<body>
    <h1>View Data</h1>
    <p>This is an example of how to view the data from the database:</p>
     <?php
     
     if ($result->num_rows > 0) {
        // Output the data in a table
        echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>PC Model</th>
                <!-- Add more table headers for other columns -->
                <!-- ... -->
            </tr>";
    
        // Loop through the rows and display the data
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row['name'] . "</td>
                <td>" . $row['pc_model'] . "</td>
                <!-- Add more table cells for other columns -->
                <!-- ... -->
            </tr>";
        }
    
        echo "</table>";
    } else {
        echo "No data found.";
    }
     
     
     
     
     
     
     
     
     
     
     ?>
</body>
</html>


