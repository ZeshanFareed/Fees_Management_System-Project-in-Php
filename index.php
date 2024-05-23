
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="lstyle.css" rel="stylesheet" >
    <title>Login Here</title>
  </head>
  <body>

<div class="container-fluid">
 
    <form class="max-auto" action="login.php" method="post">
        <h4 class="text-center">Fee Portal</h4>
        <div class="mb-3 mt-5">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" aria-describedby="emailHelp" required>
        
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control mt-2" required>
          <div id="emailHelp" class="form-text">Forget Password</div>
          
        </div>

        <button type="submit" name="sub" class="btn btn-primary mt-4">Login</button>
        <a href='user.php'>Don't have an Account! Register</a>"
      </form>
      

</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>


