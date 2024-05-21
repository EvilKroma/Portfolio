<section class="thumbSection">
        <div class="thumbTiles swiper">
        <h2 class="thumbTitle">Populaire en ce moment</h2>
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <a class="thumbTile"href="#">
                        <img classs="thumbTileImg" src="addons\imgs\Eventura.png" alt="Eventura">
                    </a>
                </div>

                <!-- <div class="swiper-slide">
                    <a class="thumbTile"href="#">
                        <img classs="thumbTileImg" src="addons\imgs\BBV1.png" alt="BBV1">
                    </a>
                </div> -->

                <div class="swiper-slide">
                    <a class="thumbTile"href="#">
                        <img classs="thumbTileImg" src="addons\imgs\BBV2.png" alt="BBV2">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a class="thumbTile"href="#">
                        <img classs="thumbTileImg" src="addons\imgs\FJS.png" alt="FJS">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a class="thumbTile"href="#">
                        <img classs="thumbTileImg" src="addons\imgs\LMJ.png" alt="La Maison Jungle">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a class="thumbTile"href="#">
                        <img classs="thumbTileImg" src="addons\imgs\RespireStat.png" alt="RespireStat">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a class="thumbTile"href="#">
                        <img classs="thumbTileImg" src="addons\imgs\Toolbox.png" alt="ToolBox">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a class="thumbTile"href="#">
                        <img classs="thumbTileImg" src="addons\imgs\VR.png" alt="VR">
                    </a>
                </div>
                
            </div>
            <!-- If we need navigation buttons
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div> -->
        </div>
    </section>
    
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            spaceBetween: 5,
            loop: true,
            slidesPerView: 2, // Nombre de slide par vues
            freeMode: true,
            loopAdditionalSlides: 5,
            speed: 500,

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            braekpoints: {
                // Qd la taille de la fenêtre est >= à 640px
                640: {
                    slidesPerView: 5,
                    slidesPerGroup: 5,
                    freeMode : false,
                }
            }
        });
    </script>