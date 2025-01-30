<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tropic Dodo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
    <!-- animation  -->
   <!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>


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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-lg-3 py-lg-2 shadow-sm fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand h-font" href="index.php">
      <img src="pictures/WhatsApp Image 2025-01-26 at 13.37.15_08df1ddb.jpg" alt="Tropic Dodo Logo" style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;">
      Tropic Dodo
    </a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-5 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link fw-bold m-2" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold m-2" href="package.php">Packages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold m-2" href="contact us.php">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold m-2" href="flight.php">Flights</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold m-2" href="Taxis.php">Taxis</a>
        </li>
      </ul>
      <form class="d-flex">
        <button type="button" class="btn btn-outline-info shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        <button type="button" class="btn btn-outline-info shadow-none" data-bs-toggle="modal" data-bs-target="#RegisterModal">Register</button>
      </form>
    </div>
  </div>
</nav>

<!-- Custom CSS -->
<style>
  .navbar-nav .nav-link:hover {
    text-decoration: none;
    color: inherit;
    background: none;
  }
</style>


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

<style>
    /* Pop-up CSS */
    .toast-container {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 1055;
    }

    .toast {
      display: none; 
      opacity: 0; 
      transition: opacity 0.5s ease-in-out;
    }

    .toast.show {
      display: block;
      opacity: 1; 
    }
  </style>
  <!-- Instagram Popup -->
  <div class="toast-container">
    <div id="instagramToast" class="toast align-items-center text-white bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body">
          Follow us on Instagram for updates and exclusive content!
          <a href="https://www.instagram.com/tropic.dodo?igsh=eGZsb2FuZnV6cnRw" target="_blank" class="text-white fw-bold ms-2">Visit Now</a>
        </div>
        <button id="closeToast" type="button" class="btn-close btn-close-white me-2 m-auto" aria-label="Close"></button>
      </div>
    </div>
</div>

<!-- Image Section -->
<div class="container-fluid p-0 position-relative" data-aos="fade-up" data-aos-duration="1500">
        <img src="pictures/beautiful-tropical-beach-sea.jpg" class="img-fluid fullscreen-img low-exposure" alt="Tropic Dodo Banner">
        <div class="position-absolute top-50 start-50 translate-middle text-center px-4 w-100">
            <p class="image-subtitle display-4 fw-light h-font text-white mb-2 mt-5 fw-bold">Find Your Destination</p>
            <p class="card-text text-white" style="font-size: 1.2rem; max-width: 90%; margin: auto; margin-bottom: 10px; ">Explore the planet's most thrilling natural wonders; life’s too short to miss the journey.</p>
            <a href="readmore.php" class="btn btn-light text-dark shadow-none fw-bold">Read more</a>
        </div>
    </div>

<!-- About Us Section -->
<section class="about-us py-5" id="about">
  <div class="container" data-aos="fade-up">
    <div class="row text-center">
      <div class="col-12">
        <h2 class="text-dark" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="60">About Tropic Dodo</h2>
        <p class="lead text-muted"  data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="70">Your Premier Guide to the Indian Ocean Islands</p>
      </div>
    </div>
  </div>
