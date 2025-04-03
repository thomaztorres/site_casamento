
// ------------------- ABRE MENU -----------------------
let buttonOpenMenu = document.getElementById("open-menu");
let buttonCloseMenu = document.getElementById("close-menu");
let clickOut = document.getElementById("styled-container")
let menu = document.getElementById("menu");

buttonOpenMenu.addEventListener("click", function () { 
    menu.style.display = "flex"; 
})

buttonCloseMenu.addEventListener("click", function () { 
    menu.style.display = "none"; 
})

clickOut.addEventListener("click", function () {
    menu.style.display = "none";
})