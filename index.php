<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="assets/img/logo.png" />
    <title>Agriculture Portal</title>

  <!--     Fonts and icons     -->
  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
	integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	
	<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css "/>
	
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />

 
  <link rel="stylesheet" href="assets/css/creativetim.min.css" type="text/css">
  
  <style>
    #navbar-main {
      padding-top: 5px !important; /* Reduce top padding */
      padding-bottom: 5px !important; /* Reduce bottom padding */
      height: auto; /* Adjust height automatically */
      background: #000;
    }

    #navbar-main .navbar-brand img {
      max-height: 100px; /* Adjust logo size if necessary */
    }
  </style>
  <style>
  .bg-cover {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }
  .carousel-item {
    transition: opacity 1s ease-in-out;
  }
  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    background-color: rgba(0, 0, 0, 0.5); /* Dark background for controls */
    border-radius: 50%;
  }
</style>
<style>
    .text-white-custom {
        color: white;
    }
</style>
<style>
    .icon-shape {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }
    .card-title {
        color: rgb(72, 40, 113);
    }
    .card:hover {
        transform: translateY(-5px);
        transition: all 0.3s ease-in-out;
    }
</style>
<style>
    .btn-brown {
        background-color: rgb(58, 28, 6) !important; /* Solid brown color */
        color: white !important; /* White text */
        border: none !important; /* Remove border */
        box-shadow: none !important; /* Remove any shadow */
    }
    .btn-brown:hover {
        background-color: rgb(65, 33, 10) !important; /* Darker brown on hover */
        color: white !important; /* Ensure text remains white */
    }
</style>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

  <body class="bg-white" id="top" onload="myFunction()">

    <!-- Navbar -->
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
    >
      <div class="container">
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
          <li class="nav-item dropdown">
            <a href="index.php" class="navbar-brand mr-lg-5 text-white">
            <img src="assets/img/sahayika.png" style="filter: brightness(0.8) sepia(1) hue-rotate(90deg) saturate(2);" />
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
          <span class="navbar-toggler-icon text-white"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-10 collapse-brand">
                <a href="index.php">
                  <img src="assets/img/sahayika.png" style="filter: brightness(0.8) sepia(1) hue-rotate(90deg) saturate(2);" />
                </a>
              </div>
              <div class="col-2 collapse-close bg-danger">
                <button
                  type="button"
                  class="navbar-toggler"
                  data-toggle="collapse"
                  data-target="#navbar_global"
                  aria-controls="navbar_global"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>

          <ul class="navbar-nav align-items-lg-center ml-auto">
            <li class="nav-item">
              <a href="contact.php" class="nav-link">
                <span class="text-white nav-link-inner--text">
                  <i class="text-white fas fa-address-card"></i> Contact
                </span>
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
                  <span class="text-white nav-link-inner--text">
                    <i class="text-white fas fa-user-plus"></i> Sign Up
                  </span>
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
                  <span class="text-white nav-link-inner--text">
                    <i class="text-white fas fa-sign-in-alt"></i> Login
                  </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="farmer/flogin.php">Farmer</a>
                  <a class="dropdown-item" href="customer/clogin.php">Customer</a>
                  <a class="dropdown-item" href="admin/alogin.php">Admin</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Hero Section with Sliding Background Images -->
    <header>
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="jumbotron bg-cover text-white" 
                     style="background-image: url('assets/img/farm-bg.png'); height: 100vh; background-size: cover; background-position: center;">
                    <div class="container text-center d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                        <h1 class="display-3 font-weight-bold" style="color:rgb(255, 255, 255);">Welcome to SAHAYIKA</h1>
                        <p class="lead">Empowering Farmers, Connecting Communities</p>
                        <a href="#services" class="btn btn-success btn-lg mt-3">Explore Features</a>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="jumbotron bg-cover text-white" 
                     style="background-image: url('assets/img/farm-bg2.jpg'); height: 100vh; background-size: cover; background-position: center;">
                    <div class="container text-center d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                        <h1 class="display-3 font-weight-bold" style="color:rgb(255, 255, 255);">Innovating Agriculture</h1>
                        <a href="#features" class="btn btn-lg mt-3 btn-brown">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="jumbotron bg-cover text-white" 
                     style="background-image: url('assets/img/farm-bg5.jpg'); height: 100vh; background-size: cover; background-position: center;">
                    <div class="container text-center d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                        <h1 class="display-3 font-weight-bold" style="color:rgb(255, 255, 255);">Connecting Farmers and Customers</h1>
                        <p class="lead">Direct Selling Without Middlemen</p>
                        <a href="#contact" class="btn btn-warning btn-lg mt-3">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel Controls -->
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<div class="wrapper" >

    <div class="wrapper">
      <!-- <header class="jumbotron bg-gradient-warning">
        <div class="container">
          <div class="row row-header">
            <div class="col-12 col-sm-6">
              <h1 class="text-white">Agriculture Portal</h1>
              <p class="text-white">
               A True Farmer's Friend.
              </p>
              <div class="cg">
                <div class="card card-body bg-gradient-success">
                  <blockquote cite="blockquote">
                    <h6 class="mb-0 text-dark">
                      <em><b  id="quote"> “Farming looks mighty easy when your plow is a pencil, and you're a thousand miles from the corn field..”</b ></em>
                    </h6>
                    <br />

                    <footer class="blockquote-footer vg text-dark"  >
                      <span id="author"> DWIGHT D. EISENHOWER	</span>	
					<button id="sendButton" class="btn btn-sm btn-outline-secondary pull-right mx-auto mr-auto bg-gradient-danger" onclick="myFunction()">
					  <i class="fa fa-refresh text-white"></i>
					</button>					  
                    </footer>				
                  </blockquote>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-3 offset-sm-2 align-self-center">
              <img src="assets/img/plant-bulb.png" class="img-fluid" alt="" />
            </div>
          </div>
        </div>
      </header> -->
