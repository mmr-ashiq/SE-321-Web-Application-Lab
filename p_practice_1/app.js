const bulbOn = document.querySelector('.bulb__on');
const bulbOff = document.querySelector('.bulb_off');

bulbOff.addEventListener('click', (e) => {
	bulbOn.style.display = 'block';
	bulbOff.style.display = 'none';
});

bulbOn.addEventListener('click', (e) => {
    bulbOn.style.display = 'none';
    bulbOff.style.display = 'block';
});

// show alert if user clicks the bulb more than 3 times
// https://stackoverflow.com/questions/50270990/javascript-count-how-many-times-button-is-cliked
bulbOn.onclick = (function outer() {
    let counter = 0;
    return function inner() {
        counter++;
        if (counter === 3) {
            alert('off ja bhai');
        }
    };
})();
