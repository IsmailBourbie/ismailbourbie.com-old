const menu = document.getElementById("menu");
// const menuItems = document.querySelectorAll(".menuItem");
const menuButton= document.getElementById("menuButton");
// const closeIcon= document.querySelector(".closeIcon");
// const menuIcon = document.querySelector(".menuIcon");

function toggleMenu() {
  if (menu.classList.contains("translate-y-0")) {
    menu.classList.remove("translate-y-0");
  } else {
    menu.classList.add("translate-y-0");
  }
}

menuButton.addEventListener("click", toggleMenu);
