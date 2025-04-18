<!-- filepath: c:\xampp\htdocs\Sahayika\navbar.php -->
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
   style="background: #000;" <!-- Black background -->
 >
   <div class="container">
     <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
       <li class="nav-item">
         <a href="index.php" class="navbar-brand text-white">
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
     <ul class="navbar-nav align-items-lg-center ml-auto topnav">
		  
		  
		  <li class="nav-item">
              <a href="cbuy_crops.php" class="nav-link">
                <span class="text-white nav-link-inner--text font-weight-bold"
                  ><i class="text-white fas fa-shopping-cart"></i> Buy Crops</span
                >
              </a>
            </li>
			
			<li class="nav-item">
              <a href="cstock_crop.php" class="nav-link">
                <span class="text-white nav-link-inner--text font-weight-bold"
                  ><i class="text-white fad fa-store-alt"></i> Crop Stocks</span
                >
              </a>
            </li>
			
		   <li class="nav-item">
              <a href="cprofile.php" class="nav-link">
                <span class="text-white nav-link-inner--text font-weight-bold"
                  ><i class="text-white fas fa-user"></i> <?php echo $para2 ?> </span
                >
              </a>
            </li>
			
			
		  
		   <li class="nav-item">
              <a href="clogout.php" class="nav-link">
                <span class="text-white nav-link-inner--text font-weight-bold"
                  ><i class="text-danger fas fa-power-off"></i> Logout </span
                >
              </a>
            </li>



          </ul>
     </div>
   </div>
 </nav>