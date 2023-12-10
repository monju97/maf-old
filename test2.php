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


// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-536869121 1107305727 33554432 0 415 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-469750017 -1073732485 9 0 511 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0in;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;}
h1
	{mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-link:"Heading 1 Char";
	mso-margin-top-alt:auto;
	margin-right:0in;
	mso-margin-bottom-alt:auto;
	margin-left:0in;
	mso-pagination:widow-orphan;
	mso-outline-level:1;
	font-size:24.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;}
span.Heading1Char
	{mso-style-name:"Heading 1 Char";
	mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Heading 1";
	mso-ansi-font-size:16.0pt;
	mso-bidi-font-size:16.0pt;
	font-family:"Calibri Light",sans-serif;
	mso-ascii-font-family:"Calibri Light";
	mso-ascii-theme-font:major-latin;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:major-fareast;
	mso-hansi-font-family:"Calibri Light";
	mso-hansi-theme-font:major-latin;
	mso-bidi-font-family:Vrinda;
	mso-bidi-theme-font:major-bidi;
	color:#2F5496;
	mso-themecolor:accent1;
	mso-themeshade:191;}
p.msonormal0, li.msonormal0, div.msonormal0
	{mso-style-name:msonormal;
	mso-style-unhide:no;
	mso-margin-top-alt:auto;
	margin-right:0in;
	mso-margin-bottom-alt:auto;
	margin-left:0in;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;}
span.z-TopofFormChar
	{mso-style-name:"z-Top of Form Char";
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"z-Top of Form";
	mso-ansi-font-size:8.0pt;
	font-family:"Arial",sans-serif;
	mso-ascii-font-family:Arial;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Arial;
	mso-bidi-font-family:Arial;
	display:none;
	mso-hide:all;}
span.z-BottomofFormChar
	{mso-style-name:"z-Bottom of Form Char";
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"z-Bottom of Form";
	mso-ansi-font-size:8.0pt;
	font-family:"Arial",sans-serif;
	mso-ascii-font-family:Arial;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Arial;
	mso-bidi-font-family:Arial;
	display:none;
	mso-hide:all;}
span.SpellE
	{mso-style-name:"";
	mso-spl-e:yes;}
span.GramE
	{mso-style-name:"";
	mso-gram-e:yes;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-size:10.0pt;
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	mso-font-kerning:0pt;
	mso-ligatures:none;}
@page WordSection1
	{size:8.5in 11.0in;
	margin:1.0in 1.0in 1.0in 1.0in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Table Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:"";
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-para-margin:0in;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Times New Roman",serif;}
</style>

</head>

<body lang=EN-US style='tab-interval:.5in;word-wrap:break-word'>

<div class=WordSection1>

<p class=MsoNormal><span style='mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<div>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=1440
 style='width:15.0in;margin-left:5.15pt;border-collapse:collapse;mso-yfti-tbllook:
 1184;mso-padding-alt:0in 0in 0in 0in'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:43.6pt'>
  <td width=1440 colspan=2 valign=top style='width:15.0in;border:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:43.6pt'>
  <h1 style='line-height:105%'><span style='font-family:"Calibri",sans-serif;
  mso-fareast-font-family:"Times New Roman"'>Local Network Information Form<o:p></o:p></span></h1>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:191.2pt'>
  <td width=701 style='width:525.75pt;padding:0in 0in 0in 0in;height:191.2pt'>
  <form id="networkInfoForm"  method="post" action="process_form.php">

<table>
    <tr>                               
        <td><label for="name">User Name:</label></td>
        <td><input type="text" id="name" name="name" required><br></td>
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
        <td><input type="text" id="keyboard" name="keyboard" required><br></td>
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
        <td><label for="teamMember">Department:</label></td>
        <td><input type="text" id="teamMember" name="teamMember" required><br></td>
    </tr>       
    <tr>
        <td><label for="assetCode">Asset Code:</label></td>
        <td><input type="text" id="assetCode" name="assetCode" required><br></td>
    </tr> 

    <tr>
        <br>
        <td></td>        
    </tr> 
         
<tr>
    
    <td></td>
    <td><input type="submit" value="Submit"></td>
</tr> 
</table>
</form>
  </td>
  <td width=810 style='width:607.5pt;padding:0in 0in 0in 0in;height:191.2pt'>
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

  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:253.75pt'>
  <td width=810 style='width:607.5pt;padding:0in 0in 0in 0in;height:253.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;mso-fareast-font-family:
  "Times New Roman"'>Important Link<o:p></o:p></span></p>
  </td>
  <td style='padding:0in 0in 0in 0in;height:253.75pt'></td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes;height:17.5pt'>
  <td width=1440 colspan=2 valign=top style='width:15.0in;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:17.5pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:105%'><span style='font-size:10.0pt;line-height:105%;font-family:
  "Calibri",sans-serif'>&nbsp;Footer<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'>&nbsp;</p>

</div>

</div>

</body>

</html>
