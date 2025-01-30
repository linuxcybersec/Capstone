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

 <!-- Hero Section -->
<section class="bg-light text-center py-5 mt-4" style="background: url('pictures/beautiful-tropical-beach-sea.jpg') no-repeat center center/cover;" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
    <div class="container text-white mt-5 fw-bold">
        <h1 class="fw-bold h-font">Find Your Destination</h1>
        <p>Explore the planet's most thrilling natural wonders - life's too short to miss the journey.</p>
    </div>
</section>

<!-- Location Section -->
<section class="text-center py-4" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
    <h2>Explore now</h2>
    <p class=" text-muted">Experience the Best with Our Packages</p>
    <p class="lead text-muted">Fill in the fields below to find the best spot for your next tour.</p>
    <!-- Location Dropdown -->
    <select id="islandSelector" class="btn btn-info mb-4 shadow-none fw-bold" onchange="filterPackages()">
        <option value="all">All Islands</option>
        <option value="mauritius">Mauritius</option>
        <option value="maldives">Maldives</option>
        <option value="seychelles">Seychelles</option>
        <option value="madagascar">Madagascar</option>
        <option value="rodrigues">Rodrigues</option>
        <option value="reunion">Reunion</option>

    </select>
</section>

<!-- Packages Section -->
<section class="container py-5">
    <div class="row">
        <!-- Mauritius Package -->
        <div class="col-md-4 mb-4 package-card mauritius" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="100">
            <div class="card">
                <img src="pictures/chamarel waterfall.jpg" class="card-img-top" alt="La Vallée des Couleurs">
                <div class="card-body">
                    <h5 class="card-title">Chamarel Waterfall</h5>
                    <h6 class="card-title">Location: Mauritius</h6>
                    <p class="card-text">From: $200</p>
                 <!-- Book Now button updated to trigger the modal -->
      <button type="button" class="btn btn-dark shadow-none" data-bs-toggle="modal" data-bs-target="#paymentModal" >
        Book Now
                </div>
            </div>
        </div>
<!-- Payment Form Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <i class="bi bi-credit-card-fill fs-3 me-2"></i> 
        <h5 class="modal-title" id="paymentModalLabel">Book Your Activity</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <!-- Activity Name -->
          <div class="mb-3">
            <label for="activityName" class="form-label">Activity Name</label>
            <input type="text" class="form-control shadow-none" id="activityName" value="Chamarel Waterfall" readonly>
          </div>

          <!-- Activity Location -->
          <div class="mb-3">
            <label for="activityLocation" class="form-label">Location</label>
            <input type="text" class="form-control shadow-none" id="activityLocation" value="Mauritius" readonly>
          </div>

          <!-- Date of Visit -->
          <div class="mb-3">
            <label for="visitDate" class="form-label">Date of Visit</label>
            <input type="date" class="form-control shadow-none" id="visitDate" required>
          </div>

          <!-- Number of People -->
          <div class="mb-3">
            <label for="numberOfPeople" class="form-label">Number of People</label>
            <input type="number" class="form-control shadow-none" id="numberOfPeople" placeholder="Enter number of people" min="1" required>
          </div>

          <!-- Payment Amount -->
          <div class="mb-3">
            <label for="paymentAmount" class="form-label">Payment Amount (USD)</label>
            <input type="number" class="form-control shadow-none" id="paymentAmount" value="200" readonly>
          </div>

          <!-- Card Details -->
          <div class="mb-3">
            <label for="cardNumber" class="form-label">Card Number</label>
            <input type="text" class="form-control shadow-none" id="cardNumber" placeholder="Enter card number" required>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="expiryDate" class="form-label">Expiry Date</label>
              <input type="date" class="form-control shadow-none" id="expiryDate" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cvv" class="form-label">CVV</label>
              <input type="text" class="form-control shadow-none" id="cvv" placeholder="CVV" maxlength="4" required>
            </div>
          </div>

          <!-- Special Requests -->
          <div class="mb-3">
            <label for="specialRequests" class="form-label">Special Requests (Optional)</label>
            <textarea class="form-control shadow-none" id="specialRequests" rows="3" placeholder="Add any special requirements"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary shadow-none">Confirm Payment</button>
      </div>
    </div>
  </div>
