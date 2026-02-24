<?php
session_start();
require_once '../config/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php?error=Please login to adopt a pet");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $pet_id = (int)$_POST['pet_id'];

    // Check if already adopted by this user (optional, but good practice)
    $check = "SELECT * FROM adoptions WHERE user_id = $user_id AND pet_id = $pet_id";
    $res = $conn->query($check);
    if ($res->num_rows > 0) {
        header("Location: ../profile.php?error=You have already adopted this pet!");
        exit();
    }

    $sql = "INSERT INTO adoptions (user_id, pet_id) VALUES ('$user_id', '$pet_id')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../profile.php?success=Congratulations! You adopted a new friend.");
    } else {
        header("Location: ../adopt.php?error=Error processing adoption");
    }
}
?>
