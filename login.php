<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
// Custom styling for login page included in header logic or local style block
$pageInfo = [
    'title' => 'Login', 
    'body_class' => '', 
    'custom_css' => '
    <style>
    /* 🌑 Dark login page styling */
    body {
      background-color: #0d0d0d;
      color: #f8f9fa;
    }
    .login-card {
      background-color: #111;
      border: 1px solid #222;
      box-shadow: 0 0 20px rgba(255, 193, 7, 0.1);
      transition: all 0.3s ease-in-out;
    }
    .login-card:hover {
      transform: scale(1.02);
      box-shadow: 0 0 30px rgba(255, 193, 7, 0.25);
    }
    .form-control.bg-dark {
      background-color: #1a1a1a !important;
      color: #f8f9fa !important;
      border: 1px solid #444 !important;
      transition: 0.3s;
    }
    .form-control.bg-dark:focus {
      border-color: #ffc107 !important;
      box-shadow: 0 0 10px rgba(255, 193, 7, 0.5);
    }
    .btn-warning {
      font-weight: 600;
      transition: 0.3s;
    }
    .btn-warning:hover {
      background-color: #ffcf33;
      box-shadow: 0 0 15px rgba(255, 193, 7, 0.4);
    }
    </style>'
];
include 'includes/header.php';
include 'includes/navbar.php';
?>

  <!-- Login Section -->
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card login-card p-4 rounded-4">
          <h3 class="text-center text-warning mb-3 fw-bold">Welcome Back</h3>
          <p class="text-center text-secondary mb-4">Log in to continue exploring PetCare</p>
          
          <?php if (isset($_GET['error'])): ?>
              <div class="alert alert-danger"><?php echo htmlspecialchars($_GET['error']); ?></div>
          <?php endif; ?>
          <?php if (isset($_GET['success'])): ?>
              <div class="alert alert-success"><?php echo htmlspecialchars($_GET['success']); ?></div>
          <?php endif; ?>

          <form id="loginForm" action="actions/login_action.php" method="POST">
            <div class="mb-3">
              <label class="form-label text-light">Email Address</label>
              <input type="email" id="loginEmail" name="email" class="form-control bg-dark" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
              <label class="form-label text-light">Password</label>
              <input type="password" id="loginPassword" name="password" class="form-control bg-dark" placeholder="Enter your password" required>
            </div>
            <div class="text-end mb-3">
              <a href="#" onclick="alert('Feature coming soon!'); return false;" class="text-warning small">Forgot Password?</a>
            </div>
            <button type="submit" class="btn btn-warning w-100 py-2">Login</button>
          </form>

          <p class="text-center mt-4 text-secondary">Don’t have an account?
            <a href="register.php" class="text-warning text-decoration-none fw-semibold">Register here</a>
          </p>
        </div>
      </div>
    </div>
  </div>

<?php include 'includes/footer.php'; ?>
