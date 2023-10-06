function toggleside() {
    let sidemenu = document.getElementById("sideMenu");
    let visibility = window.getComputedStyle(sidemenu).getPropertyValue("display");

    if (visibility == "none") {
        sidemenu.style.display = "block";
    } else {
        sidemenu.style.display = "none";
    }
    scrollProgress();
}