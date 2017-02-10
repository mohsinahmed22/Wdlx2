<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mohsin Ahmed | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../css/custom.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>

      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
    <?php
        if(isset($_GET['error'])){
            echo "<div class='alert alert-danger'>{$_GET['error']} </div>";
        }
        if(isset($_GET['success'])){
            echo "<div class='alert alert-success'>{$_GET['success']} </div>";
        }
    ?>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="process_login.php" method="post">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" name="username" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="users_password" placeholder="Password" required="" />
              </div>
              <div>
                <button class="btn btn-default " type="submit" name="login">Log in</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Mohsin ahmed</h1>
                  <p>©2017 All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form  action="process_login.php" method="post">
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" name="username" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" name="users_email" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="users_password" placeholder="Password" required="" />
              </div>
              <div>
                <button class="btn btn-default " type="submit" name="register">Register</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Mohsin Ahmed</h1>
                  <p>©2016 All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
