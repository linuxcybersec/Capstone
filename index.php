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
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand h-font" href="index.php">Tropic Dodo</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-5 mb-lg-0">
        <li class="nav-item"><a class="nav-link active fw-bold m-2" aria-current="page" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link fw-bold m-2" href="#">About us</a></li>
        <li class="nav-item"><a class="nav-link fw-bold m-2" href="#">Packages</a></li>
        <li class="nav-item"><a class="nav-link fw-bold m-2" href="#">Contact us</a></li>
        <li class="nav-item"><a class="nav-link fw-bold m-2" href="flight.php">Flights</a></li>
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
<p class="text-center fw-bold">Find Your Paradies</p>
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
  <br>
  <br>
     
     <!---Text section for best rated hotel -->
     <h3 class="text-center fw-bold">Best Rated Hotels</h3>
<br>
<br>

<div class="container my-5">
    <!-- Navigation Tabs -->
    <ul class="nav nav-pills mb-3" id="tabs">
        <li class="nav-item">
            <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#all">All</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#recommended">Recommended</button>
        </li>
    </ul>

    <!-- Listings -->
    <div class="tab-content" id="tabContent">
        <div class="tab-pane fade show active" id="all">
            <div class="row row-cols-1 g-4">
                <!-- Card 1 -->
                <div class="col">
                    <div class="card h-100 flex-row">
                        <img src="pictures/umbrella-pool-tourist-color-ko.jpg" class="card-img-left" style="width: 150px;" alt="Horizon Entebbe">
                        <div class="card-body">
                            <h5 class="card-title">LUX* Grand Gaube Resort & Villas</h5>
                            <p class="card-text">Situated on a beach in northern Mauritius, LUX* Grand Gaube is a luxury resort featuring a swimming pool overlooking the Indian Ocean.</p>
                            <a href="https://maps.app.goo.gl/bijL82DZgeRmRPZC6" target="_blank" class="text-decoration-none">&middot; View on Google Maps</a>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                                <span class="fw-bold">US$165 / night</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col">
                    <div class="card h-100 flex-row">
                        <img src="pictures/anahita hotel.webp" class="card-img-left" style="width: 150px;" alt="Kampala Nile Resort">
                        <div class="card-body">
                            <h5 class="card-title">Anahita Golf & Spa Resort</h5>
                            <p class="card-text">Standard Room &middot; 1 extra-large double bed &middot; Breakfast included &middot; 1 night, 2 adults</p>
                            <a href="https://maps.app.goo.gl/tYE79iR1XFcXCNRo9" target="_blank" class="text-decoration-none">&middot; View on Google Maps</a>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                                <span class="fw-bold">US$250 / night</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col">
                    <div class="card h-100 flex-row">
                        <img src="pictures/solanas hotel.webp" class="card-img-left" style="width: 150px;" alt="Lemala Wildwaters Lodge">
                        <div class="card-body">
                            <h5 class="card-title">Solanas Beach Resort Mauritius</h5>
                            <p class="card-text">Nestled amongst palm trees and offering stunning sea views, Solana Beach is located in Belle Mare. It features an outdoor pool, a spa and a fitness centre.</p>
                            <a href="https://maps.app.goo.gl/u8LF2m7YX5NsaffKA" target="_blank" class="text-decoration-none">&middot; View on Google Maps</a>

                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-warning"> &#9733; &#9733; &#9734; &#9734; &#9734;</span>
                                <span class="fw-bold">US$103 / night</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Card 4 -->
                <div class="col">
                    <div class="card h-100 flex-row">
                        <img src="pictures/maldive hotel 1.webp" class="card-img-left" style="width: 150px;" alt="Lemala Wildwaters Lodge">
                        <div class="card-body">
                            <h5 class="card-title">Radisson Blu Resort Maldives with 50 percent off on Sea Plane round trip 03 nights.</h5>
                            <p class="card-text">Radisson Blu Resort Maldives with 50 percent off on Sea Plane round trip 03 nights & above has a garden, shared lounge, a restaurant and bar in Fenfushi.</p>
                            <p>Show on map</P>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-warning"> &#9733; &#9733; &#9733; &#9733; &#9733;</span>
                                <span class="fw-bold">US$103 / night</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Card 5 -->
                <div class="col">
                    <div class="card h-100 flex-row">
                        <img src="pictures/maldive hotel 2.webp" class="card-img-left" style="width: 150px;" alt="Lemala Wildwaters Lodge">
                        <div class="card-body">
                            <h5 class="card-title">Solanas Beach Resort Mauritius</h5>
                            <p class="card-text">Nestled amongst palm trees and offering stunning sea views, Solana Beach is located in Belle Mare. It features an outdoor pool, a spa and a fitness centre.</p>
                            <p>&middot; 2.2 km from centre </p>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-warning"> &#9733; &#9733; &#9733; &#9733; &#9734;</span>
                                <span class="fw-bold">US$103 / night</span>
                            </div>
                        </div>
                    </div>
                </div>
                

                <!-- Card 4 -->
                <div class="col">
                    <div class="card h-100 flex-row">
                        <img src="https://via.placeholder.com/150" class="card-img-left" style="width: 150px;" alt="Chobe Safari Lodge">
                        <div class="card-body">
                            <h5 class="card-title">Chobe Safari Lodge</h5>
                            <p class="card-text">King Room &middot; 1 double bed &middot; All meals included &middot; 1 night, 2 adults</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-warning">&#9733; &#9733; &#9733; &#9734; &#9734;</span>
                                <span class="fw-bold">US$315 / night</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>



<!---Recommended section---->
    <div class="tab-content" id="tabContent">
        <div class="tab-pane fade show active" id="recommended">
            <div class="row row-cols-1 g-4">
                <!-- Card 1 -->
                <div class="col">
                    <div class="card h-100 flex-row">
                        <img src="https://via.placeholder.com/150" class="card-img-left" style="width: 150px;" alt="Horizon Entebbe">
                        <div class="card-body">
                            <h5 class="card-title">Horizon Entebbe</h5>
                            <p class="card-text">Standard Double Room &middot; 1 large double bed &middot; Breakfast included &middot; 1 night, 2 adults</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                                <span class="fw-bold">US$170 / night</span>
                            </div>
                        </div>
                    </div>
                </div>



  
 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // JavaScript to activate the tab on click
    document.querySelectorAll('.nav-link').forEach(button => {
        button.addEventListener('click', () => {
            document.querySelectorAll('.nav-link').forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
        });
    });
</script>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>