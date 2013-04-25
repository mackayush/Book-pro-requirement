<?php
include_once 'connect.php';
$sql = "UPDATE books\n"
    . "SET status='UNDER PROCESS'".
	" WHERE dept='ME' AND status='APPROVED'";
$result = mysqli_query($db,$sql) or die("ERROR".mysqli_error($db));
mysqli_close($db);		 
?>