<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
// Using same Dark Login styling for Register as likely intended given consistency
$pageInfo = [
    'title' => 'Register', 
    'body_class' => '', 
    'custom_css' => '
    <style>
    body { background-color: #0d0d0d; color: #f8f9fa; }
    .login-card {
      background-color: #111; border: 1px solid #222;
      box-shadow: 0 0 20px rgba(255, 193, 7, 0.1);
    }
    .form-control.bg-dark {
      background-color: #1a1a1a !important; color: #f8f9fa !important; border: 1px solid #444 !important;
    }
    </style>'
];
include 'includes/header.php';
include 'includes/navbar.php';
?>

  <!-- Register Section -->
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card login-card p-4 rounded-4">
          <h3 class="text-center text-warning mb-3 fw-bold">Join PetCare</h3>
          <p class="text-center text-secondary mb-4">Create an account to start adopting</p>

          <?php if (isset($_GET['error'])): ?>
              <div class="alert alert-danger"><?php echo htmlspecialchars($_GET['error']); ?></div>
          <?php endif; ?>

          <form id="registerForm" action="actions/register_action.php" method="POST">
            <div class="mb-3">
              <label class="form-label text-light">Full Name</label>
              <input type="text" id="name" name="name" class="form-control bg-dark" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
              <label class="form-label text-light">Email Address</label>
              <input type="email" id="email" name="email" class="form-control bg-dark" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
              <label class="form-label text-light">Password</label>
              <input type="password" id="password" name="password" class="form-control bg-dark" placeholder="Create password" required>
            </div>
            <button type="submit" class="btn btn-warning w-100 py-2">Sign Up</button>
          </form>

          <p class="text-center mt-4 text-secondary">Already have an account?
            <a href="login.php" class="text-warning text-decoration-none fw-semibold">Login here</a>
          </p>
        </div>
      </div>
    </div>
  </div>

<?php include 'includes/footer.php'; ?>
