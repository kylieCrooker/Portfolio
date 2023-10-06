function scrollProgress() {
    let scroll = document.body.scrollTop || document.documentElement.scrollTop;
    let max = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let sidemenu = document.getElementById("sideMenu");
    let percent = ((scroll / max) * 100).toFixed(0);
    let bar = document.getElementById("progress");
    let gradient = 60 + (percent * 0.4);
    let visibility = window.getComputedStyle(sidemenu).getPropertyValue("display");

    console.log(visibility);


    bar.style.background = "linear-gradient(90deg, rgba(0,0,0,1) " + gradient + "%, rgba(255,255,255,0) 100%)";
    if (visibility == "none") {
        console.log("true");
        bar.style.width = percent + "%";
    } else {
        console.log("false");
        let truncatedPercent = percent * 0.8;
        bar.style.width = truncatedPercent + "%";
    }
};
