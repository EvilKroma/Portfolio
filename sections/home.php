<section id="home">
    <div class="buttons_container">
        <div class="button">
            <a href="" class="play">
                <img src="addons/imgs/icones/play.svg" alt="Play">
                <span>Play</span>
            </a>
        </div>

        <div class="button">
            <a href="addons/imgs/CV_Dorian_Deneuchatel.pdf" class="cv" download="CV_Dorian_Deneuchatel.pdf">
                <img src="addons/imgs/icones/CV.svg" alt="CV">
                <span>CV</span>
            </a>
        </div>

    </div>
    <section class="thumbSection">
        <div class="thumbTiles swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image" src="addons/imgs/projets//BBV2.png" alt="BBV2" data-background="addons/imgs/projets//BBV2.png">
                    </a>
                </div> 
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image" src="addons/imgs/projets/After_Blast.png" alt="BBV2"  data-background="addons/imgs/projets/After_Blast.png"> 
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image" src="addons/imgs/projets/Eventura.png" alt="Eventura"  data-background="addons/imgs/projets/background/Background_Eventura.png">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image" src="addons/imgs/projets/FJS.png" alt="FJS"  data-background="addons/imgs/projets/background/Background_FJS.png">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image" src="addons/imgs/projets/LMJ.png" alt="LMJ" data-background="addons/imgs/projets/background/Background_LMJ.png">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image" src="addons/imgs/projets/RespireStat.png" alt="RespireStat"  data-background="addons/imgs/projets/RespireStat.png">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image" src="addons/imgs/projets/ToolBox.png" alt="ToolBox"  data-background="addons/imgs/projets/ToolBox.png">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image" src="addons/imgs/projets/VR.png" alt="Projet VR"  data-background="addons/imgs/projets/VR.png">
                    </a>
                </div>
            </div>

             <!-- If we need navigation buttons 
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div> -->
        </div>
    </section>
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
        });
    </script>
</section>
