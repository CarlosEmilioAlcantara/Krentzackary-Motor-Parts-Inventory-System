// Popup message
const exit = document.querySelector(".popup__header-exit");
const overlay = document.querySelector(".overlay");
const popup = document.querySelector(".popup");

exit.addEventListener("click", () => {
    overlay.classList.toggle("open");
    popup.classList.toggle("open");
})

overlay.addEventListener("click", () => {
    overlay.classList.toggle("open");
    popup.classList.toggle("open");
})