
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
<html lang="en">
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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant Disease Detection</title>
</head>
<!--=========================================================================================-->
<div class="container-fluid ">
    
    	 <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-pill mb-3">Dectection</span>
          </div>
        </div>
		
        <div class="row row-content">
            <div class="col-md-12 mb-3">

				<div class="card text-white bg-gradient-white mb-3 login-container">
                <form action="" method="POST" enctype="multipart/form-data">  
				  <div class="card-header d-flex justify-content-between align-items-center">
				  <span class="display-4" style="color:green;font-family:'Times New Roman', Times, serif;font-weight:bold;text-decoration:underline;" > Disease Detection  </span>	
				  </div>
                  
<div class="card-body text-dark">
<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">
    <thead>        
        <tr class="font-weight-bold text-default">   
            <th colspan="2"><h2 style="font-family:'Times New Roman', Times, serif;color:black;text-decoration:underline;font-weight: bold;">Upload an image to detect plant disease</h2></th>
        </tr>
    </thead>
    <tbody>
        <tr class="text-center">
        <th><input type="file" name="image" accept="image/*" required stye="padding:10px 25px;" ></th>
        <th><input type="submit" value="Upload and Detect" style="background-color: green;color:white;font-size: 15px; padding: 10px 25px; border-radius: 10px; border: none; cursor: pointer;"></th>
        </tr>
    </tbody>
</table>
</div>
</form>
</div>
<div class="card-header login-container">
				  <span class=" display-4" style="color: green;"> Result  </span>					
				 
<div class="card text-white mb-3 login-container" style="background-color: green;">
				  

					<h4>
					<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        // Get the uploaded file details
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $fileType = $_FILES['image']['type'];
        
        // Define allowed file types (image files)
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        
        if (in_array($fileType, $allowedTypes)) {
            // Save the uploaded image to a specific directory
            $uploadDir = 'uploads/';
            $uploadFilePath = $uploadDir . $fileName;

            if (move_uploaded_file($fileTmpPath, $uploadFilePath)) {
                // Command to run the Python script
                $pythonScriptPath = 'ML/disease_detection/predict.py';
                $command = escapeshellcmd("python $pythonScriptPath $uploadFilePath");
                $output = shell_exec($command);

                if ($output) {
                    $output = trim($output);
                    $parts = explode("|", $output);
                    
                    if (count($parts) === 2) {
                        $className = $parts[0];
                        $description = $parts[1];

                        echo "<p style='color: green; font-weight: bold; font-size: 18px; font-family: Arial, sans-serif; text-align: center;'><strong>Info:</strong> $description</p>";
                    } else {
                        echo "<pstyle='color:white; font-weight: bold; font-size: 20px; font-family:'Times New Roman', Times, serif;'>Unexpected output format: $output</p>";
                    }
                } else {
                    echo "<p style='color:white; font-weight: bold; font-size: 20px; font-family:'Times New Roman', Times, serif;'>Something went wrong with prediction.</p>";
                }

            } else {
                echo "<p style='color:white; font-weight: bold; font-size: 20px; font-family:'Times New Roman', Times, serif;'>Error in uploading the file.</p>";
            }
        } else {
            echo "<p style='color:white; font-weight: bold; font-size: 20px; font-family:'Times New Roman', Times, serif;'>Invalid file type. Only JPG, PNG, or GIF allowed.</p>";
        }
    } else {
        echo "<p style='color:white; font-weight: bold; font-size: 20px; font-family:'Times New Roman', Times, serif;'>No file uploaded or there was an error with the file.</p>";
    }
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
