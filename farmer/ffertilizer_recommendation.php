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
      <span></span>
    </div>-->
	<head>
		<style>
			 body {
      background: url('../assets/img/farm-bg9.jpg');
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

<div class="container-fluid ">
    
    	
          <div class="row row-content">
            <div class="col-md-12 mb-3">

				<div class="card text-white bg-gradient-white mb-3 login-container">
				<form role="form" action="#" method="post" >  
				  <div class="card-header d-flex justify-content-between align-items-center">
				  <span class="display-4" style="color:green;font-family:'Times New Roman', Times, serif;font-weight:bold;text-decoration:underline;" > Fertilizer Recommendation  </span>	
						<span class="pull-left">
							<button type="submit" value="Recommend" name="Fert_Recommend" class="btn btn-success btn-submit" style="background-color: green;">SUBMIT</button>
						</span>		
				  
				  </div>

				  <div class="card-body text-dark">
					 
				<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">

    <thead>
					<tr class="font-weight-bold text-default">
					<th><center> Nitrogen</center></th>
					<th><center>Phosporous</center></th>
					<th><center>Potasioum</center></th>
					<th><center>Temparature</center></th>
					<th><center>Humidity</center></th>
					<th><center>Soil Moisture</center></th>
					<th><center>Soil Type</center></th>
					<th><center>Crop</center></th>
        </tr>
    </thead>
 <tbody>
                                 <tr class="text-center">
                                    <td>
                                    	<div class="form-group">
											<input type = 'number' name = 'n' placeholder="Nitrogen Eg:37" required class="form-control" value="<?php echo isset($_POST['n']) ? htmlspecialchars($_POST['n']) : ''; ?>">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'p' placeholder="Phosphorus Eg:0" required class="form-control" value="<?php echo isset($_POST['p']) ? htmlspecialchars($_POST['p']) : ''; ?>">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'k' placeholder="Pottasium Eg:0" required class="form-control" value="<?php echo isset($_POST['k']) ? htmlspecialchars($_POST['k']) : ''; ?>">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 't'  placeholder="Temperature Eg:26" required class="form-control" value="<?php echo isset($_POST['t']) ? htmlspecialchars($_POST['t']) : ''; ?>">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'h'  placeholder="Humidity Eg:52" required class="form-control" value="<?php echo isset($_POST['h']) ? htmlspecialchars($_POST['h']) : ''; ?>">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name='soilMoisture' placeholder="Soil Moisture Eg:38" required class="form-control" value="<?php echo isset($_POST['soilMoisture']) ? htmlspecialchars($_POST['soilMoisture']) : ''; ?>">
											
										</div>
                                    </td>
									
									<td>
										<div class="form-group ">
													<select name="soil" class="form-control">
													<option  value="">Select Soil Type</option>
													<option value="Sandy" <?php echo (isset($_POST['soil']) && $_POST['soil'] == 'Sandy') ? 'selected' : ''; ?>>Sandy</option>
													<option value="Loamy" <?php echo (isset($_POST['soil']) && $_POST['soil'] == 'Loamy') ? 'selected' : ''; ?>>Loamy</option>
													<option value="Black" <?php echo (isset($_POST['soil']) && $_POST['soil'] == 'Black') ? 'selected' : ''; ?>>Black</option>
													<option value="Red" <?php echo (isset($_POST['soil']) && $_POST['soil'] == 'Red') ? 'selected' : ''; ?>>Red</option>
													<option value="Clayey" <?php echo (isset($_POST['soil']) && $_POST['soil'] == 'Clayey') ? 'selected' : ''; ?>>Clayey</option>											
													</select>
										</div>
									</td>
									
									<td>
										<div class="form-group ">
									<select name="crop" class="form-control">
													<option  value="">Select Crop</option>
													<option value="Maize" <?php echo (isset($_POST['crop']) && $_POST['crop'] == 'Maize') ? 'selected' : ''; ?>>Maize</option>
													<option value="Sugarcane" <?php echo (isset($_POST['crop']) && $_POST['crop'] == 'Sugarcane') ? 'selected' : ''; ?>>Sugarcane</option>
													<option value="Cotton" <?php echo (isset($_POST['crop']) && $_POST['crop'] == 'Cotton') ? 'selected' : ''; ?>>Cotton</option>
													<option value="Tobacco" <?php echo (isset($_POST['crop']) && $_POST['crop'] == 'Tobacco') ? 'selected' : ''; ?>>Tobacco</option>
													<option value="Paddy" <?php echo (isset($_POST['crop']) && $_POST['crop'] == 'Paddy') ? 'selected' : ''; ?>>Paddy</option>	
													<option value="Barley" <?php echo (isset($_POST['crop']) && $_POST['crop'] == 'Barley') ? 'selected' : ''; ?>>Barley</option>	
													<option value="Wheat" <?php echo (isset($_POST['crop']) && $_POST['crop'] == 'Wheat') ? 'selected' : ''; ?>>Wheat</option>	
													<option value="Millets" <?php echo (isset($_POST['crop']) && $_POST['crop'] == 'Millets') ? 'selected' : ''; ?>>Millets</option>	
													<option value="Oil seeds" <?php echo (isset($_POST['crop']) && $_POST['crop'] == 'Oil seeds') ? 'selected' : ''; ?>>Oil seeds</option>	
													<option value="Pulses" <?php echo (isset($_POST['crop']) && $_POST['crop'] == 'Pulses') ? 'selected' : ''; ?>>Pulses</option>	
													<option value="Ground Nuts" <?php echo (isset($_POST['crop']) && $_POST['crop'] == 'Ground Nuts') ? 'selected' : ''; ?>>Ground Nuts</option>													
													</select>
										</div>

									</td>
                                </tr>
                            </tbody>
							
					
	</table>
	</div>
	</form>

</div>


<div class="card-header login-container">
  <span class="display-4" style="color: green;"> Result </span>					
  
  <div class="card text-white mb-3 login-container" style="background-color: green; margin-top: 10px;">
    <h4>
      <?php 
      if (isset($_POST['Fert_Recommend'])) {
        $n = trim($_POST['n']);
        $p = trim($_POST['p']);
        $k = trim($_POST['k']);
        $t = trim($_POST['t']);
        $h = trim($_POST['h']);
        $sm = trim($_POST['soilMoisture']);
        $soil = trim($_POST['soil']);
        $crop = trim($_POST['crop']);

        echo '<span style="color:white;">Recommended Fertilizer is: </span>';

        $Jsonn = json_encode($n);
        $Jsonp = json_encode($p);
        $Jsonk = json_encode($k);
        $Jsont = json_encode($t);
        $Jsonh = json_encode($h);
        $Jsonsm = json_encode($sm);
        $Jsonsoil = json_encode($soil);
        $Jsoncrop = json_encode($crop);

        $command = escapeshellcmd("python ML/fertilizer_recommendation/fertilizer_recommendation.py $Jsonn $Jsonp $Jsonk $Jsont $Jsonh $Jsonsm $Jsonsoil $Jsoncrop");
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
</body>
</html>

