<?php

// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'hms2');
if(!$conn)
{
	die("connection failed: ".mysqli_connect_error());
}

session_start();

$errors = array(); 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
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
                  <h2 class="fw-bold mb-3 text-uppercase">Add User</h2>
                  <!-- <p class="text-white-50 mb-5">Please enter your login and password!</p> -->
    
                  <!-- <form action="login.html"> -->
                  <form action="register.php" method="post" enctype="multipart/form-data">
                      <div class="form-outline form-white mb-4">
                        <input type="text" id="name" name="name" class="form-control form-control-lg" />
                        <label class="form-label" for="name">Name</label>
                      </div>
                      <div class="form-outline form-white mb-4">
                        <input type="text" id="address" name="address" class="form-control form-control-lg" />
                        <label class="form-label" for="address">Address</label>
                      </div>
                      <div class="form-outline form-white mb-4">
                        <input type="Email" id="email" name="email" class="form-control form-control-lg" />
                        <label class="form-label" for="email">Email</label>
                      </div>

                      <div class="form-outline form-white mb-4">
                        <input type="password" id="password" name="password" class="form-control form-control-lg" />
                        <label class="form-label" for="password">Password</label>
                      </div>
                     
                      <div class="form-outline form-white mb-4">
                        <input type="tel" id="phone" name="phone" class="form-control form-control-lg" />
                        <label class="form-label" for="phone">Phone</label>
                      </div>                      
                      <div class="form-outline form-white mb-4">
                        <input type="text" id="nid" name="nid" class="form-control form-control-lg" />
                        <label class="form-label" for="nid">NID</label>
                      </div>
                      <div class="form-outline form-white mb-4">      
                        <select class="form-control form-control-lg" id="seatId" name="seatId">
                        <?php
                        $q = "SELECT * FROM seats";
                        if($r=mysqli_query($conn,$q))
                        {
                          if(mysqli_num_rows($r)>=1)
                          {
                            while($rows=mysqli_fetch_assoc($r))
                            {
                              if( $rows['isAvailable']==1)
                              {
                                ?>
                                  <option> <?php echo $rows['id'] ?></option>
                                <?php
                              }

                            }
                          }

                        }
                        ?>
                        </select>
                        <label for="seatId">Seat ID</label>
                      </div>

                                           
                      <div class="mb-0">
                      <input class="btn btn-outline-light btn-lg px-5" type="submit" value="Register" name="submit"/>
                      </div>
                      
       
                    </div>
    
                    <!-- <div>
                      <p class="mb-0">Already have an account? <a href="login.php" class="text-white-50 fw-bold">Login</a>
                      </p>
                    </div> -->
                  </form>
                  <!-- </form> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="./scripts/register.js"></script>
  </body>
        <!-- Footer
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer> -->
</html>

<?php
  
// REGISTER USER
if (isset($_POST['submit'])) {
 
  // receive all input values from the form
  // $id = mysqli_real_escape_string($conn, $_POST['id']);
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $address = mysqli_real_escape_string($conn, $_POST['address']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, md5($_POST['password']));
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $type= 2;
  $nid = mysqli_real_escape_string($conn, $_POST['nid']);
  $seatId = mysqli_real_escape_string($conn, $_POST['seatId']);
  


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (empty($phone)) { array_push($errors, "Phone is required"); }
  if (empty($nid)) { array_push($errors, "Nid is required"); }
  if (empty($seatId)) { array_push($errors, "SeatId is required"); }
   

  $user_check_query = "SELECT * FROM users WHERE `email`='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists

    if ($user['email'] === $email) {
      echo"<script type='text/javascript'> alert ( 'This User Already Exists');</script>";
      array_push($errors, "email already exists");
      echo "<script type='text/javascript'>window.location.href='register.php';</script>";
    }

  }
  $query2 = "SELECT * FROM `users` ORDER BY id DESC LIMIT 1;"; 
  $resultId = mysqli_query($conn, $query2);
  $lastId = mysqli_fetch_assoc($resultId);
  $id = $lastId['id'] + 1;

  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) 
  {

          $query = "INSERT INTO users ( `name`, `address`, `email`, `password`, `phone`, `type`, `nid`, `seatId`  ) 
          VALUES('$name', '$address', '$email','$password','$phone','$type','$nid','$seatId')";
          mysqli_query($conn, $query);

          $queryP = "INSERT INTO payments ( `isApproved`, `userId`) 
          VALUES('NULL', '$id')";
          mysqli_query($conn, $queryP);

          // $queryN = "INSERT INTO notices ( `isApproved`, `userId`) 
          // VALUES('NULL', '$id')";
          // mysqli_query($conn, $queryN);

          $query3 = "UPDATE seats SET `isAvailable` = '0' WHERE `id`='".$seatId."'";
          $update=mysqli_query($conn,$query3); 
          if($update)
          {
              echo "<script type='text/javascript'>alert('Successfully Registered User');window.location.href='Aindex.php';</script>";
          }
          else
          {
              echo "<script type='text/javascript'>alert('Failed To Register User');window.location.href='register.php';</script>";
          }

	  // header('location:login.php');
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	
  }
}

?>