</section>
    <div class="row justify-content-center"  data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="70">
      <!-- Mission Section -->
      <div class="col-12 col-md-4 mb-4" >
        <div class="card shadow-sm border-0">
          <img src="pictures/mass.jpeg" class="card-img-top" alt="Tropic Dodo in Mauritius">
          <div class="card-body">
            <h5 class="card-title">Our Mission</h5>
            <p class="card-text">At Tropic Dodo, we aim to make your travel unforgettable by offering personalized tours that let you explore the very best of the Indian Ocean.</p>
          </div>
        </div>
      </div>

      <!-- Values Section -->
      <div class="col-12 col-md-4 mb-4">
        <div class="card shadow-sm border-0">
          <img src="pictures/roro.jpeg" class="card-img-top" alt="Reunion Island">
          <div class="card-body">
            <h5 class="card-title">Our Values</h5>
            <p class="card-text">We focus on sustainability, ethical tourism, and providing a rich cultural experience for each traveler, all while showcasing the natural beauty of the islands.</p>
          </div>
        </div>
      </div>

      <!-- Vision Section -->
      <div class="col-12 col-md-4 mb-4">
        <div class="card shadow-sm border-0">
          <img src="pictures/reeee.jpeg" class="card-img-top" alt="Tropic Dodo Seychelles Tour">
          <div class="card-body">
            <h5 class="card-title">Our Vision</h5>
            <p class="card-text">Our vision is to be the leading provider of seamless travel experiences around the Indian Ocean, bringing you closer to paradise, one island at a time.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Our Team Section -->
    <div class="row mt-5 text-center">
      <div class="col-12">
        <h3 class="text-dark"  data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="60">Meet Our Team</h3>
        <p class="lead text-muted"  data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="70">A passionate team dedicated to making your dream vacation come true.</p>
      </div>

      <div class="col-12 col-md-3"  data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="70">
        <img src="pictures/WhatsApp Image 2025-01-23 at 21.59.43_969dcb0c.jpg" alt="Team Member 1" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
        <h5>Nishchay Bholla</h5>
        <p class="text-muted">Founder & CEO</p>
      </div>

      <div class="col-12 col-md-3"  data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="70">
        <img src="pictures/WhatsApp Image 2025-01-25 at 22.28.21_348605f0.jpg" alt="Team Member 2" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
        <h5>Kovid Bootan</h5>
        <p class="text-muted">Travel Specialist</p>
      </div>

      <div class="col-12 col-md-3"  data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="70">
        <img src="pictures/WhatsApp Image 2025-01-25 at 22.29.01_0ec13c7e.jpg" alt="Team Member 3" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
        <h5>Yatri Bundhoo</h5>
        <p class="text-muted">Tour Operator</p>
      </div>

      <div class="col-12 col-md-3"  data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="70">
        <img src="pictures/WhatsApp Image 2025-01-25 at 22.25.59_c9c789fd.jpg" alt="Team Member 4" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
        <h5>Ishikesh Babajee</h5>
        <p class="text-muted">Customer Support</p>
      </div>
    </div>
  </div>
</section>


<!-- second part  5+ years-->
<div class="container my-4"  data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="70">
    <div class="info-section row text-white">
      <div class="col-12 col-md-4 border-end border-white ">
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
<p class="text-center mb-4"data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="60">
        <a href="404.php" class="d-block text-center text-decoration-none">Explore now</a>
    </p>

<p class="text-center fw-bold fs-4" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="70">Find Your Paradies</p>
<br>
<br>

  <div class="container ">
    <div class="row g-4">
      <!-- Mauritius -->
      <a href= "hotelmau.php" class="col-md-4 d-flex align-items-stretch low-exposure  custom-cursor">
        <div class="travel-card w-100">
          <img src="pictures/beautiful-scenery-chamarel-waterfall-mauritius-cloudy-sky.jpg" alt="Mauritius">
                                                <!-----Icons locations-->
          <div class="travel-label"><i class="bi bi-geo-alt-fill"></i> MAURITIUS</div>
        </div>
</a>

      <!-- Maldives -->
      <a href= " "  class="col-md-4 d-flex align-items-stretch low-exposure custom-cursor">
        <div class="travel-card w-100">
          <img src="pictures/maldives-island.jpg" alt="Maldives">
          <div class="travel-label"><i class="bi bi-geo-alt-fill"></i> MALDIVES</div>
        </div>
</a>

      <!-- Rodrigues -->
      <a href= " "  class="col-md-4 d-flex align-items-stretch low-exposure custom-cursor">
        <div class="travel-card w-100">
          <img src="pictures/beautiful-tropical-beach.jpg" alt="Rodrigues">
          <div class="travel-label"><i class="bi bi-geo-alt-fill"></i> RODRIGUES</div>
        </div>
