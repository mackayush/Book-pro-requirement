<?php session_start();
 if($_SESSION['type']!='H')
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

<script type="text/javascript" src="jquery-1.2.6.pack.js"></script>
<script src="keystop.js" type="text/javascript"></script>
<script type="text/javascript">
function clearBox(elementID)
{
    document.getElementById(elementID).innerHTML = "";
}
</script>
 <script type="text/javascript">
      function updateOrder() {
       var numSc = parseInt(document.getElementById("sc1").value);
        var numSt = parseInt(document.getElementById("st1").value);
        var numGen = parseInt(document.getElementById("gen1").value);
        var numLibrary = parseInt(document.getElementById("library1").value);
        var numReference = parseInt(document.getElementById("reference1").value);
        var numUnitPrice = parseFloat(document.getElementById("price1").value);
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
        document.getElementById("subtotal1").value = subTotal.toFixed();
var numCost = (subTotal * numUnitPrice);
        document.getElementById("cost1").value ="Rs " + numCost.toFixed(2);
     }
    </script>
<script type="text/javascript">
      function pdateOrder() {
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
        document.getElementById("subtotal").value = subTotal.toFixed();
var numCost = (subTotal * numUnitPrice);
        document.getElementById("cost").value ="Rs " + numCost.toFixed(2);
     }
    </script>
	<script language=javascript type=text/javascript>
<!-- Script courtesy of http://www.web-source.net - Your Guide to Professional Web Site Design and Development
function stopRKey(evt) {
   var evt = (evt) ? evt : ((event) ? event : null);
   var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
   if ((evt.keyCode == 13) && (node.type=="text")) {return false;}
}

document.onkeypress = stopRKey;
-->
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
<!-- ################################php section####################################################################### -->
<?php
include_once 'connect.php';
$id=$_SESSION['id'];
$query = "SELECT * FROM sys_members WHERE id = $id";
$result = mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
?>
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
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul>
       <li>Name:&nbsp<?php echo($row['name']); ?></a></li>
        <li>Department:&nbsp<?php echo($row['dept']); ?></a></li>
        <li>Designation:&nbsp<?php echo($row['desi']); ?></a></li>
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
        <li>BOOK PROCUREMENT PROPOSAL FORM</li>
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
       <form action="request.php"  method="post" id = "myform" onsubmit='return validate(this)'> 
ISBN:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type= text  name="isbn" /> <br />
Book Title:&nbsp&nbsp&nbsp&nbsp<input size="50" type= text  name="booktitle" /> <br />
Publisher:&nbsp&nbsp&nbsp&nbsp&nbsp<input size="50" type= text  name="publisher" /> <br />
Author:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type= text  name="author" size="50" /> <br />
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
<input  name="prior" type="radio"  value="average" checked />
AVERAGE
</span>
<br>
<br>
<br>
<h1 class="Enter Details">Quantity Required</h1>
<fieldset>
<p>Book Bank</p>
SC&nbsp<input type="text" id="sc1" name="sc" value="0" size="1"
          onchange="updateOrder();" />&nbsp &nbsp
ST&nbsp<input type="text" id="st1" name="st" value="0"  size="1"
          onchange="updateOrder();" />&nbsp &nbsp
GEN&nbsp<input type="text" id="gen1" name="gen" value="0" size="1" onchange="updateOrder();" />&nbsp &nbsp
<h1></h1>
Library:
<input type="text" id="library1" name="library" value="0" size="1" onchange="updateOrder();" />
<h1></h1>
Reference:
<input type="text" id="reference1" name="reference" value="0" size="1" onchange="updateOrder();" /><br><br></fieldset>
<fieldset>
Total : <input type="text" id="subtotal1" name="subtotal"  size="1" value="" readonly="readonly" /></fieldset><br />
<br />
<h2>Target</h2>
<input type="checkbox" name="target[]" id="target" value="UG" />UG &nbsp<input type="checkbox" name="target[]" id="target" value="PG" />PG &nbsp<input type="checkbox" name="target[]" id="target" value="Research" />Research <br />
<br>
<h2>Cost(optional)</h2>
Unit Price:&nbspRs.<input type="text" id="price1" name="unitprice" value="0" size="2" onchange="updateOrder();" />
Cost: <input type="text" id="cost1" name="cost"  size="6" value="0" readonly="readonly" /><br>
<h1></h1>
Status:<input type="text" id="status" name="status"   value="PROPOSED" readonly="readonly" /><br /><br />
<input type="submit" value="SUBMIT"/>
</p>
</form>
<script type="text/javascript">
		$(document).ready(function()
		{
			$("form").submit(function()
			{
				if (!isCheckedById("target"))
				{
					alert ("Please select at least one target");
					return false;
				}				
				//else if (!isCheckedById("event"))
				//{
				//	alert ("Please select at least one event");
				//	return false;
				//}
				else
				{
					return true; //submit the form
				}				
			});
			
			function isCheckedById(id)
			{
				var checked = $("input[@id="+id+"]:checked").length;
				if (checked == 0)
				{
					return false;
				}
				else
				{
					return true;
				}
			}
		});
		</script>
<script type="text/javascript">
function validate(form) {
// Checking if at least one period button is selected. Or not.
if (!document.myform.target[0].checked && !document.form1.target[1].checked && !document.form1.target[2].checked){

alert("Enter Target");
return false;}

return true;
}
</script>
<script  type="text/javascript">
 var frmvalidator = new Validator("myform");
 frmvalidator.addValidation("sc","req","Only Numbers are Allowed in Quantity Required");
 frmvalidator.addValidation("sc","numeric","Only numbers please");
 frmvalidator.addValidation("unitprice","req","Only Numbers are Allowed in Quantity Required");
 frmvalidator.addValidation("unitprice","numeric","Only numbers please");
 frmvalidator.addValidation("st","req","Only Numbers are Allowed in Quantity Required");
 frmvalidator.addValidation("st","numeric","Only numbers please");
 frmvalidator.addValidation("gen","req","Only Numbers are Allowed in Quantity Required");
 frmvalidator.addValidation("gen","numeric","Only numbers please");
 frmvalidator.addValidation("library","req","Only Numbers are Allowed in Quantity Required");
 frmvalidator.addValidation("library","numeric","Only numbers please");
 frmvalidator.addValidation("reference","req","Only Numbers are Allowed in Quantity Required");
 frmvalidator.addValidation("reference","numeric","Only numbers please");
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
<div class="wrapper">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul><div class="fl_left">
       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <li>Department History</li>
		
						<input type="button" value="APPROVED" onclick = "puttable('hshowa.php','tables')">
						<input type="button" value="PROPOSED" onclick = "puttable('hshowp.php','tables')">
						</div> 
						 <input type="button" value="X" onclick="clearBox('tables')" />
						 <div class="fl_right">
        <li>Personal History</li>
						
						<input type="button" value="APPROVED" onclick = "puttable('fshowa.php','tables')">
						<input type="button" value="PROPOSED" onclick = "puttable('fshowp.php','tables')">
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						</div>
						
        </ul>
    </div>
    <!-- ###### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<!-- ####################################################################################################### -->
<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
      <!-- ####################################################################################################### -->
      <!-- ############ -->
      <div id="tables">
	 

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
    <p class="fl_right">Developed By-<a href="#" title="MASK">MASK OS</a></p>
  </div>
</div>
</body>
</html>
