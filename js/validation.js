// validation.js

// Function to validate registration
function validateRegistration(event) {
  event.preventDefault();

  const name = document.getElementById("regName").value.trim();
  const email = document.getElementById("regEmail").value.trim();
  const password = document.getElementById("regPassword").value.trim();

  if (!name || !email || !password) {
    alert("Please fill all fields!");
    return false;
  }

  // Save user data in localStorage
  localStorage.setItem("userEmail", email);
  localStorage.setItem("userPassword", password);
  localStorage.setItem("userName", name);

  alert("Registration successful! You can now log in.");
  window.location.href = "login.html"; // Redirect to login page
  return true;
}

// Function to validate login
function validateLogin(event) {
  event.preventDefault();

  const email = document.getElementById("loginEmail").value.trim();
  const password = document.getElementById("loginPassword").value.trim();

  const storedEmail = localStorage.getItem("userEmail");
  const storedPassword = localStorage.getItem("userPassword");

  if (email === storedEmail && password === storedPassword) {
    alert("Login successful! Welcome back, " + localStorage.getItem("userName") + " 🐾");
    window.location.href = "index.html"; // Redirect to homepage
  } else {
    alert("Invalid email or password. Please try again or register first.");
  }
}

// Function for Forgot Password
function forgotPassword() {
  const email = document.getElementById("loginEmail").value.trim();

  if (!email) {
    alert("Please enter your email to receive a reset link.");
    return;
  }

  alert("A password reset link has been sent to " + email);
}
