const modeToggleBtn = document.getElementById('mode-toggle');
const body = document.body;
const header = document.querySelector('header');
const popup = document.querySelector('.popup');

let isDarkMode = false;


function toggleDarkMode() {
    isDarkMode = !isDarkMode;

    if (isDarkMode) {
        body.classList.add('dark-mode');
        header.classList.add('dark-mode');
        modeToggleBtn.textContent = 'Mode Terang';
    } else {
        body.classList.remove('dark-mode');
        header.classList.remove('dark-mode');
        modeToggleBtn.textContent = 'Mode Gelap';
    }

    closeDarkModePopup();
    updateProductTextColor(isDarkMode);
}

function openInfoPopup() {
    popup.style.display = 'block';
}

document.getElementById('info-popup-btn').addEventListener('click', openInfoPopup);


modeToggleBtn.addEventListener('click', toggleDarkMode);

document.getElementById('confirm-dark-mode').addEventListener('click', toggleDarkMode);

document.querySelector('.close-popup-btn').addEventListener('click', closeDarkModePopup);

updateProductTextColor(isDarkMode);




   