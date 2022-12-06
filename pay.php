<?php

// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'hms2');
if(!$conn)
{
	die("connection failed: ".mysqli_connect_error());
}

session_start();

$errors = array();

$id=$_GET['id'];
$seatId=$_GET['seatId'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>payment</title>
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
                  <h2 class="fw-bold mb-3 text-uppercase">Pay Rent</h2>



                <form action="pay.php" method="post" enctype="multipart/form-data">


                    <div class="form-outline form-white mb-3">
                        <select class="form-control form-control-lg" id="id" name="id">
                        <?php

                            ?>
                            <option> <?php echo $id ?></option>

                        </select>
                        <label class="form-label" for="userid">User Id</label>
                    </div>


                    <div class="form-outline form-white mb-4">      
                        <select class="form-control form-control-lg" id="seatId" name="seatId">
 
                        <?php

                        ?>          
                        <option> <?php echo $seatId ?></option>

                        </select>
                        <label for="seatId">Seat ID</label>
                    </div>


                      <div class="form-outline form-white mb-4">
                        
                        <select class="form-control form-control-lg" id="rent" name="rent">
                        <?php
                        $queryR = "SELECT * FROM seats WHERE `id`= '$seatId'";
                        if($resultR=mysqli_query($conn,$queryR))
                        {
                          if(mysqli_num_rows($resultR)>=1)
                          {
                            while($rowR=mysqli_fetch_assoc($resultR))
                            {

                                ?>
                                  <option> <?php echo $rowR['rent'] ?></option>
                                <?php
                            }
                          }
                        }
                        ?>
                        </select>
                        <label class="form-label" for="rent">Rent</label>
                      </div>   
                      
                      
                      <div class="form-outline form-white mb-4">
                        <select class="form-control form-control-lg" id="method" name="method">
                          <option value="Bkash">Bkash</option>
                          <option value="Nagad">Nagad</option>
                          <option value="Rocket">Rocket</option>
                          <option value="Bank">Bank</option>
                          <option value="Manual">Manual</option>
                        </select>
                        <label class="form-label" for="method">Payment Method</label>
                      </div>
                      

                                           
                      <div class="mb-0">
                      <input class="btn btn-outline-light btn-lg px-5" type="submit" value="Pay" name="submit"/>
                      </div>
                      
       
                    </div>

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

</html>

<?php
  
// Payment
if (isset($_POST['submit'])) {
 
  // receive all input values from the form
  $id = mysqli_real_escape_string($conn, $_POST['id']);
  $seatId= mysqli_real_escape_string($conn, $_POST['seatId']);
  $rent = mysqli_real_escape_string($conn, $_POST['rent']);
  $method = mysqli_real_escape_string($conn, $_POST['method']);
  $isApproved = 0;
  if($method=='Bkash')
  {
    $method=1;
  } else if($method=='Nagad')
  {
    $method=2;
  }
  else if($method=='Rocket')
  {
    $method=3;
  }
  else if($method=='Bank')
  {
    $method=4;
  }
  else if($method=='Manual')
  {
    $method=5;
  }


          $queryF = "UPDATE payments SET `method` = '$method', `isApproved` = '$isApproved', `userId` = '$id' WHERE `userId` = '$id'" ;
          $update = mysqli_query($conn, $queryF);

          if($update)
          {
              echo "<script type='text/javascript'>alert('Payment Successful');window.location.href='Mindex.php?id=$id&seatId=$seatId';</script>";
          }
          else
          {
              echo "<script type='text/javascript'>alert('Failed To Payment');window.location.href='pay.php';</script>";
          }

  	
  
}

?>

