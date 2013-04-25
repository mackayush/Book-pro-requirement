<?php session_start();
 if(!isset($_SESSION['id']))
  header('Location: index.htm');
 include_once 'connect.php';
?>
<!-- ################################php section####################################################################### -->
<?php
 if(!isset($_SESSION['id']))
  header('Location: index.htm');
$b_query = "SELECT * FROM books WHERE (req_by = '$_SESSION[id]' OR req_by = '$_SESSION[name]') AND status!='PROPOSED'";
$b_result = mysqli_query($db,$b_query) or die("ERROR QUERYING DATABAse".mysqli_error($db));
?>
<!-- ####################################################################################################### -->

      <ul>
        <h1 class="title">YOUR PREVIOUS APPROVED BOOK PROPOSALS</h1>
        
        </ul>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
     
      <!-- ############ -->
      <div id="content">
        
  <?php
while($b_row=mysqli_fetch_array($b_result))
{
$subtotal=$b_row['bank_sc']+$b_row['bank_st']+$b_row['bank_gen']+$b_row['library']+$b_row['reference']; 
$cost=$b_row['price']*$subtotal;
?>
<html>    
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
 <td><input size="10"type="text" id="isbn" name="isbn" value=<?php echo($b_row['isbn']);?> readonly></td>
 <td><input type="text" id="req_by" name="req_by" value="<?php echo($b_row['req_by']);?>" readonly></td> 
 <td><input type="text" id="title" value="<?php echo($b_row['title']);?>" readonly></td>
 <td><input type="text" id="publisher" value="<?php echo($b_row['publisher']);?>" readonly></td>
 <td><input type="text" id="author" value="<?php echo($b_row['author']);?>" readonly></td>
 <td><input size="10"type="text" id="target" value=<?php echo($b_row['target']);?> readonly></td>
 </table><br>
<table border=1 cellpadding= cellspacing=0>
 <tr><th><br>Book Bank &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
 <th>SC:<input type="text" id="sc" name="sc" value=<?php echo($b_row['bank_sc']);?> readonly size="2"
          onchange="updateOrder();" /></th>
  <th>ST:<input type="text" id="st" name="st" value=<?php echo($b_row['bank_st']);?> readonly size="2"
          onchange="updateOrder();" /></th>
  <th>GEN:<input type="text" id="gen" name="gen" value=<?php echo($b_row['bank_gen']);?> readonly size="2" 
          onchange="updateOrder();" /></th>
<th>Other&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>


<th>Library:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="library" name="library" value=<?php echo($b_row['library']);?> readonly size="2"  onchange="updateOrder();" /></th>

<td>Reference:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="reference" name="reference" value=<?php echo($b_row['reference']);?> readonly size="2"  onchange="updateOrder();" /></td>
<td>Total:&nbsp&nbsp&nbsp<input type="text" id="subtotal" name="subtotal"  size="1" value=<?php echo($subtotal);?> readonly="readonly" /></td>
</tr></table><br>
<table border=1 cellpadding=0 cellspacing=0>

 <tr>
<td>Unit Price:&nbspRs.&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="price" name="price" value=<?php echo($b_row['price']);?> size="2" onchange="updateOrder();" /></td>

 <td>Cost:&nbsp&nbsp<input type="text" id="cost" name="cost"  size="6" value=<?php echo($cost);?> readonly="readonly" /></td>
<td>Priority:<input  id="priority" name="priority" value=<?php echo($b_row['priority']);?> readonly></td>
</tr>


 </table><br>Status:<input type="text" id="status" name="status"   value="<?php echo($b_row['status']);?>" readonly="readonly" /><br /><br />
</html>
<?php
}
?>

</div>
      <!-- ####################################################################################################### -->
 <!-- ####################################################################################################### -->