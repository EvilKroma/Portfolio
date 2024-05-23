document.addEventListener('DOMContentLoaded', function() {
    var thumbTiles = document.querySelectorAll('.thumbTile__image');
    var homeSection = document.getElementById('home');

    thumbTiles.forEach(function(thumbTile) {
        thumbTile.addEventListener('mouseenter', function() {
            var backgroundImage = this.getAttribute('data-background');
            homeSection.style.backgroundImage = 'url(' + backgroundImage + ')';
        });

        thumbTile.addEventListener('mouseleave', function() {
            // Réinitialiser l'image de fond lorsque le survol est terminé
            homeSection.style.backgroundImage = 'url("addons/imgs/home_background.JPG")';
        });
    });
});

