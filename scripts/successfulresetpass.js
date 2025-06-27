document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("resetForm");
  const modal = document.getElementById("successModal");

  form.addEventListener("submit", function (e) {
    e.preventDefault(); 
    modal.style.display = "flex"; 
  });
});
