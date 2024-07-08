<?php
$acclink=mysqli_connect('localhost','root','',"it_obs");
if($acclink==False)
{
die("Error_could not connect >>>".mysqli_connect_error());
}
$create_sql_table="create table if not exists Customers_11 (ID varchar(4) unique not null,Name varchar(10), Username varchar(12),Password varchar(8))";
if(mysqli_query($acclink,$create_sql_table)==True)
{
echo "Table present else created.";
}
$insert_sql_data="insert into customers_11 values('".$_POST['id']."','".$_POST['name']."','".$_POST['uname']."','".$_POST['pwd']."')";
if(mysqli_query($acclink,$insert_sql_data)==True)
{
echo "Data added";
}
else
{
echo "Some error occured while appending data...check code";
}
 ?>