<!DOCTYPE html>
<html>
<head>
<title>Fibonacci series using php</title>
</head>
<body>
<h1>FIBONACCI CALCULATOR</h1>
<form method="POST">
<input type="text" name="num" placeholder="Enter nth number"><br>
</form>
<?php
if(isset($_POST["num"]))
{
$n=1;$n1=0;$n2=1;$st="";
$i=$_POST["num"];
if ($i>0)
{$st=$st.$n1;
$n++;}
if($i>1)
{$st=$st.','.$n2;
$n++;}
while($n<=$i)
{$n3=$n2+$n1;
$n1=$n2;
$n2=$n3;
$st=$st.','.$n3;
$n++;}
echo"Series:<br> $st";
}
?>
</body>
</html>



