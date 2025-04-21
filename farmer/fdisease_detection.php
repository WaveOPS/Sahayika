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
 <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Popper.js (needed for Bootstrap tooltips/popovers) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>

<!-- Bootstrap (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<script>
function previewImage(event) {
	const imagePreview = document.getElementById('imagePreview');
	imagePreview.src = URL.createObjectURL(event.target.files[0]);
	imagePreview.style.display = 'block';
}
</script>

</head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant Disease Detection</title>
</head>
<!--=========================================================================================-->
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-8"> <!-- Changed from col-md-6 to col-md-8 to increase width -->
			<div class="card text-white bg-gradient-white mb-3 login-container">
				<?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['image']) && $_FILES['image']['error'] == 0): ?>
					<div class="card-header text-center">
						<span class="display-4" style="color: green;"> Result </span>
					</div>
					<div class="card-body text-dark text-center">
						<?php
						$fileTmpPath = $_FILES['image']['tmp_name'];
						$fileName = $_FILES['image']['name'];
						$fileType = $_FILES['image']['type'];
						$allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
						if (in_array($fileType, $allowedTypes)) {
							$uploadDir = 'uploads/';
							$uploadFilePath = $uploadDir . $fileName;
							if (move_uploaded_file($fileTmpPath, $uploadFilePath)) {
								echo "<img src='$uploadFilePath' alt='Uploaded Image' style='max-width: 300px; margin-top: 20px; border: 2px solid green; border-radius: 10px;'>";
								$pythonScriptPath = 'ML/disease_detection/predict.py';
								$command = escapeshellcmd("python $pythonScriptPath $uploadFilePath");
								$output = shell_exec($command);
								if ($output) {
									$output = trim($output);
									$parts = explode("|", $output);
									if (count($parts) === 2) {
										$description = $parts[1];
										echo "<p style='color: green; font-weight: bold; font-size: 18px; margin-top: 20px;'>$description</p>";
									} else {
										echo "<p style='color: red; font-weight: bold;'>Unexpected output format.</p>";
									}
								} else {
									echo "<p style='color: red; font-weight: bold;'>Prediction failed.</p>";
								}
							} else {
								echo "<p style='color: red; font-weight: bold;'>Error uploading the file.</p>";
							}
						} else {
							echo "<p style='color: red; font-weight: bold;'>Invalid file type. Only JPG, PNG, or GIF allowed.</p>";
						}
						?>
					</div>
				<?php else: ?>
					<div class="card-header text-center">
						<span class="display-4" style="color: green;"> Disease Detection </span>
					</div>
					<div class="card-body text-dark text-center">
						<form action="" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<input type="file" name="image" accept="image/*" required style="padding:10px 25px; margin-bottom: 15px;" onchange="previewImage(event)">
							</div>
							<div class="form-group">
								<input type="submit" value="Upload and Detect" style="background-color: green;color:white;font-size: 15px; padding: 10px 25px; border-radius: 10px; border: none; cursor: pointer;">
							</div>
							<div class="text-center">
								<img id="imagePreview" src="#" alt="Image Preview" style="display:none; max-width: 300px; margin: 20px auto; border: 2px solid green; border-radius: 10px;">
							</div>
						</form>
					</div>
				<?php endif; ?>
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
