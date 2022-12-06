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
        $seatId=$_GET['seatId'];
        $sql = "delete from users where id='$id'";
        $del=mysqli_query ($conn,$sql);
    
    if($del)
    {
        // $query = "SELECT * FROM users where id='$id'";
        // $result = mysqli_query($conn, $query);
        // $user = mysqli_fetch_assoc($result);
        // $seatId = $user['seatId'];

        $query2="UPDATE seats SET `isAvailable` = '1' WHERE `id`='".$seatId."'";
        
        $update=mysqli_query($conn,$query2); 
        if($update)
        {

        echo "<script type='text/javascript'>alert('User Deleted Succesfully');window.location.href='alluser.php';</script>";
        }
        else{
            echo "<script type='text/javascript'>alert('Failed to Delete User');window.location.href='alluser.php';</script>";
        }
    }
    

	// Close The Connection
	mysqli_close ($conn);
	

?>
</body>
</html>
