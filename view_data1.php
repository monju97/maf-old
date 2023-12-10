<?php
// Connect to the database (Replace 'username', 'password', and 'database_name' with your database credentials)
$conn = new mysqli('localhost', 'monju97', '/M[n(47hd[Cftdo6', 'local_network');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement to select all data from the database
$sql = "SELECT * FROM network_info";

// Execute the query
$result = $conn->query($sql);

// Check if there are any rows in the result
if ($result->num_rows > 0) {
    // Output the data in a table
    echo "<table border='1'>
        <tr>
            <th>User Name</th>
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

// Close the connection
$conn->close();
?>
