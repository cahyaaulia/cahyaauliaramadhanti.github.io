const modeToggleBtn = document.getElementById('mode-toggle');
const body = document.body;
const header = document.querySelector('header');

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
}

modeToggleBtn.addEventListener('click', toggleDarkMode);



