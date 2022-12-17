<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'hms2');

if(!$conn)
{
	die("connection failed: ".mysqli_connect_error());
}


if(isset($_POST['submit'])){
    // receive all input values from the form
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));

    $_SESSION['status']=false;

   
   $q = "SELECT * FROM users WHERE email='$email' and password='$password'";
   
   $r=mysqli_query($conn,$q);
   if(mysqli_num_rows($r)>=1)
   {
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;
        $_SESSION['status']=true;

        while($rows=mysqli_fetch_assoc($r))
        {
            if($rows['type']==1)
            {
                echo "<script> window.location.href='Aindex.php'; </script>";
            } 
            else if ($rows['type']==2)
            {
                echo "<script> window.location.href='Mindex.php?id=$rows[id]&seatId=$rows[seatId]'; </script>";
            }
        }
        
   }
   else{
        echo "<script type='text/javascript'>alert('Wrong email or password');window.location.href='login.php';
   </script>";
   }
}

mysqli_close ($conn);
?>