</div>



        <!-- Rodrigues Package -->
        <div class="col-md-4 mb-4 package-card rodrigues " data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="100">
            <div class="card">
                <img src="pictures/leguat.jpg" class="card-img-top" alt="La Vallée des Couleurs">
                <div class="card-body">
                    <h5 class="card-title">François Leguat Reserve</h5>
                    <h6 class="card-title">Location: Rodrigues</h6>
                    <p class="card-text">From: $250</p>
                 <!-- Book Now button updated to trigger the modal -->
      <button type="button" class="btn btn-dark shadow-none" data-bs-toggle="modal" data-bs-target="#paymentModal2" >
        Book Now
                </div>
            </div>
        </div>
       <!-- payment form -->
<div class="modal fade" id="paymentModal2" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!-- icon -->
        <i class="bi bi-credit-card-fill fs-3 me-2"></i> 
        <h5 class="modal-title" id="paymentModalLabel">Package Activity Payment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <!-- Package Name -->
          <div class="mb-3">
            <label for="packageName" class="form-label">Package Name</label>
            <input type="text" class="form-control shadow-none" id="packageName" placeholder="Enter package name" value="Chamarel Waterfall" readonly>
          </div>

          <!-- Payment Amount -->
          <div class="mb-3">
            <label for="paymentAmount" class="form-label">Payment Amount (USD)</label>
            <input type="number" class="form-control shadow-none" id="paymentAmount" placeholder="Enter amount" value="200"  readonly>
          </div>

          <!-- Card Details -->
          <div class="mb-3">
            <label for="cardNumber" class="form-label">Card Number</label>
            <input type="text" class="form-control shadow-none" id="cardNumber" placeholder="Enter card number" required>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="expiryDate" class="form-label">Expiry Date</label>
              <input type="date" class="form-control shadow-none" id="expiryDate" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cvv" class="form-label">CVV</label>
              <input type="text" class="form-control shadow-none" id="cvv" placeholder="CVV" required>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary shadow-none">Pay Now</button>
      </div>
    </div>
  </div>
</div>


        <!-- Maldives Package -->
        <div class="col-md-4 mb-4 package-card maldives" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="100">
            <div class="card">
                <img src="pictures/sea of star.jpg" class="card-img-top" alt="Kayaking">
                <div class="card-body">
                    <h5 class="card-title">Sea of Stars</h5>
                    <h6 class="card-title">Location: Maldives</h6>
                    <p class="card-text">From: $125</p>
                          <!-- Book Now button updated to trigger the modal -->
      <button type="button" class="btn btn-dark shadow-none" data-bs-toggle="modal" data-bs-target="#paymentModal3" >
        Book Now
                </div>
            </div>
        </div>
     <!-- payment form -->
<div class="modal fade" id="paymentModal3" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <i class="bi bi-credit-card-fill fs-3 me-2"></i> 
        <h5 class="modal-title" id="paymentModalLabel">Package Activity Payment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <!-- Package Name -->
          <div class="mb-3">
            <label for="packageName" class="form-label">Package Name</label>
            <input type="text" class="form-control shadow-none" id="packageName" placeholder="Enter package name" value="Chamarel Waterfall" readonly>
          </div>

          <!-- Payment Amount -->
          <div class="mb-3">
            <label for="paymentAmount" class="form-label">Payment Amount (USD)</label>
            <input type="number" class="form-control shadow-none" id="paymentAmount" placeholder="Enter amount" value="200"  readonly>
          </div>

          <!-- Card Details -->
          <div class="mb-3">
            <label for="cardNumber" class="form-label">Card Number</label>
            <input type="text" class="form-control shadow-none" id="cardNumber" placeholder="Enter card number" required>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="expiryDate" class="form-label">Expiry Date</label>
              <input type="date" class="form-control shadow-none" id="expiryDate" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cvv" class="form-label">CVV</label>
              <input type="text" class="form-control shadow-none" id="cvv" placeholder="CVV" required>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary shadow-none">Pay Now</button>
      </div>
    </div>
  </div>
