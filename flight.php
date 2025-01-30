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

<!-- Hero Section -->
<div class="hero bg-dark text-white text-center d-flex align-items-center justify-content-center" 
         style="background: url('pictures/air2.png') center/cover no-repeat; min-height: 80vh; position: relative;" 
         data-aos="fade-up" data-aos-duration="1500">
        <div class="position-relative">
            <h1 class="display-4 h-font">Book Your Flight With Ease</h1>
            <p>Find and book your perfect flight effortlessly. Choose from a range of options, enjoy competitive prices, and secure your seat in just a few clicks. Start your journey today!</p>
            <a href="flightus.php" class="btn btn-primary">Search</a>
        </div>
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-50"></div>
    </div>

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

<style>
/* General Styling */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
    line-height: 1.6;
}

/* Navigation Styling */
nav {
    background-color: #007bff;
}

nav a {
    color: #fff;
    text-decoration: none;
    font-size: 1rem;
}

nav .navbar-right a {
    padding: 8px 15px;
    border-radius: 5px;
    background-color: white;
    color: #007bff;
    font-weight: bold;
}

nav .navbar-right a:hover {
    background-color: #e6e6e6;
}

/* Header Section */
.header {
    text-align: center;
    color: white;
    padding: 100px 20px;
    background-size: cover;
    background-position: center;
   
}


.header-title {
    font-size: 3rem;
    margin-bottom: 20px;
}

.header-subtitle {
    font-size: 1.2rem;
}

/* FAQ and Form Sections */
.accordion .accordion-button {
    box-shadow: none;
}

form .form-control {
    margin-bottom: 15px;
}

form button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px;
    font-size: 1rem;
    cursor: pointer;
}

form button:hover {
    background-color: #0056b3;
}

/* Info Cards */
.info-card {
    text-align: center;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.info-card h3 {
    font-size: 1.1rem;
    margin-bottom: 10px;
}

.info-card p {
    font-size: 0.9rem;
    color: #555;
}
</style>

<script>
  AOS.init();
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>