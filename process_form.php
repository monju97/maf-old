<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the form data
    $name = $_POST['name'];
    $pc_model = $_POST['pcModel'];
    $serial_no = $_POST['serialNo'];
    $ram = $_POST['ram'];
    $ssd = $_POST['ssd'];
    $hdd = $_POST['hdd'];
    $ip = $_POST['ip'];
    $internet_access = $_POST['internetAccess'];
    $pc_name = $_POST['pcName'];
    $domain_name = $_POST['domainName'];
    $mail_id = $_POST['mailID'];
    $ip_phone = $_POST['telephone'];
    $keyboard = $_POST['keyboard1'];
    $mouse = $_POST['mouse'];
    $monitor = $_POST['monitor'];
    $ups = $_POST['ups'];
    $windows_version = $_POST['windowsVersion'];
    $department = $_POST['department'];
    $asset_code = $_POST['assetCode'];   
    $emp_id = $_POST['emp_id'];
    $device=$_POST['device'];
        
        if ($device == "desktop") {
            $desktop = 1;
            $laptop =0;
        } elseif ($device == "laptop") {
            $laptop = 1;
            $desktop=0;
        }

    // Connect to the database (Replace 'username', 'password', and 'database_name' with your database credentials)
    $conn = new mysqli('localhost', 'root', '', 'local_network');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL statement to insert data into the database
    $sql = "INSERT INTO network_info (name, pc_model, serial_no, ram, ssd, hdd, ip, internet_access, pc_name, domain_name, mail_id, ip_phone, keyboard, mouse, monitor, ups, windows_version, department, asset_code, emp_id,desktop,laptop) VALUES ('$name', '$pc_model', '$serial_no', '$ram', '$ssd', '$hdd', '$ip', '$internet_access', '$pc_name', '$domain_name', '$mail_id', '$ip_phone', '$keyboard', '$mouse', '$monitor', '$ups', '$windows_version', '$department', '$asset_code', '$emp_id', '$desktop', '$laptop')";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // // Bind the parameters ,desktop,laptop , '$desktop', '$laptop
    // $stmt->bind_param("ssssssssssssssssssss", $name, $pc_model, $serial_no, $ram, $ssd, $hdd, $ip, $internet_access, $pc_name, $domain_name, $mail_id, $ip_phone, $keyboard, $mouse, $monitor, $ups, $windows_version, $department, $asset_code, $emp_id);

   // Execute the statement 
    try{
    if ($stmt->execute()) {
       
        echo "Data stored successfully!";            
            // Close the statement and connection
        $stmt->close();
        $conn->close();

        $conn = new mysqli('localhost', 'root', '', 'local_network');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement to select all data from the database
$sql1 = "SELECT * FROM network_info ORDER BY id DESC LIMIT 1";


// Execute the query
$result = $conn->query($sql1);
// Check if there are any rows in the result
     if ($result->num_rows > 0) {
        // Output the data in a table
        echo "<table border='1'>
            <tr>
                <th>    Name </th>
                <th>	Emp_ID 	</th>
                <th>    PC Model</th>
                <th>	Serial_no 	</th>
                <th>	RAM 	</th>
                <th>	SSD 	</th>
                <th>	HDD 	</th>
                <th>	IP 	</th>
                <th>	Internet 	</th>
                <th>	Pc_name 	</th>
                <th>	Domain_name 	</th>
                <th>	mail_id 	</th>
                <th>	IP_Phone 	</th>
                <th>	Keyboard 	</th>
                <th>	Mouse 	</th>
                <th>	Monitor 	</th>
                <th>	UPS 	</th>
                <th>	Win_version 	</th>
                <th>	Department 	</th>
                <th>	Asset_Code 	</th>
                             
                </tr>";
    
        // Loop through the rows and display the data
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row['name'] . "</td>
                <td>" . $row['emp_id'] . "</td>
                <td>" . $row['pc_model'] . "</td>
                <td>" . $row['serial_no'] . "</td>
                <td>" . $row['ram'] . "</td>
                <td>" . $row['ssd'] . "</td>
                <td>" . $row['hdd'] . "</td>
                <td>" . $row['ip'] . "</td>
                <td>" . $row['internet_access'] . "</td>
                <td>" . $row['pc_name'] . "</td>
                <td>" . $row['domain_name'] . "</td>
                <td>" . $row['mail_id'] . "</td>
                <td>" . $row['ip_phone'] . "</td>
                <td>" . $row['keyboard'] . "</td>
                <td>" . $row['mouse'] . "</td>
                <td>" . $row['monitor'] . "</td>
                <td>" . $row['ups'] . "</td>
                <td>" . $row['windows_version'] . "</td>
                <td>" . $row['department'] . "</td>
                <td>" . $row['asset_code'] . "</td>
                               

            </tr>";
        }
    
        echo "</table>";
    } else {
        echo "No data found.";
    }



    }else {
        echo "Error executing the query: " . $stmt->error;
    }
    } 
    catch (mysqli_sql_exception $e) {
    echo "Error: " . "Duplicate data found " . "Serial No. Must Be Unique";
    }
}

    
    else {
        echo "Error: " . $conn->error;
    }



?>