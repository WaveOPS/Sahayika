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
              $para3 = $row4['password'];
			  $para5 = $row4['email'];
			  $para6 = $row4['phone_no'];
			  $para7 = $row4['F_gender'];
			  $para8 = $row4['F_birthday'];
			  $para9 = $row4['F_State'];
			  $para10 = $row4['F_District'];
			  $para11 = $row4['F_Location'];

if(isset($_POST['farmerupdate']))
  {
	  $id = ($_POST['id']);
	  $name = ($_POST['name']);
	  $email = ($_POST['email']);
	  $mobile = ($_POST['mobile']);
	  $gender = ($_POST['gender']);
	  $dob = ($_POST['dob']);
	  $state = ($_POST['state']);
		$district = ($_POST['district']);		
		$city = ($_POST['city']);
		$pass = ($_POST['pass']);

$query5 = "SELECT StateName from state where StCode ='$state'";
	$ses_sq5 = mysqli_query($conn, $query5);
              $row5 = mysqli_fetch_assoc($ses_sq5);
              $statename = $row5['StateName'];
			  
    $updatequery1 = "UPDATE farmerlogin set  farmer_name='$name', email='$email', phone_no='$mobile',  F_gender='$gender',  F_birthday='$dob',  F_State='$statename', F_District='$district', F_Location='$city', password='$pass'  where farmer_id='$id'";mysqli_query($conn, $updatequery1);
  header("location: fprofile.php");
  }		  
?>

<!DOCTYPE html>
<html>
<?php include ('fheader.php'); ?>

<body class="bg-white" id="top">

