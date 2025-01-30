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
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm fixed-top">
  <div class="container-fluid"> 
    <a class="navbar-brand h-font" href="index.php">Tropic Dodo</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-5 mb-lg-0">
        <li class="nav-item"><a class="nav-link active fw-bold m-2" aria-current="page" href="index.php">Home</a></li>

        <li class="nav-item"><a class="nav-link fw-bold m-2"  href="package.php">Packages</a></li>
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
<!-- hotel 1  -->
<div class="container my-4  ">
        <!-- Hotel Title and Price -->
        <div class="row">
            <div class="col-md-8">
                <h2 class="fw-bold mt-5 ">
                  
                LUX* Grand Baie</h2>
            </div>
            <div class="col-md-4 text-md-end">
                <p class="text-muted mt-5">Total cost for your plan</p>
                <h3 class="fw-bold text-primary mt-4">Rs. 22 258</h3>
                <a href="#" class="btn btn-primary shadow-none">Reserve Now</a>
            </div>
        </div>

        <!-- Hotel Images -->
        <div class="row g-2 my-4">
            <div class="col-md-8">
                <img src="pictures/luk1.jpg" class="img-fluid rounded" alt="Main Image">
            </div>
            <div class="col-md-4">
                <div class="row g-2">
                    <div class="col-12">
                        <img src="pictures/luk.jpg" class="img-fluid rounded" alt="Small Image 1">
                    </div>
                    <div class="col-12">
                        <img src="pictures/luk2.jpg" class="img-fluid rounded" alt="Small Image 2">
                    </div>
                </div>
            </div>
        </div>

        <!-- Ratings, Reviews, and Info -->
        <div class="row">
            <div class="col-md-4">
                <h5>Ratings and reviews</h5>
                <p class="fw-bold">4.5 <span class="text-muted">| 100+ reviews</span></p>
                <p>#8 of 121 Hotels in Mauritius</p>
                <p class="text-success fw-bold">Travelers' Choice 2023</p>
                <p>
                    <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</span> Foods<br>
                    <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span> Atmosphere<br>
                    <span class="text-warning">&#9733;&#9733;&#9733;&#9734;&#9734;</span> Service
                </p>
            </div>
            <div class="col-md-4">
                <h5>Food and ambience</h5>
                <p>Local cuisine, Seafood, European, Grill, Healthy</p>
                <p class="text-muted">"Black and White for grilled fish"</p>
                <p class="text-muted">"The simply grilled fish, prawns, and lobster were cooked to perfection with an..."</p>
            </div>
            <div class="col-md-4">
                <h5>Special occasions</h5>
                <p>Romantic, Scenic View, Large groups, Bar scene</p>
                <p class="text-muted">"You could look around for the kind of place to have a romantic meal with the ..."</p>
                <p class="text-muted">"It is not the most romantic place..."</p>
            </div>
        </div>

        <!-- Location and Contact -->
        <div class="row my-4">
            <div class="col-md-8">
                <h5>Location and contact</h5>
                <p>MU, Coastal Road, Grand Baie 30510</p>
                <p> (+230) 209 2200</p>
                <p>LUX*Grand@gmail.com</p>
            </div>
            <div class="col-md-4">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.1847852553415!2d57.583014299999995!3d-20.000757799999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217dab1da78e0199%3A0x8fe7bfe84f5e6684!2sLUX*2A%20Grand%20Baie!5e0!3m2!1sen!2smu!4v1737613059425!5m2!1sen!2smu"
                    
              width="100%" height="200" class="rounded border" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <!-- line  -->
    <hr>   
<br>

