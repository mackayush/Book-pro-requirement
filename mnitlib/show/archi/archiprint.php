<?php
$dbhost= "localhost"; //your MySQL Server
$dbuser = "mlakhara"; //your MySQL User Name
$dbpass = "b+n0Hu^CwcB5"; //your MySQL Password
$dbname = "drishbzy_mnitlib";
//your MySQL Database Name of which database to use this
$tablename = "books"; //your MySQL Table Name which one you have to create excel file
// your mysql query here , we can edit this for your requirement
$sql = "SELECT * FROM books WHERE dept = 'ARCHITECTURE' AND status = 'APPROVED'";
//create  code for connecting to mysql
$Connect = @mysql_connect($dbhost,'drishbzy_mla','b+n0Hu^CwcB5')
or die("Couldn't connect to MySQL:<br>" . mysql_error() . "<br>" . mysql_errno());
//select database
$Db = @mysql_select_db($dbname, $Connect)
or die("Couldn't select database:<br>" . mysql_error(). "<br>" . mysql_errno());
//execute query
$result = @mysql_query($sql,$Connect)
or die("Couldn't execute query:<br>" . mysql_error(). "<br>" . mysql_errno());
//define separator (defines columns in excel & tabs in word)
$sep = "\t"; //tabbed character
$fp = fopen("approved.xls", "w");
$schema_insert = "";
$schema_insert_rows = "";
//start of printing column names as names of MySQL fields
//start of adding column names as names of MySQL fields
for ($i = 1; $i < mysql_num_fields($result); $i++)
{
$schema_insert_rows.=mysql_field_name($result,$i) . "\t";
}
$schema_insert_rows.="\n";
fwrite($fp, $schema_insert_rows);
//end of adding column names
//start while loop to get data
while($row = mysql_fetch_row($result))
{
//set_time_limit(60); //
$schema_insert = "";
for($j=1; $j<mysql_num_fields($result);$j++)
{
if(!isset($row[$j]))
$schema_insert .= "NULL".$sep;
elseif ($row[$j] != "")
$schema_insert .= strip_tags("$row[$j]").$sep;
else
$schema_insert .= "".$sep;
}
$schema_insert = str_replace($sep."$", "", $schema_insert);

//this corrects output in excel when table fields contain \n or \r
//these two characters are now replaced with a space

$schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
$schema_insert .= "\n";
//$schema_insert = (trim($schema_insert));
//print $schema_insert .= "\n";
//print "\n";
fwrite($fp, $schema_insert);
}
fclose($fp);
include_once'update.php';
header('Location: approved.xls');
?>