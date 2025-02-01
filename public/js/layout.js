document.addEventListener("scroll", function () {
    const navbar = document.getElementById("navbar");
    if (window.scrollY > 200) { // Jika posisi scroll lebih dari 50px
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});

document.getElementById('overlayText').addEventListener('click', function (event) {
    event.preventDefault();
    alert('Menuju ke detail proyek!');
    // Bisa diganti untuk redirect halaman
    // window.location.href = 'link-ke-detail-proyek.html';
});
