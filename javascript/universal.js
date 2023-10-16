window.onload = function loadListeners() {
    document.body.onscroll = scrollProgress;
    document.getElementById("sidebutton").onclick = toggleSide;
    window.onresize = closeSide, scrollProgress;
}



function scrollProgress() {
    let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let scrolled = parseInt((winScroll / height) * 100);
    let bar = document.getElementById("progress");

    if (isNaN(scrolled)) {
        scrolled = 0;
    }
    bar.style.width = scrolled + "%";
};

function toggleSide() {
    let sidemenu = document.getElementById("sideMenu");
    let sidebutton = document.getElementById("sidebutton");
    let visibility = window.getComputedStyle(sidemenu).getPropertyValue("display");
    let menubars = document.getElementsByClassName("bar");

    console.log(menubars);

    if (visibility == "none") {
        console.log("Showing sidemenu");
        sidemenu.style.display = "flex";
    } else {
        console.log("Hiding sidemenu...")
        sidemenu.style.display = "none";
    }

    sidebutton.classList.toggle("change");
}

function closeSide() {
    let sidemenu = document.getElementById("sideMenu");
    let sidebutton = document.getElementById("sidebutton");
    let visibilityMenu = window.getComputedStyle(sidemenu).getPropertyValue("display");
    let visibilityButton = window.getComputedStyle(sidebutton).getPropertyValue("display");
    console.log("Running closeSide function...");

    console.log(visibilityButton);
    console.log(visibilityMenu);

    if (visibilityButton == "none" && visibilityMenu == "flex") {
        console.log("test");
        toggleSide;
    }
}