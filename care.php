<?php
session_start();
$pageInfo = ['title' => 'Care Guide'];
include 'includes/header.php';
include 'includes/navbar.php';
?>

  <div class="container py-5">
      <h2 class="text-center mb-5">Pet Care Guides</h2>
      <div class="row g-4">
          <div class="col-md-6">
              <div class="card p-3 shadow-sm">
                  <h5>🐶 Dog Care</h5>
                  <p>Dogs need daily exercise, a balanced diet, and regular vet checkups. Make sure to groom them regularly.</p>
              </div>
          </div>
          <div class="col-md-6">
              <div class="card p-3 shadow-sm">
                  <h5>🐱 Cat Care</h5>
                  <p>Cats are independent but need affection. Keep their litter box clean and provide scratching posts.</p>
              </div>
          </div>
          <div class="col-md-6">
              <div class="card p-3 shadow-sm">
                  <h5>🦜 Bird Care</h5>
                  <p>Birds need spacious cages and social interaction. Fresh water and seeds/fruits are essential.</p>
              </div>
          </div>
           <div class="col-md-6">
              <div class="card p-3 shadow-sm">
                  <h5>🐰 Rabbit Care</h5>
                  <p>Rabbits need a lot of hay and fresh veggies. They are social animals and need plenty of space to hop.</p>
              </div>
          </div>
      </div>
  </div>

<?php include 'includes/footer.php'; ?>
