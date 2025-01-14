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

<!-- Rental Car Section -->
<section class="rental-section py-5 mt-4">
  <div class="container">
    <h2 class="text-center mb-4 fw-bold">Rent a Car from Your Desired Island</h2>
    <p class="text-center mb-4">Explore the Indian Ocean islands with ease by selecting and renting a car tailored to your needs!</p>
    
    <!-- Dropdown to Select Island -->
    <div class="mb-4 text-center">
      <select class="form-select w-50 mx-auto shadow-none" id="islandSelector" onchange="filterCarsByIsland()">
        <option value="all">Select an Island</option>
        <option value="mauritius">Mauritius</option>
        <option value="seychelles">Seychelles</option>
        <option value="madagascar">Madagascar</option>
        <option value="reunion">Reunion</option>
        <option value="maldives">Maldives</option>
        <option value="rodrigues">Rodrigues</option>
      </select>
    </div>
    
    <!-- Car Listings -->
    <div class="row" id="carList">
      <!-- Mauritius Cars1 -->
      <div class="col-md-4 island-car mauritius">
        <div class="card shadow-sm">
          <img src="pictures/Toyota-Yaris-Hybrid-X-Jbadal-6.jpeg" alt="Car in Mauritius" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Toyota Yaris</h5>
            <p class="card-text">Compact and efficient for city and coastal drives in Mauritius.</p>
            <p class="fw-bold">$40/day</p>
            <a href="rentnow.php"class="btn btn-primary w-100 shadow-non">
  Rent Now
</a>
          </div>
        </div>
      </div>
 
          <!-- Mauritius Cars2 -->
          <div class="col-md-4 island-car mauritius">
        <div class="card shadow-sm">
          <img src="pictures/Alto.jpg" alt="Car in Mauritius" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Suzuki Alto</h5>
            <p class="card-text">Compact and efficient for city and coastal drives in Mauritius.</p>
            <p class="fw-bold">$40/day</p>
            <a href="rentnow.php"class="btn btn-primary w-100 shadow-non">
  Rent Now
