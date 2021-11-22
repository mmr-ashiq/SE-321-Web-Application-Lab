const koemanPart = document.querySelector('#koeman');
const farmersPart = document.querySelector('#farmers');

document.getElementById('koeman').style.display = 'none';
document.getElementById('farmers').style.display = 'none';

const komanBtn = document.querySelector('.koeman__btn');
const farmersBtn = document.querySelector('.farmers__btn');

// funtion to change the display of the parts
function changeDisplay() {
	koemanPart.style.display = 'none';
	farmersPart.style.display = 'none';
}

komanBtn.addEventListener('click', function () {
	changeDisplay();
	koemanPart.style.display = 'block';
});

farmersBtn.addEventListener('click', function () {
	changeDisplay();
	farmersPart.style.display = 'block';
});

