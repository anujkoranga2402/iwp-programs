function validateForm() {
	//get the form values by id
	let name = document.getElementById("name").value;
	let email = document.getElementById("email").value;
	let password = document.getElementById("password").value;
	let phone = document.getElementById("phone").value;

	//check if any of the fields are empty
	if (name === "" || email === "" || password === "" || phone === "") {
		alert("All fields are required!");
		return false;
	}

	//check if name is valid
	let namePattern = /^[a-zA-Z\s]{6,}$/;
	if (!name.match(namePattern)) {
		alert("Name must contain alphabets, and be greater than 6 characters!");
		return false;
	}

	//check if email is valid
	let emailPattern = /^[a-zA-Z0-9.-_]+@[\w]+\.[\w]{3}$/;
	if (!email.match(emailPattern)) {
		alert("Invalid email address!");
		return false;
	}

	//check if password is valid
	let passwordPattern = /^.{6,}$/;
	if (!password.match(passwordPattern)) {
		alert("Password must be greater than 6 characters!");
		return false;
	}

	//check if phone number
	let phonePattern = /^\d{10}$/;
	if (!phone.match(phonePattern)) {
		alert("Phone number must be 10 digits exactly!");
		return false;
	}

	return true;
}
