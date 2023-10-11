window.onload = function loadListeners() {
    document.body.onscroll = scrollProgress;
    document.getElementById("sidebutton").onclick = toggleSide;
    window.onresize = closeSide;
}



function scrollProgress() {
    let scroll = document.body.scrollTop || document.documentElement.scrollTop;
    let max = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let sidemenu = document.getElementById("sideMenu");
    var docWidth = document.documentElement.clientWidth
    let progressWidth = (docWidth * (scroll / max));
    let bar = document.getElementById("progress");
    //let gradient = 60 + (progressWidth * 0.4);
    let visibility = window.getComputedStyle(sidemenu).getPropertyValue("display");
    let sideWidth = parseInt(window.getComputedStyle(sidemenu).getPropertyValue("width"));
    let truncatedprogressWidth = ((docWidth - sideWidth) * (scroll / max));

    //bar.style.background = "linear-gradient(90deg, rgba(0,0,0,1) " + gradient + "%, rgba(255,255,255,0) 100%)";
    if (visibility == "none") {
        bar.style.width = progressWidth + "px";
    } else {
        bar.style.width = truncatedprogressWidth + "px";
    }
};

function toggleSide() {
    let sidemenu = document.getElementById("sideMenu");
    let sidebutton = document.getElementById("sidebutton");
    let visibility = window.getComputedStyle(sidemenu).getPropertyValue("display");
    let menubars = document.getElementsByClassName("bar");

    console.log(menubars);

    if (visibility == "none") {
        console.log("Showing sidemenu");
        sidemenu.style.display = "block";
    } else {
        console.log("Hiding sidemenu...")
        sidemenu.style.display = "none";
    }
    scrollProgress();

    sidebutton.classList.toggle("change");
}

function closeSide() {
    let sidemenu = document.getElementById("sideMenu");
    let sidebutton = document.getElementById("sidebutton");
    let visibilityMenu = window.getComputedStyle(sidemenu).getPropertyValue("display");
    let visibilityButton = window.getComputedStyle(sidebutton).getPropertyValue("display");
    console.log("Running closeSide function...");

    if (visibilityButton == "none" && visibilityMenu == "block") {
        console.log("Hiding sidemenu during resize...");
        sidemenu.style.display = "none";
    }

    if (visibilityMenu == "none" && sidebutton.classList.contains("change")) {
        console.log("Removing change class from sidebutton...");
        sidebutton.classList.toggle("change");
    }
    console.log("Finished closeSide function.")
}