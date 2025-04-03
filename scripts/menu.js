
// ------------------- ABRE MENU -----------------------
let openMenu = document.getElementById("open-menu");
let closeMenu = document.getElementById("close-menu");
let menu = document.getElementById("menu");

openMenu.addEventListener("click", function () { menu.style.display = "flex"; })
closeMenu.addEventListener("click", function () { menu.style.display = "none"; })