</div>


        <!-- Madagascar Package -->
        <div class="col-md-4 mb-4 package-card madagascar">
            <div class="card">
                <img src="pictures/Anda.jpg" class="card-img-top" alt="Andasibe National Park">
                <div class="card-body">
                    <h5 class="card-title">Andasibe-Mantadia National Park</h5>
                    <h6 class="card-title">Location: Madagascar</h6>
                    <p class="card-text">From: $1050</p>
              <!-- Book Now button updated to trigger the modal -->
              <button type="button" class="btn btn-dark shadow-none" data-bs-toggle="modal" data-bs-target="#paymentModal4" >
        Book Now
                </div>
            </div>
        </div>
         <!-- payment form -->
<div class="modal fade" id="paymentModal4" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <i class="bi bi-credit-card-fill fs-3 me-2"></i> 
        <h5 class="modal-title" id="paymentModalLabel">Package Activity Payment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <!-- Package Name -->
          <div class="mb-3">
            <label for="packageName" class="form-label">Package Name</label>
            <input type="text" class="form-control shadow-none" id="packageName" placeholder="Enter package name" value="Chamarel Waterfall" readonly>
          </div>

          <!-- Payment Amount -->
          <div class="mb-3">
            <label for="paymentAmount" class="form-label">Payment Amount (USD)</label>
            <input type="number" class="form-control shadow-none" id="paymentAmount" placeholder="Enter amount" value="200"  readonly>
          </div>

          <!-- Card Details -->
          <div class="mb-3">
            <label for="cardNumber" class="form-label">Card Number</label>
            <input type="text" class="form-control shadow-none" id="cardNumber" placeholder="Enter card number" required>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="expiryDate" class="form-label">Expiry Date</label>
              <input type="date" class="form-control shadow-none" id="expiryDate" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cvv" class="form-label">CVV</label>
              <input type="text" class="form-control shadow-none" id="cvv" placeholder="CVV" required>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary shadow-none">Pay Now</button>
      </div>
    </div>
  </div>
</div>


        <!-- Reunion Package -->
        <div class="col-md-4 mb-4 package-card reunion ">
            <div class="card">
                <img src="pictures/49.avif0.avif" class="card-img-top" alt="La Vallée des Couleurs">
                <div class="card-body">
                    <h5 class="card-title">
                      Piton de la Fournaise Volcano off trail Hike</h5>
                    <h6 class="card-title">Location: Reunion</h6>
                    <p class="card-text">From: $450</p>
                 <!-- Book Now button updated to trigger the modal -->
      <button type="button" class="btn btn-dark shadow-none" data-bs-toggle="modal" data-bs-target="#paymentModal5" >
        Book Now
                </div>
               
            </div>
        </div>
         <!-- payment form -->
<div class="modal fade" id="paymentModal5" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <i class="bi bi-credit-card-fill fs-3 me-2"></i> 
        <h5 class="modal-title" id="paymentModalLabel">Package Activity Payment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <!-- Package Name -->
          <div class="mb-3">
            <label for="packageName" class="form-label">Package Name</label>
            <input type="text" class="form-control shadow-none" id="packageName" placeholder="Enter package name" value="Chamarel Waterfall" readonly>
          </div>

          <!-- Payment Amount -->
          <div class="mb-3">
            <label for="paymentAmount" class="form-label">Payment Amount (USD)</label>
            <input type="number" class="form-control shadow-none" id="paymentAmount" placeholder="Enter amount" value="200"  readonly>
          </div>

          <!-- Card Details -->
          <div class="mb-3">
            <label for="cardNumber" class="form-label">Card Number</label>
            <input type="text" class="form-control shadow-none" id="cardNumber" placeholder="Enter card number" required>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="expiryDate" class="form-label">Expiry Date</label>
              <input type="date" class="form-control shadow-none" id="expiryDate" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cvv" class="form-label">CVV</label>
              <input type="text" class="form-control shadow-none" id="cvv" placeholder="CVV" required>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary shadow-none">Pay Now</button>
      </div>
    </div>
  </div>
</div>


<!-- Mauritius Package -->
<div class="col-md-4 mb-4 package-card mauritius ">
            <div class="card">
                <img src="pictures/Zipline.webp" class="card-img-top" alt="La Vallée des Couleurs">
                <div class="card-body">
                    <h5 class="card-title">
                      Zipline</h5>
                    <h6 class="card-title">Location: Mauritius</h6>
                    <p class="card-text">From: $200</p>
                 <!-- Book Now button updated to trigger the modal -->
      <button type="button" class="btn btn-dark shadow-none" data-bs-toggle="modal" data-bs-target="#paymentModal6" >
        Book Now
                </div>
            </div>
        </div>
        <!-- Mauritius Package -->
