<?php
include_once 'connect.php';
$sql = "UPDATE books\n"
    . "SET status='UNDER PROCESS'".
	" WHERE book_id=$_POST[id]";
$result = mysqli_query($db,$sql) or die("ERROR".mysqli_error($db));
header('Location: lprofile.php');
mysqli_close($db);		 
?>