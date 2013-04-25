<?php 
include_once 'session.php';
if($_SESSION['type']!='F')
header('Location: index.htm');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>MNIT</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<link rel="stylesheet" href="styles/log.css" type="text/css" />
  <script type="text/javascript">
      function updateOrder() {
        var numSc = parseInt(document.getElementById("sc").value);
        var numSt = parseInt(document.getElementById("st").value);
        var numGen = parseInt(document.getElementById("gen").value);
        var numLibrary = parseInt(document.getElementById("library").value);
        var numReference = parseInt(document.getElementById("reference").value);
        var numUnitPrice = parseFloat(document.getElementById("price").value);
if (isNaN(numSc))
          numSc = 0;
        if (isNaN(numSt))
          numSt = 0;
         if (isNaN(numGen))
          numGen = 0;
          if (isNaN(numLibrary))
          numLibrary = 0;
            if (isNaN(numReference))
          numReference = 0;
 if (isNaN(numUnitPrice))
          numUnitPrice = 0;
       var subTotal = (numSc + numSt + numGen + numLibrary + numReference) ;
        document.getElementById("subtotal").value = subTotal.toFixed(2);
var numCost = (subTotal * numUnitPrice);
        document.getElementById("cost").value ="Rs " + numCost.toFixed(2); 
      }       
    </script>
<script src="gen_validatorv4.js" type="text/javascript"></script>
<script type="text/javascript">
	 var XMLHttpRequestObject = false;
	 
	 if(window.XMLHttpRequest)
	 {XMLHttpRequestObject=new XMLHttpRequest();
	 }
	 else if(window.ActiveXObject)
	 {XMLHttpRequestObject=new ActiveXObject("Microsoft.XMLHTTP");
	 }
	 
	 function puttable(datasource,divId)
	 {
	  if(XMLHttpRequestObject)
	  {
	   var obj = document.getElementById(divId);
	   XMLHttpRequestObject.open("GET",datasource);
	   XMLHttpRequestObject.onreadystatechange = function()
	   {
	    if(XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status==200)
		{
		 obj.innerHTML = XMLHttpRequestObject.responseText;
		}
	   }
	   XMLHttpRequestObject.send(null);
	  }
	 }
  </script>
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
<div class="fl_left">
<img src="images/ml.png" /></div>
<div class="fl_left">
      <h1><a href="http://mnit.ac.in/">Malviya National Institute Of Technology</a></h1>
      <h5>Library Section</h5>
    </div>
 </div>
<!-- ################################php section####################################################################### -->
<?php
include_once 'connect.php';
$id=$_SESSION['id'];
$query = "SELECT * FROM sys_members WHERE id = $id";
$result = mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
?>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul>
        <li>Name:<?php echo($row['name']); ?></a></li>
        <li>Department:<?php echo($row['dept']); ?></a></li>
        <li>Designation:<?php echo($row['desi']); ?></a></li>
		<li class="last"><a href="logout.php">logout</a></li>       
 </ul>
    </div>
    <!-- ###### -->
  </div>
</div>



<div class="wrapper">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul>
        <li><a href="#">BOOK PROCUREMENT PROPOSAL FORM</a></li>
        
        </ul>
    </div>
    <!-- ###### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
      <!-- ####################################################################################################### -->
      
      <!-- ############ -->
      <div id="content">
        <h1 class="Enter Details">DETAILS</h1>
       
       <form action="request.php"  method="post" id = "myform"> 

ISBN:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type=�text� name="isbn" /> <br />
Book Title:&nbsp&nbsp&nbsp&nbsp<input type=�text� name="booktitle" /> <br />

Publisher:&nbsp&nbsp&nbsp&nbsp&nbsp<input type=�text� name="publisher" /> <br />
Author:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type=�text� name="author" /> <br />
Priority:

<input id="radioDefault_310" name="Field310" type="hidden" value="" />
<span>
<input  name="prior" type="radio"  value="top"  />

TOP
</span>
<span>
<input  name="prior" type="radio" value="medium"  />
MEDIUM
</span>
<span>
<input  name="prior" type="radio"  value="average"  />
Average
</span>
<br>
<br>
<br>
<h1 class="Enter Details">Quantity Required</h1>
<fieldset>
<p>Book Bank</p>

SC&nbsp<input type="text" id="sc" name="sc" value="0" size="1"
          onchange="updateOrder();" />&nbsp &nbsp


ST&nbsp<input type="text" id="st" name="st" value="0"  size="1"
          onchange="updateOrder();" />&nbsp &nbsp


GEN&nbsp<input type="text" id="gen" name="gen" value="0" size="1" onchange="updateOrder();" />&nbsp &nbsp
<h1></h1>


Library:
<input type="text" id="library" name="library" value="0" size="1" onchange="updateOrder();" />
<h1></h1>


Reference:
<input type="text" id="reference" name="reference" value="0" size="1" onchange="updateOrder();" /><br><br></fieldset>
<fieldset>

Total : <input type="text" id="subtotal" name="subtotal"  size="1" value="" readonly="readonly" /></fieldset><br />
<br />


<h2>Target</h2>
<input type="checkbox" name="target[]" value="UG" />UG &nbsp<input type="checkbox" name="target[]" value="PG" />PG &nbsp<input type="checkbox" name="target[]" value="Research" />Research <br />
<br>
<h2>Cost(optional)</h2>
Unit Price:&nbspRs.<input type="text" id="price" name="unitprice" value="0" size="2" onchange="updateOrder();" />
Cost: <input type="text" id="cost" name="cost"  size="6" value="" readonly="readonly" /><br>
<h1></h1>
Status:<input type="text" id="status" name="status"   value="PROPOSED" readonly="readonly" /><br /><br />

<input type="submit" value="SUBMIT"/>

</p>

</form>


<script  type="text/javascript">

 var frmvalidator = new Validator("myform");

 frmvalidator.addValidation("booktitle","req","Please enter Book Title");

 frmvalidator.addValidation("booktitle","maxlen=80", "Max length for Name is 80");

 frmvalidator.addValidation("isbn","req","Enter ISBN");

 frmvalidator.addValidation("isbn","maxlen=13");

 frmvalidator.addValidation("isbn","numeric","Only numbers please");

 frmvalidator.addValidation("author","req","Please enter Author's Name");

 frmvalidator.addValidation("author","maxlen=100");

</script>




</div>
      <!-- ####################################################################################################### -->
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<!-- ################################php section####################################################################### -->
<?php
$b_query = "SELECT * FROM books WHERE req_by = '$_SESSION[id]' OR req_by = '$_SESSION[name]'";
$b_result = mysqli_query($db,$b_query) or die("ERROR QUERYING DATABAse".mysqli_error($db));
?>
<!-- ####################################################################################################### -->
<!-- ####################################################################################################### -->

<div class="wrapper">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul>
        <li><a href="#">HISTORY</a></li>
		<form>
						<input type="button" value="APPROVED" onclick = "puttable('fshowa.php','show')">
						<input type="button" value="PROPOSED" onclick = "puttable('fshowp.php','show')">
						</form>
        
        </ul>
    </div>
    <!-- ###### -->

<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
      <!-- ####################################################################################################### -->
      
      <!-- ############ -->
      <div id="show">
  
 
</div>
      <!-- ####################################################################################################### -->
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2012 - All Rights Reserved - <a href="#">mnit.ac.in</a></p>
    <p class="fl_right">Developed By-<a href="#" title="MAS">MAS OS</a></p>
  </div>
</div>
</body>
</html>
