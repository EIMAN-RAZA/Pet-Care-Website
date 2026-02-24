<?php
session_start();
$pageInfo = ['title' => 'Contact'];
include 'includes/header.php';
include 'includes/navbar.php';
?>

  <!-- Contact content placeholder (assuming basic structure as per index) -->
  <div class="container py-5 text-center">
      <h2 class="mb-4">Contact Us</h2>
      <p class="lead">Have questions? Reach out to us!</p>
      
      <div class="row justify-content-center">
          <div class="col-md-6">
              <form>
                  <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Name">
                  </div>
                  <div class="mb-3">
                      <input type="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="mb-3">
                      <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                  </div>
                  <button class="btn btn-primary w-100">Send Message</button>
              </form>
          </div>
      </div>
  </div>

<?php include 'includes/footer.php'; ?>
