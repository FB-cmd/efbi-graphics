const showMenuBtn = document.getElementById("activate-menu-btn");
const showMenuIcon = document.getElementById("show-menu-icon");
const menu = document.querySelector("menu");

showMenuBtn.addEventListener("click", () => {
  menu.style.display = menu.style.display === "none" ? "flex" : "none";
  showMenuIcon.style.rotate = ((showMenuIcon.style.rotate === "0deg") ? "90deg" : "0deg")
});
