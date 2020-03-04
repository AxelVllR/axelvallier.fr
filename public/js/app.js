const body = document.querySelector('body');
const scrollBar = document.querySelector('#progress');

    window.addEventListener("scroll", () => {
        let scroll = (window.scrollY / (body.clientHeight - window.innerHeight)) * 100;
        let roundedScroll = Math.round(scroll);
        scrollBar.style.width = roundedScroll + "%"

    })