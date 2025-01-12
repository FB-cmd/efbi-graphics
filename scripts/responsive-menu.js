const showMenuBtn = document.getElementById("activate-menu-btn");
const menu = document.querySelector("menu");

showMenuBtn.addEventListener("click", () => {
  menu.style.display = menu.style.display === "none" ? "flex" : "none";
});