<!-- hotel 2 -->
<div class="container my-4  ">
        <!-- Hotel Title and Price -->
        <div class="row">
            <div class="col-md-8">
                <h2 class="fw-bold mt-5 ">
                  
                Anahita Golf & Spa Resort Mauritius</h2>
            </div>
            <div class="col-md-4 text-md-end">
                <p class="text-muted mt-5">Total cost for your plan</p>
                <h3 class="fw-bold text-primary mt-4">Rs. 31 575</h3>
                <a href="#" class="btn btn-primary shadow-none">Reserve Now</a>
            </div>
        </div>

        <!-- Hotel Images -->
        <div class="row g-2 my-4">
            <div class="col-md-8">
                <img src="pictures/anaitaho.avif" class="img-fluid rounded" alt="Main Image">
            </div>
            <div class="col-md-4">
                <div class="row g-2">
                    <div class="col-12">
                        <img src="pictures/ani1.jpg" class="img-fluid rounded" alt="Small Image 1">
                    </div>
                    <div class="col-12">
                        <img src="pictures/ani2.jpg" class="img-fluid rounded" alt="Small Image 2">
                    </div>
                </div>
            </div>
        </div>

        <!-- Ratings, Reviews, and Info -->
        <div class="row">
            <div class="col-md-4">
                <h5>Ratings and reviews</h5>
                <p class="fw-bold">4.6 <span class="text-muted">| 100+ reviews</span></p>
                <p>#8 of 121 Hotels in Mauritius</p>
                <p class="text-success fw-bold">Travelers' Choice 2024</p>
                <p>
                    <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span> Foods<br>
                    <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span> Atmosphere<br>
                    <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span> Service
                </p>
            </div>
            <div class="col-md-4">
                <h5>Food and ambience</h5>
                <p>Local cuisine, Seafood, European, Grill, Healthy</p>
                <p class="text-muted">"Black and White for grilled fish"</p>
                <p class="text-muted">"The simply grilled fish, prawns, and lobster were cooked to perfection with an..."</p>
            </div>
            <div class="col-md-4">
                <h5>Special occasions</h5>
                <p>Romantic, Scenic View, Large groups, Bar scene</p>
                <p class="text-muted">"You could look around for the kind of place to have a romantic meal with the ..."</p>
                <p class="text-muted">"It is not the most romantic place..."</p>
            </div>
        </div>

        <!-- Location and Contact -->
        <div class="row my-4">
            <div class="col-md-8">
                <h5>Location and contact</h5>
                <p>. Anahita Private Villas. Beau Champ, 40901. Mauritius.</p>
                <p>  (+230) 402 2200</p>
                <p>   
                arjuna.papiah@anahita.mu.</p>
            </div>
            <div class="col-md-4">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7485.042752277484!2d57.78143398167063!3d-20.27867539999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217cf0667931891d%3A0xc26586f23eeb17bb!2sAnahita%20Golf%20%26%20Spa%20Resort!5e0!3m2!1sen!2smu!4v1737719917292!5m2!1sen!2smu"
                    
              width="100%" height="200" class="rounded border" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</hr>
<!-- line -->
<hr>
<br>

<!-- hotel 3 -->
<div class="container my-4  ">
        <!-- Hotel Title and Price -->
        <div class="row">
            <div class="col-md-8">
                <h2 class="fw-bold mt-5 ">
                  
                Solana Beach Mauritius</h2>
            </div>
            <div class="col-md-4 text-md-end">
                <p class="text-muted mt-5">Total cost for your plan</p>
                <h3 class="fw-bold text-primary mt-4">Rs. 22 758</h3>
                <a href="#" class="btn btn-primary shadow-none">Reserve Now</a>
            </div>
        </div>

        <!-- Hotel Images -->
        <div class="row g-2 my-4">
            <div class="col-md-8">
                <img src="pictures/solanaa.webp" class="img-fluid rounded" alt="Main Image">
            </div>
            <div class="col-md-4">
                <div class="row g-2">
                    <div class="col-12">
                        <img src="pictures/sol1.jpeg" class="img-fluid rounded" alt="Small Image 1">
                    </div>
                    <div class="col-12">
                        <img src="pictures/sola2.jpg" class="img-fluid rounded" alt="Small Image 2">
                    </div>
                </div>
            </div>
        </div>

        <!-- Ratings, Reviews, and Info -->
        <div class="row">
            <div class="col-md-4">
                <h5>Ratings and reviews</h5>
                <p class="fw-bold">4.3 <span class="text-muted">| 100+ reviews</span></p>
                <p>#8 of 121 Hotels in Mauritius</p>
                <p class="text-success fw-bold">Travelers' Choice 2024</p>
                <p>
                    <span class="text-warning">&#9733;&#9733;&#9733;&#9734;&#9734;</span> Foods<br>
                    <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</span> Atmosphere<br>
                    <span class="text-warning">&#9733;&#9733;&#9733;&#9734;&#9734;</span> Service
                </p>
            </div>
            <div class="col-md-4">
                <h5>Food and ambience</h5>
                <p>Local cuisine, Seafood, European, Grill, Healthy</p>
                <p class="text-muted">"Black and White for grilled fish"</p>
                <p class="text-muted">"The simply grilled fish, prawns, and lobster were cooked to perfection with an..."</p>
            </div>
            <div class="col-md-4">
                <h5>Special occasions</h5>
                <p>Romantic, Scenic View, Large groups, Bar scene</p>
                <p class="text-muted">"You could look around for the kind of place to have a romantic meal with the ..."</p>
                <p class="text-muted">"It is not the most romantic place..."</p>
            </div>
        </div>

        <!-- Location and Contact -->
        <div class="row my-4">
            <div class="col-md-8">
                <h5>Location and contact</h5>
                <p>Coastal Road, Belle Mare, 41518</p>
                <p>  (+230) 4027200</p>
                <p>   
                solna@hotel.mu</p>
            </div>
            <div class="col-md-4">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3744.9779136755465!2d57.76785367523366!3d-20.176645081267832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217cfb87aa1c7e45%3A0xf50ae17a4df38e7b!2sSolana%20Beach%20Mauritius!5e0!3m2!1sen!2smu!4v1737720903362!5m2!1sen!2smu" 
                    
              width="100%" height="200" class="rounded border" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

