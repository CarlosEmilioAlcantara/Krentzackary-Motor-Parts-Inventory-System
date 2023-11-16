const editButton = document.querySelector(".products-edit-button");
const editPopup = document.querySelector(".popup-edit-product");
const deleteButton = document.querySelector(".products-delete-button");
const overlay = document.querySelector(".overlay");
const exit = document.querySelector(".popup-edit-header__exit");

editButton.addEventListener("click", () => {
    overlay.classList.toggle("open");
    editPopup.classList.toggle("open");
})

exit.addEventListener("click", () => {
    overlay.classList.toggle("open");
    editPopup.classList.toggle("open");
})