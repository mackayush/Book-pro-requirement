<?php session_start();
include_once 'connect.php';
$id=$_SESSION['id'];
$u_query = "SELECT * FROM sys_members WHERE id = $id";
$u_result = mysqli_query($db,$u_query) or die('ERROR QUERYING DB');
$u_detail = mysqli_fetch_array($u_result);
$target = $_POST['target'];
$N = count($target);
$tar='';
for($i=0; $i < $N; $i++)
    {
      $tar=$tar.$target[$i]."/";
    }
$query = "INSERT INTO books (book_id,isbn,title,author,publisher,priority,bank_sc".
 ",bank_st,bank_gen,library,reference,target,price,req_by,dept,status)".
       "VALUES('','$_POST[isbn]','$_POST[booktitle]','$_POST[author]','$_POST[publisher]','$_POST[prior]',$_POST[sc],".
	   "$_POST[st],$_POST[gen],$_POST[library],$_POST[reference],'$tar',$_POST[unitprice],'$u_detail[name]',".
	   "'$u_detail[dept]','PROPOSED')";
$result = mysqli_query($db,$query) or die('ERROR QUERYING DB'.mysqli_error($db));
if($u_detail[type]=='H')
header('Location: hprofile.php');
else
header('Location: fprofile.php');
mysqli_close($db);
?>