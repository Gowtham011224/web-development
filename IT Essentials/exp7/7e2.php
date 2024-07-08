<!DOCTYPE html>
<html>
<head>
<title>Form using php</title>
<style>
table,td{border:2px solid black;padding:15px;}
</style>
</head>
<body>

<table align="center" style="border-collapse:collapse">
<caption style="font-size:150%;"><b>Details</b></caption>
<tr>
<td>Name</td>
<td><?php
$n1=$_POST['first_name'];
$n2=$_POST['last_name'];
echo"$n1 $n2";?>
</td>
</tr>
<tr>
<td>Date of Birth</td>
<td><?php
$d=$_POST['date_birth'];
echo"$d";?>
</td>
</tr>
<tr>
<td>Gender</td>
<td><?php
$g=$_POST['gender'];
echo"$g";?>
</td>
</tr>
<tr>
<td>Age</td>
<td><?php
$a=$_POST['ag'];
echo"$a";?>
</td>
</tr>
<tr>
<td>Marital Status</td>
<td><?php
$ms=$_POST['ms'];
echo"$ms";?>
</td>
</tr>
<tr>
<td>Educational qualifications</td>
<td><?php
$e=$_POST['e_qual'];
echo"$e";?>
</td>
</tr>
<tr>
<td>Hobbies</td>
<td><?php
$h=$_POST['hobbie'];
echo"$h";?>
</td>
</tr>
<tr>
<td>Email ID</td>
<td><?php
$m=$_POST['mail'];
echo"$m";?>
</td>
</tr>
<tr>
<td>Contact Number</td>
<td><?php
$c=$_POST['num'];
echo"$c";?>
</td>
</tr>
<tr>
<td>Username</td>
<td><?php
$u=$_POST['uname'];
echo"$u";?>
</td>
</tr>
<tr>
<td>Password</td>
<td><?php
$p=$_POST['password'];
echo"$p";?>
</td>
</tr>
<tr>
<td>Address</td>
<td><?php
$ad=$_POST['address'];
echo"$ad";?>
</td>
</tr>
<tr>
<td>Country</td>
<td><?php
$ct=$_POST['country'];
echo"$ct";?>
</td>
</tr>
<tr>
<td>State</td>
<td><?php
$st=$_POST['state'];
echo"$st";?>
</td>
</tr>
<tr>
<td>Pincode</td>
<td><?php
$pn=$_POST['pcode'];
echo"$pn";?>
</td>
</tr>
</table>
</body>
</html>

