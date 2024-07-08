<!DOCTYPE html>
<html>
    <head><title>Table</title>
<style>
    body{font-size:20px}
table,th,td{
border:2px solid black;
text-align:left;
font-size:115%;}
th{background-color:teal;}
td{background-color:lightblue}
</style>
</head>
    <body>
        <h3>Choose columns to be shown:</h3><hr>
<form method="POST" >
         Input:<br>
         <input type="checkbox" name="inp1" id="b1" value="ID">  
         <label for="b1">ID</label>
         <input type="checkbox" name="inp2" id="b2" value="Name">   
         <label for="b2">name</label>
         <input type="checkbox" name="inp3" id="b3" value="Username">   
         <label for="b3">username</label>
         <input type="checkbox" name="inp4" id="b4" value="Password">
         <label for="b4">password</label><br>
<button type="submit" >Submit</button>  </form><br><hr>Output:
	<?php
         $con=mysqli_connect('localhost','root','','it_obs');
          if($con==FALSE)
          die("Error_could not connect >>>".mysqli_connect_error());
$r="";
if(isset($_POST['inp1']))
$r=$r."ID,";
if(isset($_POST['inp2']))
$r=$r."Name,";
if(isset($_POST['inp3']))
$r=$r."Username,";
if(isset($_POST['inp4']))
$r=$r."Password,";
$r=substr($r,0,strlen($r)-1);
$com="Select $r from customers_11";
$res=$con->query($com);
if(mysqli_num_rows($res)>0)
		{echo "<table><tr>";
if(isset($_POST['inp1'])) 
echo"<th>ID</th>"; 
if(isset($_POST['inp2']))
echo"<th>Name</th>";
if(isset($_POST['inp3']))
echo"<th>Username</th>";
if(isset($_POST['inp4'])) 
echo"<th>Password</th></tr>";
while($row=mysqli_fetch_array($res))
{
echo "<tr>";
if(isset($_POST['inp1'])) 
echo"<td>$row[ID]</td>";
if(isset($_POST['inp2']))
echo"<td>$row[Name]</td>"; 
if(isset($_POST['inp3']))
echo"<td>$row[Username]</td>";
if(isset($_POST['inp4'])) 
echo"<td>$row[Password]</td>";
echo"</tr>";
}
echo"</table>";
}
?>
     </body>
    </html>