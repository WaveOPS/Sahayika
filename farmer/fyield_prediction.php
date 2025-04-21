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
				<form role="form" action="#" method="post">  
				  <div class="card-header">
				  <span class="display-4" style="color:green;font-family:'Times New Roman', Times, serif;font-weight:bold;text-decoration:underline;" > Yield Prediction  </span>	
				  
				  </div>

				  <div class="card-body text-dark">
					 
				<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">

    <thead>
					<tr class="font-weight-bold text-default">
					<th><center> State</center></th>
					<th><center>District</center></th>
					<th><center>Season</center></th>
					<th><center>Crop</center></th>
					<th><center>Area</center></th>
					<th><center>Prediction</center></th>
					
					
        </tr>
    </thead>
 <tbody>
                                 <tr class="text-center">

                                   <td>
                                    	<div class="form-group">
										<select  name="state" class="form-control" required>
											<option value="Karnataka" <?php echo (isset($_POST['state']) && $_POST['state'] == 'Karnataka') ? 'selected' : ''; ?>>Karnataka</option>
										</select>
																				
										</div>
                                    </td>

									<td>
										<div class="form-group ">
										<select id="district" name="district" class="form-control" required>
										  <option value="">Select a district</option>
										  <option value="BAGALKOT" <?php echo (isset($_POST['district']) && $_POST['district'] == 'BAGALKOT') ? 'selected' : ''; ?>>Bagalkot</option>
										  <option value="BANGALORE_RURAL" <?php echo (isset($_POST['district']) && $_POST['district'] == 'BANGALORE_RURAL') ? 'selected' : ''; ?>>Bangalore Rural</option>
										  <option value="BELGAUM" <?php echo (isset($_POST['district']) && $_POST['district'] == 'BELGAUM') ? 'selected' : ''; ?>>Belgaum</option>
										  <option value="BELLARY" <?php echo (isset($_POST['district']) && $_POST['district'] == 'BELLARY') ? 'selected' : ''; ?>>Bellary</option>
										  <option value="BENGALURU_URBAN" <?php echo (isset($_POST['district']) && $_POST['district'] == 'BENGALURU_URBAN') ? 'selected' : ''; ?>>Bengaluru Urban</option>
										  <option value="BIDAR" <?php echo (isset($_POST['district']) && $_POST['district'] == 'BIDAR') ? 'selected' : ''; ?>>Bidar</option>
										  <option value="BIJAPUR" <?php echo (isset($_POST['district']) && $_POST['district'] == 'BIJAPUR') ? 'selected' : ''; ?>>Bijapur</option>
										  <option value="CHAMARAJANAGAR" <?php echo (isset($_POST['district']) && $_POST['district'] == 'CHAMARAJANAGAR') ? 'selected' : ''; ?>>Chamarajanagar</option>
										  <option value="CHIKBALLAPUR" <?php echo (isset($_POST['district']) && $_POST['district'] == 'CHIKBALLAPUR') ? 'selected' : ''; ?>>Chikballapur</option>
										  <option value="CHIKMAGALUR" <?php echo (isset($_POST['district']) && $_POST['district'] == 'CHIKMAGALUR') ? 'selected' : ''; ?>>Chikmagalur</option>
										  <option value="CHITRADURGA" <?php echo (isset($_POST['district']) && $_POST['district'] == 'CHITRADURGA') ? 'selected' : ''; ?>>Chitradurga</option>
										  <option value="DAKSHIN_KANNAD" <?php echo (isset($_POST['district']) && $_POST['district'] == 'DAKSHIN_KANNAD') ? 'selected' : ''; ?>>Dakshin Kannad</option>
										  <option value="DAVANGERE" <?php echo (isset($_POST['district']) && $_POST['district'] == 'DAVANGERE') ? 'selected' : ''; ?>>Davangere</option>
										  <option value="DHARWAD" <?php echo (isset($_POST['district']) && $_POST['district'] == 'DHARWAD') ? 'selected' : ''; ?>>Dharwad</option>
										  <option value="GADAG" <?php echo (isset($_POST['district']) && $_POST['district'] == 'GADAG') ? 'selected' : ''; ?>>Gadag</option>
										  <option value="GULBARGA" <?php echo (isset($_POST['district']) && $_POST['district'] == 'GULBARGA') ? 'selected' : ''; ?>>Gulbarga</option>
										  <option value="HAVERI" <?php echo (isset($_POST['district']) && $_POST['district'] == 'HAVERI') ? 'selected' : ''; ?>>Haveri</option>
										  <option value="HASSAN" <?php echo (isset($_POST['district']) && $_POST['district'] == 'HASSAN') ? 'selected' : ''; ?>>Hassan</option>
										  <option value="KODAGU" <?php echo (isset($_POST['district']) && $_POST['district'] == 'KODAGU') ? 'selected' : ''; ?>>Kodagu</option>
										  <option value="KOLAR" <?php echo (isset($_POST['district']) && $_POST['district'] == 'KOLAR') ? 'selected' : ''; ?>>Kolar</option>
										  <option value="KOPPAL" <?php echo (isset($_POST['district']) && $_POST['district'] == 'KOPPAL') ? 'selected' : ''; ?>>Koppal</option>
										  <option value="MANDYA" <?php echo (isset($_POST['district']) && $_POST['district'] == 'MANDYA') ? 'selected' : ''; ?>>Mandya</option>
										  <option value="MYSORE" <?php echo (isset($_POST['district']) && $_POST['district'] == 'MYSORE') ? 'selected' : ''; ?>>Mysore</option>
										  <option value="RAMANAGARA" <?php echo (isset($_POST['district']) && $_POST['district'] == 'RAMANAGARA') ? 'selected' : ''; ?>>Ramanagara</option>
										  <option value="RAICHUR" <?php echo (isset($_POST['district']) && $_POST['district'] == 'RAICHUR') ? 'selected' : ''; ?>>Raichur</option>
										  <option value="SHIMOGA" <?php echo (isset($_POST['district']) && $_POST['district'] == 'SHIMOGA') ? 'selected' : ''; ?>>Shimoga</option>
										  <option value="TUMKUR" <?php echo (isset($_POST['district']) && $_POST['district'] == 'TUMKUR') ? 'selected' : ''; ?>>Tumkur</option>
										  <option value="UDUPI" <?php echo (isset($_POST['district']) && $_POST['district'] == 'UDUPI') ? 'selected' : ''; ?>>Udupi</option>
										  <option value="UTTAR_KANNAD" <?php echo (isset($_POST['district']) && $_POST['district'] == 'UTTAR_KANNAD') ? 'selected' : ''; ?>>Uttar Kannad</option>
										  <option value="YADGIR" <?php echo (isset($_POST['district']) && $_POST['district'] == 'YADGIR') ? 'selected' : ''; ?>>Yadgir</option>
										</select>

										</div>
                                    </td>
									
									<td>
										<div class="form-group ">
									
													<select name="Season" class="form-control" id="season" required>
													<option value="">Select Season ...</option>
													<option name="Kharif" value="Kharif" <?php echo (isset($_POST['Season']) && $_POST['Season'] == 'Kharif') ? 'selected' : ''; ?>>Kharif</option>
													<option name="Rabi" value="Rabi" <?php echo (isset($_POST['Season']) && $_POST['Season'] == 'Rabi') ? 'selected' : ''; ?>>Rabi</option>
													<option name="Summer" value="Summer" <?php echo (isset($_POST['Season']) && $_POST['Season'] == 'Summer') ? 'selected' : ''; ?>>Summer</option>
													<option name="WholeYear" value="WholeYear" <?php echo (isset($_POST['Season']) && $_POST['Season'] == 'WholeYear') ? 'selected' : ''; ?>>Whole Year</option>
											
													</select>
										</div>

									</td>
									
									<td>
                                    	<div class="form-group" >
										<select id="crop" class="form-control" name="crops" required>
									  <option value="">Select crop</option>
									  <?php if (isset($_POST['crops'])): ?>
										<option value="<?php echo htmlspecialchars($_POST['crops']); ?>" selected><?php echo htmlspecialchars($_POST['crops']); ?></option>
									  <?php endif; ?>
									</select>
											
										</div>
                                    </td>
									<script> 