<!-- Page Content -->

<!-- ======================================================================================================================================== -->

    <!-- <div class="section features-6 text-dark bg-white" id="services">
      <div class="container ">

        <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <span class="badge badge-primary badge-pill mb-3">Insight</span>
                    <h3 class="display-3 ">Features</h3>
                </div>
            </div>
			<br>
        <div class="row align-items-center">
		
          <div class="col-lg-6">
            <div class="info info-horizontal info-hover-success">
              <div class="description pl-4">
                <h3 class="title" >Farmers</h3>
           <p class=" ">Farmers can get recommendations for crop n fertilizer and even 
            predict the weather and get the news related to agriculture. Farmers can directly sell the crops to the customers.</p>
                        
              </div>
            </div>

          </div>
		  
		  
          <div class="col-lg-6 col-10 mx-md-auto d-none d-md-block">
            <img class="ml-lg-5  pull-right" src="assets/img/agri.png" width="100%">
          </div>
        </div>
		
		
		        <div class="row align-items-center">
				  <div class="col-lg-6 col-10 mx-md-auto d-none d-md-block">
            <img class="ml-lg-5" src="assets/img/customers.png" width="80%">
          </div>
     
		
		
          <div class="col-lg-6">
			
            <div class="info info-horizontal info-hover-warning mt-5">
              <div class="description pl-4">
                <h3 class="title">Customers</h3>
                <p class=" ">Customers can buy crops directly from the faarmers without the involvement of any middlemen.</p>
              </div>
            </div>
      
          </div>
   </div>
      </div>
    </div>
 -->

     
<!-- ======================================================================================================================================== -->

