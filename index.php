<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tropic Dodo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">

<!--google font -->
  <link href="https://fonts.googleapis.com/css2?family=Kavoon&display=swap" rel="stylesheet">
  <!-- Icons link from Bootstrap  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    .h-font {
      font-family: "Kavoon", serif;
    }

    /*to remove number in bar */
    /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm fixed-top">
  <div class="container-fluid"> 
    <a class="navbar-brand h-font" href="index.php">Tropic Dodo</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-5 mb-lg-0">
        <li class="nav-item"><a class="nav-link active fw-bold m-2" aria-current="page" href="#">Home</a></li>

        <li class="nav-item"><a class="nav-link fw-bold m-2"  href="#">Packages</a></li>
        <li class="nav-item"><a class="nav-link fw-bold m-2" href="contact us.php">Contact us</a></li>
        <li class="nav-item"><a class="nav-link fw-bold m-2" href="flight.php">Flights</a></li> 
        <li class="nav-item"><a class="nav-link fw-bold m-2" href="Taxis.php">Taxis</a></li>
      </ul>
      <form class="d-flex">
        <button type="button" class="btn btn-outline-info shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        <button type="button" class="btn btn-outline-info shadow-none" data-bs-toggle="modal" data-bs-target="#RegisterModal">Register</button>
      </form>
    </div>
  </div>
</nav>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title">
            <!-- User icons -->
            <i class="bi bi-person-circle fs-3 me-2"></i>User Login</h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control shadow-none">
          </div>
          <div class="mb-4">
            <label class="form-label">Password</label>
            <input type="password" class="form-control shadow-none">
          </div>
          <div class="d-flex align-items-center justify-content-between mb-2">
            <button type="submit" class="btn btn-outline-info shadow-none">Login</button>
            <a href="javascript:void(0)" class="text-secondary text-decoration-none">Forget Password?</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="RegisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg ">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title">
            <!-- Register icons -->
            <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registration</h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          Note: Your details must match with your ID (passport, drving license, etc.)
          that will be require during check-in
        </span>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 ps-0">
            <label class="form-label">Name</label>
            <input type="text" class="form-control shadow-none">
  </div>
            <div class="col-md-6 p-0 mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control shadow-none">
  </div>
            <div class="col-md-6 ps-0 mb-3">
            <label class="form-label">Phone Number</label>
            <input type="number" class="form-control shadow-none">
  </div>
            <div class="col-md-6 p-0 mb-3">
            <label class="form-label">Picture</label>
            <input type="file" class="form-control shadow-none">
            </div>
            <div class="col-md-12 p-0 mb-3">
            <label class="form-label">Address</label>
            <textarea class="form-control shadow-none" rows="1"></textarea>       
</div>
<div class="col-md-6 ps-0 mb-3">
            <label class="form-label">Pin Code</label>
            <input type="number" class="form-control shadow-none">
  </div>
            <div class="col-md-6 p-0 mb-3">
            <label class="form-label">Date of birth</label>
            <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-md-6 ps-0 mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control shadow-none">
  </div>
            <div class="col-md-6 p-0 mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" class="form-control shadow-none">
            </div>
  </div>
            <div class="text-center my-1">
            <button type="submit" class="btn btn-outline-info shadow-none">REGISTER</button>
  </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

<!-- Image part -->
<div class="container-fluid p-0 position-relative">
  <img src="pictures/beautiful-tropical-beach-sea.jpg" class="img-fluid fullscreen-img low-exposure" alt="Tropic Dodo Banner">
  <div class="position-absolute top-50 start-50 translate-middle text-center px-4 w-100">
    <p class="image-subtitle display-4 font-weight-light h-font text-white mb-2">Find Your Destination</p>
    <p class="card-text text-white" style=" font-size: 1.2rem; max-width: 90%; margin: auto; margin-bottom: 10px; ">Explore the planet's most thrilling natural wonders life’s too short to miss the journey.</p>
    <a href="readmore.php" class="btn btn-light text-dark shadow-none">Read more</a>
  </div>
</div>
<style>

</style>
<br>
<br>
     
