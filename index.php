
<html>
<head>
    <title>MAF IT ASSET Information Form</title>
<style>
    td {
  width: 100px;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}

<!--
 /* Font Definitions */
 @font-face
	{font-family:Vrinda;
	panose-1:0 0 4 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:8.0pt;
	margin-left:0in;
	line-height:107%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
.MsoChpDefault
	{font-family:"Calibri",sans-serif;}
.MsoPapDefault
	{margin-bottom:8.0pt;
	line-height:107%;}
@page WordSection1
	{size:8.5in 11.0in;
	margin:1.0in 1.0in 1.0in 1.0in;}
div.WordSection1
	{page:WordSection1;}
-->
</style>

</head>

<body lang=EN-US style='word-wrap:break-word'>

<div class=WordSection1>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='margin-left:-12.65pt;border-collapse:collapse'>
 <tr>
   
   <td></td>
   <td>
   <!--   /* //Using Script */ -->
   <button onclick="AddItem()">New Product Entry</button>
   <button onclick="find()">Find Item</button> 
   <!-- /* //Using a href */ -->
   <button> <a href="report.php">Report</a></button></td>
   
 </tr>
 <tr style='height:25.5pt'>
  <td width=1786 colspan=2 valign=top style='width:1339.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:25.5pt'>
  <p class=MsoNormal><h1>User Information Form</h1></p>
  </td>
 </tr>
 <tr style='height:279.75pt'>
  <td width=436 rowspan=2 valign=top style='width:327.0pt;padding:0in 5.4pt 0in 5.4pt;
  height:279.75pt'>
  <form id="networkInfoForm"  method="post" action="process_form.php">

<table>
    <tr>                               
        <td><label for="name">User Name:</label></td>
        <td><input type="text" id="name" name="name" required><br></td>
    </tr>  
    <tr>
        <td><label >Employee ID :</label></td>
        <td><input type="text" name="emp_id" required><br></td>
    </tr>  
    <tr> 
        <td><label for="name">Device Type:</label></td>
        <td>
            <input type="radio" name="device" value="desktop"> Desktop
            <input type="radio" name="device" value="laptop"> Laptop <br>
            </td></p>
    </tr>

    <tr>
        <td><label for="pcModel">PC Model:</label></td>
        <td><input type="text" id="pcModel" name="pcModel" required><br></td>
    </tr>

    <tr>
        <td><label for="serialNo">Serial No:</label></td>
        <td><input type="text" id="serialNo" name="serialNo" required><br></td>
    </tr>
    <tr>
        <td><label for="ram">RAM:</label></td>
        <td><input type="text" id="ram2" name="ram" required><br></td>
    </tr>
    <tr>
        <td><label for="ssd">SSD:</label></td>
        <td><input type="text" id="ssd" name="ssd" required><br></td>
    </tr>
    <tr>
        <td><label for="hdd">HDD:</label></td>
        <td><input type="text" id="hdd" name="hdd" required><br></td>
    </tr>
    <tr>
        <td><label for="ip">IP:</label></td>
        <td><input type="text" id="ip" name="ip" required><br></td>
    </tr>
    <tr>
        <td><label for="internetAccess">Internet Access:</label></td>
        <td><input type="text" id="internetAccess" name="internetAccess" required><br></td>
    </tr>
    <tr>
        <td><label for="pcName">PC Name:</label></td>
        <td><input type="text" id="pcName" name="pcName" required><br></td>
    </tr> 
    <tr>
        <td><label for="domainName">Domain Name:</label></td>
        <td><input type="text" id="domainName" name="domainName" required><br></td>
    </tr>                   
    <tr>
        <td><label for="mailid">Mail ID:</label></td>
        <td><input type="text" id="mail" name="mailID" required><br></td>
    </tr>  
    <tr>
        <td><label for="telephone">IP Telephone:</label></td>
        <td><input type="text" id="telephone" name="telephone" required><br></td>
    </tr>           
    <tr>
        <td><label for="keyboard">Keyboard (KB):</label></td>
        <td><input type="text" id="keyboard" name="keyboard1" required><br></td>
    </tr>   
    <tr>
        <td><label for="mouse">Mouse (MS):</label></td>
        <td> <input type="text" id="mouse" name="mouse" required><br></td>
    </tr>                 
     <tr>
        <td><label for="monitor">Monitor:</label></td>
        <td> <input type="text" id="monitor" name="monitor" required><br></td>
     </tr>      
    <tr>
        <td> <label for="ups">UPS:</label></td>
        <td><input type="text" id="ups" name="ups" required><br></td>
    </tr>       
    <tr>
        <td><label for="windowsVersion">Windows Version:</label></td>
        <td><input type="text" id="windowsVersion" name="windowsVersion" required><br></td>
    </tr>   
    <tr>
        <td><label >Department:</label></td>
        <td><input type="text"  name="department" required><br></td>
    </tr>       
    <tr>
        <td><label for=>Asset Code:</label></td>
        <td><input type="text" id="assetCode" name="assetCode" required><br></td>
    </tr> <br>
   
            
<tr>
    
    <td></td>
    <td><input type="submit" value="Submit"></td>
    
</tr> 
</table>
</form>
</td>

  <td width=1350 valign=top style='width:1012.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:279.75pt'>
  <p class=MsoNormal>
  
  
  <?php
  // Connect to the database (Replace 'username', 'password', and 'database_name' with your database credentials)
  $conn = new mysqli('localhost', 'root', '', 'local_network');
  
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  
  // Prepare the SQL statement to select all data from the database
  $sql = "SELECT * FROM network_info order by id desc limit 20";
  
  // Execute the query
  $result = $conn->query($sql);
  
  // Check if there are any rows in the result
  
  
  // Close the connection
  $conn->close();
 
     
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
     
?>

</p>
  </td>
 </tr>
 <tr style='height:210.75pt'>
  <td width=1350 valign=top style='width:1012.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:210.75pt'>
  <p class=MsoNormal></p>
  </td>
 </tr>
 <tr style='height:20.25pt'>
  <td width=1786 colspan=2 valign=top style='width:1339.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:20.25pt'>
  <p class=MsoNormal>5</p>
  </td>
 </tr>
</table>

<p class=MsoNormal>&nbsp;</p>

</div>
<script>
    function AddItem() {
        // Change the window location to the path of the second HTML page
        window.location.href = "new_prod_entry.php";
    }
    function find(){
        window.location.href = "find.php";
    }
</script>

</body>

</html>
