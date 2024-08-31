// Navbar color when not on top
const navEl = document.querySelector(".navbar");
function checkScroll() {
    if (window.scrollY >= 50) {
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

//adjust width of description of date range in about me
// window.addEventListener("resize", checkWidth);
// document.addEventListener("DOMContentLoaded", checkWidth);

// function checkWidth() {
//     var dateRange = document.querySelector(".date-range");
//     var dateRangeDesc = document.querySelector(".date-range-desc");

//     if (dateRange.offsetWidth <= 116) {
//         dateRangeDesc.classList.add("full-width");
//     } else {
//         dateRangeDesc.classList.remove("full-width");
//     }
// }
