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

    // Connect to the database (Replace 'username', 'password', and 'database_name' with your database credentials)
    $conn = new mysqli('localhost', 'monju97', '/M[n(47hd[Cftdo6', 'local_network');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL statement to insert data into the database
    $sql = "INSERT INTO network_info (name, pc_model, serial_no, ram, ssd, hdd, ip, internet_access, pc_name, domain_name, mail_id, ip_phone, keyboard, mouse, monitor, ups, windows_version, department, asset_code,emp_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind the parameters
    $stmt->bind_param("ssssssssssssssssssss", $name, $pc_model, $serial_no, $ram, $ssd, $hdd, $ip, $internet_access, $pc_name, $domain_name, $mail_id, $ip_phone, $keyboard, $mouse, $monitor, $ups, $windows_version, $department, $asset_code, $emp_id);

    // Prepare the SQL statement to select all data from the database
    $sql1 = "SELECT * FROM network_info";

    // Execute the query
    $result = $conn->query($sql1);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "Data stored successfully!";            
        

    } else {
        echo "Error: " . $conn->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
