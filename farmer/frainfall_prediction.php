<?php
include ('fsession.php');
ini_set('memory_limit', '-1');

if(!isset($_SESSION['farmer_login_user'])){
header("location: ../index.php");} // Redirecting To Home Page
$query4 = "SELECT * from farmerlogin where email='$user_check'";
              $ses_sq4 = mysqli_query($conn, $query4);
              $row4 = mysqli_fetch_assoc($ses_sq4);
              $para1 = $row4['farmer_id'];
              $para2 = $row4['farmer_name'];
			  
?>

<!DOCTYPE html>
<html>
<?php include ('fheader.php');  ?>

  <body class="bg-white" id="top">
  
<?php include ('fnav.php');  ?>

 
  <section class="section section-shaped section-lg">
  <!--  <div class="shape shape-style-1 shape-primary">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>-->
	<head>
		<style>
			 body {
      background: url('../assets/img/farm.jpg');
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
			</style>
	</head>
<!-- ======================================================================================================================================== -->

<div class="container ">
    
		
          <div class="row row-content">
            <div class="col-md-12 mb-3">

				<div class="card text-white bg-gradient-white mb-3 login-container">
				<form role="form" action="#" method="post" >  
				  <div class="card-header">
				  <span class="display-4" style="color:green;font-family:'Times New Roman', Times, serif;font-weight:bold;text-decoration:underline;" > Rainfall Prediction  </span>	
				  
				  </div>

				  <div class="card-body text-dark">
					 
				<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">

    <thead>
					<tr class="font-weight-bold text-default">
					<th><center>Region</center></th>
					<th><center>Month</center></th>
					<th><center>Prediction</center></th>
					
					
        </tr>
    </thead>
 <tbody>
                                 <tr class="text-center">

                                   <td>
                                    	<div class="form-group ">
											    <select id="region-select" name="region" class="form-control" required>
													<option value="">Select Region</option>
													<script language="javascript"> print_region("region-select"); </script>
													<?php if (isset($_POST['region'])): ?>
														<option value="<?php echo htmlspecialchars($_POST['region']); ?>" selected><?php echo htmlspecialchars($_POST['region']); ?></option>
													<?php endif; ?>
												</select>
										</div>
                                    </td>

									<td>
										<div class="form-group ">
											    <select id="month-select" name="month" class="form-control" required>
													<option value="">Select Month</option>
													<script language="javascript"> print_months("month-select"); </script>
													<?php if (isset($_POST['month'])): ?>
														<option value="<?php echo htmlspecialchars($_POST['month']); ?>" selected><?php echo htmlspecialchars($_POST['month']); ?></option>
													<?php endif; ?>
												</select>
										</div>
                                    </td>
									
									<td>
                                    <center>
										<div class="form-group ">
											<button type="submit" value="Yield" name="Rainfall_Predict" class="btn btn-success btn-submit" style="background-color: green;color:white;">Predict</button>
										</div>
                                    
                                    </center>
                                    </td>
                                </tr>
                            </tbody>
							
					
	</table>
	</div>
	</form>
</div>

<div class="card-header login-container">
				  <span class="display-4" style="color:green;"> Result  </span>					


<div class="card text-white mb-3 login-container" style="background-color:green;">
  <h4>
    <?php 
    if (isset($_POST['Rainfall_Predict'])) {
      $region = trim($_POST['region']);
      $month = trim($_POST['month']);

      echo '<span style="color:white;">Predicted Rainfall for the Region ' . $region . ' in the month ' . $month . ' is (in mm): </span>';

      $Jregion = json_encode($region);
      $Jmonth = json_encode($month);

      $command = escapeshellcmd("python ML/rainfall_prediction/rainfall_prediction.py $Jregion $Jmonth");
      $output = shell_exec($command); // Use shell_exec for better control
      echo '<span style="color:white;">' . htmlspecialchars($output) . '</span>';
    }
    ?>
  </h4>
</div>
				</div>
	
	
            </div>
          </div>  
       </div>
		 
</section>

    <?php require("footer.php");?>
 <!-- Include the language-translate.js -->
 <script src="../assets/js/language-translate.js"></script>
  <script>
    // Initialize the language selector and apply the saved language
    initializeLanguageSelector();
  </script>
</body>
</html>

