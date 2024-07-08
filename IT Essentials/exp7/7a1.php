<!DOCTYPE html>
<html>
<head><title>CHECK PALIN</title></head>
<body>
<?php
$st=$_GET['inp'];
$st1=strrev($st);
if($st==$st1)
echo"Palindrome";
else
echo"Not palindrome";
?>
</body>
</html>