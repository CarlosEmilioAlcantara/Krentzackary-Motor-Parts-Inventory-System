// Popup message
// const ewan = document.querySelector(".login-button");
const exit = document.querySelector(".popup__header-exit");
const overlay = document.querySelector(".overlay");
const popup = document.querySelector(".popup");

// ewan.addEventListener("click", () => {
//     overlay.classList.toggle("open");
//     popup.classList.toggle("open");
// })

exit.addEventListener("click", () => {
    overlay.classList.toggle("open");
    popup.classList.toggle("open");
})

overlay.addEventListener("click", () => {
    overlay.classList.toggle("open");
    popup.classList.toggle("open");
})