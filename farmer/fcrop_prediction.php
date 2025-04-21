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
    <!--<div class="shape shape-style-1 shape-primary">
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
    }`

	
	.container {
    margin-top: -20px !important; /* Reduced top margin */
  }
			</style>
	</head>
<!-- ======================================================================================================================================== -->

<div class="container ">
    
    	
		
          <div class="row row-content">
            <div class="col-md-12 mb-3">

				<div class="card text-white bg-gradient-white mb-3 login-container">
				  <div class="card-header">
				  <span class=" display-4" style="color:green;font-family:'Times New Roman', Times, serif;font-weight:bold;text-decoration:underline;" > Crop Prediction  </span>					
				  </div>

				  <div class="card-body text-dark">
				     <form role="form" action="#" method="post">     
					 
				<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">

    <thead>
					<tr class="font-weight-bold text-default">
					<th><center> State</center></th>
					<th><center>District</center></th>
					<th><center>Season</center></th>
					<th><center>Prediction</center></th>
					
        </tr>
    </thead>
 <tbody>
                                 <tr class="text-center">

                                    <td>
                                    	<div class="form-group">
											<select onchange="print_city('state', this.selectedIndex);" id="sts" name="stt" class="form-control" required>
												<option value="">Select State</option>
												<script language="javascript">print_state("sts");</script>
												<option value="<?php echo isset($_POST['stt']) ? htmlspecialchars($_POST['stt']) : ''; ?>" selected>
													<?php echo isset($_POST['stt']) ? htmlspecialchars($_POST['stt']) : ''; ?>
												</option>
											</select>
										</div>
                                    </td>

									<td>
										<div class="form-group">
											<select id="state" name="district" class="form-control" required>
												<option value="">Select District</option>
												<option value="<?php echo isset($_POST['district']) ? htmlspecialchars($_POST['district']) : ''; ?>" selected>
													<?php echo isset($_POST['district']) ? htmlspecialchars($_POST['district']) : ''; ?>
												</option>
											</select>
										</div>
                                    </td>
									
									<td>
										<div class="form-group">
											<select name="Season" class="form-control">
												<option value="">Select Season ...</option>
												<option value="Kharif" <?php echo (isset($_POST['Season']) && $_POST['Season'] == 'Kharif') ? 'selected' : ''; ?>>Kharif</option>
												<option value="Whole Year" <?php echo (isset($_POST['Season']) && $_POST['Season'] == 'Whole Year') ? 'selected' : ''; ?>>Whole Year</option>
												<option value="Autumn" <?php echo (isset($_POST['Season']) && $_POST['Season'] == 'Autumn') ? 'selected' : ''; ?>>Autumn</option>
												<option value="Rabi" <?php echo (isset($_POST['Season']) && $_POST['Season'] == 'Rabi') ? 'selected' : ''; ?>>Rabi</option>
												<option value="Summer" <?php echo (isset($_POST['Season']) && $_POST['Season'] == 'Summer') ? 'selected' : ''; ?>>Summer</option>
												<option value="Winter" <?php echo (isset($_POST['Season']) && $_POST['Season'] == 'Winter') ? 'selected' : ''; ?>>Winter</option>
											</select>
										</div>
									</td>

									<td>
                                    <center>
										<div class="form-group">
											<button type="submit" name="Crop_Predict" class="btn btn-success btn-submit" style="background-color: green;">Predict</button>
										</div>
                                    
                                    </center>
                                    </td>

                                </tr>
                            </tbody>
	</table>
	</form>
</div>
</div>


<div class="card-header login-container">
				  <span class="  display-4" style="color: green;" > Result  </span>					
				  
<div class="card text-white mb-3 login-container" style="background-color: green;">
  <h4>
    <?php 
    if (isset($_POST['Crop_Predict'])) {
      $state = trim($_POST['stt']);
      $district = trim($_POST['district']);
      $season = trim($_POST['Season']);

      echo '<span style="color:white;">Crops grown in ' . $district . ' during the ' . $season . ' season are :- </span>';

      $JsonState = json_encode($state);
      $JsonDistrict = json_encode($district);
      $JsonSeason = json_encode($season);

      $command = escapeshellcmd("python ML/crop_prediction/ZDecision_Tree_Model_Call.py $JsonState $JsonDistrict $JsonSeason");
      $output = shell_exec($command); // Use shell_exec instead of passthru for better control

      // Remove trailing comma and clean up the output
      $outputArray = explode(',', $output); // Split the output by commas
      $outputArray = array_filter($outputArray, 'strlen'); // Remove empty elements
      $cleanOutput = implode(', ', $outputArray); // Rejoin the array into a string

      echo '<span style="color:white;">' . htmlspecialchars($cleanOutput) . '</span>';
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

</body>
 <!-- Include the language-translate.js -->
 <script src="../assets/js/language-translate.js"></script>
  <script>
    // Initialize the language selector and apply the saved language
    initializeLanguageSelector();
  </script>
</body>
</html>


