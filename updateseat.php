<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update seat</title>
</head>
<body>
<?php
        $conn = mysqli_connect("localhost","root","","hms2");
      
        $id=$_POST['id'];
        $building=$_POST['building'];
        $floor=$_POST['floor'];
        $room=$_POST['room'];
        $code=$_POST['code'];
        $rent=$_POST['rent'];
        $isAvailable=$_POST['isAvailable'];


      $conn = mysqli_connect("localhost","root","","hms2");

      $query= "UPDATE `seats` SET `building`='".$building."', `floor`='".$floor."', `room`='".$room."', `code`='".$code."' , `rent`='".$rent."' WHERE `id`=".$id."" ;
      
      $update=mysqli_query($conn,$query);
      if($update)
      {
          echo "<script type='text/javascript'>alert('Seat Updated Succesfully');window.location.href='viewseat.php';</script>";
      }
      else
      {
          echo "<script type='text/javascript'>alert('Failed To Update Seat');window.location.href='viewseat.php';</script>";
      }


      // Close The Connection
      mysqli_close($conn);

  


?>   
</body>
</html>
