const phoneInfosContainer = document.querySelector(".phone-infos-container");
const phoneNumberSpan = document.getElementById("phone-number");
const phoneNumber = "+212699379212";

phoneNumberSpan.textContent = phoneNumber;
phoneInfosContainer.addEventListener("click", async (e) => {
	e.preventDefault();
	await navigator.clipboard.writeText(phoneNumber);
	alert("Phone copied");
})
