document.addEventListener('DOMContentLoaded', function () {
    const arrowUpBtn = document.getElementById('arrowUpBtn');
    if (!arrowUpBtn) return;

    let isScrolling;

    checkScrollPosition();

    window.addEventListener('scroll', function () {
        clearTimeout(isScrolling);
        isScrolling = setTimeout(checkScrollPosition, 40);
    });

    function checkScrollPosition() {
        if (window.scrollY > 100) {
            arrowUpBtn.style.display = 'flex';
            arrowUpBtn.style.opacity = '1';
        } else {
            arrowUpBtn.style.opacity = '0';
            setTimeout(() => {
                if (window.scrollY <= 100) {
                    arrowUpBtn.style.display = 'none';
                }
            }, 200);
        }
    }

    arrowUpBtn.addEventListener('click', function () {
        const scrollSpeed = 20; 

        function scrollStep() {
            const currentScroll = window.scrollY;

            if (currentScroll > 0) {
                window.scrollBy(0, -scrollSpeed);
                requestAnimationFrame(scrollStep);
            }
        }

        requestAnimationFrame(scrollStep);
    });
});
