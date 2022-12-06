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
        <title>All Payments</title>
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
                <h1 class="text-center font-weight-bold p-3 mb-2 bg-light text-dark ">All Payments by Members</h1>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">User ID</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Method</th>
                        <th scope="col">isApproved</th>
                        <th scope="col">Approve | Deny | Delete</th>
                        </tr>
                    </thead>
                    <?php
					$query="Select * from payments";
					$result= mysqli_query($conn,$query);

                    while($rows=mysqli_fetch_assoc($result))
                    {
                        // if($rows['isAvailable']==1)
                        // {
                            $uid=$rows['userId'];
					?>
                        <tr>
                            <td><?php echo $rows['userId'] ?></td>
                            <td>
                                <?php 
                                    $q="SELECT * FROM users WHERE `id`='$uid'";
                                    $r=mysqli_query ($conn,$q);
                                    $rowU=mysqli_fetch_assoc($r);
                                    echo $rowU['name']
                                ?>
                            
                        </td>
                            
                            <td><?php if($rows['method']==1){echo "Bkash";} else if($rows['method']==2){echo "Nagad";} else if($rows['method']==3){echo "Rocket";} else if($rows['method']==4){echo "Bank";}else if($rows['method']==5){echo "Manual";}?></td>
                            <td><?php if($rows['isApproved']==1) {echo "Paid";} else if($rows['isApproved']==0) {echo "Not Paid";}?>
                            <td>
                            <a href=<?php if($rows['isApproved']==0)  {echo "approvepayment.php?id=$rows[id]&userId=$rows[userId]&method=$rows[method]&isApproved=$rows[isApproved]";?> style="margin-left:5px; padding:5px;"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                            </svg></a> 
                            <a href=<?php echo "denypayment.php?id=$rows[id]&userId=$rows[userId]&method=$rows[method]&isApproved=$rows[isApproved]";?> style="margin-left:5px; padding:5px;"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg></a><?php ?>
                            <a href=<?php echo "deletepayment.php?id=$rows[id]&userId=$rows[userId]&method=$rows[method]&isApproved=$rows[isApproved]";?> style="margin-left:5px; padding:5px;"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg></a><?php }?>
                        </td> 
                        </tr>
					<?php
                        // }
					}
                    ?>
                    </table>
                </div>
            </section>
            <!-- <div class="col-md-12 text-center mb-0">
                <a href="addseat.php"><button type="button" class="btn btn-primary btn-lg mx-2 mb-2">Add Seat</button></a>
            </div>  -->



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
