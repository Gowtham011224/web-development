<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <style>
            form,table,td{padding:20px;}
            button{color:white;background:teal;padding:5px;}
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
    <body>
        <div class="header">
            <div class="header-right">
              <a  href="12.php">Sign Up</a>
              <a class="active" href="12login.php">Login</a>
              
            </div>
          </div>
        <form method="post">
        <h2>Enter login credentials</h2>
        <hr>
        <table>
            <tr>
                <th>Username</th>
                <td><input type="text" name="uname" required></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="pwd" required></td>
            </tr>
        </table>
        <button type="submit" >Login</button>  <button type="reset">Reset</button>
        </form>
        <?php
        session_start();
	if(isset($_POST['uname']))
        {
        $u=$_POST['uname'];
        $p=$_POST['pwd'];
        $con=mysqli_connect('localhost','root','','it_obs');
        if($con==FALSE)
        die("Error...>>".mysqli_connect_error());
        $s="select Username,Password from signin";
        $res=$con->query($s);
	$f=0;
        if(mysqli_num_rows($res)>0)
          {
            while($row=mysqli_fetch_array($res))
            {
              if($row['Username']==$u && $row['Password']==$p)
                {
		$f=1;
		$_SESSION['uname']=$u;
		echo '<script>window.location.href = "table.php";</script>';
              }           
              
            }
          }
	if ($f==0)
	echo '<h3>Invalid Username or Password';
        }
        ?>
       
        </body>