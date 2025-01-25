document.addEventListener("scroll", function () {
    const navbar = document.getElementById("navbar");
    if (window.scrollY > 200) { // Jika posisi scroll lebih dari 50px
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});