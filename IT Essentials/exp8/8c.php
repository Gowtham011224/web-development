<!DOCTYPE html>
<html>
<head>
<title>USER INPUT TO FILE</title>
</head>
<body>
<form method="POST">
<h1>INPUT</h1><br>
<textarea name="input" rows="15" cols="50" placeholder="THE CONTENT YOU ENTER HERE WILL BE WRITTEN IN FILE 8c_file";></textarea>
<br><input type="Submit" value="Submit">
<hr>
</form>
<?php
if(isset($_POST['input']))
{
$st=$_POST['input'];
$file1=fopen("8c_file.txt","w");
fwrite($file1,$st);
fclose($file1);
}
?>
</body>
</html>