<?php require "header.php" ?>
<body>
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
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a class="thumbTile" href="pages_projets/ASF.php">
                        <img class="thumbTile__image" src="addons/imgs/projets//BBV2/BBV2.png" alt="BBV2" data-background="addons/imgs/projets/BBV2/BBV2.png" data-text="Projet BBV2">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="thumbTile" href="pages_projets/Eventura.php">
                        <img class="thumbTile__image" src="addons/imgs/projets/Eventura/Eventura.png" alt="Eventura" data-background="addons/imgs/projets/Eventura/Background_Eventura.png" data-text="Projet Eventura">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image" src="addons/imgs/projets/FJS/FJS.png" alt="FJS" data-background="addons/imgs/projets/FJS/Background_FJS.png" data-text="Projet FJS">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image" src="addons/imgs/projets/LMJ/LMJ.png" alt="LMJ" data-background="addons/imgs/projets/LMJ/Background_LMJ.png" data-text="Projet LMJ">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image" src="addons/imgs/projets/RespireStat/RespireStat.png" alt="RespireStat" data-background="addons/imgs/projets/RespireStat/RespireStat.png" data-text="Projet RespireStat">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image" src="addons/imgs/projets/ToolBox/ToolBox.png" alt="ToolBox" data-background="addons/imgs/projets/ToolBox/ToolBox.png" data-text="Projet ToolBox">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image" src="addons/imgs/projets/VR/VR.png" alt="Projet VR" data-background="addons/imgs/projets/VR/VR.png" data-text="Projet VR">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image" src="addons/imgs/projets/After_Blast/After_Blast.png" alt="After Blast" data-background="addons/imgs/projets/After_Blast/After_Blast.png" data-text="Projet After Blast">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Conteneur pour le contenu dynamique -->
    <div id="dynamicContent" class="dynamic-content">
        <img src="addons/imgs/logo_portfolio.png" alt="">
    </div>

    <script>
        var mySwiper = new Swiper('.swiper-container', {
            spaceBetween: 5,    
            slidesPerView: 2,
            loop: false,
            freeMode: true,
            loopAdditionalSlides: 5,
            speed: 500,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 5,
                    slidesPerGroup: 5,
                    freeMode: false
                }
            }
        });
    </script>
</section>
</body>
</html>
