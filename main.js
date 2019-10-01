

			// FORM-VALIDATION-FOR-ANSÖK
const myForm = document.querySelector('#my-form');
const förnamnInput = document.querySelector('#förnamn');
const efternamnInput = document.querySelector('#efternamn');
const emailInput = document.querySelector('#email');
const telefonInput = document.querySelector('#telefon');
const sectionInput = document.querySelector('#section');
const errorElement = document.getElementById('error');

myForm.addEventListener('submit', (e) => {
	let messages = [];
	if(förnamnInput.length<1){
		messages.push('Vänlig skriv in hela ditt förnamn!');
	}
	if()
}
}
