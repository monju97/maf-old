<?php 
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $product_name   =$_POST['product_name'];
    $serial         =$_POST['serial'];
    $brand          =$_POST['brand'];
    $model          =$_POST['model'];
    $supplier       =$_POST['supplier'];
    $p_date         =$_POST['p_date'];
    $warranty       =$_POST['warranty'];

    $conn = new mysqli('localhost', 'root', '', 'local_network');
    if($conn->connect_errno){
        die("Database Connection Failed! Error:" .$conn->connect_error );
    }

    $sqlins="INSERT INTO new_prod (product_name, serial, brand, model, supplier, purchase_date, warranty) VALUES ('$product_name', '$serial', '$brand', '$model', '$supplier', '$p_date', '$warranty')";

    $entry=$conn->prepare($sqlins);

    
        if($entry->execute()){
            echo '<script>alert("New Product Entry Successed");</script>';
            
            $entry->close();
        
        }else  echo "Error: " . "Duplicate data found " . "Serial No. Must Be Unique";
    
        
        $conn->close();
    
    }   
?>
<html>
<head>    
<title> New Product Entry</title>

</head>
<body>
<td></td>
   <td>
   <!--   /* //Using Script */ -->
   <button onclick="index()">Home</button>

    <h3>Product Entry Form</h3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<table>
    <tr>
        <td><label>Product Name</label></td>
        <td><input name="product_name" required></td>
    </tr>
    <tr>
        <td><label>Serial</label></td>
        <td><input name="serial" required ></td>
    </tr>
        <td><label>Brand</label></td>
        <td><input name="brand" required></td>
    <tr>
        <td><label>Model</label></td>
        <td><input name="model" required></td>        
    </tr>
    <tr>
        <td><label>Supplier Name</label></td>
        <td><input name="supplier" required></td>
    </tr>
    <tr>
        <td><label>Purchase Date</label></td>
        <td><input name="p_date" required></td>
    </tr>
    <tr>
        <td><label>Warranty</label></td>
        <td><input name="warranty" required></td>
    </tr>
    <tr>
        <td></td>
        <td><button type="submit">Save</button></td>
    </tr>
</table>


</form>

<script>
    function index() {
        // Change the window location to the path of the second HTML page
        window.location.href = "index.php";
    }
    function find(){
        window.location.href = "find.php";
    }
</script>
</body>

</html>
    	
	

<!-- 
SELECT OrderID, COUNT(OrderID)
FROM Orders
GROUP BY OrderID
HAVING COUNT(OrderID) > 1 -->