document.addEventListener('DOMContentLoaded', () => {
    let scrollButtons = document.getElementsByClassName('scroll-bottom');

    if (scrollButtons.length > 0) {
        Array.from(scrollButtons).forEach(button => {
            button.addEventListener('click', () => {

                window.scrollBy({
                    top: 674,
                    left: 0,
                    behavior: "smooth",
                });
            });
        })
    }
});