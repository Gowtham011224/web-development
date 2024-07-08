<!DOCTYPE html>
<html>
<head>
<title>Exception handling-Div(0)</title>
</head>
<body>
<form method="POST">
<h1>INPUT</h1><br>
<input type="text" name="n1" placeholder="Numerator" required>
<br>
<input type="text" name="n2" placeholder="Denominator" required>
<br>
<input type="Submit" value="Quotient">
<hr>
</form>
<?php
if(isset($_POST['n1']))
{ 
$n=(int)($_POST['n1']);
$d=(int)($_POST['n2']);
try
{ 
if($d==0)
throw new Exception("Division By Zero");
$o=$n/$d;
echo "<h1>OUTPUT</h1> <br>answer = $o<br><br><br>";
}
catch (Exception $e)
{
echo $e."<br><br><br>";
}
finally
 {
echo "The operation takes place only if entered deniminator is non zero.";
 }
}
?>
</body>
</html>