<div class="col-md-4 mb-4 package-card mauritius ">
            <div class="card">
                <img src="pictures/NEPALESE-BRIDGE.webp" class="card-img-top" alt="La Vallée des Couleurs">
                <div class="card-body">
                    <h5 class="card-title">
                      Nepalese-Bridge</h5>
                    <h6 class="card-title">Location: Mauritius</h6>
                    <p class="card-text">From: $225</p>
                 <!-- Book Now button updated to trigger the modal -->
      <button type="button" class="btn btn-dark shadow-none" data-bs-toggle="modal" data-bs-target="#paymentModal7" >
        Book Now
                </div>
            </div>
        </div>

               <!-- Mauritius Package -->
<div class="col-md-4 mb-4 package-card mauritius ">
            <div class="card">
                <img src="pictures/Dream-Trip.webp" class="card-img-top" alt="La Vallée des Couleurs">
                <div class="card-body">
                    <h5 class="card-title">
                      Wildlife Safari Trip</h5>
                    <h6 class="card-title">Location: Mauritius</h6>
                    <p class="card-text">From: $125</p>
                 <!-- Book Now button updated to trigger the modal -->
      <button type="button" class="btn btn-dark shadow-none" data-bs-toggle="modal" data-bs-target="#paymentModal8" >
        Book Now
                </div>
            </div>
        </div>
                       <!-- Mauritius Package -->
<div class="col-md-4 mb-4 package-card mauritius ">
            <div class="card">
                <img src="pictures/PRIVATE.webp" class="card-img-top" alt="La Vallée des Couleurs">
                <div class="card-body">
                    <h5 class="card-title">
                      Private 4X4 Tour</h5>
                    <h6 class="card-title">Location: Mauritius</h6>
                    <p class="card-text">From: $200</p>
                 <!-- Book Now button updated to trigger the modal -->
      <button type="button" class="btn btn-dark shadow-none" data-bs-toggle="modal" data-bs-target="#paymentModal9" >
        Book Now
                </div>
             
            </div>
        </div>
           <!-- Mauritius Package -->
