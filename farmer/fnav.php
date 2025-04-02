<nav
   id="navbar-main"
   class="
     navbar navbar-main navbar-expand-lg
     navbar-light
     position-sticky
     top-0
     shadow
     py-2
   "
   style="background: #000;"
>
   <div class="container">
     <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
       <li class="nav-item">
         <a href="../index.php" class="navbar-brand text-white">
           <img src="../assets/img/sahayika.png" alt="Logo" style="filter: brightness(0.8) sepia(1) hue-rotate(90deg) saturate(2); height: 40px;">
         </a>
       </li>
     </ul>

     <button
       class="navbar-toggler bg-white"
       type="button"
       data-toggle="collapse"
       data-target="#navbar_global"
       aria-controls="navbar_global"
       aria-expanded="false"
       aria-label="Toggle navigation"
     >
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbar_global">
       <ul class="navbar-nav align-items-lg-center ml-auto">
         <li class="nav-item">
          <a href="../index.php" class="nav-link text-white">Home</a></li>

         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle text-white" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" id="predictionDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Prediction</a>
           <div class="dropdown-menu" aria-labelledby="predictionDropdown">
             <a class="dropdown-item" href="fcrop_prediction.php">Crop Prediction</a>
             <a class="dropdown-item" href="fyield_prediction.php">Yield Prediction</a>
             <a class="dropdown-item" href="frainfall_prediction.php">Rainfall Prediction</a>
           </div>
         </li>

         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle text-white" href="#" id="recommendationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Recommendation</a>
           <div class="dropdown-menu" aria-labelledby="recommendationDropdown">
             <a class="dropdown-item" href="fcrop_recommendation.php">Crop Recommendation</a>
             <a class="dropdown-item" href="ffertilizer_recommendation.php">Fertilizer Recommendation</a>
           </div>
         </li>

         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle text-white" href="#" id="tradeDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Trade</a>
           <div class="dropdown-menu" aria-labelledby="tradeDropdown">
             <a class="dropdown-item" href="ftradecrops.php">Trade Crops</a>
             <a class="dropdown-item" href="fstock_crop.php">Crop Stocks</a>
             <a class="dropdown-item" href="fselling_history.php">Selling History</a>
           </div>
         </li>

         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle text-white" href="#" id="toolsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tools</a>
           <div class="dropdown-menu" aria-labelledby="toolsDropdown">
             <a class="dropdown-item" href="fchatgpt.php">Chat Bot</a>
             <a class="dropdown-item" href="fweather_prediction.php">Weather Forecast</a>
             <a class="dropdown-item" href="fnewsfeed.php">News Feed</a>
           </div>
         </li>

         <li class="nav-item">
           <a href="fprofile.php" class="nav-link text-white">Profile (<?php echo $para2; ?>)</a>
         </li>
         
         <li class="nav-item">
           <a href="flogout.php" class="nav-link text-white">Logout</a>
         </li>
       </ul>
     </div>
   </div>
 </nav>

