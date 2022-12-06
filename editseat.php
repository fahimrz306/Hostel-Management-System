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
	
    $id=$_GET['id'];

    $sql = "select * from seats where `id` ='".$id."'  ";
    
    $result = mysqli_query($conn,$sql);
    
    $row = mysqli_fetch_array($result);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

          <!-- Responsive navbar-->
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-lg-5 py-lg-3">
                <a class="navbar-brand fs-4" href="Aindex.php">HMS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    

                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        <li class="nav-item mx-2"><a class="nav-link active fs-5" aria-current="page" href="logout.php">Logout</a></li>
                        <!-- <li class="nav-item mx-2"><a class="nav-link fs-5" href="#!">About</a></li>
                        <li class="nav-item mx-2"><a class="nav-link fs-5" href="#!">Contact</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>

    <div id="alert"></div>
    <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">
    
                <div class="mb-md-1 mt-md-2 pb-4">
                  <svg class="mx-auto my-3" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg>
                  <h2 class="fw-bold mb-3 text-uppercase">Edit Seat</h2>
                  <!-- <p class="text-white-50 mb-5">Please enter your login and password!</p> -->

                    <form action="updateseat.php" method="post" enctype="multipart/form-data">
                        <div class="form-outline form-white mb-4">
                            <input type="text" id="id" name="id" class="form-control form-control-lg" value="<?php echo $row['id']; ?>" readonly/>
                            <label class="form-label" for="id">Seat ID</label>
                        </div>
                         <div class="form-outline form-white mb-4">
                            <input type="text" id="building" name="building" class="form-control form-control-lg" value="<?php echo $row['building']; ?>"/>
                            <label class="form-label" for="building">Building No.</label>
                        </div>
                        <div class="form-outline form-white mb-4">
                            <input type="text" id="floor" name="floor" class="form-control form-control-lg" value="<?php echo $row['floor']; ?>" />
                            <label class="form-label" for="floor">Floor No.</label>
                        </div>
                        <div class="form-outline form-white mb-4">
                            <input type="text" id="room" name="room" class="form-control form-control-lg" value="<?php echo $row['room']; ?>" />
                            <label class="form-label" for="room">Room No.</label>
                        </div>

                        <div class="form-outline form-white mb-4">
                            <input type="text" id="code" name="code" class="form-control form-control-lg" value="<?php echo $row['code']; ?>" />
                            <label class="form-label" for="code">Code</label>
                        </div>                      
                        <div class="form-outline form-white mb-4">
                            <input type="text" id="rent" name="rent" class="form-control form-control-lg" value="<?php echo $row['rent']; ?>" />
                            <label class="form-label" for="rent">Rent</label>
                        </div>
                        <div class="form-outline form-white mb-4">
                            <input type="text" id="isAvailable" name="isAvailable" class="form-control form-control-lg" value="<?php echo $row['isAvailable']; ?>" readonly/>
                            <label class="form-label" for="id">Seat ID</label>
                        </div>


                        <div class="mb-0">
                        <input class="btn btn-outline-light btn-lg px-5" type="submit" value="Update" name="submit"/>
                        </div>
                    <form>

                    </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
</html>

