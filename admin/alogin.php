<?php
include('aloginScript.php'); // Includes Login Script

?> 

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="../assets/img/logo.png" />
    <title>Agriculture Portal</title>

  <!--     Fonts and icons     -->
  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
	integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	
	<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css "/>
	
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

 
  <link rel="stylesheet" href="../assets/css/creativetim.min.css" type="text/css">

  <style>
    body {
      background: url('../assets/img/farm-background.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Open Sans', sans-serif;
    }
    .login-container {
      background: rgba(255, 255, 255, 0.85);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
      max-width: 400px;
      margin: auto;
    }
    .login-container h3 {
      text-align: center;
      font-weight: 700;
      margin-bottom: 20px;
    }
    .input-group-text {
      background:rgb(255, 255, 255);
      color:rgb(208, 204, 204);
      border: 0.5px solid black;
    }
    .btn-login {
      background:rgb(23, 184, 66);
      color: white;
      font-weight: bold;
      width: 100%;
    }
    .btn-login:hover {
      background:rgb(38, 182, 81);
    }
  </style>

</head>

  <body class="bg-white" id="top">
  <?php include('navbar.php'); ?>
 	
  <section class="section section-shaped section-lg">
    <!-- <div class="shape shape-style-1 shape-primary">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div> -->
<!-- ======================================================================================================================================== -->


<div class="container mt-5">
    <div class="login-container">
      <h2 class="text-center text-green mb-3"><i class="fas fa-user-shield"></i> Admin Login</h2>
      <form method="post" action="">
        <div class="form-group">
          <label for="admin_name">Admin ID</label>
          <input type="text" class="form-control" name="admin_name" id="admin_name" placeholder="Enter Admin ID" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-lock"></i></span>
            </div>
            <input type="password" class="form-control" name="admin_password" id="password" placeholder="Enter Password" required>
            <div class="input-group-append">
              <span class="input-group-text" onclick="password_show_hide();">
                <i class="fas fa-eye" id="show_eye"></i>
                <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
              </span>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-login" name="adminlogin">Login</button>
        <div class="text-center mt-2">
          <a href="#" class="text-info">Forgot Password?</a>
        </div>
        <span><?php echo $error; ?></span>
      </form>
    </div>
  </div>
  <?php require("footer.php");?>

  <script>
    function password_show_hide() {
      var x = document.getElementById("password");
      var show_eye = document.getElementById("show_eye");
      var hide_eye = document.getElementById("hide_eye");
      hide_eye.classList.remove("d-none");
      if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
      } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
      }
    }
  </script>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>