

document.getElementById("button").setAttribute("onClick", "Validation()");
document.getElementById("button").type = "button";




function Validation() {
	let checkbox = document.getElementById("checkbox");
	let userEmail = document.getElementById("Email").value;
	let b = /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+).([a-z]{2,20})$/;
	let l = /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+).(co)$/;

	EmailValidation(userEmail, b, l);
	CheckboxValidation(checkbox);

	if (EmailValidation(userEmail, b, l) == 1 && CheckboxValidation(checkbox) == 1) {
		document.getElementById("button").type = "submit";
		document.getElementById("button").click;
	}

}

function EmailValidation(userEmail, b, l) {

	if (userEmail != "") {
		if (b.test(userEmail) == true) {
			if (l.test(userEmail) != true) {
				document.getElementById("errorr").style.visibility = "hidden";
				return 1;
			} else {
				document.getElementById("error").innerHTML = "We are not accepting subscriptions from Colombia emails";
				document.getElementById("error").style.visibility = "visible";
				document.getElementById("error").style.color = "red";
				return 0;
			}
		} else {
			document.getElementById("error").innerHTML = "Please provide a valid e-mail address";
			document.getElementById("error").style.visibility = "visible";
			document.getElementById("error").style.color = "red";
			return 0;
		}
	} else {
		document.getElementById("error").innerHTML = "Email address is required";
		document.getElementById("error").style.visibility = "visible";
		document.getElementById("error").style.color = "red";
		return 0;

	}
}
function CheckboxValidation(checkbox) {
	if (checkbox.checked) {
		document.getElementById("errorr").style.visibility = "hidden";
		return 1;
	} else {
		document.getElementById("errorr").innerHTML = "Ywqdqwdqwdqwdqw";
		document.getElementById("errorr").style.visibility = "visible";
		document.getElementById("errorr").style.color = "red";
		return 0;
	}

}