

			// FORM-VALIDATION-FOR-ANSÖK

			// Form
const myForm = document.getElementById('my-form')
// Input fields
const förnamnInput = document.getElementById('förnamn')
const efternamnInput = document.getElementById('efternamn')
const emailInput = document.getElementById('email')
const telefonInput = document.getElementById('telefon')
const sectionInput = document.getElementById('section')


const errorElement = document.getElementById('error')

myForm.addEventListener('submit', (e) => {
	
	let messages = []
	if(förnamnInput.value.length<1){
		messages.push('Vänlig skriv in hela ditt förnamn!')
	}
	if(efternamnInput.value.length<1){
		messages.push('Vänlig skriv in hela ditt efternamn!')
	}
	if(emailInput.value.length<1){
		messages.push('Vänligen skriv in hela din email!')
	}
	if(messages.length > 0){
	e.preventDefault()
	errorElement.innerText = messages.join(', ')
}
}


























const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;


let countDown = new Date('Sep 30, 2019 00:00:00').getTime(),
    x = setInterval(function() {

      let now = new Date().getTime(),
          distance = countDown - now;

      document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
         }, second)



