function validateForm() {
	//get the form values by id
	let name = document.getElementById("name").value;
	let regno = document.getElementById("regno").value;
	let password = document.getElementById("password").value;
	let confirmPassword = document.getElementById("confirmpw").value;
	let dob = document.getElementById("dob").value;
	let age = document.getElementById("age").value;
	let email = document.getElementById("email").value;
	let areaOfInterest = document.getElementById("area").value;
	let cgpa = document.getElementById("cgpa").value;

	//check if any of the fields are empty
	if (
		name === "" ||
		regno === "" ||
		password === "" ||
		confirmPassword === "" ||
		dob === "" ||
		age === "" ||
		email === "" ||
		areaOfInterest === "" ||
		cgpa === ""
	) {
		alert("All fields are required!");
		return false;
	}

	//check if password and confirm password match
	if (password !== confirmPassword) {
		alert("Passwords do not match!");
		return false;
	}

	//check if DOB is a valid dd/mm/yy format
	let dobPattern =
		/^((0[1-9])|([12][0-9])|(30|31))\/((0[1-9])|(1[012]))\/\d{2}$/;
	if (!dob.match(dobPattern)) {
		alert("DOB must be valid dd/mm/yy format!");
		return false;
	}

	//check if email is valid
	let emailPattern = /^[a-zA-Z0-9.-_]+@[a-z0-9]+\.[a-z0-9.]{2,6}$/;
	if (!email.match(emailPattern)) {
		alert("Invalid email address!");
		return false;
	}

	return true;
}
