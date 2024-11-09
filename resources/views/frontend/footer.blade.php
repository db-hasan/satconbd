<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('frontend/js/custom.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>



<script>
    document.addEventListener("DOMContentLoaded", function () {
        var navLinks = document.querySelectorAll('.nav-link');
        var currentLocation = window.location.href;

        navLinks.forEach(function (link) {
            if (link.href === currentLocation) {
                link.classList.add('active');
                link.querySelector('h6').style.color = 'black'; // Set active color
            }
        });
    });

</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sliderContainer = document.querySelector('.slider-container');

        // Pause the slider on hover
        sliderContainer.addEventListener('mouseenter', function () {
            this.style.animationPlayState = 'paused';
        });

        // Resume the slider when the mouse leaves
        sliderContainer.addEventListener('mouseleave', function () {
            this.style.animationPlayState = 'running';
        });
    });

</script>