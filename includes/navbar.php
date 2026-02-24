  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-black shadow">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="images/logo.png" alt="PetCare Logo" width="40" class="me-2">
        PetCare
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="adopt.php" class="nav-link">Adopt</a></li>
          <li class="nav-item"><a href="care.php" class="nav-link">Care Guide</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          
          <?php if (isset($_SESSION['user_id'])): ?>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                  Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>
               </a>
               <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="profile.php">My Profile</a></li>
                 <li><a class="dropdown-item" href="actions/logout.php">Logout</a></li>
               </ul>
            </li>
          <?php else: ?>
            <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
            <li class="nav-item">
              <a href="register.php" class="nav-link btn btn-primary text-light px-3 py-1 ms-2">Register</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
