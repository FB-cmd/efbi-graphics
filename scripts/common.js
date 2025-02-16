const phoneInfosContainer = document.querySelector(".phone-infos-container");
const phoneNumber = "+212699379212";

phoneInfosContainer.addEventListener("click", async (e) => {
  e.preventDefault();
  await navigator.clipboard.writeText(phoneNumber);
  alert("Phone copied");
});
