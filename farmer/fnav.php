<head>
  <style>
    /* Custom styles for the navbar */
    .custom-navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #000;
      padding: 10px 20px;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .custom-navbar .brand {
      display: flex;
      align-items: center;
    }

    .custom-navbar .brand img {
      height: 40px;
      filter: brightness(0.8) sepia(1) hue-rotate(90deg) saturate(2);
    }

    .custom-navbar .nav-links {
      display: flex;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .custom-navbar .nav-links li {
      position: relative;
      margin-left: 20px;
    }

    .custom-navbar .nav-links a {
      text-decoration: none;
      color: white;
      padding: 5px 10px;
      transition: background-color 0.3s;
    }

    .custom-navbar .nav-links a:hover {
      background-color: #444;
      border-radius: 5px;
    }

    .custom-navbar .dropdown-menu {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: green; /* Set dropdown background to green */
      color: white; /* Set text color to white */
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      list-style: none;
      padding: 10px 0;
      margin: 0;
      min-width: 150px;
      z-index: 1000;
    }

    .custom-navbar .dropdown-menu a {
      color: white; /* Set dropdown link text color to white */
      padding: 5px 15px;
      display: block;
      text-decoration: none;
    }

    .custom-navbar .dropdown-menu a:hover {
      background-color: #004d00; /* Darker green on hover */
      color: white; /* Keep text white on hover */
    }

    .custom-navbar .nav-links .dropdown:hover .dropdown-menu {
      display: block;
    }

    /* Remove the dropdown indicator (caret) */
    .custom-navbar .dropdown > a::after {
      content: none; /* Removes the default dropdown indicator */
    }
  </style>
</head>
<nav class="custom-navbar">
  <div class="brand">
    <a href="../index.php">
      <img src="../assets/img/sahayika.png" alt="Logo">
    </a>
  </div>
  <ul class="nav-links">
    <li><a href="../index.php">Home</a></li>
    <li class="dropdown">
      <a href="#">Prediction</a>
      <ul class="dropdown-menu">
        <li><a href="fcrop_prediction.php">Crop Prediction</a></li>
        <li><a href="fyield_prediction.php">Yield Prediction</a></li>
        <li><a href="frainfall_prediction.php">Rainfall Prediction</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#">Recommendation</a>
      <ul class="dropdown-menu">
        <li><a href="fcrop_recommendation.php">Crop Recommendation</a></li>
        <li><a href="ffertilizer_recommendation.php">Fertilizer Recommendation</a></li>
        <li><a href="fdisease_detection.php">Disease Detection</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#">Trade</a>
      <ul class="dropdown-menu">
        <li><a href="ftradecrops.php">Trade Crops</a></li>
        <li><a href="fstock_crop.php">Crop Stocks</a></li>
        <li><a href="fselling_history.php">Selling History</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#">Tools</a>
      <ul class="dropdown-menu">
        <li><a href="fchatgpt.php">Chat Bot</a></li>
        <li><a href="fweather_prediction.php">Weather Forecast</a></li>
        <li><a href="fnewsfeed.php">News Feed</a></li>
      </ul>
    </li>
    <li><a href="fprofile.php">Profile (<?php echo $para2; ?>)</a></li>
    <li><a href="flogout.php">Logout</a></li>
  </ul>
</nav>

<!-- Include required JavaScript libraries in the correct order -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

<!-- Ensure dropdowns are initialized -->
<script>
  $(document).ready(function () {
    // Use Bootstrap's dropdown functionality
    $('.dropdown-toggle').dropdown();

    // Close dropdown when clicking outside
    $(document).on('click', function (e) {
      if (!$(e.target).closest('.dropdown').length) {
        $('.dropdown').removeClass('show').find('.dropdown-menu').removeClass('show');
      }
    });

    // Toggle dropdown on click
    $('.dropdown-toggle').on('click', function (e) {
      e.preventDefault();
      const $dropdown = $(this).parent('.dropdown');
      $('.dropdown').not($dropdown).removeClass('show').find('.dropdown-menu').removeClass('show');
      $dropdown.toggleClass('show').find('.dropdown-menu').toggleClass('show');
    });
  });
</script>

