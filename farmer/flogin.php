<?php
include('floginScript.php'); // Includes Login Script

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
    html, body {
      height: 100%; /* Ensure the body takes full height */
      margin: 0; /* Remove any default margin */
      padding: 0; /* Remove any default padding */
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background: url('../assets/img/farm-background.jpg');
      background-size: cover;
      background-repeat: no-repeat;
    }

    main {
      flex: 1;
    }

    .footer {
      background: rgb(35, 35, 35); /* Semi-transparent black background */
      color: white;
      text-align: center;
      padding: 10px 0;
      margin: 0; /* Ensure no margin around the footer */
      border: none;
      flex-shrink: 0; /* Prevent footer from shrinking */
    }
  </style>
</head>

  <body class="bg-white" id="top">
  <?php include('navbar.php'); ?> <!-- Navbar moved to the top -->
  <main>
  <section class="section section-shaped section-lg">
    <!-- <div class="back_image ">
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

<style>
    .login-container {
      background: rgba(255, 255, 255, 0.9);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    
    .login-button {
      background-color: #28a745;
      border: none;
      padding: 10px 20px;
      color: white;
      border-radius: 5px;
      transition: 0.3s;
      font-weight: bold;
    }
    .login-button:hover {
      background: #45a049;
    }
  </style>
</head>
<body>

  <section class="d-flex align-items-center justify-content-center" style="height: 50vh;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 login-container">
          <h3 class="text-center text-success">Farmer Login</h3>
          <form method="POST" action="">
            <div class="form-group">
              <label>Email Id</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="text" class="form-control" required name="farmer_email" placeholder="Enter Email ID"/>
              </div>
            </div>
            <div class="form-group">
              <label>Password</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-lock"></i></span>
                </div>
                <input name="farmer_password" type="password" class="form-control" id="password" placeholder="Password" required="true"/>
                <div class="input-group-append">
                  <span class="input-group-text" onclick="password_show_hide();">
                    <i class="fas fa-eye" id="show_eye"></i>
                    <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn login-button " name="farmerlogin">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

  <footer class="footer">
    <?php require("footer.php"); ?> <!-- Footer is now styled and positioned at the bottom -->
  </footer>

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

  <!-- Include the language-translate.js -->
  <script src="../assets/js/language-translate.js"></script>
  <script>
    // Initialize the language selector and apply the saved language
    initializeLanguageSelector();
  </script>
</body>



</html>