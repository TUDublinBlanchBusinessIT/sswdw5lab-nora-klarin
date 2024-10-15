<?php 
include("dbcon.php");

$sql = "SELECT * from member";
$result = mysqli_query($conn, $sql);

echo "<SELECT name ='memberID'>";

while($row = mysqli_fetch_assoc($result)) {
    $id=$row['id'];
    $fn=$row['firstname'];
    $sn=$row['surname'];
    echo "<option value= '$id'> $fn $sn</option>";
}
echo "</SELECT>";

mysqli_close($conn); 
?>