document.getElementById("season").addEventListener("change", function() {  
 
const districtDropdown = document.getElementById('district');
const seasonDropdown = document.getElementById('season');
const cropDropdown = document.getElementById('crop');

 console.log(districtDropdown);
   console.log(seasonDropdown);
  console.log(cropDropdown);
  
  const selectedDistrict = districtDropdown.value;
  const selectedSeason = seasonDropdown.value;

  // Clear the current crop options
  cropDropdown.innerHTML = '<option value="">Select crop</option>';
  
  // If both district and season are selected, add the corresponding crop options to the dropdown
if (selectedDistrict && selectedSeason) {
  const options = cropOptions[selectedDistrict][selectedSeason];
  for (const option of options) {
    const optionElement = document.createElement('option');
    optionElement.value = option; // Set the value to the option text
    optionElement.text = option;
    cropDropdown.appendChild(optionElement);
  }
}
  
}); 
</script>  
									<td>
                                    	<div class="form-group">
											<input type = "number" step=0.01 name="area" placeholder="Area in Hectares" required class="form-control" value="<?php echo isset($_POST['area']) ? htmlspecialchars($_POST['area']) : ''; ?>">
											
										</div>
                                    </td>
									
									<td>
                                    <center>
										<div class="form-group ">
											<button type="submit" value="Yield" name="Yield_Predict" class="btn btn-success btn-submit" style="background-color: green;">Predict</button>
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
				 

<div class="card text-white mb-3 login-container" style="background-color: green;">
  <h4>
    <?php 
    if (isset($_POST['Yield_Predict'])) {
      $state = trim($_POST['state']);
      $district = trim($_POST['district']);
      $season = trim($_POST['Season']);
      $crops = trim($_POST['crops']);
      $area = trim($_POST['area']);

      echo '<span style="color:white;">Predicted crop yield (in Quintal) is:</span>';

      $Jstate = json_encode($state);
      $Jdistrict = json_encode($district);
      $Jseason = json_encode($season);
      $Jcrops = json_encode($crops);
      $Jarea = json_encode($area);

      $command = escapeshellcmd("python ML/yield_prediction/yield_prediction.py $Jstate $Jdistrict $Jseason $Jcrops $Jarea");
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

</body>
 <!-- Include the language-translate.js -->
 <script src="../assets/js/language-translate.js"></script>
  <script>
    // Initialize the language selector and apply the saved language
    initializeLanguageSelector();
  </script>
</html>