</a>

      <!-- Seychelles -->
      <a href= " "  class="col-md-4 d-flex align-items-stretch low-exposure custom-cursor">
        <div class="travel-card w-100">
          <img src="pictures/rocks-beach-surrounded-by-greenery-sea-sunlight-praslin-seychelles.jpg" alt="Seychelles">
          <div class="travel-label"><i class="bi bi-geo-alt-fill"></i>SEYCHELLES</div>
        </div>
</a>

      <!-- Madagascar -->
      <a href=" "  class="col-md-4 d-flex align-items-stretch low-exposure custom-cursor">
        <div class="travel-card w-100">
          <img src="pictures/waterfall-middle-cliffs-with-trees-plants-sunny-day.jpg" alt="Madagascar">
          <div class="travel-label"><i class="bi bi-geo-alt-fill"></i> MADAGASCAR</div>
        </div>
</a>

      <!-- Reunion -->
      <a href=" "  class="col-md-4 d-flex align-items-stretch low-exposure custom-cursor">
        <div class="travel-card w-100">
          <img src="pictures/tropical-hawaii-landscape-with-blue-sea.jpg" alt="Reunion">
          <div class="travel-label"><i class="bi bi-geo-alt-fill"></i> REUNION</div>
        </div>
      </div>
    </div>
</a>
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

  <div class="container my-5 shadow">
    <div class="row bg-light rounded overflow-hidden align-items-stretch card-container">
      <!-- Image Section -->
      <div class="col-md-6 p-0 image-container">
        <img src="pictures/mailus.jpg" class="w-100" alt="Photographer">
      </div>
      <!-- Content Section -->
      <div class="col-md-6 text-center d-flex flex-column justify-content-center p-4">
        <h2 class="fw-bold">Stay Up to Date with our Discounts & Greatest Deals</h2>
        <p class="text-muted">Register to see secret deals—prices drop the moment you sign up!</p>
        <form class="d-flex justify-content-center flex-wrap">
          <input type="email" class="form-control me-2 mb-2 shadow-none" style="max-width: 300px; " placeholder="Enter your Email" required>
          <button type="submit" class="btn btn-primary shadow-none">Sign up</button>
        </form>
      </div>
    </div>
  </div>
  </div>
  <br>
  <style>
/* cursor for each image part  */
.custom-cursor {
  cursor: pointer;
}


    .card-container {
      max-height: 400px; 
    }
    .image-container img {
      width: 100%;
      height: 100%;
      object-fit: cover; 
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



  <!-- Footer Section -->
<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h3>About Us</h3>
                <p>We are a team of dedicated individuals at Tropic Dodo, driven by a passion for providing professional and secure travel experiences.</p>
            </div>
            <div class="col-lg-4">
                <h3>Support</h3>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Help Center</a></li>
                    <li><a href="#" class="text-white">Travel Health Information</a></li>
                    <li><a href="#" class="text-white">Cancellation Options</a></li>
                    <li><a href="#" class="text-white">Travel Tips</a></li>
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

<!-- Horizontal Rule -->

<div class="bg-dark text-center py-2">
    <p class="mb-0">&copy; 2025 Tropic Dodo. All rights reserved. | <a href="#" class="text-white">Home</a> | <a href="#" class="text-white">About Us</a> | <a href="#" class="text-white">Packages</a> | <a href="#" class="text-white">Contact Us</a></p>
</div>


<script>
  AOS.init();


  function showToast() {
      const toast = document.getElementById('instagramToast');
      toast.classList.add('show');
    }

    // Event listener for the close button
    document.getElementById('closeToast').addEventListener('click', function () {
      const toast = document.getElementById('instagramToast');
      toast.classList.remove('show');
    });

    // Show the toast every minute
    setInterval(showToast, 50000);

    // Initial toast display
    showToast();

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>