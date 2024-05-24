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
                        <img src="${backgroundImage}" alt="${text}" style="width: 100px; height: auto; border-radius: 5px;">
                        <p>Details about BBV2.</p>
                    `;
                    break;
                case 'Projet After Blast':
                    customContent = `
                        <h1>${text}</h1>
                        <img src="${backgroundImage}" alt="${text}" style="width: 100px; height: auto; border-radius: 5px;">
                        <p>Details about After Blast.</p>
                        `;
                    break;
                // Add cases for other projects
                default:
                    customContent = `
                        <h1>${text}</h1>
                        <img src="${backgroundImage}" alt="${text}" style="width: 100px; height: auto; border-radius: 5px;">
                        <p>Some additional description or details about ${text}.</p>
                    `;
            }

            homeSection.style.backgroundImage = 'url(' + backgroundImage + ')';
            dynamicContent.innerHTML = customContent;
        });

        thumbTile.addEventListener('mouseleave', function() {
            homeSection.style.backgroundImage = 'url("addons/imgs/home_background.JPG")';
            dynamicContent.innerHTML = '<p>Passez la souris sur une carte pour voir le texte ici.</p>';
        });
    });
});
