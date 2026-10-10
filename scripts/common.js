const phoneInfosContainer = document.querySelector(".phone-infos");
const phoneNumber = "+212699379212";

phoneInfosContainer.addEventListener("click", async (e) => {
	e.preventDefault();
	await navigator.clipboard.writeText(phoneNumber);
	alert(document.documentElement.lang === "en" ? "Phone copied" : "Téléphone copié");
});
