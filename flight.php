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
        <li class="nav-item"><a class="nav-link active fw-bold m-2" aria-current="page" href="index.php">Home</a></li>
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

    <div class="container mt-5">
        <h1 class="text-center mb-4">Flight Booking</h1>

        <!-- Flight Search Form -->
        <form id="flightSearchForm" class="border p-4 shadow-sm rounded">
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label for="origin" class="form-label">Departure Airport</label>
                    <input type="text" class="form-control" id="origin" placeholder="E.g., MUR (Mauritius)" required>
                </div>
                <div class="col-md-6">
                    <label for="destination" class="form-label">Destination Airport</label>
                    <input type="text" class="form-control" id="destination" placeholder="E.g., JFK (New York)" required>
                </div>
            </div>
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label for="travelDate" class="form-label">Travel Date</label>
                    <input type="date" class="form-control" id="travelDate" required>
                </div>
                <div class="col-md-6">
                    <label for="passengers" class="form-label">Passengers</label>
                    <input type="number" class="form-control" id="passengers" min="1" value="1" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100">Search Flights</button>
        </form>

        <!-- Flight Results Section -->
        <div class="mt-5">
            <h2 class="text-center mb-4">Flight Results</h2>
            <div id="flightResults" class="row g-4">
                <!-- Flight results will be displayed here -->
            </div>
        </div>
    </div>

<script>
document.getElementById("flightSearchForm").addEventListener("submit", async function (e) {
    e.preventDefault();

    // Get input values
    const origin = document.getElementById("origin").value;
    const destination = document.getElementById("destination").value;
    const travelDate = document.getElementById("travelDate").value;
    const passengers = document.getElementById("passengers").value;

    // Fetch flight data from backend API
    try {
        const response = await fetch(`/api/getFlights?origin=${origin}&destination=${destination}&date=${travelDate}&passengers=${passengers}`);
        const flights = await response.json();

        displayFlightResults(flights);
    } catch (error) {
        console.error("Error fetching flight data:", error);
    }
});

// Function to display flight results
function displayFlightResults(flights) {
    const flightResults = document.getElementById("flightResults");
    flightResults.innerHTML = ""; // Clear previous results

    if (flights.length === 0) {
        flightResults.innerHTML = "<p class='text-center'>No flights found. Please try again.</p>";
        return;
    }

    flights.forEach((flight) => {
        const flightCard = `
            <div class="col-md-4">
                <div class="card border-primary">
                    <div class="card-body">
                        <h5 class="card-title">${flight.airline}</h5>
                        <p class="card-text">
                            Departure: ${flight.departure} <br>
                            Arrival: ${flight.arrival} <br>
                            Duration: ${flight.duration} <br>
                            Price: <strong>$${flight.price}</strong>
                        </p>
                        <a href="#" class="btn btn-primary w-100">Book Now</a>
                    </div>
                </div>
            </div>
        `;
        flightResults.innerHTML += flightCard;
    });
}
</script>


<br>
<br>
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
        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#entebbe">Entebbe</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#kampala">Kampala</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#jinja">Jinja</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#murchison">Murchison</button>
        </li>
    </ul>

    <!-- Listings -->
    <div class="tab-content" id="tabContent">
        <div class="tab-pane fade show active" id="all">
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

                <!-- Card 2 -->
                <div class="col">
                    <div class="card h-100 flex-row">
                        <img src="https://via.placeholder.com/150" class="card-img-left" style="width: 150px;" alt="Kampala Nile Resort">
                        <div class="card-body">
                            <h5 class="card-title">Kampala Nile Resort</h5>
                            <p class="card-text">Standard Room &middot; 1 extra-large double bed &middot; Breakfast included &middot; 1 night, 2 adults</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                                <span class="fw-bold">US$150 / night</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col">
                    <div class="card h-100 flex-row">
                        <img src="https://via.placeholder.com/150" class="card-img-left" style="width: 150px;" alt="Lemala Wildwaters Lodge">
                        <div class="card-body">
                            <h5 class="card-title">Lemala Wildwaters Lodge</h5>
                            <p class="card-text">Standard Suite &middot; 1 extra-large double bed &middot; All meals included &middot; 1 night, 2 adults</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                                <span class="fw-bold">US$702 / night</span>
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

    <!-- Pagination -->
    <nav class="mt-4">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">&laquo;</a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">&raquo;</a>
            </li>
        </ul>
    </nav>
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