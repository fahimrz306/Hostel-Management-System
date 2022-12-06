<?php
	session_start();
	$conn = mysqli_connect('localhost', 'root', '', 'hms2');

	if(!$conn)
	{
		die("connection failed: ".mysqli_connect_error());
	}
    if ( $_SESSION['status']!=true)
	{
		echo "<script type='text/javascript'>window.location.href='login.php';</script>";
	}
    // $page1=0;
    $id=$_GET['id'];
    $seatId=$_GET['seatId'];

    $sql= "SELECT * from `users` WHERE `type`='1'";
    $result= mysqli_query($conn, $sql);				
    $rowA=mysqli_fetch_assoc($result);
    $admin=$rowA['name'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Member Home Page</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/style2.css" rel="stylesheet">
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
            <div class="container px-lg-5 py-lg-3">
                <a class="navbar-brand fs-4" href="#">HMS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    

                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        <li class="nav-item mx-2"><a class="nav-link active fs-5"  href="logout.php">Logout</a></li>
                        <!-- <li class="nav-item mx-2"><a class="nav-link fs-5" href="#!">About</a></li>
                        <li class="nav-item mx-2"><a class="nav-link fs-5" href="#!">Contact</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>

 
        <!-- Page Content-->

        <section class="pt-4 container-fluid height-full">
            <div class="container px-lg-3">
                <!-- Page Features-->
                <div class="row gx-lg-5"> 
                    <div class="col-md-12 text-center mb-3">
                        <!-- <button type="button" class="btn btn-primary btn-lg mx-2 mb-2">All Notices</button> -->
                        <a <?php echo "href=pay.php?id=$id&seatId=$seatId";?>><button type="button" class="btn btn-primary btn-lg mx-2 mb-2">Pay Rent</button></a>
                    </div>                    
                </div>

                <div class="row gx-lg-5">
                    <h1 class="text-center font-weight-bold p-3 mb-2 bg-light text-dark ">All Messeges</h1>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Sent By</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <?php
					$query="SELECT * from notices WHERE `userId`='".$id."'";
					$result= mysqli_query($conn,$query);

                    while($rows=mysqli_fetch_assoc($result))
                    {
                        // if($rows['type']==1)
                        // {
					?>
                        <tr>
                            <td><?php echo $admin ?></td>
                            <td><?php echo $rows['title'] ?></td>
                            <td><?php echo $rows['description'] ?></td>
                        </tr>
					<?php
                        // }
					}
                    ?>
                    </table>
            </div>
        </section>




        <!-- Footer-->
        <!-- <footer class="footer py-4 bg-dark bg-info text-center text-lg-start fixed-bottom"> -->
        <footer class="footer text-center py-4 bg-dark bg-info text-center text-lg-start fixed-bottom">
            <div class="small container"><p class="m-0 text-center text-white">Copyright &copy; HMS 2022</p></div>
        </footer>


        

        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
