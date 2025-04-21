<?php
include('cregisterScript.php'); // Includes Login Script
require_once("../sql.php");
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="../assets/img/logo.png" />
  <title>Agriculture Portal</title>

  <!-- Fonts and icons -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css"/>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/creativetim.min.css" type="text/css">

  <style>
    body {
      background: url('../assets/img/farm-background.jpg');
      background-size: cover;
      background-repeat: no-repeat;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.9);
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 10px 8px rgba(0, 0, 0, 0.5);
      opacity: 0.95;
    }

    .container {
      margin-top: -5px !important; /* Adjusted top margin */
    }

    .nav-item.nav-link {
      background-color: rgba(255, 255, 255, 0.92);
      color: green;
      font-size: 25px;
      text-decoration: underline;
      font-family: 'Times New Roman', Times, serif;
      padding: 10px 15px;
    }
  </style>
</head>

<body class="bg-white" id="top">
  <?php include('navbar.php'); ?>

  <section class="section section-shaped section-lg">
    <div class="container">

      <div class="row">
        <div class="col-sm-12 mb-3">
          <div class="nav nav-fill bg-gradient-white" id="nav-tab" role="tablist" style="border-radius: 20px;">
            <a class="nav-item nav-link active font-weight-bold login-container" 
               id="nav-home-tab" 
               data-toggle="tab" 
               href="#nav-home" 
               role="tab" 
               aria-controls="nav-home" 
               aria-selected="true" 
               style="background-color: green; color: white; font-size: 25px; text-decoration: underline; font-family: 'Times New Roman', Times, serif; padding: 10px 15px;">
               Customer Signup
            </a>
          </div>

          <div class="tab-content py-3 px-3 px-sm-0 bg-gradient-inf" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="card card-body login-container">
                <form name="insert" action="" method="post">
                  <div id="success"> <?php echo $error; ?> </div>
                  <script>
                    $("#success").fadeTo(2000, 500).slideUp(500, function(){
                      $("#success").slideUp(500);
                    });
                  </script>

                  <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label text-black">Customer Name <strong class="text-default"> *</strong></label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="name" required="true"/>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-md-3 col-form-label text-black">Email Address <strong class="text-default"> *</strong></label>
                    <div class="col-md-9">
                      <input class="form-control" type="email" name="email" required="true" />
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="mobile" class="col-md-3 col-form-label text-black">Mobile No <strong class="text-default"> *</strong></label>
                    <div class="col-md-9">
                      <input class="form-control" type="number" name="mobile" pattern="[6789][0-9]{9}" required="true" />
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="state" class="col-md-3 col-form-label text-black">State <strong class="text-default"> *</strong></label>
                    <div class="col-md-9">
                      <select onChange="getdistrict(this.value);" name="state" id="state" class="form-control">
                        <option value="">Select State</option>
                        <?php 
                          $query = mysqli_query($conn, "SELECT * FROM state");
                          while ($row = mysqli_fetch_array($query)) { ?>
                            <option value="<?php echo $row['StCode']; ?>"><?php echo $row['StateName']; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="city" class="col-md-3 col-form-label text-black">City <strong class="text-default"> *</strong></label>
                    <div class="col-md-9">
                      <select name="city" id="district-list" class="form-control">
                        <option value="">Select City</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="address" class="col-md-3 col-form-label text-black">Address <strong class="text-default"> *</strong></label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="address" required="true" />
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="pincode" class="col-md-3 col-form-label text-black">Pincode <strong class="text-default"> *</strong></label>
                    <div class="col-md-9">
                      <input class="form-control" type="number" name="pincode" required="true" />
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="password" class="col-md-3 col-form-label text-black">Password <strong class="text-default"> *</strong></label>
                    <div class="col-md-9">
                      <input class="form-control" type="password" name="password" required="true" />
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="confirmpassword" class="col-md-3 col-form-label text-black">Confirm Password <strong class="text-default"> *</strong></label>
                    <div class="col-md-9">
                      <input class="form-control" type="password" name="confirmpassword" required="true" />
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-9 offset-md-3">
                      <button name="customerregister" class="btn btn-block" style="background-color: green; color: white;">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>

  <?php include('footer.php'); ?>
</body>
 <!-- Include the language-translate.js -->
 <script src="../assets/js/language-translate.js"></script>
  <script>
    // Initialize the language selector and apply the saved language
    initializeLanguageSelector();
  </script>
</html>
