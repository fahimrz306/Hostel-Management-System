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
$name=$_GET['name'];

$sql= "SELECT * from `users` WHERE `id`='".$id."'";
$result= mysqli_query($conn, $sql);				
$rowU=mysqli_fetch_assoc($result);
$userId=$rowU['id'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Send Notice</title>
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

                  <h3 class="fw-bold mb-4 text-uppercase">Send Notice</h3>

                  <form action="sendnotice.php" method="post" enctype="multipart/form-data">
                        <div class="form-outline form-white mb-4">
                            <input type="hidden" id="id" name="id" class="form-control form-control-lg" value="<?php echo $userId; ?>" readonly/>
                            <!-- <label class="form-label" for="name">ID</label> -->
                        </div>
                        <div class="form-outline form-white mb-1">
                            <!-- <input type="text" id="to" name="to" class="form-control form-control-lg" /> -->
                            <select class="form-control form-control-lg" id="name" name="name">
                                <option> <?php echo $name ?></option>
                            </select>
                            <label class="form-label" for="name">To</label>
                        </div>

                      <div class="form-outline form-white mb-1">
                        <input type="text" id="title" name="title" class="form-control form-control-lg" placeholder="Subject of The Notice ..." />
                        <label class="form-label" for="title">Title of the Notice</label>
                      </div>
                      <div class="form-outline form-white mb-1">
                        <textarea type="textarea" id="description" name="description" class="form-control form-control-lg" placeholder="Write Your Notice Here ..." rows="7" cols="50" required></textarea>
                        <label class="form-label" for="email">Notice</label>
                      </div>


                                           
                      <div class="mb-0">
                      <input class="btn btn-outline-light btn-lg px-5" type="submit" value="Send" name="submit"/>
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
        <!-- Footer
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer> -->
</html>


<?php
  
// Send notice
if (isset($_POST['submit'])) 
{
 
  // receive all input values from the form
  $userId = mysqli_real_escape_string($conn, $_POST['id']);
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);

    


   
          $query = "INSERT INTO notices ( `userId`, `title`, `description` ) VALUES ('$userId', '$title', '$description')";
          $update=mysqli_query($conn, $query);
          

          if($update)
          {
              echo "<script type='text/javascript'>alert('Messege Sent');window.location.href='viewnotice.php';</script>";
          }
          else
          {
              echo "<script type='text/javascript'>alert('Failed To Sent Messege');window.location.href='viewnotice.php';</script>";
          }
}

?>





