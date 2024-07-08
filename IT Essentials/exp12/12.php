<!DOCTYPE html>
<html>
 <head>
   <title>Sign up form</title>
   <style>
    t {padding-left:4em;}
    input{padding:10px;width:15%; height:10%;}
.header {
    overflow:hidden;
    height: 50px;
    background-color: #f1f1f1;
    padding: 20px 10px;
    float:right
   
 }
.header a {
    color: black;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-size: 18px; 
    line-height: 25px;
    border-radius: 4px;
    
  }

  .header a:hover {
    background-color: #ddd;
    border-radius:10px ;
    color: purple;
  }
.header a.active {
    background-color: dodgerblue;
    color: white;
  }
   </style>
 </head>
 <body style="font-size:120%;border:solid black;padding:10px;">

<div class="header">
            <div >
              <a class="active" href="12.php">Sign Up</a>
              <a href="12login.php">Login</a>
            </div>
          </div>

   <h1>Personal Info and Contact Details</h1>
   <hr><form action="12.php" method="POST">
First Name: <input type="text" id="fname" name="first_name" required><t>

Last Name: <input type="text" id="lname" name="last_name" placeholder="optional"><t>

Date of Birth: <input type="date" id="dob" name="date_birth" required>
<button onclick="a()">generate age</button><br><br>
Gender:
 <select name="gender" style="width:15%;padding:10px;" required>
  <option value="">-</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Other">Other</option>
</select>
<t>
Age:<input type="text" id="age" name="ag" placeholder="click generate age to get age" required><t>
Marital Status: <select name="ms" style="width:15%;padding:10px;" >
  <option value="">-</option>
  <option value="Married">Married</option>
  <option value="Unmarried">Unmarried</option>
  <option value="Divorced">Divorced</option>
</select><br><br>
Educational qualification:<input type="text" name="e_qual" placeholder="optional"><t>
Hobbies:<input type="text" name="hobbie" placeholder="optional">
<hr>
Email ID:<input type="email" name="mail" required><t>
Contact Number:<input type="text" name="num"  placeholder="XXXXX XXXXX"  minlength="10" maxlength="10" required><br><br>
Username:<input type="text" name="uname" minlength="10" maxlength="20" required><t>
Password:<input type="password" name="password" id="pwd" minlength="8" maxlength="12" required>
<output id="res"></output>
<h4>Note:(password must contain atleast one number,one uppercase,one lowercase and one special character)</h4>
<hr>
Address:<br><textarea placeholder="Enter address" name="address" required></textarea><t>
Country:<select name="country" style="width:15%;padding:10px;" required>
   <option value="">-</option>
   <option value="India">india</option>
   <option value="China">china</option>
   <option value="Russia">russia</option>
   <option value="United States of America">usa</option>
</select><t>
State:<select name="state" style="width:15%;padding:10px;" required>
   <option value="">-</option>
   <option value="Tamil Nadu">tamil nadu</option>
   <option value="Karnataka">karnataka</option>
   <option value="Delhi">delhi</option>
   <option value="Beijing">beijing</option>
   <option value="Yumen">yumen</option>
   <option value="Hong Kong">hong kong</option>
   <option value="Moscow">moscow</option>
   <option value="Vladimir Region">vladimir</option>
   <option value="St Petersburg">st petersburg</option>
   <option value="Alaska">alaska</option>
   <option value="California">california</option>
   <option value="Florida">florida</option>
   
</select><t>
Pincode:<input type="text" name="pcode" placeholder="XXX-XXX" minlength="6" maxlength="6" required>

<br><br><hr>
<p align="center"><input type="submit" value="Submit" onclick="vald();passvalue()">
<input type="reset" value="Reset"></p>
</form>
<script>
function vald()
{
var p=document.getElementById("pwd").value;
var f1=0,f2=0,f3=0,f4=0;
for(i=0;i<p.length;i++)
{
ch=p.charAt(i);
if(ch>='A' && ch<='Z')
f1=1;
else if(ch>='a' && ch<='z')
f2=1;
else if(ch>='0' && ch<='9')
f3=1;
else if(ch!=' ')
f4=1;
}
if(!(f1==1&&f2==1&&f3==1&&f4==1))
{document.getElementById("pwd").value="";
document.getElementById("res").value="Invalid format";
}
else
document.getElementById("res").value="valid format";

}
function a(){
var today=new Date();
var bd=new Date(document.getElementById("dob").value);
let age=today.getFullYear()-bd.getFullYear();
if (today.getMonth()<bd.getMonth())
age--;
else if (today.getMonth()==bd.getMonth()&&today.getDate()<bd.getDate())
age--;
document.getElementById("age").value=age;
}
</script>
<?php
$acclink=mysqli_connect('localhost','root','',"it_obs");
if($acclink==False)
{
die("Error_could not connect >>>".mysqli_connect_error());
}
$create_sql_table="create table if not exists Signin (Name varchar(25),
DOB varchar(12), Gender varchar(12), Age int , Marital_Status varchar(10),
Educational_qualifications varchar(50),Hobbies varchar(50),Email_ID varchar(10),
Contact varchar(10),Username varchar(20) Unique not null,Password varchar(12),
Address varchar(25),Country varchar(10),State varchar(10),Pincode int(6))";
if(mysqli_query($acclink,$create_sql_table)==True)
{
echo "";
}
if(isset($_POST['first_name']))
{
$n=$_POST['first_name']." ".$_POST['last_name'];
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
$insert_sql_data="insert into signin values('$n','$d','$g',$a,'$ms','$e','$h','$m','$c','$u','$p','$ad','$ct','$st',$pn)";
if(mysqli_query($acclink,$insert_sql_data)==False)
{
echo "Some error occured while appending data...check code";
}
else
{
echo "<h3>Registered successfully!You can now login.</h3>";
}
}
?>
</body>
</html>