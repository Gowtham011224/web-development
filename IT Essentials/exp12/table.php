<!DOCTYPE html>
<html>
    <head><title>Update</title></head>
    <body>
        <h3><u>UPDATION</u></h3>
        <form method="post">
        
	Click the column to be updated:
         <input type="radio" name="col" id="b1" value="Name">  
         <label for="b1">Name</label>
         <input type="radio" name="col" id="b2" value="Age">   
         <label for="b2">Age</label>
         <input type="radio" name="col" id="b3" value="Contact">   
         <label for="b3">Contact Number</label>
         <input type="radio" name="col" id="b4" value="Password">
         <label for="b4">Password</label><br>
        Enter the new value:<input type="text" name="inp">    
        <br><input type="submit"><input type="reset">
        </form><hr>

     <?php
        
        if(isset($_POST['col']))
        { session_start();
            $cc=$_POST['col'];
            $nv=$_POST['inp'];
            $u=$_SESSION['uname'];
        $con=mysqli_connect('localhost','root','','it_obs');
        if($con==FALSE)
        die("Error_could not connect >>>".mysqli_connect_error());;
        $upd="update signin set $cc='$nv' where Username= '$u'";
        if($con->query($upd))
        echo "Successfully updated!!";
        else 
        echo "Couldn't update";
	}
     ?>
     </body>
    </html>