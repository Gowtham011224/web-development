<!DOCTYPE html>
<html>
<head>
<title>Two File writing</title>
</head>
<body>
<?php
$file1=fopen("8b_file1.txt","a");
$file2=fopen("8b_file2.txt","r");
$st=fread($file2,filesize("8b_file2.txt"));
fwrite($file1,$st);
fclose($file1);
fclose($file2);
?>
</body>
</html>