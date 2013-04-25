<?php
session_start();
include_once 'connect.php';
$id=$_SESSION['id'];
$sql = "UPDATE books SET bank_sc=$_POST[sc],bank_st=$_POST[st],bank_gen=$_POST[gen],library=$_POST[library],reference=$_POST[reference],price=$_POST[price]".
	" WHERE book_id=$_POST[id]";
$result = mysqli_query($db,$sql) or die("ERROR".mysqli_error($db));
if($_SESSION[type]=='H')
header('Location: hprofile.php');
else
header('Location: fprofile.php');
mysqli_close($db);		 
?>
