<?php
session_start();
$pageInfo = ['title' => 'About'];
include 'includes/header.php';
include 'includes/navbar.php';
?>

  <div class="container py-5 text-center">
      <h1>About PetCare</h1>
      <p class="lead mt-3">We connect loving families with pets in need of a home.</p>
      <hr class="w-50 mx-auto my-4">
      <p>PetCare was founded in 2025 by Eiman with the mission to ensure every pet finds a loving forever home. We provide resources, adoption services, and care guides for new pet owners.</p>
  </div>

<?php include 'includes/footer.php'; ?>
