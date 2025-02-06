const burgerButton = document.getElementById('burger-button');
const overlay = document.getElementById('overlay');

burgerButton.addEventListener('click', () => {
    console.log('click')
    overlay.style.opacity = "100%";
    overlay.style.pointerEvents = "all";
});