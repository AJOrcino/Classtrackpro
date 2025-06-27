function attemptClose() {
  window.location.href = "/pages/logins/index.php";
}

document.getElementById("resetForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const newPass = document.getElementById("new-password").value.trim();
  const confirmPass = document.getElementById("confirm-password").value.trim();

  if (!newPass || !confirmPass) {
    alert("Please fill out both password fields.");
    return;
  }

  if (newPass !== confirmPass) {
    alert("Passwords do not match.");
    return;
  }

  const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d|.*[@#$%^&*!?]).{6,}$/;
  if (!regex.test(newPass)) {
    alert(
      "Password must include uppercase, lowercase, and number or special character."
    );
    return;
  }

  // Show modal if all validations pass
  document.getElementById("successModal").style.display = "flex";
});
