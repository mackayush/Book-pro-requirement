<?php
include_once 'connect.php';
$id=$_SESSION[id];
$u_query = "SELECT * FROM sys_members WHERE id = $id";
$u_result = mysqli_query($db,$u_query) or die('ERROR QUERYING DB');
$u_detail = mysqli_fetch_array($u_result);
$query = $sql = "INSERT INTO books(`isbn`, `title`, `author`, `publisher`,".
  				"`priority`, `bank_sc`, `bank_st`, `bank_gen`, `library`, `reference`,".
				"`cost`, `req_by`, `dept`, `status`)".
				"VALUES ($_POST['isbn'],$_POST['title'],$_POST['author'],$_POST['publisher']".
				"$_POST['prior'],$_POST['sc'],$_POST['st'],$_POST['gen'],$_POST['library'],$_POST['reference']".
				"$_POST['cost'],$u_detail['id'],$u_detail['dept'],0)";
$result = mysqli_query($db,$query) or die('ERROR QUERYING DB');
echo 'DONE';

?>