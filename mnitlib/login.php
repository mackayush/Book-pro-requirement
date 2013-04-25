<?php
session_start();
include_once 'connect.php';
$id=$_POST['id'];
$pwd=$_POST['pwd'];
$query = "SELECT * FROM sys_members WHERE username= '$id'";
$result = mysqli_query($db,$query) or die('ERROR QUERYING DATABASE'.mysqli_error($db));
if($row = mysqli_fetch_array($result))
{
if($row['pwd']==$pwd)
 {
   $_SESSION['id']=$row['id'];
   $_SESSION['name']=$row['name'];
   $_SESSION['type']=$row['type'];
   if($row['type']=='H')
   {
   	header('Location: hprofile.php');
   }
   elseif($row['type']=='L')
   {
   header('Location: lprofile.php');	
   }
   else
   {
   header('Location: fprofile.php');	
   }
 }
else
 {
  session_destroy();
  header('Location: wlogin.htm');
}
}
else
 {
  session_destroy();
  header('Location: wlogin.htm');
 }
mysqli_close($db);
?>