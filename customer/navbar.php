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
       <ul class="navbar-nav align-items-lg-center ml-auto">
         <li class="nav-item">
           <a href="contact.php" class="nav-link text-white">
             <i class="fas fa-address-card"></i> Contact
           </a>
         </li>
         <li class="nav-item">
           <div class="dropdown show">
             <a
               class="nav-link dropdown-toggle text-white"
               href="#"
               role="button"
               id="dropdownMenuLink"
               data-toggle="dropdown"
               aria-haspopup="true"
               aria-expanded="false"
             >
               <i class="fas fa-user-plus"></i> Sign Up
             </a>
             <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
               <a class="dropdown-item" href="farmer/fregister.php">Farmer</a>
               <a class="dropdown-item" href="customer/cregister.php">Customer</a>
             </div>
           </div>
         </li>
         <li class="nav-item">
           <div class="dropdown show">
             <a
               class="nav-link dropdown-toggle text-white"
               href="#"
               role="button"
               id="dropdownMenuLink"
               data-toggle="dropdown"
               aria-haspopup="true"
               aria-expanded="false"
             >
               <i class="fas fa-sign-in-alt"></i> Login
             </a>
             <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
               <a class="dropdown-item" href="../farmer/flogin.php">Farmer</a>
               <a class="dropdown-item" href="customer/clogin.php">Customer</a>
               <a class="dropdown-item" href="../admin/alogin.php">Admin</a>
             </div>
           </div>
         </li>
       </ul>
     </div>
   </div>
 </nav>