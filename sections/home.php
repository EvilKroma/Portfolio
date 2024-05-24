<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Netflix Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="scripts/hoverPictures.js"></script>
    <script src="scripts/swiper.js"></script>
</head>
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
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image" src="addons/imgs/projets/BBV2.png" alt="BBV2" data-background="addons/imgs/projets/BBV2.png" data-text="Projet BBV2">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image" src="addons/imgs/projets/After_Blast.png" alt="After Blast" data-background="addons/imgs/projets/After_Blast.png" data-text="Projet After Blast">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image" src="addons/imgs/projets/Eventura.png" alt="Eventura" data-background="addons/imgs/projets/background/Background_Eventura.png" data-text="Projet Eventura">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image" src="addons/imgs/projets/FJS.png" alt="FJS" data-background="addons/imgs/projets/background/Background_FJS.png" data-text="Projet FJS">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image" src="addons/imgs/projets/LMJ.png" alt="LMJ" data-background="addons/imgs/projets/background/Background_LMJ.png" data-text="Projet LMJ">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image" src="addons/imgs/projets/RespireStat.png" alt="RespireStat" data-background="addons/imgs/projets/RespireStat.png" data-text="Projet RespireStat">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image" src="addons/imgs/projets/ToolBox.png" alt="ToolBox" data-background="addons/imgs/projets/ToolBox.png" data-text="Projet ToolBox">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image" src="addons/imgs/projets/VR.png" alt="Projet VR" data-background="addons/imgs/projets/VR.png" data-text="Projet VR">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Conteneur pour le contenu dynamique -->
    <div id="dynamicContent" class="dynamic-content">
        <p>Passez la souris sur une carte pour voir le texte ici.</p>
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
