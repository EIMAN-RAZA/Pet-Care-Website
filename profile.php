<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
require_once 'config/db.php';
$pageInfo = ['title' => 'My Profile'];
include 'includes/header.php';
include 'includes/navbar.php';

$user_id = $_SESSION['user_id'];
$sql = "SELECT p.*, a.adoption_date, a.status as adoption_status 
        FROM adoptions a 
        JOIN pets p ON a.pet_id = p.id 
        WHERE a.user_id = $user_id 
        ORDER BY a.adoption_date DESC";
$result = $conn->query($sql);
?>

<div class="container py-5">
    <h2 class="text-warning">My Adopted Pets</h2>
    
    <?php if (isset($_GET['success'])): ?>
        <div class="alert alert-success"><?php echo htmlspecialchars($_GET['success']); ?></div>
    <?php endif; ?>
    <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger"><?php echo htmlspecialchars($_GET['error']); ?></div>
    <?php endif; ?>

    <div class="row g-4 mt-3">
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            ?>
            <div class="col-md-4">
                <div class="card bg-secondary text-light shadow h-100">
                  <div class="row g-0 h-100">
                    <div class="col-md-4">
                      <img src="<?php echo $row['image_path']; ?>" class="img-fluid rounded-start h-100" style="object-fit:cover;" alt="<?php echo $row['name']; ?>">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title text-warning"><?php echo $row['name']; ?></h5>
                        <p class="card-text small mb-1"><?php echo $row['breed']; ?></p>
                        <p class="card-text"><small class="text-light">Adopted: <?php echo date('M d, Y', strtotime($row['adoption_date'])); ?></small></p>
                        <span class="badge bg-success"><?php echo $row['adoption_status']; ?></span>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <?php
        }
    } else {
        echo "<p class='lead'>You haven't adopted any pets yet. <a href='adopt.php' class='text-warning'>Go Adopt!</a></p>";
    }
    ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