<div class="section features-6 text-dark bg-light py-5" id="features">
    <div class="container">
        <!-- Section Title -->
        <div class="row text-center mb-5">
            <div class="col-md-8 mx-auto">
                <h2 class="display-4 font-weight-bold" style="color: rgb(72, 40, 113);">Our Features</h2>
                <p class="lead text-muted">Empowering farmers and customers with cutting-edge tools and services.</p>
            </div>
        </div>

        <!-- Features Cards -->
        <div class="row">
            <!-- Feature 1 -->
            <div class="col-md-4 mb-4 d-flex">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <div class="icon icon-shape bg-success text-white rounded-circle mb-4">
                            <i class="fas fa-seedling fa-2x"></i>
                        </div>
                        <h5 class="card-title font-weight-bold">Crop Recommendations</h5>
                        <p class="card-text text-muted">Get personalized crop and fertilizer recommendations based on soil and weather conditions.</p>
                    </div>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-md-4 mb-4 d-flex">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <div class="icon icon-shape bg-primary text-white rounded-circle mb-4">
                            <i class="fas fa-cloud-sun fa-2x"></i>
                        </div>
                        <h5 class="card-title font-weight-bold">Weather Forecast</h5>
                        <p class="card-text text-muted">Plan your farming activities with accurate and real-time weather updates.</p>
                    </div>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-md-4 mb-4 d-flex">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <div class="icon icon-shape bg-warning text-white rounded-circle mb-4">
                            <i class="fas fa-shopping-cart fa-2x"></i>
                        </div>
                        <h5 class="card-title font-weight-bold">Direct Selling</h5>
                        <p class="card-text text-muted">Sell your crops directly to customers without the involvement of middlemen.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Features -->
        <div class="row">
            <!-- Feature 4: Agriculture News -->
            <div class="col-md-6 mb-4 d-flex">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <div class="icon icon-shape bg-danger text-white rounded-circle mb-4">
                            <i class="fas fa-newspaper fa-2x"></i>
                        </div>
                        <h5 class="card-title font-weight-bold">Agriculture News</h5>
                        <p class="card-text text-muted">Stay updated with the latest news and trends in the agriculture industry.</p>
                    </div>
                </div>
            </div>

            <!-- Feature 5: Market Insights -->
            <div class="col-md-6 mb-4 d-flex">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <div class="icon icon-shape bg-info text-white rounded-circle mb-4">
                            <i class="fas fa-chart-line fa-2x"></i>
                        </div>
                        <h5 class="card-title font-weight-bold">Market Insights</h5>
                        <p class="card-text text-muted">Get real-time market insights to make informed decisions about your crops.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

const apiKey = "sk-xxxxxxxxxxxxxxxxxxx";   // Enter your apikey here
const chatbox = document.getElementById("quote");
const authorN = document.getElementById("author");

let messages = [];

function myFunction(){
	const msg = "give me a quote related to agriculture and farming";
    if (msg) {
        messages.push({
            "role": "user",
            "content": msg
        });
        fetchMessages();
    }
};

function fetchMessages() {
    try {
        var settings = {
            url: "https://api.openai.com/v1/chat/completions",
            method: "POST",
            timeout: 0,
            headers: {
                Authorization: "Bearer " + apiKey,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                model: "gpt-3.5-turbo",
                messages: messages
            })
        };
        $.ajax(settings).done(function(response) {
			chatbox.innerHTML = '';  
			authorN.innerHTML = ''; 

			const message = response.choices[0].message;
            messages.push({
                "role": message.role,
                "content": message.content
            });					
            Rquote=message.content;	

			parts = Rquote.split(" - ")
			QuoteR = parts[0]
			authorName = parts[1]

			chatbox.append(QuoteR);
			authorN.append(authorName);
			
        }).fail(function(jqXHR, textStatus, errorThrown) {
			chatbox.innerHTML = '';  
			let errorMessage = 'Farming looks mighty easy when your plow is a pencil, and youre a thousand miles from the corn field.';
			chatbox.append(errorMessage);
        });
    } catch (error) {
		chatbox.innerHTML = '';  
		let errorMessage2 = 'Farming looks mighty easy when your plow is a pencil, and youre a thousand miles from the corn field.';
		chatbox.append(errorMessage2);
    }
}
 </script>

</body>

</html>