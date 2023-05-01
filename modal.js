function showModal() {
  const modal = document.getElementById("modal");
  modal.classList.add("modal-open");
}

function closeModal() {
  const modal = document.getElementById("modal");
  modal.classList.remove("modal-open");
  window.history.replaceState(null, "", window.location.pathname);
}