<?php include ('fnav.php'); ?>

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
  </div>-->
  <head>
		<style>
			 body {
      background: url('../assets/img/farm-bg8.jpg');
      background-size: cover;
      background-repeat: no-repeat;
    }
	.login-container {
      background: rgba(255, 255, 255, 0.9);
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 10px 8px rgba(0, 0, 0, 0.9);
	  opacity: 0.95;
    }
			</style>
	</head>

  <!-- Profile Content -->
  <div class="container">
  <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-pill mb-3" style="background-color: green;color:white;">Profile</span>
          </div>
        </div>

    <div class="row row-content">
      <!-- Profile Image and Edit Button -->
      <div class="col-md-4 mb-3">
        <div class="card" style="border-radius:20px;">
          <div class="card-body bg-white login-container">
            <div class="d-flex flex-column align-items-center text-center">
              <img src="../assets/img/agri.png" alt="agri" class="rounded-circle img-fluid" width="212px">
              <div class="mt-3">
                <h4>Welcome <?php echo $login_session ?></h4>
                <button data-toggle="modal" data-target="#edit" class="btn" style="background-color: #008000; color: white;">Edit Profile</button> <!-- Green button -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Profile Information -->
      <div class="col-md-8">
        <div class="card mb-3" style="border-radius: 20px;"> <!-- Added border-radius -->
          <div class="card-body" style="background-color: #008000; color: white; border-radius: 20px;"> <!-- Added border-radius -->
            <div class="row mb-1">
              <div class="col-sm-3">
                <h6 class="mb-0 font-weight-bold" style="color:black;">Farmer ID</h6>
              </div>
              <div class="col-sm-9">
                <?php echo $para1 ?>
              </div>
            </div>

            <div class="row mb-1">
              <div class="col-sm-3">
                <h6 class="mb-0 font-weight-bold" style="color:black;">Farmer Name</h6>
              </div>
              <div class="col-sm-9">
                <?php echo $para2 ?>
              </div>
            </div>

            <div class="row mb-1">
              <div class="col-sm-3">
                <h6 class="mb-0 font-weight-bold" style="color:black;">Email Address</h6>
              </div>
              <div class="col-sm-9">
                <?php echo $para5 ?>
              </div>
            </div>

            <div class="row mb-1">
              <div class="col-sm-3">
                <h6 class="mb-0 font-weight-bold" style="color:black;">Mobile No</h6>
              </div>
              <div class="col-sm-9">
                <?php echo $para6 ?>
              </div>
            </div>

            <div class="row mb-1">
              <div class="col-sm-3">
                <h6 class="mb-0 font-weight-bold" style="color:black;">Gender</h6>
              </div>
              <div class="col-sm-9">
                <?php echo $para7 ?>
              </div>
            </div>

            <div class="row mb-1">
              <div class="col-sm-3">
                <h6 class="mb-0 font-weight-bold" style="color:black;">DOB</h6>
              </div>
              <div class="col-sm-9">
                <?php echo $para8 ?>
              </div>
            </div>

            <div class="row mb-1">
              <div class="col-sm-3">
                <h6 class="mb-0 font-weight-bold" style="color:black;">State</h6>
              </div>
              <div class="col-sm-9">
                <?php echo $para9 ?>
              </div>
            </div>

            <div class="row mb-1">
              <div class="col-sm-3">
                <h6 class="mb-0 font-weight-bold" style="color:black;">District</h6>
              </div>
              <div class="col-sm-9">
                <?php echo $para10 ?>
              </div>
            </div>

            <div class="row mb-1">
              <div class="col-sm-3">
                <h6 class="mb-0 font-weight-bold" style="color:black;">City</h6>
              </div>
              <div class="col-sm-9">
                <?php echo $para11 ?>
              </div>
            </div>

            <div class="row mb-1">
              <div class="col-sm-3">
                <h6 class="mb-0 font-weight-bold" style="color:black;">Password</h6>
              </div>
              <div class="col-sm-9">
                ********
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- Edit Profile Modal -->
    <div id="edit" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" role="content">
        <div class="modal-content" style="border-radius: 20px; background-color: white;"> <!-- White surrounding box -->
          <div class="modal-header" style="background-color: white; color: #008000; border-radius: 20px 20px 0 0;"> <!-- White header with green text -->
            <h4 class="modal-title" style="color: #008000;">Edit Profile</h4> <!-- Green text -->
            <button type="button" class="close" data-dismiss="modal" style="color: #008000;">&times;</button> <!-- Green close button -->
          </div>
          <div class="modal-body" style="background-color: white; color: #008000; border-radius: 0 0 20px 20px;"> <!-- White body with green text -->
            <form class="col s12 l5" method="POST" autocomplete="new-password">
              <div class="form-group row">
                <label for="name" class="col-md-3 col-form-label" style="color: #008000;">Farmer ID</label>
                <div class="col-md-9">
                  <input name="id" class="form-control" value="<?php echo "$para1" ?>" readonly />
                </div>
              </div>

              <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label" style="color: #008000;">Farmer Name</label>
                <div class="col-md-9">
                  <input class="form-control" type="text" name="name" value="<?php echo "$para2" ?>" />
                </div>
              </div>

              <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label" style="color: #008000;">Email Address</label>
                <div class="col-md-9">
                  <input class="form-control" type="email" name="email" value="<?php echo "$para5" ?>" readonly />
                </div>
              </div>

              <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label" style="color: #008000;">Mobile No</label>
                <div class="col-md-9">
                  <input class="form-control" type="number" min="0" name="mobile" value="<?php echo "$para6" ?>" />
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-3 col-form-label" style="color: #008000;" for="email">Gender</label>
                <div class="col-md-9">
                  <select class="col-md-12 font-weight-bold form-control" name="gender">
                    <option selected hidden><?php echo "$para7" ?></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-3 col-form-label" style="color: #008000;" for="dob">DOB</label>
                <div class="col-md-9">
                  <input class="form-control" name="dob" type="date" value="<?php echo "$para8" ?>" />
                </div>
              </div>

              <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label" style="color: #008000;">State</label>
                <div class="col-md-9">
                  <select onChange="getdistrict(this.value);" name="state" id="state" class="form-control">
                    <option value=""><?php echo "$para9" ?></option>
                    <?php
                    $query = mysqli_query($conn, "SELECT * FROM state");
                    while ($row = mysqli_fetch_array($query)) { ?>
                      <option value="<?php echo $row['StCode']; ?>"><?php echo $row['StateName']; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label" style="color: #008000;">District</label>
                <div class="col-md-9">
                  <select name="district" id="district-list" class="form-control">
                    <option value=""><?php echo "$para10" ?></option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label" style="color: #008000;">City</label>
                <div class="col-md-9">
                  <input class="form-control" type="text" name="city" value="<?php echo "$para11" ?>" />
                </div>
              </div>

              <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label" style="color: #008000;">Password</label>
                <div class="col-9">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                    </div>
                    <input name="pass" type="password" value="<?php echo "$para3" ?>" class="input form-control" id="password" placeholder="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
                    <div class="input-group-append">
                      <span class="input-group-text" onclick="password_show_hide();">
                        <i class="fas fa-eye" id="show_eye"></i>
                        <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label"></label>
                <div class="col-md-9">
                  <button name="farmerupdate" class="btn-block btn" style="background-color: #008000; color: white; border: 2px solid #008000;">Submit</button> <!-- Green button with white text -->
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include ('footer.php'); ?>

<!-- Include Required Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

<!-- Password Show/Hide Script -->
<script>
  $(document).ready(function () {
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
    window.password_show_hide = password_show_hide; // Expose globally if needed
  });
</script>

<!-- Get District Script -->
<script>
  $(document).ready(function () {
    function getdistrict(val) {
      $.ajax({
        type: "POST",
        url: "fget_district.php",
        data: 'state_id=' + val,
        success: function(data) {
          $("#district-list").html(data);
        }
      });
    }
    window.getdistrict = getdistrict; // Expose globally if needed
  });
</script>

<script>
  $(document).ready(function () {
    $('.dropdown-toggle').dropdown();
  });
</script>

 <!-- Include the language-translate.js -->
 <script src="../assets/js/language-translate.js"></script>
  <script>
    // Initialize the language selector and apply the saved language
    initializeLanguageSelector();
  </script>
</body>

</body>
</html>