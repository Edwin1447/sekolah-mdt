// script.js

const toggleBtn = document.getElementById('menu-toggle');
const nav = document.querySelector('nav');

toggleBtn.addEventListener('click', () => {
  nav.classList.toggle('active');
});

// Fungsi untuk menampilkan dan menyembunyikan detail dalam box akademik
function toggleDetail(id) {
  const detail = document.getElementById(id);
  if (detail.style.display === "none" || detail.style.display === "") {
    detail.style.display = "block";
  } else {
    detail.style.display = "none";
  }
}