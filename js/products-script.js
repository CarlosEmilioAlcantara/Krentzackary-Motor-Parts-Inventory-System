const editButton = document.querySelector(".products-edit-button");
const editPopup = document.querySelector(".popup-edit-product");
const deleteButton = document.querySelector(".products-delete-button");
const deletePopup = document.querySelector(".popup-delete-product");
const overlay = document.querySelector(".overlay");
const exit = document.querySelector(".popup__header-exit");

editButton.addEventListener("click", () => {
    overlay.classList.toggle("open");
    editPopup.classList.toggle("open");
})

deleteButton.addEventListener("click", () => {
    overlay.classList.toggle("open");
    deletePopup.classList.toggle("open");
})

exit.addEventListener("click", () => {
    overlay.classList.toggle("open");
    editPopup.classList.toggle("open");
    deletePopup.classList.toggle("open");
})