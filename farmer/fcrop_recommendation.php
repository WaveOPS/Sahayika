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
				  <span class="display-4" style="color:green;font-family:'Times New Roman', Times, serif;font-weight:bold;text-decoration:underline;" > Crop Recommendation  </span>	
						<span class="pull-right">
							<button type="submit" value="Recommend" name="Crop_Recommend" class="btn btn-success btn-submit" style="background-color: green;">SUBMIT</button>
						</span>		
				  
				  </div>

				  <div class="card-body text-dark">
				     <form role="form" action="#" method="post" >     
					 
				<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">

    <thead>
					<tr class="font-weight-bold text-default">
					<th><center> Nitrogen</center></th>
					<th><center>Phosporous</center></th>
					<th><center>Potasioum</center></th>
					<th><center>Temparature</center></th>
					<th><center>Humidity</center></th>
					<th><center>PH</center></th>
					<th><center>Rainfall</center></th>
					
        </tr>
    </thead>
 <tbody>
                                 <tr class="text-center">
                                    <td>
                                    	<div class="form-group">
											<input type = 'number' name = 'n' placeholder="Nitrogen Eg:90" required class="form-control" value="<?php echo isset($_POST['n']) ? htmlspecialchars($_POST['n']) : ''; ?>">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'p' placeholder="Phosphorus Eg:42" required class="form-control" value="<?php echo isset($_POST['p']) ? htmlspecialchars($_POST['p']) : ''; ?>">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'k' placeholder="Pottasium Eg:43" required class="form-control" value="<?php echo isset($_POST['k']) ? htmlspecialchars($_POST['k']) : ''; ?>">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 't' step =0.01 placeholder="Temperature Eg:21" required class="form-control" value="<?php echo isset($_POST['t']) ? htmlspecialchars($_POST['t']) : ''; ?>">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'h' step =0.01 placeholder="Humidity Eg:82" required class="form-control" value="<?php echo isset($_POST['h']) ? htmlspecialchars($_POST['h']) : ''; ?>">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'ph' step =0.01 placeholder="PH Eg:6.5" required class="form-control" value="<?php echo isset($_POST['ph']) ? htmlspecialchars($_POST['ph']) : ''; ?>">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											 <input type = 'number' name = 'r' step =0.01 placeholder="Rainfall Eg:203" required class="form-control" value="<?php echo isset($_POST['r']) ? htmlspecialchars($_POST['r']) : ''; ?>">
											
										</div>
                                    </td>
                                </tr>
                            </tbody>
							
					
	</table>
	</form>
</div>
</div>


<div class="card-header login-container">
  <span class="display-4" style="color:green;"> Result </span>					
  
  <div class="card text-white mb-3 login-container" style="background-color: green; margin-top: 10px;">
    <h4>
      <?php 
      if (isset($_POST['Crop_Recommend'])) {
        $n = isset($_POST['n']) ? trim($_POST['n']) : null;
        $p = isset($_POST['p']) ? trim($_POST['p']) : null;
        $k = isset($_POST['k']) ? trim($_POST['k']) : null;
        $t = isset($_POST['t']) ? trim($_POST['t']) : null;
        $h = isset($_POST['h']) ? trim($_POST['h']) : null;
        $ph = isset($_POST['ph']) ? trim($_POST['ph']) : null;
        $r = isset($_POST['r']) ? trim($_POST['r']) : null;

        echo '<span style="color:white;">Recommended Crop is: </span>';

        $Jsonn = json_encode($n);
        $Jsonp = json_encode($p);
        $Jsonk = json_encode($k);
        $Jsont = json_encode($t);
        $Jsonh = json_encode($h);
        $Jsonph = json_encode($ph);
        $Jsonr = json_encode($r);

        $command = escapeshellcmd("python ML/crop_recommendation/recommend.py $Jsonn $Jsonp $Jsonk $Jsont $Jsonh $Jsonph $Jsonr");
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
</html>

