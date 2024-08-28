// Navbar color when not on top
const navEl = document.querySelector(".navbar");
function checkScroll() {
    if (window.scrollY >= 100) {
        navEl.classList.add("navbar-scrolled");
    } else {
        navEl.classList.remove("navbar-scrolled");
    }
}
checkScroll();
window.addEventListener("scroll", checkScroll);

// Remove show class when there is no menu
window.addEventListener("resize", function () {
    var navbarCollapse = document.querySelector(".navbar-collapse");

    if (window.innerWidth >= 576 && navbarCollapse.classList.contains("show")) {
        navbarCollapse.classList.remove("show");
    }
});
