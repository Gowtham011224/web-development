<!DOCTYPE html>
<html>
    <head><title>updation</title></head>
    <body>
        <h3><u>UPDATION</u></h3>
        <form method="post">
        Enter customer ID to be updated:<input type="text" name="cid">
        (check php admin for available IDs)<br>
	Click the column to be updated:
         <input type="radio" name="col" id="b1" value="ID">  
         <label for="b1">ID</label>
         <input type="radio" name="col" id="b2" value="name">   
         <label for="b2">name</label>
         <input type="radio" name="col" id="b3" value="username">   
         <label for="b3">username</label>
         <input type="radio" name="col" id="b4" value="password">
         <label for="b4">password</label><br>
        Enter the new value:<input type="text" name="inp">    
        <br><input type="submit"><input type="reset">
        </form><hr>

     <?php
        if(isset($_POST['cid']))
        { 
            $ID=$_POST['cid'];
            $cc=$_POST['col'];
            $nv=$_POST['inp'];
        $con=mysqli_connect('localhost','root','','it_obs');
        if($con==FALSE)
        die("Error_could not connect >>>".mysqli_connect_error());
        $upd="update customers_11 set $cc='$nv' where ID='$ID'";
        if($con->query($upd))
        echo "Successfully updated!!";
        else 
        echo "Couldn't update";
	}
     ?>
     </body>
    </html>
