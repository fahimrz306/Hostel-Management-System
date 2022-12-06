<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
    session_start();
    // Establish Connection with Database
    $conn = mysqli_connect("localhost","root","","hms2");
    if(!$conn)
	{
		die("connection failed: ".mysqli_connect_error());
	}
	if ( $_SESSION['status']!=true)
	{
		echo "<script type='text/javascript'>window.location.href='login.php';</script>";
	}
	// Specify the query to Delete Record
    
        $id=$_GET['id'];
        $isAvailable=$_GET['isAvailable'];
        if($isAvailable==1)
        {
            $sql = "delete from seats where id='$id'";
            $del=mysqli_query ($conn,$sql);
            echo "<script type='text/javascript'>alert('Seat Deleted Succesfully');window.location.href='viewseat.php';</script>";     
        }
        else if($isAvailable==0)
        {
            echo "<script type='text/javascript'>alert('Seat is Allocated to A User. Please Delete The User First');window.location.href='viewseat.php';</script>"; 
        }


	// Close The Connection
	mysqli_close ($conn);
	

?>
</body>
</html>
