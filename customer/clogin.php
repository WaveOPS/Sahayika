<?php
include('cloginScript.php'); // Includes Login Script

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
    }
    .login-container {
      background: rgba(255, 255, 255, 0.88); /* Transparent box */
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      backdrop-filter: blur(0px);
    }
    .form-control {
      background: rgb(255, 255, 255);
      border: none;
      color: #ffffff;
      border: 0.5px solid black;
    }
    .form-control::placeholder {
      color: #eee;
    }
    .btn-login {
      background-color: #28a745;
      border: none;
      padding: 10px 20px;
      color: white;
      border-radius: 5px;
      transition: 0.3s;
    }
    .btn-login:hover {
      background-color: #218838;
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

<div class="container d-flex justify-content-center align-items-center" style="height: 50vh;">
    <div class="col-md-6 login-container">
      <h3 class="text-center text-green mb-3">Customer Login</h3>
      <form method="POST" action="">
        <div class="form-group">
          <label class="text-black">Email Id</label>
          <input type="text" class="form-control" required name="cust_email" placeholder="Enter Email ID" />
        </div>
        <div class="form-group">
          <label class="text-black">Password</label>
          <div class="input-group">
            <input name="cust_password" type="password" class="form-control" id="password" placeholder="Password" required />
            <div class="input-group-append">
              <span class="input-group-text" onclick="password_show_hide();">
                <i class="fas fa-eye" id="show_eye"></i>
                <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
              </span>
            </div>
          </div>
        </div>
        <button type="submit" class="btn-login btn btn-block" name="customerlogin">Login</button>
      </form>
    </div>
  </div>
  <!-- <?php require("footer.php");?> -->
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
