<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $conn = mysqli_connect("localhost","root","","hms2");
      
        $id=$_POST['id'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $nid=$_POST['nid'];
        $seatId=$_POST['seatId'];


      $conn = mysqli_connect("localhost","root","","hms2");

      $query= "UPDATE `users` SET `name`='".$name."', `address`='".$address."', `email`='".$email."', `phone`='".$phone."' , `nid`='".$nid."' , `seatId`='".$seatId."' WHERE `id`=".$id."" ;
      
      $update=mysqli_query($conn,$query);
      if($update)
      {
          echo "<script type='text/javascript'>alert('Profile Updated Succesfully');window.location.href='alluser.php';</script>";
      }
      else
      {
          echo "<script type='text/javascript'>alert('Failed To Update Profile');window.location.href='alluser.php';</script>";
      }


      // Close The Connection
      mysqli_close($conn);

  


?>   
</body>
</html>