<!-- second part  5+ years-->
<div class="container my-4">
    <div class="info-section row text-white">
      <div class="col-12 col-md-4 border-end border-white">
        <h5>5+ Year<br>Experience</h5>
      </div>
      <div class="col-12 col-md-4 border-end border-white">
        <h5>1k+<br>Customer Reviews</h5>
      </div>
      <div class="col-12 col-md-4">
        <h5>10+<br>Fine Destinations</h5>
      </div>
    </div>
  </div>
<br>
<br>
<!---Text-section example Explore link-->
<a href="404.php" class="d-block text-center text-decoration-none">Explore now</a>
<p class="text-center fw-bold fs-4 ">Find Your Paradies</p>
<br>
<br>

  <div class="container">
    <div class="row g-4">
      <!-- Mauritius -->
      <div class="col-md-4 d-flex align-items-stretch low-exposure">
        <div class="travel-card w-100">
          <img src="pictures/beautiful-scenery-chamarel-waterfall-mauritius-cloudy-sky.jpg" alt="Mauritius">
                                                <!-----Icons locations-->
          <div class="travel-label"><i class="bi bi-geo-alt-fill"></i> MAURITIUS</div>
        </div>
      </div>

      <!-- Maldives -->
      <div class="col-md-4 d-flex align-items-stretch low-exposure">
        <div class="travel-card w-100">
          <img src="pictures/maldives-island.jpg" alt="Maldives">
          <div class="travel-label"><i class="bi bi-geo-alt-fill"></i> MALDIVES</div>
        </div>
      </div>

      <!-- Rodrigues -->
      <div class="col-md-4 d-flex align-items-stretch low-exposure">
        <div class="travel-card w-100">
          <img src="pictures/beautiful-tropical-beach.jpg" alt="Rodrigues">
          <div class="travel-label"><i class="bi bi-geo-alt-fill"></i> RODRIGUES</div>
        </div>
      </div>

      <!-- Seychelles -->
      <div class="col-md-4 d-flex align-items-stretch low-exposure">
        <div class="travel-card w-100">
          <img src="pictures/rocks-beach-surrounded-by-greenery-sea-sunlight-praslin-seychelles.jpg" alt="Seychelles">
          <div class="travel-label"><i class="bi bi-geo-alt-fill"></i>SEYCHELLES</div>
        </div>
      </div>

      <!-- Madagascar -->
      <div class="col-md-4 d-flex align-items-stretch low-exposure">
        <div class="travel-card w-100">
          <img src="pictures/waterfall-middle-cliffs-with-trees-plants-sunny-day.jpg" alt="Madagascar">
          <div class="travel-label"><i class="bi bi-geo-alt-fill"></i> MADAGASCAR</div>
        </div>
      </div>

      <!-- Reunion -->
      <div class="col-md-4 d-flex align-items-stretch low-exposure">
        <div class="travel-card w-100">
          <img src="pictures/tropical-hawaii-landscape-with-blue-sea.jpg" alt="Reunion">
          <div class="travel-label"><i class="bi bi-geo-alt-fill"></i> REUNION</div>
        </div>
      </div>
    </div>
  </div>
<br>
<!---Testemonial part--->
  <div class="container py-5">
        <h1 class="text-center mb-5 fw-bold fs-4">Our Happy Travellers</h1>
        <hr>
<div class="d-flex align-items-center">
  <!-- Circular Image Icon -->
  <img src="pictures/user.png" alt="User Icon" class="rounded-circle me-3" style="width: 50px; height: 50px;">
  
  <!-- Review Content -->
  <p>
  Emily R.
“Tropic Dodo made my vacation planning a breeze! I loved how everything was in one place—hotels, taxis, and activities. The web app is super easy to navigate, and I scored some amazing deals.
 I’ll definitely be using it again for my next trip!” <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>
  </p>
</div>
</hr>

<hr>
<div class="d-flex align-items-center">
  <!-- Circular Image Icon -->
  <img src="pictures/user2.jpg" alt="User Icon" class="rounded-circle me-3" style="width: 50px; height: 50px;">
  
  <!-- Review Content -->
  <p>
  Sophia W.
  “This app made my trip planning so easy! I found amazing budget hotels, booked a taxi right from the app, 
    and snagged a great flight deal. Highly recommend it for anyone looking to simplify their travel!” <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
  </p>
