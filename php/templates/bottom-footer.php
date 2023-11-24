<footer class="default-footer" id="underground">
    <img class="ignore-src" id="get-up-button" alt="Up arrow" src="images/source/up-arrow.webp">

    <style>
        #get-up-button {

            --square-size:32px;

            width: var(--square-size);
            height: var(--square-size);

            position: absolute;

            right: 7px;
            top: -10px;

            transform: translateY(-100%);

            cursor: pointer;
        }
    </style>

    <script type="module">
        const getUpButton = document.getElementById("get-up-button");
        let isScrolling = false;

        getUpButton.addEventListener("click", () => {
            if (!isScrolling) {
                isScrolling = true;
                const scrollToTop = () => {
                const currentPosition = window.scrollY;
                if (currentPosition > 0 && isScrolling) {
                    window.scrollTo(0, currentPosition - 50); // Ajusta el valor (-50) para cambiar la velocidad de desplazamiento
                    requestAnimationFrame(scrollToTop);
                } else {
                    isScrolling = false;
                }
                };
                scrollToTop();
            }
        });

        window.onmousewheel = () => {
            if (isScrolling) {
                isScrolling = false;
            }
        }

        window.ontouchmove = window.onmousewheel;

    </script>

    <p>Institución Educativa Regional Simón Bolívar &copy;</p>
    <p>Florida, Valle del Cauca</p>
    <p>2023</p>
</footer>