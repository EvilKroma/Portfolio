document.addEventListener('DOMContentLoaded', function() {
    var thumbTiles = document.querySelectorAll('.thumbTile__image');
    var homeSection = document.getElementById('home');
    var dynamicContent = document.getElementById('dynamicContent');

    thumbTiles.forEach(function(thumbTile) {
        thumbTile.addEventListener('mouseenter', function() {
            var backgroundImage = this.getAttribute('data-background');
            var text = this.getAttribute('data-text');

            var customContent;
            switch (text) {
                case 'Projet BBV2':
                    customContent = `
                        <h1>${text}</h1>
                        <p>Création d'une bibliothèque en ligne, dans une situation professionnelle.</p>
                    `;
                    break;
                case 'Projet Eventura':
                    customContent = `
                        <h1>${text}</h1>
                        <p>Application d'organisation d'évènements.</p>
                        `;
                    break;
                case 'Veille technologique Arduino':
                    customContent = `
                        <h1>${text}</h1>
                        <p>Plateforme open-source qui permet de programmer des microcontrôleurs.</p>
                        `;
                    break;
                case 'Bati\'Track':
                    customContent = `
                        <h1>${text}</h1>
                        <p>Application de gestion et de suivi de chantiers BTP.</p>
                        `;
                    break;
                case 'Projet FJS':
                    customContent = `
                        <h1>${text}</h1>
                        <p>Site web permettant d'éditer des factures PDF via Javascript.</p>
                        `;
                    break;
                 case 'Projet LMJ':
                    customContent = `
                        <h1>${text}</h1>
                        <p>Création d'une application en React, dans le but d'apprendre ce langage.</p>
                    `;
                    break;
                case 'Projet RespireStat':
                    customContent = `
                        <h1>${text}</h1>
                        <p>Reprise d'un projet de création d'interface de statistiques écologique en Java.</p>
                        `;
                    break;
                case 'Projet ToolBox':
                    customContent = `
                        <h1>${text}</h1>
                        <p>Création de différents mini-outils/jeux.</p>
                        `;
                    break;
                 case 'Veille technologique VR':
                    customContent = `
                        <h1>${text}</h1>
                        <p>Création d'une expérience en VR pour une veille technologique sur la VR.</p>
                        `;
                    break;
                case 'Projet After Blast':
                    customContent = `
                        <h1>${text}</h1>
                        <p>Projet de création d'un jeu vidéo en extraction shooter PvEvP.</p>
                        `;
                    break;
                default:
                    customContent = `
                        <h1>${text}</h1>
                        <p>Some additional description or details about ${text}.</p>
                    `;
            }

            homeSection.style.backgroundImage = 'url(' + backgroundImage + ')';
            dynamicContent.innerHTML = customContent;
        });

        thumbTile.addEventListener('mouseleave', function() {
            homeSection.style.backgroundImage = 'url("addons/imgs/home_background.JPG")';
            dynamicContent.innerHTML = '' +
                '<div id="mes_infos">' +
                    '<span id="span_mes_infos">'+
                        'Salut ! <br> Je m\'appelle Dorian, je suis dévelopeur junior & étudiant en alternance en BTS SIO.<br>'+
                        'Je suis motivé par l\’apprentissage de nouvelles technologies et l’amélioration continue de mes compétences.<br>'+
                        'Persévérant et curieux, je m’investis pleinement dans chaque projet pour approfondir mon expertise en développement.'+
                    '</span>' +
                '</div>';
        });
    });
});
