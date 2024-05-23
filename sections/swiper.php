<section class="thumbSection">
            <h2 class="thumbTitle">Popular Now</h2>
            <div class="thumbTiles swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <!-- <div class="swiper-slide">
                        <a class="thumbTile" href="#">
                            <img class="thumbTile__image" src="addons\imgs\BBV1.png" alt="BBV1">
                        </a>
                    </div> -->
                    <div class="swiper-slide">
                        <a class="thumbTile" href="#">
                            <img class="thumbTile__image" src="addons\imgs\BBV2.png" alt="BBV2">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="thumbTile" href="#">
                            <img class="thumbTile__image" src="addons\imgs\Eventura.png" alt="Eventura">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="thumbTile" href="#">
                            <img class="thumbTile__image" src="addons\imgs\FJS.png" alt="FJS">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="thumbTile" href="#">
                            <img class="thumbTile__image" src="addons\imgs\LMJ.png" alt="JMJ">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="thumbTile" href="#">
                            <img class="thumbTile__image" src="addons\imgs\RespireStat.png" alt="RespireStat">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="thumbTile" href="#">
                            <img class="thumbTile__image" src="addons\imgs\ToolBox.png" alt="ToolBox">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="thumbTile" href="#">
                            <img class="thumbTile__image" src="addons\imgs\VR.png" alt="Projet VR">
                        </a>
                    </div>
                </div>

                 <!-- If we need navigation buttons 
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div> -->
            </div>
        </section>
    </main>

    <script>
        var mySwiper = new Swiper('.swiper-container', {
            // Optional parameters
            spaceBetween: 5,
            slidesPerView: 2,
            loop: false,
            freeMode: true,
            loopAdditionalSlides: 5,
            speed: 500,
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                // when window width is >= 640px
                640: {
                    slidesPerView: 5,
                    slidesPerGroup: 5,
                    freeMode: false
                }
            }
        })
    </script>