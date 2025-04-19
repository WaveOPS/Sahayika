<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="assets/img/logo.png" />
  <title>Agriculture Portal</title>

  <!-- Fonts and icons -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css"/>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css">

  <link rel="stylesheet" href="assets/css/creativetim.min.css" type="text/css">

  <style>
    body {
      margin-top: 0 !important; /* Remove any top margin */
      padding-top: 0 !important; /* Remove any top padding */
    }

    .section {
      margin-top: 0 !important; /* Remove the top margin */
      padding-top: 20px; /* Add a small padding for spacing */
    }
  </style>

</head>

<body class="bg-white" id="top">
    
  <?php require("navbar.php"); ?>
    
  <section class="section section-shaped section-lg" style="background-color: #f5f5dc;"> <!-- Beige background -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="display-4 font-weight-bold" style="color: #228B22;">Contact Us</h2> <!-- Forest green -->
                <p class="lead text-muted">We'd love to hear from you! Reach out to us with your queries or feedback.</p>
            </div>
        </div>
        <form action="contact-script.php" method="post" class="mt-4">
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="user_name" class="font-weight-bold" style="color: #6B4226;">Full Name</label> <!-- Brown -->
                        <input type="text" id="user_name" name="user_name" class="form-control" placeholder="Enter your Full Name" required>
                    </div>
                    <div class="form-group">
                        <label for="user_mobile" class="font-weight-bold" style="color: #6B4226;">Mobile Number</label>
                        <input type="tel" id="user_mobile" name="user_mobile" class="form-control" pattern="^[6-9]{1}[0-9]{9}$" title="Enter a valid 10-digit mobile number" placeholder="Enter your Mobile Number" required>
                    </div>
                    <div class="form-group">
                        <label for="user_email" class="font-weight-bold" style="color: #6B4226;">Email Address</label>
                        <input type="email" id="user_email" name="user_email" class="form-control" placeholder="Enter your Email Address" required>
                    </div>
                </div>
                <!-- Right Column -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="user_address" class="font-weight-bold" style="color: #6B4226;">Address</label>
                        <input type="text" id="user_address" name="user_address" class="form-control" placeholder="Enter your Address" required>
                    </div>
                    <div class="form-group">
                        <label for="user_message" class="font-weight-bold" style="color: #6B4226;">Message</label>
                        <textarea id="user_message" name="user_message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 text-center">
                    <button type="submit" name="submit" value="Submit" class="btn btn-success btn-lg btn-block" style="background-color: #228B22; border-color: #228B22;"> <!-- Forest green -->
                        Send Message
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>

<div class="modal fade" id="mysuccessModal" data-backdrop="static" style="position: fixed;width: 100%;height: 100%;overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" style="position: relative;margin: auto;padding: 0;border: 1px solid #888;width: 100%;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);">
            <!-- Modal Header -->
            <div class="modal-header" style="background-color: #1A4E85;color: white;">
                <h4 class="modal-title">Message</h4>
                <button type="button" class="close" onclick="pagesuccessRedirect()">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <h3>Thank you for contacting us.</h3>
                <h6>You are very important to us, all information received will always remain confidential. We will contact you as soon as we review your message.</h6>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer" style="padding:2px 16px;background-color: #1A4E85;color: white;">
                <button type="button" class="btn btn-danger" onclick="pagesuccessRedirect()">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myunsuccessModal" data-backdrop="static" style="position: fixed;width: 100%;height: 100%;overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" style="position: relative;margin: auto;padding: 0;border: 1px solid #888;width: 100%;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);">
            <!-- Modal Header -->
            <div class="modal-header" style="background-color: #1A4E85;color: white;">
                <h4 class="modal-title">Message</h4>
                <button type="button" class="close" onclick="pageunsuccessRedirect()">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                Error in sending message!!! Please try again.
            </div>
            <!-- Modal footer -->
            <div class="modal-footer" style="padding:2px 16px;background-color: #1A4E85;color: white;">
                <button type="button" class="btn btn-danger" onclick="pageunsuccessRedirect()">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Required JS for Bootstrap Dropdowns -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>

<script>
  $(document).ready(function () {
    $('.dropdown-toggle').dropdown();
  });
</script>

<?php require("footer.php");?>

</body>

</html>