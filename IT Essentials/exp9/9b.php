<!DOCTYPE html>
<html>
<head>
<title>Account SignUp</title>
<link rel="icon" href="img.jpg">
<style>
form,table,td{padding:20px;}
button{color:white;background:green;padding:5px;}
</style>
</head>
<body>
<h3>Fill in the following details</h3><hr>
<?php
if(isset($_POST['anum']))
{
$accNum=$_POST['anum'];
$AadNum=$_POST['adnum'];
$fDep=$_POST['fd'];
$conNum=$_POST['cnum'];
}
?>
<form method="POST" >
<table>
<tr><td>
Account Number :</td>
<td><input type="number" min="0" name="anum" value="<?php if(isset($_POST['anum'])) echo $accNum; ?>" placeholder="12 digits" required><font color="red">*</font>
</td></tr><tr><td>
Account Holder's Name :</td> 
<td><input type="text" name="name" value="<?php if(isset($_POST['anum'])) echo $_POST['name'];?>" required><font color="red">*</font>
</td></tr><tr><td>
Address :</td> 
<td><textarea name="adrs" required ><?php if(isset($_POST['anum'])) echo $_POST['adrs']; ?></textarea><font color="red">*</font>
</td></tr><tr><td>
Aadhar Number :</td> 
<td><input type="number" min="0" name="adnum" value="<?php if(isset($_POST['anum'])) echo $AadNum ; ?>" placeholder="12 digits" required><font color="red">*</font>
</td></tr><tr><td>
First Deposit :<br>(min. Rs.10,000 - max. Rs.1,00,000)</td> 
<td><input type="text" name="fd" value="<?php if(isset($_POST['anum'])) echo $fDep; ?>" placeholder="💲💲💲" required><font color="red">*</font>
</td></tr><tr><td>
Contact Number :</td> 
<td><input type="text" name="cnum" value="<?php if(isset($_POST['anum'])) echo $conNum; ?>" placeholder="10 digits" required><font color="red">*</font>
</td></tr>
</table>
<button type="submit" >Validate and submit</button>  <button type="reset">Reset</button>
</form>
<?php
if(isset($_POST['anum']))
{
try
{
$arr=str_split($accNum);
$c=count($arr);
 if($c!=12)
 throw new Exception("Count Error",1);
$arr1=str_split($AadNum);
$c=count($arr1);
 if($c!=12)
 throw new Exception("Count Error",1);
$arr2=str_split($conNum);
$c=count($arr2);
 if($c!=10)
 throw new Exception("Count Error",2);
if($fDep<10000 || $fDep>100000)
 throw new Exception("Out of limit error",3);
echo "<h3>No Errors</h3>";
}
catch(Exception $e)
{
$ec=$e->getCode();
 if($ec==1)
 {echo '<script>alert ("Account number and Aadhar number should be 12 digits"); </script>'; }
 if($ec==2)
 {echo '<script>alert ("Contact number should be 10 digits"); </script>'; }
 if($ec==3)
 {echo '<script>alert ("First Deposit should be min. of Rs.10,000 to max. of Rs.1,00,000 "); </script>'; }
}
}
?>
