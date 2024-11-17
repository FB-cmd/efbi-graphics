const phoneInfosContainer = document.querySelector(".phone-infos-container");
const phoneNumberSpan = document.getElementById("phone-number");
const phoneNumber = "+212699379212";
const worksContainer = document.querySelector(".works-container");
let count = 1;

async function delay(time) {
	return new Promise(resolve => setTimeout(resolve, time));
}

phoneNumberSpan.textContent = phoneNumber;
phoneInfosContainer.addEventListener("click", async (e) => {
	e.preventDefault();
	await navigator.clipboard.writeText(phoneNumber);
	alert("Phone copied");
})
