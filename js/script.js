const toggle = document.querySelector(".topbar__burgermenu");
const topbar = document.querySelector(".topbar");
const sidebar = document.querySelector(".sidebar");
const body = document.querySelector(".navbody");
// const span = document.querySelector(".topbar__burgermenu span")

toggle.addEventListener("click", () => {
    sidebar.classList.toggle("open");
    body.classList.toggle("open");
    topbar.classList.toggle("open");
})