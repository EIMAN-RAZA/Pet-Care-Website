<?php
session_start();
$pageInfo = ['title' => 'Home'];
include 'includes/header.php';
include 'includes/navbar.php';
?>

  <header class="hero d-flex align-items-center justify-content-center text-center text-light">
    <div>
      <h1 class="fw-bold display-5">Find, Adopt & Love — Every Pet Deserves a Home</h1>
      <p class="lead">Your trusted partner in pet adoption and care guidance.</p>
      <a href="adopt.php" class="btn btn-warning mt-3 px-4">Start Exploring</a>
    </div>
  </header>

  <section class="container text-center my-5">
    <h2 class="text-light mb-4">Popular Companions</h2>
    <div class="row g-4">
      <div class="col-md-3"><img src="images/dog.png" class="img-fluid rounded shadow"></div>
      <div class="col-md-3"><img src="images/cat1.png" class="img-fluid rounded shadow"></div>
      <div class="col-md-3"><img src="images/parrot.png" class="img-fluid rounded shadow"></div>
      <div class="col-md-3"><img src="images/rabbit.png" class="img-fluid rounded shadow"></div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
