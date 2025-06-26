document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("createForm");
  const modal = document.getElementById("successModal");

  form.addEventListener("submit", function (e) {
    e.preventDefault(); // prevent form from submitting
    modal.style.display = "flex"; // show modal
  });
});
