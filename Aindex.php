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
        <title>Admin Home Page</title>
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

        <!-- Header-->
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
                    <!-- <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-dark bg-gradient text-white rounded-3 mb-4 mt-n4"><a class="link-light" href="userlist.php"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                  </svg></a>
                                </div>
                                <h2 class="fs-4 fw-bold title"><a class="link-dark" href="userlist.php">User Management</a></h2>

                                card content
                                <ul class="list-inline text-md-start">
                                    <li class="list-inline-item"><i class="bi bi-play-fill"></i></li>
                                    <li class="list-inline-item"><a class="link-success" href="register.php">Add User</a></li>
                                </ul>
                                <ul class="list-inline text-md-start">
                                    <li class="list-inline-item"><i class="bi bi-play-fill"></i></li>
                                    <li class="list-inline-item"><a class="link-success" href="alluser.php">View All User</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->

                    
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <!-- <div class="feature bg-dark bg-gradient text-white rounded-3 mb-4 mt-n4"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                  </svg>
                                </div> -->
                                <img src="image/user.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h2 class="fs-4 fw-bold title">User Management</h2>
                                <ul class="list-inline text-md-start">
                                    <li class="list-inline-item"><i class="bi bi-play-fill"></i></li>
                                    <li class="list-inline-item"><a class="link-success" href="register.php">Add User</a></li>
                                </ul>
                                <ul class="list-inline text-md-start">
                                    <li class="list-inline-item"><i class="bi bi-play-fill"></i></li>
                                    <li class="list-inline-item"><a class="link-success" href="alluser.php">View All User</a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <!-- <div class="feature bg-dark bg-gradient text-white rounded-3 mb-4 mt-n4"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                  </svg>
                                </div> -->
                                <img src="image/seat.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h2 class="fs-4 fw-bold title">Seat Management</h2>
                                <ul class="list-inline text-md-start">
                                    <li class="list-inline-item"><i class="bi bi-play-fill"></i></li>
                                    <li class="list-inline-item"><a class="link-success" href="viewseat.php">View Available Seat</a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <!-- <div class="feature bg-dark bg-gradient text-white rounded-3 mb-4 mt-n4"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                  </svg>
                                </div> -->
                                <img src="image/notice.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h2 class="fs-4 fw-bold title">Notice Management</h2>
                                <ul class="list-inline text-md-start">
                                    <li class="list-inline-item"><i class="bi bi-play-fill"></i></li>
                                    <li class="list-inline-item"><a class="link-success" href="viewnotice.php">View All Notice</a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>

                  
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <!-- <div class="feature bg-dark bg-gradient text-white rounded-3 mb-4 mt-n4"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                  </svg>
                                </div> -->
                                <img src="image/payment.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h2 class="fs-4 fw-bold title">Payment Management</h2>
                                <ul class="list-inline text-md-start">
                                    <li class="list-inline-item"><i class="bi bi-play-fill"></i></li>
                                    <li class="list-inline-item"><a class="link-success" href="viewpayment.php">View Payments</a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
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