</hr>
<!-- line -->
 <hr>
 <br>
 <!-- hotel 4 -->
<div class="container my-4  ">
        <!-- Hotel Title and Price -->
        <div class="row">
            <div class="col-md-8">
                <h2 class="fw-bold mt-5 ">
                Veranda Grand Baie Mauritius 
                </h2>
            </div>
            <div class="col-md-4 text-md-end">
                <p class="text-muted mt-5">Total cost for your plan</p>
                <h3 class="fw-bold text-primary mt-4">Rs. 20 219</h3>
                <a href="#" class="btn btn-primary shadow-none">Reserve Now</a>
            </div>
        </div>

        <!-- Hotel Images -->
        <div class="row g-2 my-4">
            <div class="col-md-8">
                <img src="pictures/venda.webp" class="img-fluid rounded" alt="Main Image">
            </div>
            <div class="col-md-4">
                <div class="row g-2">
                    <div class="col-12">
                        <img src="pictures/ven1.jpeg" class="img-fluid rounded" alt="Small Image 1">
                    </div>
                    <div class="col-12">
                        <img src="pictures/ven2.jpg" class="img-fluid rounded" alt="Small Image 2">
                    </div>
                </div>
            </div>
        </div>

        <!-- Ratings, Reviews, and Info -->
        <div class="row">
            <div class="col-md-4">
                <h5>Ratings and reviews</h5>
                <p class="fw-bold">4.1 <span class="text-muted">| 100+ reviews</span></p>
                <p>#8 of 121 Hotels in Mauritius</p>
                <p class="text-success fw-bold">Travelers' Choice 2021</p>
                <p>
                    <span class="text-warning">&#9733;&#9733;&#9734;&#9734;&#9734;</span> Foods<br>
                    <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</span> Atmosphere<br>
                    <span class="text-warning">&#9733;&#9733;&#9734;&#9734;&#9734;</span> Service
                </p>
            </div>
            <div class="col-md-4">
                <h5>Food and ambience</h5>
                <p>Local cuisine, Seafood, European, Grill, Healthy</p>
                <p class="text-muted">"Black and White for grilled fish"</p>
                <p class="text-muted">"The simply grilled fish, prawns, and lobster were cooked to perfection with an..."</p>
            </div>
            <div class="col-md-4">
                <h5>Special occasions</h5>
                <p>Romantic, Scenic View, Large groups, Bar scene</p>
                <p class="text-muted">"You could look around for the kind of place to have a romantic meal with the ..."</p>
                <p class="text-muted">"It is not the most romantic place..."</p>
            </div>
        </div>

        <!-- Location and Contact -->
        <div class="row my-4">
            <div class="col-md-8">
                <h5>Location and contact</h5>
                <p>MU, Route Royale, Grand Baie 30510</p>
                <p>  (+230) 2098000</p>
                <p>   
                Veranda@hotel.mu</p>
            </div>
            <div class="col-md-4">
