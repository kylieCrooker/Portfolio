window.onload = function loadListeners() {
    document.body.onscroll = scrollProgress;
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

function galleryFocus(imgs) {
    let expandImg = document.getElementById("zoom-gallery");
    let imgText = document.getElementById("text-gallery");

    expandImg.src = imgs.src;
    imgText.innerHTML = imgs.alt;
}