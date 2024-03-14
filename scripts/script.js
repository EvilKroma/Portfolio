const words = ["Dorian Deneuchatel", "Développeur web", "Développeur fullstack"];
let currentWordIndex = 0;
let currentLetterIndex = 0;
const textElement = document.getElementById('animated-text');
const typingSpeed = 150;
const wordPauseTime = 1000;

function typeLetter() {
  const currentWord = words[currentWordIndex];
  if (currentLetterIndex < currentWord.length) {
    textElement.textContent += currentWord[currentLetterIndex];
    currentLetterIndex++;
    setTimeout(typeLetter, typingSpeed);
  } else {
    setTimeout(nextWord, wordPauseTime);
  }
}

function nextWord() {
  currentWordIndex = (currentWordIndex + 1) % words.length;
  currentLetterIndex = 0;
  textElement.textContent = '';
  typeLetter();
}

typeLetter();


document.getElementById("menu-toggle").addEventListener("click", function() {
  var navbarLinks = document.getElementById("navbar-links");
  if (navbarLinks.classList.contains("hidden")) {
      navbarLinks.classList.remove("hidden");
  } else {
      navbarLinks.classList.add("hidden");
  }
});