<iframe src="https://www.google.com/maps/embed?pb!1m18!1m12!1m3!1d3749.0023546657662!2d57.57622767522929!3d-20.00841588139764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217dab7a3f238337%3A0x4ac4271b61d50d4e!2sVeranda%20Grand%20Baie%20Hotel%20%26%20Spa!5e0!3m2!1sen!2smu!4v1737722798417!5m2!1sen!2smu"
                    
              width="100%" height="200" class="rounded border" allowfullscreen="" loading="lazy"></iframe>
            </div>
            
        </div>
    </div>
</hr>
<!-- line -->
 <hr>
 <Br>

 <!-- hotel 5 -->
<div class="container my-4  ">
        <!-- Hotel Title and Price -->
        <div class="row">
            <div class="col-md-8">
                <h2 class="fw-bold mt-5 ">
                Constance Hotel 
                </h2>
            </div>
            <div class="col-md-4 text-md-end">
                <p class="text-muted mt-5">Total cost for your plan</p>
                <h3 class="fw-bold text-primary mt-4">Rs. 19 119</h3>
                <a href="#" class="btn btn-primary shadow-none">Reserve Now</a>
            </div>
        </div>

        <!-- Hotel Images -->
        <div class="row g-2 my-4">
            <div class="col-md-8">
                <img src="pictures/constance.jpg" class="img-fluid rounded" alt="Main Image">
            </div>
            <div class="col-md-4">
                <div class="row g-2">
                    <div class="col-12">
                        <img src="pictures/cons1.jpeg" class="img-fluid rounded" alt="Small Image 1">
                    </div>
                    <div class="col-12">
                        <img src="pictures/cons2.jpeg" class="img-fluid rounded" alt="Small Image 2">
                    </div>
                </div>
            </div>
        </div>

        <!-- Ratings, Reviews, and Info -->
        <div class="row">
            <div class="col-md-4">
                <h5>Ratings and reviews</h5>
                <p class="fw-bold">4.3 <span class="text-muted">| 100+ reviews</span></p>
                <p>#8 of 121 Hotels in Mauritius</p>
                <p class="text-success fw-bold">Travelers' Choice 2021</p>
                <p>
                    <span class="text-warning">&#9733;&#9733;&#9734;&#9734;&#9734;</span> Foods<br>
                    <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</span> Atmosphere<br>
                    <span class="text-warning">&#9733;&#9733;&#9734;&#9734;&#9734;</span> Service
                </p>
            </div>
            <div class="col-md-4">
                <h5>Food and ambience</h5>
                <p>Local cuisine, Seafood, European, Grill, Healthy</p>
                <p class="text-muted">"Black and White for grilled fish"</p>
                <p class="text-muted">"The simply grilled fish, prawns, and lobster were cooked to perfection with an..."</p>
            </div>
            <div class="col-md-4">
                <h5>Special occasions</h5>
                <p>Romantic, Scenic View, Large groups, Bar scene</p>
                <p class="text-muted">"You could look around for the kind of place to have a romantic meal with the ..."</p>
                <p class="text-muted">"It is not the most romantic place..."</p>
            </div>
        </div>

        <!-- Location and Contact -->
        <div class="row my-4">
            <div class="col-md-8">
                <h5>Location and contact</h5>
                <p>MU, Central Flacq 40609</p>
                <p>  (+230) 4022777</p>
                <p>   
                Constance@hotel.mu</p>
            </div>
            <div class="col-md-4">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119762.83661629818!2d57.66652284286601!3d-20.275888023201226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217cfc7120dfcfc5%3A0x6a7298db08b19fc7!2sConstance%20Hotels%20%26%20Resorts!5e0!3m2!1sen!2smu!4v1737723557932!5m2!1sen!2smu"
                    
              width="100%" height="200" class="rounded border" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
<hr>
    <p class="text-center fw-bold">Coming Soon.....</P>
<script>
  AOS.init();
  </script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>