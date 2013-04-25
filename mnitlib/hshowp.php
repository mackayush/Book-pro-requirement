<?php session_start();
if(!isset($_SESSION['id']))
  header('Location: index.htm');
 include_once 'connect.php';
?>

 


<!-- ################################php section####################################################################### -->
<?php
 
  $id=$_SESSION['id'];
$query = "SELECT * FROM sys_members WHERE id = $id";
$result = mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
$b_query = "SELECT * FROM books WHERE dept = '$row[dept]' AND status = 'PROPOSED'";
$b_result = mysqli_query($db,$b_query) or die("ERROR QUERYING DATABAse".mysqli_error($db));
?>
<!-- ####################################################################################################### -->

      <ul>
        <h1 class="title">DEPARTMENT BOOK PROPOSALS</h1>
        
        </ul>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
     
      <!-- ############ -->
      
        
 <?php
while($b_row=mysqli_fetch_array($b_result))
{
$subtotal=$b_row['bank_sc']+$b_row['bank_st']+$b_row['bank_gen']+$b_row['library']+$b_row['reference']; 
$cost=$subtotal*$b_row['price']; 
?>
   
       <form action="approve.php" method="POST">

<h2>REQ ID:<?php echo($b_row['book_id']);?></h2>	   
<table border=1 cellpadding=0 cellspacing=0>

 <tr>
 
 <th>ISBN</th>
  <th>REQ BY</th>
  <th>Book Title</th>
  <th>Publisher:</th>
  <th>Author:</th>
  <th>Target:</th>
 </tr>
 <input type="hidden" name="id" value=<?php echo($b_row['book_id']);?>>
 <td><input size="10"type="text" id="isbn" name="isbn" value=<?php echo($b_row['isbn']);?> readonly></td>
 <td><input size="25"type="text" id="req_by" name="req_by" value="<?php echo($b_row['req_by']);?>" readonly></td> 
 <td><input type="text" id="title" value="<?php echo($b_row['title']);?>" readonly></td>
 <td><input type="text" id="publisher" value="<?php echo($b_row['publisher']);?>" readonly></td>
 <td><input type="text" id="author" value="<?php echo($b_row['author']);?>" readonly></td>
 <td><input size="10"type="text" id="target" value="<?php echo($b_row['target']);?>" readonly></td>
 </table><br>
<table border=1 cellpadding= cellspacing=0>
 <tr><th><br>Book Bank &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
 <th>SC:<input type="text" id="sc" name="sc" value="<?php echo($b_row['bank_sc']);?>" size="2"
          onchange="pdateOrder();" /></th>
  <td>ST:<input type="text" id="st" name="st" value="<?php echo($b_row['bank_st']);?>" size="2"
          onchange="pdateOrder();" /></td>
  <td>GEN:<input type="text" id="gen" name="gen" value="<?php echo($b_row['bank_gen']);?>" size="2" 
          onchange="pdateOrder();" /></td>
<td>Other&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>


<td>Library:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="library" name="library" value=<?php echo($b_row['library']);?> size="2"  onchange="pdateOrder();" /></td>

<td>Reference:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="reference" name="reference" value=<?php echo($b_row['reference']);?> size="2"  onchange="pdateOrder();" /></td>
<td>Total:&nbsp&nbsp&nbsp<input type="text" id="subtotal" name="subtotal"  size="1" value="<?php echo($subtotal);?>" readonly="readonly" /></td>
</tr></table><br>
<table border=1 cellpadding=0 cellspacing=0>

 <tr>
<td>Unit Price:&nbspRs.&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="price" name="unitprice" value=<?php echo($b_row['price']);?> size="2" onchange="pdateOrder();" /></td>

 <td>Cost:&nbsp&nbsp<input type="text" id="cost" name="cost"  size="6" value=<?php echo($cost);?> readonly="readonly" /></td>
<td>Priority:<input  id="priority" name="priority" value=<?php echo($b_row['priority']);?> readonly></td>
</tr>


 </table><br>Status:<input type="text" id="status" name="status"   value="<?php echo($b_row['status']);?>" readonly="readonly" /><br /><br />
<input type="submit" value="Approve"/></form>
</html>
<?php
}
?>
      <!-- ####################################################################################################### -->
 <!-- ####################################################################################################### -->