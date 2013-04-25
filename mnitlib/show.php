<?php
include_once 'connect.php';
$query = "SELECT * FROM sys_members";
$result = mysqli_query($db,$query) or die('ERROR QUERYING DATABASE');
$row = mysqli_fetch_array($result);
echo $row['id'];
mysqli_close($db);
?>