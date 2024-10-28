const phoneInfosContainer = document.querySelector(".phone-infos-container");
const phoneNumberSpan = document.getElementById("phone-number");
const phoneNumber = "0635461776";

phoneNumberSpan.textContent = phoneNumber;
phoneInfosContainer.addEventListener("click", async (e) => {
	e.preventDefault();
	await navigator.clipboard.writeText(phoneNumber);
	alert("Phone copied");
})
