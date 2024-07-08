<!DOCTYPE html>
<html>
<head>
<title>Factorial using php</title>
</head>
<body>
<form method="GET">
<h1><b>Factorial Calculator </b></h1>
<input type="text" name="number" id="num" placeholder="Enter the number"><br>
</form>
<?php
$p=1;
if(isset($_GET["number"]))
{
$v=$_GET['number'];
for($i=$v;$i>0;$i--)
$p*=$i;
echo "Factorial value is $p";
}
?>
</body>
</html>
