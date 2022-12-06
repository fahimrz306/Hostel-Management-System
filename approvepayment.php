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
        
        $id=$_GET['id'];

        

        $sql= "UPDATE `payments` SET `isApproved`='1' WHERE id=".$id."" ;
    
        $update=mysqli_query($conn,$sql);
        if($update)
        {
            echo "<script type='text/javascript'>alert('Approved Payment');window.location.href='viewpayment.php';</script>";
        }
        else
        {
            echo "<script type='text/javascript'>alert('Failed To Approve Payment');window.location.href='viewpayment.php';</script>";
        }

mysqli_close($conn);

?>

</body>
</html>