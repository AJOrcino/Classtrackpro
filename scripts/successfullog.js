document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("createForm");
  const modal = document.getElementById("successModal");

  form.addEventListener("submit", function (e) {
    e.preventDefault(); 
    modal.style.display = "flex"; 
  });
});
