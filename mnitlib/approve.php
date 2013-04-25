<?php
include_once 'connect.php';
$sc=$_POST['sc'];
$st=$_POST['st'];
$gen=$_POST['gen'];
$lib=$_POST['library'];
$ref=$_POST['reference'];
$id=$sc=$_POST['id'];
$sta='APPROVED';
$sql = "UPDATE books SET status='APPROVED',bank_sc=$_POST[sc],bank_st=$_POST[st],bank_gen=$_POST[gen],library=$_POST[library],reference=$_POST[reference],price=$_POST[unitprice]".
	" WHERE book_id=$_POST[id]";
$result = mysqli_query($db,$sql) or die("ERROR".mysqli_error($db));
header('Location: hprofile.php');
mysqli_close($db);		 
?>