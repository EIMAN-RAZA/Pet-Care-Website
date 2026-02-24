<?php
session_start();
require_once '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    // Assuming validation checks are done or skipped for simplicity in MVP
    
    // Check if email already exists
    $check_email = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($check_email);
    if ($result->num_rows > 0) {
        header("Location: ../register.php?error=Email already taken");
        exit();
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../login.php?success=Registration successful! Please login.");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