</div>
</hr>

<hr>
<div class="d-flex align-items-center">
  <!-- Circular Image Icon -->
  <img src="pictures/user3.png" alt="User Icon" class="rounded-circle me-3" style="width: 50px; height: 50px;">
  
  <!-- Review Content -->
  <p>
  James P.

“As someone who’s always on the move, this web app saved me so much time. The hotel and activity options around the Indian Ocean islands were fantastic, and the booking process was smooth. Perfect for travelers like me!” <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
  </p>
</div>
</hr>

<hr>
<div class="d-flex align-items-center">
  <!-- Circular Image Icon -->
  <img src="pictures/user2.jpg" alt="User Icon" class="rounded-circle me-3" style="width: 50px; height: 50px;">
  
  <!-- Review Content -->
  <p>
  Aisha K.
“I was skeptical at first, but Tropic Dodo exceeded my expectations! I planned an entire trip within minutes and found the perfect hotel that fit my budget. The local recommendations are a great touch!  <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>
  </p>
</div>
</hr>
<br>

<!---form part--->
<style>
    .card-container {
      max-height: 400px; /* Limit card size for larger screens */
    }
    .image-container img {
      width: 100%;
      height: 100%;
      object-fit: cover; /* Ensures proper image scaling */
    }
    @media (max-width: 768px) {
      .card-container {
        max-height: none; /* Remove height restriction for smaller screens */
        height: auto;
      }
      .image-container {
        height: 200px; /* Set a specific height for the image */
      }
      .image-container img {
        height: 100%; /* Ensure the image still fits the container */
      }
    }
  </style>

  <div class="container my-5 shadow ">
    <div class="row bg-light rounded overflow-hidden align-items-stretch card-container">
      <!-- Image Section -->
      <div class="col-md-6 p-0 image-container">
        <img src="pictures/mailus.jpg" class="w-100" alt="Photographer">
      </div>
      <!-- Content Section -->
      <div class="col-md-6 text-center d-flex flex-column justify-content-center p-4">
        <h2 class="fw-bold">Stay Up to Date with our Discounts & Greatest Deals</h2>
        <p class="text-muted">Subscribe to see secret deals—prices drop the moment you sign up!</p>
        <form class="d-flex justify-content-center flex-wrap">
          <input type="email" class="form-control me-2 mb-2 shadow-none" style="max-width: 300px; " placeholder="Enter your Email" required>
          <button type="submit" class="btn btn-primary shadow-none">Submit</button>
        </form>
      </div>
    </div>
  </div>
  </div>
  <br>


  

<!-- Footer Section -->
<footer class="footer py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h3>About Us</h3>
                <p>We are a team of dedicated individuals at Tropic Dodo, driven by a passion for providing professional and secure travel experiences.</p>
            </div>
            <div class="col-lg-4">
                <h3>Support</h3>
                <ul class="list-unstyled">
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Travel Health Information</a></li>
                    <li><a href="#">Cancellation Options</a></li>
                    <li><a href="#">Travel Tips</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h3>Contact Us</h3>
                <p><strong>Phone:</strong> +230 58157319</p>
                <p><strong>Email:</strong> tropicdodo@gmail.com</p>
            </div>
        </div>
    </div>
</footer>

<!-- Horizontal Rule (outside container) -->
<hr class="full-width-rule">

<div class="bottom-footer py-2">
    <p class="mb-0">&copy; 2025 Tropic Dodo. All rights reserved. | <a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Packages</a> | <a href="#">Contact Us</a></p>
</div>

<style>
    /* Specific styling for the horizontal rule */
    .full-width-rule {
        border: none;
        height: 1px;
        background-color: #ddd;
        width: 100vw; /* Ensure full width of the viewport */
        margin: 0;
    }

    /* Footer specific styling */
    .footer {
        background-color: #f9f9f9;
        border-top: 1px solid #ddd;
    }

    .footer h3 {
        font-size: 1.2rem;
        color: #333;
    }

    .bottom-footer {
        background-color: #e7fcff;
        text-align: center;
        font-size: 0.9rem;
    }
</style>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>