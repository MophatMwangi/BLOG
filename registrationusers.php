<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/cosmo/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="main.css">
  </head>
  <body>

    <section class="jeep">
      <div class="menu-bar">
      <ul>
        <li class="active"><a href="#"><i class="fa fa-home"></i>Home</a>
        <li><a href="login.php"><i class="fa fa-sign-in"></i>Login</a></li>
        <li><a href="registrationusers.php"><i class="fa fa-key"></i>Register</a></li>
      </ul>
    </div>
  </section>



  <div class="container">
      <div class="login-box">
      <div class="row">
        <div class="col-md-6 login-right">

         <h2 class="">Register Here</h2>
        <form action="registration.php" method="post">

          <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control"required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control"required>
          </div>
        <button type="submit" class="btn btn-primary">Register</button>

        </form>
       </div>

      </div>
    </div>
    </div>

  </body>
</html>
