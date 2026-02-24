<?php
session_start();
require_once 'config/db.php';
$pageInfo = ['title' => 'Adopt', 'body_class' => 'bg-dark text-light'];
include 'includes/header.php';
include 'includes/navbar.php';

// Fetch pets
$sql = "SELECT * FROM pets";
$result = $conn->query($sql);
?>

  <!-- Adopt Section -->
  <section class="container py-5">
    <h2 class="text-center mb-4 text-warning">Adopt a Friend</h2>
    <div class="row g-4">
      
      <?php
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              ?>
              <!-- Dynamic Pet Card -->
              <div class="col-md-3">
                <div class="card bg-secondary text-light shadow h-100">
                  <img src="<?php echo htmlspecialchars($row['image_path']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($row['name']); ?>" style="height: 200px; object-fit: cover;">
                  <div class="card-body text-center">
                    <h5 class="card-title"><?php echo htmlspecialchars($row['name']); ?></h5>
                    <p><?php echo htmlspecialchars($row['breed']); ?> • <?php echo htmlspecialchars($row['age']); ?></p>
                    
                    <form action="actions/adopt_action.php" method="POST">
                        <?php if(isset($_SESSION['user_id'])): ?>
                            <input type="hidden" name="pet_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" class="btn btn-warning">Adopt Now</button>
                        <?php else: ?>
                            <a href="login.php" class="btn btn-warning">Login to Adopt</a>
                        <?php endif; ?>
                    </form>
                  </div>
                </div>
              </div>
              <?php
          }
      } else {
          echo "<p class='text-center'>No pets available for adoption right now.</p>";
      }
      ?>

    </div>
  </section>

<?php include 'includes/footer.php'; ?>
