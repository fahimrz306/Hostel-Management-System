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
        <title>All Registered User</title>
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

        <!-- search user -->
        <!-- <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-1">
                        <div class="form-outline mb-4">
                            <input type="search" class="form-control" id="datatable-search-input" placeholder="Search a User">      
                        </div>
                        <div class="col-md-12 text-center mb-0">
                            <button type="button" class="btn btn-primary btn-lg mx-2 mb-2">Search</button>
                        </div>       
                    </div>
                </div>
            </div>
        </header> -->
      
        <!-- Page Content-->
        <section class="pt-4 container-fluid height-full">
            <div class="container px-lg-3">
                <!-- Page Features-->

                <div class="row gx-lg-5">
                <h1 class="text-center font-weight-bold p-3 mb-2 bg-light text-dark ">All Members</h1>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">NID</th>
                        <th scope="col">SeatId</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>

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
                            <td><a href=<?php echo"edituser.php?id=$rows[id]&name=$rows[name]&address=$rows[address]&email=$rows[email]&phone=$rows[phone]&nid=$rows[nid]&seatId=$rows[seatId]"?>><svg xmlns="http://www.w3.org/2000/svg" width="50px" height="30px" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg></a></td>
                            <td><a href=<?php echo "deleteuser.php?id=$rows[id]&seatId=$rows[seatId]"?> style="margin-left:5px; padding:5px;"><svg xmlns="http://www.w3.org/2000/svg" width="50px" height="30px" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg></a></td>
                        </tr>
					<?php
                        }
					}
                    ?>
                    </table>
                







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