</a>
    
          </div>
        </div>
      </div>
          <!-- Mauritius Cars3 -->
          <div class="col-md-4 island-car mauritius">
        <div class="card shadow-sm">
          <img src="pictures/k10.jpg" alt="Car in Mauritius" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Suzuki K10</h5>
            <p class="card-text">Compact and efficient for city and coastal drives in Mauritius.</p>
            <p class="fw-bold">$40/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
          <!--Maldives Cars-->  
     <div class="col-md-4 island-car maldives">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
  </div>
          <!-- Mauritius Cars4 -->
          <div class="col-md-4 island-car mauritius">
        <div class="card shadow-sm">
          <img src="pictures/nissan micra.jpg" alt="Car in Mauritius" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Nissan Micra </h5>
            <p class="card-text">Compact and efficient for city and coastal drives in Mauritius.</p>
            <p class="fw-bold">$40/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
          <!-- Mauritius Cars5 -->
          <div class="col-md-4 island-car mauritius">
        <div class="card shadow-sm">
          <img src="pictures/suzuki celerio.jpg" alt="Car in Mauritius" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Suzuki Celerio</h5>
            <p class="card-text">Compact and efficient for city and coastal drives in Mauritius.</p>
            <p class="fw-bold">$40/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
          <!-- Mauritius Cars6 -->
          <div class="col-md-4 island-car mauritius">
        <div class="card shadow-sm">
          <img src="pictures/vtizz.jpg" alt="Car in Mauritius" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Toyota Vitz</h5>
            <p class="card-text">Compact and efficient for city and coastal drives in Mauritius.</p>
            <p class="fw-bold">$40/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
          <!-- Mauritius Cars7 -->
          <div class="col-md-4 island-car mauritius">
        <div class="card shadow-sm">
          <img src="pictures/honda.jpg" alt="Car in Mauritius" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Honda Jazz</h5>
            <p class="card-text">Compact and efficient for city and coastal drives in Mauritius.</p>
            <p class="fw-bold">$40/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
          <!-- Mauritius Cars8 -->
          <div class="col-md-4 island-car mauritius">
        <div class="card shadow-sm">
          <img src="pictures/vtizz.jpg" alt="Car in Mauritius" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Toyota Vitz</h5>
            <p class="card-text">Compact and efficient for city and coastal drives in Mauritius.</p>
            <p class="fw-bold">$40/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
          <!-- Mauritius Cars9 -->
          <div class="col-md-4 island-car mauritius">
        <div class="card shadow-sm">
          <img src="pictures/swift.jpg" alt="Car in Mauritius" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Suzuki Swift</h5>
            <p class="card-text">Compact and efficient for city and coastal drives in Mauritius.</p>
            <p class="fw-bold">$40/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
          <!-- Mauritius Cars10 -->
          <div class="col-md-4 island-car mauritius">
        <div class="card shadow-sm">
          <img src="pictures/kia picanto.jpg" alt="Car in Mauritius" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Kia Picanto </h5>
            <p class="card-text">Compact and efficient for city and coastal drives in Mauritius.</p>
            <p class="fw-bold">$40/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
          <!-- Mauritius Cars11 -->
          <div class="col-md-4 island-car mauritius">
        <div class="card shadow-sm">
          <img src="pictures/kia picanto.jpg" alt="Car in Mauritius" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Kia Picanto </h5>
            <p class="card-text">Compact and efficient for city and coastal drives in Mauritius.</p>
            <p class="fw-bold">$40/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
          <!-- Mauritius Cars12 -->
          <div class="col-md-4 island-car mauritius">
        <div class="card shadow-sm">
          <img src="pictures/108.jpg" alt="Car in Mauritius" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Peugeot 108</h5>
            <p class="card-text">Compact and efficient for city and coastal drives in Mauritius.</p>
            <p class="fw-bold">$40/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
          <!-- Mauritius Cars13 -->
          <div class="col-md-4 island-car mauritius">
        <div class="card shadow-sm">
          <img src="pictures/Grand i10.jpg" alt="Car in Mauritius" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Hyundai Grand i10</h5>
            <p class="card-text">Compact and efficient for city and coastal drives in Mauritius.</p>
            <p class="fw-bold">$40/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
          <!-- Mauritius Cars14 -->
          <div class="col-md-4 island-car mauritius">
        <div class="card shadow-sm">
          <img src="pictures/nissan micra.jpg" alt="Car in Mauritius" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Nissan Micra</h5>
            <p class="card-text">Compact and efficient for city and coastal drives in Mauritius.</p>
            <p class="fw-bold">$40/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
          <!-- Mauritius Cars15 -->
          <div class="col-md-4 island-car mauritius">
        <div class="card shadow-sm">
          <img src="pictures/Alto.jpg" alt="Car in Mauritius" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Suzuki Alto</h5>
            <p class="card-text">Compact and efficient for city and coastal drives in Mauritius.</p>
            <p class="fw-bold">$40/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
          <!-- Mauritius Cars16 -->
          <div class="col-md-4 island-car mauritius">
        <div class="card shadow-sm">
          <img src="pictures/dat go.jpg" alt="Car in Mauritius" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Datsun Go</h5>
            <p class="card-text">Compact and efficient for city and coastal drives in Mauritius.</p>
            <p class="fw-bold">$40/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
          <!-- Mauritius Cars 17-->
          <div class="col-md-4 island-car mauritius">
        <div class="card shadow-sm">
          <img src="pictures/ii10.jpg" alt="Car in Mauritius" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Hyundai i10</h5>
            <p class="card-text">Compact and efficient for city and coastal drives in Mauritius.</p>
            <p class="fw-bold">$40/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
          <!-- Mauritius Cars18 -->
          <div class="col-md-4 island-car mauritius">
        <div class="card shadow-sm">
          <img src="pictures/bezza.jpg" alt="Car in Mauritius" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Perodua Bezza</h5>
            <p class="card-text">Compact and efficient for city and coastal drives in Mauritius.</p>
            <p class="fw-bold">$40/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
          <!-- Mauritius Cars19 -->
          <div class="col-md-4 island-car mauritius">
        <div class="card shadow-sm">
          <img src="pictures/c1.jpg" alt="Car in Mauritius" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Citroen C1 </h5>
            <p class="card-text">Compact and efficient for city and coastal drives in Mauritius.</p>
            <p class="fw-bold">$40/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
          <!-- Mauritius Cars20 -->
          <div class="col-md-4 island-car mauritius">
        <div class="card shadow-sm">
          <img src="pictures/presso.jpg" alt="Car in Mauritius" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Suzuki S-Presso</h5>
            <p class="card-text">Compact and efficient for city and coastal drives in Mauritius.</p>
            <p class="fw-bold">$40/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
           <!-- Mauritius Cars21 -->
           <div class="col-md-4 island-car mauritius">
        <div class="card shadow-sm">
          <img src="pictures/nissan almera.jpg" alt="Car in Mauritius" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Nissan Almera </h5>
            <p class="card-text">Compact and efficient for city and coastal drives in Mauritius.</p>
            <p class="fw-bold">$40/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
      <!-- Seychelles Cars1 -->
      <div class="col-md-4 island-car seychelles">
        <div class="card shadow-sm">
          <img src="pictures/creta_1024x1024.webp" alt="Car in Seychelles" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Hyundai Creta</h5>
            <p class="card-text">Ideal for exploring the hills and beaches of Seychelles.</p>
            <p class="fw-bold">$55/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
       <!-- Seychelles Cars2 -->
       <div class="col-md-4 island-car seychelles">
        <div class="card shadow-sm">
          <img src="pictures/creta_1024x1024.webp" alt="Car in Seychelles" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Hyundai Creta</h5>
            <p class="card-text">Ideal for exploring the hills and beaches of Seychelles.</p>
            <p class="fw-bold">$55/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
       <!-- Seychelles Cars3 -->
       <div class="col-md-4 island-car seychelles">
        <div class="card shadow-sm">
          <img src="pictures/creta_1024x1024.webp" alt="Car in Seychelles" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Hyundai Creta</h5>
            <p class="card-text">Ideal for exploring the hills and beaches of Seychelles.</p>
            <p class="fw-bold">$55/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
       <!-- Seychelles Cars4 -->
       <div class="col-md-4 island-car seychelles">
        <div class="card shadow-sm">
          <img src="pictures/creta_1024x1024.webp" alt="Car in Seychelles" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Hyundai Creta</h5>
            <p class="card-text">Ideal for exploring the hills and beaches of Seychelles.</p>
            <p class="fw-bold">$55/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
       <!-- Seychelles Cars5 -->
       <div class="col-md-4 island-car seychelles">
        <div class="card shadow-sm">
          <img src="pictures/creta_1024x1024.webp" alt="Car in Seychelles" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Hyundai Creta</h5>
            <p class="card-text">Ideal for exploring the hills and beaches of Seychelles.</p>
            <p class="fw-bold">$55/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
       <!-- Seychelles Cars6 -->
       <div class="col-md-4 island-car seychelles">
        <div class="card shadow-sm">
          <img src="pictures/creta_1024x1024.webp" alt="Car in Seychelles" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Hyundai Creta</h5>
            <p class="card-text">Ideal for exploring the hills and beaches of Seychelles.</p>
            <p class="fw-bold">$55/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
       <!-- Seychelles Cars7 -->
       <div class="col-md-4 island-car seychelles">
        <div class="card shadow-sm">
          <img src="pictures/creta_1024x1024.webp" alt="Car in Seychelles" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Hyundai Creta</h5>
            <p class="card-text">Ideal for exploring the hills and beaches of Seychelles.</p>
            <p class="fw-bold">$55/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
       <!-- Seychelles Cars8 -->
       <div class="col-md-4 island-car seychelles">
        <div class="card shadow-sm">
          <img src="pictures/creta_1024x1024.webp" alt="Car in Seychelles" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Hyundai Creta</h5>
            <p class="card-text">Ideal for exploring the hills and beaches of Seychelles.</p>
            <p class="fw-bold">$55/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
       <!-- Seychelles Cars9 -->
       <div class="col-md-4 island-car seychelles">
        <div class="card shadow-sm">
          <img src="pictures/creta_1024x1024.webp" alt="Car in Seychelles" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Hyundai Creta</h5>
            <p class="card-text">Ideal for exploring the hills and beaches of Seychelles.</p>
            <p class="fw-bold">$55/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
       <!-- Seychelles Cars10 -->
       <div class="col-md-4 island-car seychelles">
        <div class="card shadow-sm">
          <img src="pictures/creta_1024x1024.webp" alt="Car in Seychelles" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Hyundai Creta</h5>
            <p class="card-text">Ideal for exploring the hills and beaches of Seychelles.</p>
            <p class="fw-bold">$55/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
       <!-- Seychelles Cars11 -->
       <div class="col-md-4 island-car seychelles">
        <div class="card shadow-sm">
          <img src="pictures/creta_1024x1024.webp" alt="Car in Seychelles" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Hyundai Creta</h5>
            <p class="card-text">Ideal for exploring the hills and beaches of Seychelles.</p>
            <p class="fw-bold">$55/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
       <!-- Seychelles Cars12 -->
       <div class="col-md-4 island-car seychelles">
        <div class="card shadow-sm">
          <img src="pictures/creta_1024x1024.webp" alt="Car in Seychelles" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Hyundai Creta</h5>
            <p class="card-text">Ideal for exploring the hills and beaches of Seychelles.</p>
            <p class="fw-bold">$55/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
       <!-- Seychelles Cars13 -->
       <div class="col-md-4 island-car seychelles">
        <div class="card shadow-sm">
          <img src="pictures/creta_1024x1024.webp" alt="Car in Seychelles" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Hyundai Creta</h5>
            <p class="card-text">Ideal for exploring the hills and beaches of Seychelles.</p>
            <p class="fw-bold">$55/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
       <!-- Seychelles Cars14 -->
       <div class="col-md-4 island-car seychelles">
        <div class="card shadow-sm">
          <img src="pictures/creta_1024x1024.webp" alt="Car in Seychelles" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Hyundai Creta</h5>
            <p class="card-text">Ideal for exploring the hills and beaches of Seychelles.</p>
            <p class="fw-bold">$55/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
       <!-- Seychelles Cars15 -->
       <div class="col-md-4 island-car seychelles">
        <div class="card shadow-sm">
          <img src="pictures/creta_1024x1024.webp" alt="Car in Seychelles" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Hyundai Creta</h5>
            <p class="card-text">Ideal for exploring the hills and beaches of Seychelles.</p>
            <p class="fw-bold">$55/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
       <!-- Seychelles Cars16 -->
       <div class="col-md-4 island-car seychelles">
        <div class="card shadow-sm">
          <img src="pictures/creta_1024x1024.webp" alt="Car in Seychelles" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Hyundai Creta</h5>
            <p class="card-text">Ideal for exploring the hills and beaches of Seychelles.</p>
            <p class="fw-bold">$55/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
       <!-- Seychelles Cars17 -->
       <div class="col-md-4 island-car seychelles">
        <div class="card shadow-sm">
          <img src="pictures/creta_1024x1024.webp" alt="Car in Seychelles" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Hyundai Creta</h5>
            <p class="card-text">Ideal for exploring the hills and beaches of Seychelles.</p>
            <p class="fw-bold">$55/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
       <!-- Seychelles Cars18 -->
       <div class="col-md-4 island-car seychelles">
        <div class="card shadow-sm">
          <img src="pictures/creta_1024x1024.webp" alt="Car in Seychelles" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Hyundai Creta</h5>
            <p class="card-text">Ideal for exploring the hills and beaches of Seychelles.</p>
            <p class="fw-bold">$55/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
      
      <!-- Madagascar Cars1 -->
      <div class="col-md-4 island-car madagascar">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
        <!-- Madagascar Cars2 -->
        <div class="col-md-4 island-car madagascar">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
        <!-- Madagascar Cars3 -->
        <div class="col-md-4 island-car madagascar">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
        <!-- Madagascar Cars4 -->
        <div class="col-md-4 island-car madagascar">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
        <!-- Madagascar Cars5 -->
        <div class="col-md-4 island-car madagascar">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
        <!-- Madagascar Cars6 -->
        <div class="col-md-4 island-car madagascar">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
        <!-- Madagascar Cars7 -->
        <div class="col-md-4 island-car madagascar">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
        <!-- Madagascar Cars8 -->
        <div class="col-md-4 island-car madagascar">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
        <!-- Madagascar Cars9 -->
        <div class="col-md-4 island-car madagascar">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
        <!-- Madagascar Cars10 -->
        <div class="col-md-4 island-car madagascar">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>  <!-- Madagascar Cars11 -->
      <div class="col-md-4 island-car madagascar">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
        <!-- Madagascar Cars12 -->
        <div class="col-md-4 island-car madagascar">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
        <!-- Madagascar Cars13 -->
        <div class="col-md-4 island-car madagascar">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
        <!-- Madagascar Cars14 -->
        <div class="col-md-4 island-car madagascar">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
        <!-- Madagascar Cars15 -->
        <div class="col-md-4 island-car madagascar">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
          <!--Maldives Cars-->  
     <div class="col-md-4 island-car maldives">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
  </div>
         <!--Maldives Cars2-->  
         <div class="col-md-4 island-car maldives">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
  </div>
         <!--Maldives Cars3-->  
         <div class="col-md-4 island-car maldives">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
  </div>
         <!--Maldives Cars4-->  
         <div class="col-md-4 island-car maldives">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
  </div>
         <!--Maldives Cars5-->  
         <div class="col-md-4 island-car maldives">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
  </div>
         <!--Maldives Cars6-->  
         <div class="col-md-4 island-car maldives">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
  </div>
         <!--Maldives Cars7-->  
         <div class="col-md-4 island-car maldives">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
  </div>
         <!--Maldives Cars8-->  
         <div class="col-md-4 island-car maldives">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
  </div>
         <!--Maldives Cars9-->  
         <div class="col-md-4 island-car maldives">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
  </div>
         <!--Maldives Cars10-->  
         <div class="col-md-4 island-car maldives">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
  </div>
         <!--Maldives Cars11-->  
         <div class="col-md-4 island-car maldives">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
  </div>
         <!--Maldives Cars12-->  
         <div class="col-md-4 island-car maldives">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
  </div>


      <!--Reunion Cars-->
      <div class="col-md-4 island-car reunion ">
        <div class="card shadow-sm">
          <img src="pictures/INKAS-Toyota-Land-Cruiser-76-Expedition-Sepc.jpg" alt="Car in Madagascar" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title">Land Cruiser</h5>
            <p class="card-text">Perfect for rugged terrains and off-road adventures in Madagascar.</p>
            <p class="fw-bold">$70/day</p>
            <button class="btn btn-primary w-100 shadow-none">Rent Now</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  function filterCarsByIsland() {
    const selectedIsland = document.getElementById('islandSelector').value;
    const carCards = document.querySelectorAll('.island-car');

    carCards.forEach((card) => {
      if (selectedIsland === 'all' || card.classList.contains(selectedIsland)) {
        card.style.display = 'block';
      } else {
        card.style.display = 'none';
      }
    });
  }
</script>

<!-- Add this CSS to style the section -->
<style>
  .rental-section {
    background-color: #f8f9fa;
    border-top: 1px solid #ddd;
  }
  .card {
    margin-bottom: 20px;
  }
</style>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

