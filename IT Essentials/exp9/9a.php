<!DOCTYPE html>
<html>
<head>
<title>Student Details</title>
<style>
form,table,td{padding:20px;}
</style>
</head>
<body>
<h3>Enter the required details</h3><hr>
<form method="POST" >
<table>
<tr><td>
Roll No. :</td> <td><input type="text" name="rnum" required><font color="red">*</font>
</td></tr><tr><td>
Name :</td> <td><input type="text" name="name" required><font color="red">*</font>
</td></tr><tr><td>
Department :</td> <td><input type="text" name="dpt" required><font color="red">*</font>
</td></tr><tr><td>
Marks :</td> <td><input type="text" name="mark" required><font color="red">*</font>
</td></tr></table>
<button type="submit">Done</button>  <button type="reset">Reset</button>
</form>
<?php
if (isset($_POST["rnum"]))
{
$rn=$_POST["rnum"];
$m=$_POST["mark"];
$n=$_POST["name"];
$d=$_POST["dpt"];
try
{ 
if(! is_numeric($rn))
 throw new Exception("Roll number must be a number!");
if(! is_numeric($m))
 throw new Exception("Marks must be a number!");
if($m < 0 || $m > 100)
 throw new Exception("Marks must be between 0 and 100!");
$st= "Roll No.: ".$rn."<br>Name: ".$n."<br>Department: ".$d."<br>Marks: ".$m;
echo $st;
}
catch(Exception $e) {
 echo $e->getMessage()."<br>";
}
}
?>
</body>
</html>
