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

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

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
        <li class="nav-item"><a class="nav-link active fw-bold m-2" aria-current="page" href="index.php">Home</a></li>
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

<div class="hero-section">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-6">
          <div class="hero-content">
            <h1 class="display-4 fw-bold mb-4 mt-2">Smooth Travels<br>Start Here</h1>
            <p class="lead mb-4">
              Rent your perfect car and enjoy a smooth ride to your destination. Choose from our wide selection of vehicles.
            </p>
            <div class="search-box bg-white p-4 rounded-4 shadow">
              <div class="mb-3">
                <div class="input-group">
                  <span class="input-group-text bg-white border-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                  </span>
                  <input type="text" class="form-control border-0" placeholder="Pick-up Location">
                </div>
              </div>
              <div class="row g-3 mb-3">
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-text bg-white border-0">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
                    </span>
                    <input type="datetime-local" class="form-control border-0">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-text bg-white border-0">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
                    </span>
                    <input type="datetime-local" class="form-control border-0">
                  </div>
                </div>
              </div>
              <div class="row g-3 align-items-center">
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-text bg-white border-0">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </span>
                    <select class="form-select border-0">
                      <option value="1">1 Passenger</option>
                      <option value="2">2 Passengers</option>
                      <option value="3">3 Passengers</option>
                      <option value="4">4 Passengers</option>
                      <option value="5">5 Passengers</option>
                      <option value="6">6 Passengers</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <button class="btn btn-primary w-100 rounded-3">
                    Search Cars
                  </button>
                </div>
              </div>
            </div>
            <div class="mt-4">
              <div class="d-inline-block hire-us-btn">
                <p class="mb-1 text-white">Need a Ride for Your Weekend Trip?</p>
                <a href="rent car.php" class="btn btn-light rounded-pill px-4 shadow-none">
  Hire Us!
</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <style>
   .hero-section {
  min-height: 100vh;
  background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
              url('https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2021&q=80');
  background-size: cover;
  background-position: center;
  color: white;
}

.hero-content {
  max-width: 600px;
}

.search-box {
  background: rgba(255, 255, 255, 0.95) !important;
  backdrop-filter: blur(10px);
}

.search-box .input-group {
  background: #f8f9fa;
  border-radius: 8px;
  overflow: hidden;
}

.search-box .form-control,
.search-box .form-select {
  background: #f8f9fa;
}

.search-box .form-control:focus,
.search-box .form-select:focus {
  box-shadow: none;
  background: #f8f9fa;
}

.search-box .btn-primary {
  padding: 12px;
  font-weight: 600;
  background-color: #0056b3;
  border-color: #0056b3;
}

.hire-us-btn {
  background: rgba(0, 86, 179, 0.9);
  padding: 1rem 2rem;
  border-radius: 12px;
  backdrop-filter: blur(5px);
}

.hire-us-btn p {
  font-size: 0.9rem;
  opacity: 0.9;
}

.hire-us-btn .btn-light {
  font-weight: 600;
} 
    </style>
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
<div class="bottom-footer py-2">
    <p class="mb-0">&copy; 2025 Tropic Dodo. All rights reserved. | <a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Packages</a> | <a href="#">Contact Us</a></p>
</div>

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

/* Footer */
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
