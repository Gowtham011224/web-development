<!DOCTYPE html>
<html>
    <head><title>Selection</title>
<style>
table,th,td{
border:2px solid black;
border-collapse:collapse;
text-align:left;
font-size:150%;}
th{background-color:coral;
}
</style>
</head>
    <body>
        <h3><u>selection</u></h3>
	<?php
         $con=mysqli_connect('localhost','root','','it_obs');
          if($con==FALSE)
          die("Error_could not connect >>>".mysqli_connect_error());
        $q=array("select * from customers_11 where name like 'G%'",
	"select * from customers_11 where ID='poly' or name='kill'",
	"select * from customers_11 where name>'giri'",
	"select * from customers_11 order by Name");
	for($i=0;$i<count($q);$i++){
		$res=$con->query($q[$i]);
		if(mysqli_num_rows($res)>0)
		{echo "<table>
<tr><th>ID</th> <th>Name</th> <th>Username</th> <th>Password</th></tr>";
while($row=mysqli_fetch_array($res))
{
echo "<tr><td>$row[ID]</td> <td>$row[Name]</td> <td>$row[Username]</td> <td>$row[Password]</td></tr>";
}
echo"</table>";
}
}?>
     </body>
    </html>