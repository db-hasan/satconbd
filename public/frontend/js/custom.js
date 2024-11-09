
    document.addEventListener('DOMContentLoaded', function () {
        // Slider Functionality
        const sliderContainer = document.querySelector('.slider-container');
        const leftArrow = document.querySelector('.left-arrow');
        const rightArrow = document.querySelector('.right-arrow');
        const imageBoxes = document.querySelectorAll('.image-box');

        let scrollPosition = 0;

        leftArrow.addEventListener('click', () => {
            scrollPosition--;
            if (scrollPosition < 0) {
                scrollPosition = imageBoxes.length - getVisibleImages();
            }
            updateSliderPosition();
        });

        rightArrow.addEventListener('click', () => {
            scrollPosition++;
            if (scrollPosition >= imageBoxes.length - getVisibleImages() + 1) {
                scrollPosition = 0;
            }
            updateSliderPosition();
        });

        function updateSliderPosition() {
            const imageBoxWidth = imageBoxes[0].clientWidth + 20; // 20px margin
            sliderContainer.style.transform = `translateX(-${scrollPosition * imageBoxWidth}px)`;
        }

        function getVisibleImages() {
            const containerWidth = sliderContainer.clientWidth;
            const imageBoxWidth = imageBoxes[0].clientWidth + 20; // 20px margin
            return Math.floor(containerWidth / imageBoxWidth);
        }

        // Progress Bars
        const progressBars = document.querySelectorAll('.progress-bar');
        progressBars.forEach(bar => {
            const value = bar.getAttribute('aria-valuenow') + '%';
            bar.style.width = value;
        });

        // Counters
        const counters = document.querySelectorAll('.count');
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-count');
                const count = +counter.innerText;
                const increment = target / 100; // Adjust the divisor for speed
                
                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 20); // Speed of counting
                } else {
                    counter.innerText = target + '+'; // Ensure it ends with the + sign
                }
            };
            updateCount();
        });
    });




    /*=============== javascript animation start =================*/

    $(document).ready(function () {
        function isInViewport(element) {
            var elementTop = $(element).offset().top;
            var elementBottom = elementTop + $(element).outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();
            return elementBottom > viewportTop && elementTop < viewportBottom;
        }

        function animateOnScroll() {
            $(".fade-element").each(function () {
                if (isInViewport(this)) {
                    $(this).css("opacity", 1);
                    $(this).css("top", 0);
                    $(this).css("left", 0);
                }
            });
        }

        $(window).on("scroll", animateOnScroll);
        $(window).on("resize", animateOnScroll);

        // Trigger animation on page load
        animateOnScroll();
    });

    
/*=============== javascript animation start =================*/

