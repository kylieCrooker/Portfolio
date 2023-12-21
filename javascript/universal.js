window.onload = function loadListeners() {
    document.body.onscroll = scrollProgress;
    window.onresize = scrollProgress;
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

window.onload = function loadVue() {
    const app = Vue.createApp({
        data() {
            return {
                showMenu: false
            }
        }
    })
    app.mount('#mobilenav')
}