<div class="col-md-4 mb-4 package-card mauritius ">
            <div class="card">
                <img src="pictures/bic.webp" class="card-img-top" alt="La Vallée des Couleurs">
                <div class="card-body">
                    <h5 class="card-title">
                      Bicycle Zipline</h5>
                    <h6 class="card-title">Location: Mauritius</h6>
                    <p class="card-text">From: $250</p>
                 <!-- Book Now button updated to trigger the modal -->
      <button type="button" class="btn btn-dark shadow-none" data-bs-toggle="modal" data-bs-target="#paymentModal20" >
        Book Now
                </div>
                
            </div>
        </div>
        <!-- Rodrigues Package -->
        <div class="col-md-4 mb-4 package-card rodrigues">
            <div class="card">
                <img src="pictures/co0.jpeg" class="card-img-top" alt="Caverne Patate">
                <div class="card-body">
                    <h5 class="card-title">Ile aux coco</h5>
                    <p class="card-text">From: $125</p>
                    <button type="button" class="btn btn-dark shadow-none" data-bs-toggle="modal" data-bs-target="#paymentModal21" >
        Book Now
                </div>
            </div>
        </div>
         <!-- Maldives Package -->
         <div class="col-md-4 mb-4 package-card maldives">
            <div class="card">
                <img src="pictures/nurse.avif" class="card-img-top" alt="Kayaking">
                <div class="card-body">
                    <h5 class="card-title">Nurse Sharks,</h5>
                    <h6 class="card-title">Location: Maldives</h6>
                    <p class="card-text">From: $225</p>
                          <!-- Book Now button updated to trigger the modal -->
      <button type="button" class="btn btn-dark shadow-none" data-bs-toggle="modal" data-bs-target="#paymentModal22" >
        Book Now
                </div>
            </div>
        </div>
         <!-- Maldives Package -->
         <div class="col-md-4 mb-4 package-card maldives">
            <div class="card">
                <img src="pictures/snorkeling.avif" class="card-img-top" alt="Kayaking">
                <div class="card-body">
                    <h5 class="card-title">Snorkeling with Turtles</h5>
                    <h6 class="card-title">Location: Maldives</h6>
                    <p class="card-text">From: $205</p>
                          <!-- Book Now button updated to trigger the modal -->
      <button type="button" class="btn btn-dark shadow-none" data-bs-toggle="modal" data-bs-target="#paymentModal23" >
        Book Now
                </div>
            </div>
        </div>
          <!-- Maldives Package -->
          <div class="col-md-4 mb-4 package-card maldives">
            <div class="card">
                <img src="pictures/guide tour.avif" class="card-img-top" alt="Kayaking">
                <div class="card-body">
                    <h5 class="card-title">A Guided Tour</h5>
                    <h6 class="card-title">Location: Maldives</h6>
                    <p class="card-text">From: $110</p>
                          <!-- Book Now button updated to trigger the modal -->
      <button type="button" class="btn btn-dark shadow-none" data-bs-toggle="modal" data-bs-target="#paymentModal24" >
        Book Now
                </div>
            </div>
        </div>
         <!-- Mauritius Package -->
         <div class="col-md-4 mb-4 package-card mauritius">
            <div class="card">
                <img src="pictures/vale.jpeg" class="card-img-top" alt="Kayaking">
                <div class="card-body">
                    <h5 class="card-title">La Vallée Des Couleurs</h5>
                    <h6 class="card-title">Location: Mauritius</h6>
                    <p class="card-text">From: $210</p>
                          <!-- Book Now button updated to trigger the modal -->
      <button type="button" class="btn btn-dark shadow-none" data-bs-toggle="modal" data-bs-target="#paymentModal25" >
        Book Now
                </div>
            </div>
        </div>
             <!-- Mauritius Package -->
             <div class="col-md-4 mb-4 package-card mauritius">
            <div class="card">
                <img src="pictures/apra.jpg" class="card-img-top" alt="Kayaking">
                <div class="card-body">
                    <h5 class="card-title">Aapravasi Ghat</h5>
                    <h6 class="card-title">Location: Mauritius</h6>
                    <p class="card-text">From: $30</p>
                          <!-- Book Now button updated to trigger the modal -->
      <button type="button" class="btn btn-dark shadow-none" data-bs-toggle="modal" data-bs-target="#paymentModal26" >
        Book Now
                </div>
            </div>
        </div>
        <!-- Rodrigues Package -->
        <div class="col-md-4 mb-4 package-card rodrigues">
            <div class="card">
                <img src="pictures/Caverne-Patate.jpg" class="card-img-top" alt="Caverne Patate">
                <div class="card-body">
                <h5 class="card-title">Caverne Patate</h5>
                    <h6 class="card-title">Location: Rodrigues</h6>
                    <p class="card-text">From: $90</p>
                    <button type="button" class="btn btn-dark shadow-none" data-bs-toggle="modal" data-bs-target="#paymentModal26" >
        Book Now
                </div>
            </div>
        </div>
    </div>
</section>

<!-- for card to be same hight and size -->
<style>
.row {
    display: flex;
    flex-wrap: wrap; /* Ensure cards wrap if there's not enough space */
}

.package-card {
    display: flex;
    flex-direction: column;
}

.card {
    display: flex;
    flex-direction: column;
    height: 100%; /* Makes all cards stretch to the same height */
}

.card-body {
    flex-grow: 1; /* Ensures body content stretches as needed */
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Aligns content evenly */
}

 </style>




<script>
  // 2 based on selected island
  function filterPackages() {
    var selectedIsland = document.getElementById('islandSelector').value;// get selected Island 
    var allPackages = document.querySelectorAll('.package-card');// select All Package

    allPackages.forEach(function(package) {
        if (selectedIsland === 'all') {
            package.style.display = 'block'; // Show all packages
        } else {
            if (package.classList.contains(selectedIsland)) {
                package.style.display = 'block'; // Show selected island's packages
            } else {
                package.style.display = 'none'; // Hide other packages
            }
        }
    });
  }


// instagram pop up js 
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

<script>
  AOS.init();
</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>