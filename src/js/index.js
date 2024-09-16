document.addEventListener('DOMContentLoaded', function() {
    const targetDiv = document.querySelector('#content_move');
    const title = document.querySelector('#content_move > h1');
    const zoomImage = document.getElementById('zoomImage');
    const circleBackground = document.getElementById('circleBackground');
    const header = document.querySelector('.header');
    let maxScroll = window.innerHeight; // Hauteur de la fenêtre
    let isZoomed = false;

    let scaleBase = 0.75;
    let scaleCurr = scaleBase;
    title.style.transform = `scale(${scaleBase})`;

    function onScroll() {
        let scrollTop = window.scrollY;


        const targetPosition = targetDiv.getBoundingClientRect();
        const Position = header.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        if (!isZoomed) {
            if (Position.bottom > windowHeight) {
                targetDiv.style.bottom = "0";
                targetDiv.style.position = "fixed";
                let scrollPercent = scrollTop / maxScroll;
                let scale = 1 + scrollPercent * 5;

                circleBackground.style.display = "block";
                circleBackground.style.transform = `scale(${scale <= 1 ? 1 : scale})`;

                scale = 0.5 + scrollPercent * 0.8; // Zoom de 1 à 2
                title.style.transform = `scale(${scale >= 1 ? 1 : (scale <= scaleBase ? scaleBase : scale)})`;
            } else if (Position.bottom - targetPosition.bottom <= 0)
            {
                targetDiv.style.bottom = "0";
                targetDiv.style.position = "absolute";
                circleBackground.style.display = "none";
            }
        }
    }

    window.addEventListener('scroll', onScroll);
});