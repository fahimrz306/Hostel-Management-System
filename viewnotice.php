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

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Notice</title>
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
                <a class="navbar-brand fs-4" href="Aindex.php">HMS</a>
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
                <h1 class="text-center font-weight-bold p-3 mb-2 bg-light text-dark ">Sent Notices</h1>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">NID</th>
                        <th scope="col">SeatId</th>
                        <th scope="col">Send Notice</th>
                        

                        </tr>
                    </thead>
                    <?php
					$query="Select * from users";
					$result= mysqli_query($conn,$query);

                    while($rows=mysqli_fetch_assoc($result))
                    {
                        if($rows['type']==2)
                        {
					?>
                        <tr>
                            <td><?php echo $rows['id'] ?></td>
                            <td><?php echo $rows['name'] ?></td>
                            <td><?php echo $rows['email'] ?></td>
                            <td><?php echo $rows['phone'] ?></td>
                            <td><?php echo $rows['nid'] ?></td>
                            <td><?php echo $rows['seatId'] ?></td>
                            <td><a href=<?php echo"sendnotice.php?id=$rows[id]&name=$rows[name]"?>><svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                            </svg></a></td>
                        </tr>
					<?php
                        }
					}
                    ?>
                    </table>
                </div>
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
