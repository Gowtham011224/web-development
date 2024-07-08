<!DOCTYPE html>
<html>
 <head>
   <title>Student details</title>
   <style>
    t {padding-left:4em;}
    input{padding:10px;width:15%; height:10%;}
   </style>
 </head>
<body style="font-size:120%;border:solid black;padding:10px;">
   <h1>Enter the given details</h1>
   <hr>
<form method="GET">
Name: <input type="text" name="name" required><t>
Register number:<input type="text" name="rnum" minlength="10" maxlength="10"  required><t>
Department:<input type="text" name="dept" required>
<br><br>Contact Number:<input type="text" name="num"  placeholder="XXXXX XXXXX"  minlength="10" maxlength="10" required>
<t>Email ID:<input type="email" name="mail" required><t>
<br><br><hr>
<p align="center"><input type="submit" value="Submit" >
<input type="reset" value="Reset"></p>
</form>
<hr><h1><Details:></h1>
<?php
if(isset($_GET["mail"]))
{
$a=array();
$a['NAME']=$_GET['name'];
$a['REGISTER NUMBER']=$_GET["rnum"];
$a['DEPARTMENT']=$_GET["dept"];
$a['CONTACT NUMBER']=$_GET["num"];
$a['EMAIL ID']=$_GET["mail"];
$key=['NAME','REGISTER NUMBER','DEPARTMENT','CONTACT NUMBER','EMAIL ID'];
foreach ($key as $k)
echo $k." : ".$a[$k]."<br>";
}
?>
</body>
</html>