<?php 
//$servername = "localhost";//
//$username = "root";//
//$password = "";//
//$dbname = "tennisclub";//
//$port = 3307;//

include("dbcon.php")

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * from member";
$result = mysqli_query($conn, $sql);

echo "<SELECT name='memberID''>";

while($row = mysqli_fetch_assoc($result)) {
    $id=$row['id'];
    $fn=$row['firstname'];
    $sn=$row['surname'];
    echo "<OPTION value='$id'>$fn $sn</OPTION>";
}
echo "</SELECT>";

mysqli_close($conn); 
?>

