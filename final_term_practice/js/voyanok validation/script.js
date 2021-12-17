const userName = document.getElementById('uname');
const userEmail = document.getElementById('email');
const userPassword = document.getElementById('password');
const userConfirmPassword = document.getElementById('confirmPassword');
const userPhone = document.getElementById('phone');
const submitbtn = document.getElementById('submit');

const checkLowerCase = (str) => {
	const lowerCase = /[a-z]/;
	if (lowerCase.test(str)) {
		return true;
	}
	return false;
};

const checkUserNameValidation = () => {
	if (userName.value.length < 6) {
		userName.style.border = '1px solid red';
		userName.style.boxShadow = '0 0 3px red';
		userName.style.outline = 'none';
		return false;
	} else if (!checkLowerCase(userName.value)) {
		userName.style.border = '1px solid red';
		userName.style.boxShadow = '0 0 3px red';
		userName.style.outline = 'none';
		return false;
	} else {
		userName.style.border = '1px solid green';
		userName.style.boxShadow = '0 0 3px green';
		userName.style.outline = 'none';
		return true;
	}
};

function checkPassword(str) {
	let upperCase = /[A-Z]/g;
	let lowerCase = /[a-z]/g;
	let number = /[0-9]/g;
	if (str.match(upperCase) && str.match(lowerCase) && str.match(number)) {
		return true;
	}
	return false;
}

const checkPasswordValidation = () => {
	if (password === confirmPassword) {
		if (checkPassword(password)) {
			userConfirmPassword.style.border = '1px solid green';
			return true;
		} else {
			userConfirmPassword.style.border = '1px solid red';
			return false;
		}
	} else {
		userConfirmPassword.style.border = '1px solid red';
		return false;
	}
};

const checkEmailValidation = () => {
	let email = userEmail.value;
	let emailReg = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
	if (emailReg.test(email)) {
		userEmail.style.border = '1px solid green';
		return true;
	} else {
		userEmail.style.border = '1px solid red';
		return false;
	}
};

const checkPhoneValidation = () => {
	let phone = userPhone.value;
	let phoneReg = /^\d{10}$/;
	if (phoneReg.test(phone)) {
		userPhone.style.border = '1px solid green';
		return true;
	} else {
		userPhone.style.border = '1px solid red';
		return false;
	}
};

submitbtn.addEventListener('click', (e) => {
	e.preventDefault();
	if (
		checkUserNameValidation() &&
		checkEmailValidation() &&
		checkPasswordValidation() &&
		checkPhoneValidation()
	) {
		alert('Form Submitted Successfully');
	} else {
		alert('Form Submitted Failed');
	}
});
