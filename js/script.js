// script.js

// 🕒 Countdown Timer
let timeLeft = 120; // 2 minutes
const timerDisplay = document.getElementById("timer");

if (timerDisplay) {
  const timer = setInterval(() => {
    const minutes = Math.floor(timeLeft / 60);
    const seconds = timeLeft % 60;
    timerDisplay.textContent = `${minutes}:${seconds < 10 ? "0" : ""}${seconds}`;

    if (timeLeft <= 0) {
      clearInterval(timer);
      alert("Session expired! Please refresh to continue.");
    }

    timeLeft--;
  }, 1000);
}

// 💡 Dynamic Tips (on Care Page)
const tipsContainer = document.getElementById("tipsList");
if (tipsContainer) {
  const tips = [
    "Provide clean water and balanced food daily.",
    "Schedule regular vet checkups for your pet’s health.",
    "Give them time for exercise and outdoor play.",
    "Keep vaccinations up-to-date.",
    "Provide a safe and loving environment.",
  ];

  tips.forEach((tip) => {
    const li = document.createElement("li");
    li.className = "list-group-item bg-dark text-light border-secondary";
    li.textContent = tip;
    tipsContainer.appendChild(li);
  });
}

// 🌗 Dark Theme Enhancements (buttons + navbar glow)
const navItems = document.querySelectorAll(".nav-link");
navItems.forEach((item) => {
  item.addEventListener("mouseenter", () => {
    item.style.color = "#0d6efd";
  });
  item.addEventListener("mouseleave", () => {
    item.style.color = "#ddd";
  });
});

// 🪶 Forgot Password Function
function forgotPassword() {
  const email = prompt("Please enter your registered email address:");
  if (!email) {
    alert("Email is required to send a reset link.");
    return;
  }

  if (!email.includes("@") || !email.includes(".")) {
    alert("Please enter a valid email address.");
    return;
  }

  alert(`A password reset link has been sent to ${email}.`);
}
// 🐾 Pet Care Tips Gallery with Images
const tipsGallery = document.getElementById("tipsGallery");
if (tipsGallery) {
  const tipsData = [
    { img: "healthymeal.png", title: "Healthy Meals", desc: "Feed protein-rich meals to keep fur shiny and energy high." },
    { img: "dailywalk.png", title: "Daily Walks", desc: "Regular walks keep dogs active, healthy, and happy." },
    { img: "play.png", title: "Talk & Play", desc: "Parrots love attention — talk to them often." },
    { img: "softbedding.png", title: "Soft Bedding", desc: "Give all animals dry, clean bedding for comfort." },
    { img: "cleantank.png", title: "Clean Tank", desc: "Maintain water cleanliness for healthy turtles & fishes." },
    { img: "pondfun.png", title: "Pond Fun", desc: "Ducks need clean water for swimming and grooming." },
    { img: "calmplace.png", title: "Calm Space", desc: "Cats thrive in peaceful, quiet surroundings." },
    { img: "nutition.png", title: "Balanced Diet", desc: "Cocktails need fruits, seeds, and greens daily." }
  ];

  tipsData.forEach((tip) => {
    const card = document.createElement("div");
    card.className = "col-md-3 col-sm-6";
    card.innerHTML = `
      <div class="card pet-card bg-dark text-light border-secondary h-100">
        <img src="images/${tip.img}" class="card-img-top" alt="${tip.title}" style="height:180px; object-fit:cover;">
        <div class="card-body">
          <h5 class="card-title text-primary">${tip.title}</h5>
          <p class="card-text">${tip.desc}</p>
        </div>
      </div>
    `;
    tipsGallery.appendChild(card);
  });
}