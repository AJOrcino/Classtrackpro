function validateLogin(event) {
  event.preventDefault();

  const email = document.getElementById("email").value.trim();
  const password = document.getElementById("password").value.trim();

  if (email === "aj@gmail.com" && password === "Aj@1234") {
    showLoginSuccess();
  } else {
    alert("Invalid credentials.");
  }
}

function showLoginSuccess() {
  const banner = document.getElementById("login-success-banner");
  banner.classList.add("visible");

  setTimeout(() => {
    banner.classList.remove("visible");
    window.location.href = "/components/error/404.php";
  }, 3000);
}
