<!DOCTYPE html>
<html>
<head>
<title>File writing</title>
</head>
<body>
<?php
$file1=fopen("8a_file.txt","w");
$st="Spider-Man, Spider-Man
Does whatever a spider can
Spins a web, any size
Catches thieves just like flies
Look out
Here comes the Spider-Man";
fwrite($file1,$st);
fclose($file1);
?>
</body>
</html>