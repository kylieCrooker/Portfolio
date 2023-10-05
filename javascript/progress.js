function scrollProgress() {
    let scroll = document.body.scrollTop || document.documentElement.scrollTop;
    let max =
        document.documentElement.scrollHeight -
        document.documentElement.clientHeight;
    let percent = ((scroll / max) * 100).toFixed(0);
    let bar = document.getElementById("progress");

    bar.style.width = percent + "%";
};
