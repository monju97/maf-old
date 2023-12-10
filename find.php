<?php 
$srvname ="localhost";
$username   = "root";
$pass = "";
$dbname="check";

$conn= new mysqli($srvname, $username, $pass, $dbname);
if($conn->connect_error){
    die("Database Not Connected" . $conn->connect_error);
}

$sqlf = "SELECT phone From user";
$find=$conn->query($sqlf);
$phon=array();

if($find-> num_rows>0){
while ($row=$find->fetch_assoc()){
    $phon[]=$row['phone'];
}
}
$conn->close();

?>

<!DOCTYPE html>
<html>
<head>
    <title>HTML Form with Validation</title>
</head>
<body>
    <form action="" method="post">
        <label for="list_item">Select an item from the list:</label>
        <select name="list_item" id="list_item">
            <?php
            // Populate the select options with the fetched data
            foreach ($phon as $item) {
                echo "<option value='" . htmlspecialchars($item) . "'>" . htmlspecialchars($item) . "</option>";
            }
            ?>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
