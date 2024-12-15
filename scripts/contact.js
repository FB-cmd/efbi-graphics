const phoneInfosContainer = document.querySelector(".phone-infos-container");
const phoneNumberSpan = document.getElementById("phone-number");
const phoneNumber = "+212699379212";
const phoneInput = document.getElementById("phone-number-field");
const form = document.querySelector("form");

phoneNumberSpan.textContent = phoneNumber;
phoneInfosContainer.addEventListener("click", async (e) => {
	e.preventDefault();
	await navigator.clipboard.writeText(phoneNumber);
	alert("Phone copied");
});

window.intlTelInput(phoneInput, {
	loadUtils: () => import("https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/js/utils.js"),
	hiddenInput: (phoneNumber) => ({
    		phone: "fullPhoneNumber",
		country: "countryCode"
	})
});

const iti = intlTelInput(phoneInput);
form.addEventListener("submit", (e) => {
	if (!iti.isValidNumber()) {
		e.preventDefault();
		alert("Numéro de téléphone invalide");
	}
})
