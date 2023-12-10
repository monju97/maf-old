<?php
// Connect to the database (Replace 'username', 'password', and 'database_name' with your database credentials)
$conn = new mysqli('localhost', 'monju97', '/M[n(47hd[Cftdo6', 'local_network');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement to select all data from the database
$sql = "SELECT * FROM network_info";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<style>
/* Your CSS styles here */
</style>
</head>
<body lang="EN-US" style="word-wrap:break-word">
    <div>
        <table>
            <!-- Your form HTML code here -->
            <!-- ... -->
        </table>
    </div>

    <div>
        <?php
        if ($result->num_rows > 0) {
            // Output the data in a table
            echo "<table border='1'>
                <tr>
                    <th>Name</th>
                    <th>Employee ID</th>
                    <!-- Add more table headers for other columns -->
                    <!-- ... -->
                </tr>";

            // Loop through the rows and display the data
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['Emp_ID'] . "</td>
                    <!-- Add more table cells for other columns -->
                    <!-- ... -->
                </tr>";
            }

            echo "</table>";
        } else {
            echo "No data found.";
        }
        ?>
    </div>
</body>
</html>

<?php
// Close the connection
$conn->close();
?>
