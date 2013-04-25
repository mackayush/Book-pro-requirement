<?php session_start();
if($_SESSION['type']!='L')
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
<link rel="stylesheet" href="styles/pali.css" type="text/css" />
<link rel="stylesheet" href="styles/mask.css">
	<script type="text/javascript" src="styles/mask.js"></script>
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
   
   
   
    <script language="javascript" type="text/javascript">  
    function tablePrint()  
    {  
      
    var display_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";  
    display_setting+="scrollbars=yes,width=750, height=600, left=100, top=25";  
      
    var content_innerhtml = document.getElementById("table").innerHTML;  
    var document_print=window.open("","",display_setting);  
    document_print.document.open();  
    document_print.document.write('<html><head><title>MASK OS Printing Utility </title></head>');  
    document_print.document.write('<body style="font-family:verdana; font-size:12px;" onLoad="self.print();self.close();" >');  
    document_print.document.write(content_innerhtml);  
    document_print.document.write('</body></html>');  
    document_print.print();  
    document_print.document.close();  
    return false;  
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

<!-- ####################################################################################################### -->

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
 <div id="left_column">
        <div class="holder">
          <h1 class="title">Departments</h1>
      <!-- START OF MENU -->
		<div id="mask_slidedown_menu">
			<ul>
				<li><a href="#">CS</a>
					<ul>
					    <form>
						<input type="button" value="APPROVED" onclick = "puttable('show/cs/cs1.php','content')"></br>
						<input type="button" value="PROPOSED" onclick = "puttable('show/cs/cs2.php','content')"></br>
						<input type="button" value="UNDER PROCESS" onclick = "puttable('show/cs/cs3.php','content')"></br>
						<input type="button" value="PROCURRED" onclick = "puttable('show/cs/cs4.php','content')"></br>
						<input type="button" value="ON THE RACK" onclick = "puttable('show/cs/cs5.php','content')"></br>
						</form>
					</ul>
				</li><br>
				<li><a href="#">EC</a>
					<ul>
						<input type="button" value="APPROVED" onclick = "puttable('show/ec/ec1.php','content')"></br>
						<input type="button" value="PROPOSED" onclick = "puttable('show/ec/ec2.php','content')"></br>
						<input type="button" value="UNDER PROCESS" onclick = "puttable('show/ec/ec3.php','content')"></br>
						<input type="button" value="PROCURRED" onclick = "puttable('show/ec/ec4.php','content')"></br>
						<input type="button" value="ON THE RACK" onclick = "puttable('show/ec/ec5.php','content')"></br>
						
					</ul>
				</li><br>

<li><a href="#">IT</a>
					<ul>
						<input type="button" value="APPROVED" onclick = "puttable('show/it/it1.php','content')"></br>
						<input type="button" value="PROPOSED" onclick = "puttable('show/it/it2.php','content')"></br>
						<input type="button" value="UNDER PROCESS" onclick = "puttable('show/it/it3.php','content')"></br>
						<input type="button" value="PROCURRED" onclick = "puttable('show/it/it4.php','content')"></br>
						<input type="button" value="ON THE RACK" onclick = "puttable('show/it/it5.php','content')"></br>
						
					</ul>
				</li><br>

<li><a href="#">Civil</a>
					<ul>
						<input type="button" value="APPROVED" onclick = "puttable('show/civil/civil1.php','content')"></br>
						<input type="button" value="PROPOSED" onclick = "puttable('show/civil/civil2.php','content')"></br>
						<input type="button" value="UNDER PROCESS" onclick = "puttable('show/civil/civil3.php','content')"></br>
						<input type="button" value="PROCURRED" onclick = "puttable('show/civil/civil4.php','content')"></br>
						<input type="button" value="ON THE RACK" onclick = "puttable('show/civil/civil5.php','content')"></br>
					</ul>
				</li><br>

<li><a href="#">ME</a>
					<ul>
						<input type="button" value="APPROVED" onclick = "puttable('show/me/me1.php','content')"></br>
						<input type="button" value="PROPOSED" onclick = "puttable('show/me/me2.php','content')"></br>
						<input type="button" value="UNDER PROCESS" onclick = "puttable('show/me/me3.php','content')"></br>
						<input type="button" value="PROCURRED" onclick = "puttable('show/me/me4.php','content')"></br>
						<input type="button" value="ON THE RACK" onclick = "puttable('show/me/me5.php','content')"></br>
					</ul>
				</li><br>

<li><a href="#">EE</a>
					<ul>
						<input type="button" value="APPROVED" onclick = "puttable('show/ee/ee1.php','content')"></br>
						<input type="button" value="PROPOSED" onclick = "puttable('show/ee/ee2.php','content')"></br>
						<input type="button" value="UNDER PROCESS" onclick = "puttable('show/ee/ee3.php','content')"></br>
						<input type="button" value="PROCURRED" onclick = "puttable('show/ee/ee4.php','content')"></br>
						<input type="button" value="ON THE RACK" onclick = "puttable('show/ee/ee5.php','content')"></br>
					</ul>
				</li><br>

<li><a href="#">Architecture</a>
					<ul>
						<input type="button" value="APPROVED" onclick = "puttable('show/archi/archi1.php','content')"></br>
						<input type="button" value="PROPOSED" onclick = "puttable('show/archi/archi2.php','content')"></br>
						<input type="button" value="UNDER PROCESS" onclick = "puttable('show/archi/archi3.php','content')"></br>
						<input type="button" value="PROCURRED" onclick = "puttable('show/archi/archi4.php','content')"></br>
						<input type="button" value="ON THE RACK" onclick = "puttable('show/archi/archi5.php','content')"></br>
					</ul>
				</li><br>


			</ul>
		</div>
		<!-- END OF MENU -->
		<script type="text/javascript">
		expandFirstItemAutomatically = 1;
		expandMenuItemByUrl = false;
		initSlideDownMenu();
		</script>
	</div>









</div>



      <!-- ############ -->

      <div id="content" class = "autosize">
<!--<h1 class="title">Forms</h1>-->
<p></p>
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

