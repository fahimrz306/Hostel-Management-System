<?php ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div id="alert"></div>
    <div class="vh-100 gradient-custom">
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
                  <h2 class="fw-bold mb-3 text-uppercase">Login</h2>
                  <!-- <p class="text-white-50 mb-5">Please enter your login and password!</p> -->
    
                  <!-- <form> -->
                  <form action="loginconnect.php" method="post" enctype="multipart/form-data">
                      <div class="form-outline form-white mb-4">
                        <input type="email" id="email" class="form-control form-control-lg" name="email"/>
                        <label class="form-label" for="typeEmailX">Email</label>
                      </div>
    
                      <div class="form-outline form-white mb-4">
                        <input type="password" id="password" class="form-control form-control-lg" name="password" />
                        <label class="form-label" for="typePasswordX">Password</label>
                      </div>

                     
    
                      <!-- <button class="btn btn-outline-light btn-lg px-5" type="submit" value="Login" name="submit">Login</button> -->
                      <input class="btn btn-outline-light btn-lg px-5" type="submit" value="Login" name="submit"/>

    
                    </div>

                  </form>
                  <!-- </form> -->
              </div>
            </div>
          </div>
        </div>
      </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="./scripts//login.js"></script>
  </body>
</html>




