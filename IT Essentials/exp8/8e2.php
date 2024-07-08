<!DOCTYPE html>
<html>
<head>
<title>File save</title>
</head>
<body>
<?php

$file=fopen("8e_file.txt","w");

$n1=$_POST['first_name'];
$n2=$_POST['last_name'];
$d=$_POST['date_birth'];
$g=$_POST['gender'];
$a=$_POST['ag'];
$ms=$_POST['ms'];
$e=$_POST['e_qual'];
$h=$_POST['hobbie'];
$m=$_POST['mail'];
$c=$_POST['num'];
$u=$_POST['uname'];
$p=$_POST['password'];
$ad=$_POST['address'];
$ct=$_POST['country'];
$st=$_POST['state'];
$pn=$_POST['pcode'];

$content=
"
		Details         
NAME				: $n1 $n2
D.O.B				: $d
GENDER				: $g
AGE				: $a
MARITAL STATUS			: $ms
EDUCATIONAL QUALIFICATIONS	: $e
HOBBIES				: $h
MAIL ID				: $m
CONTACT NUMBER			: $c
USERNAME			: $u
PASSWORD			: $p
ADDRESS				: $ad
PINCODE				: $pn
STATE				: $st
COUNTRY				: $ct
";

fwrite($file,$content);
fclose($file);
?>
<i><h5>Details have been updated in file /8e_file.txt//</h5></i>
</body>
</html>