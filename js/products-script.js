// Popups 
// const editButton = document.querySelector(".products-edit-button");
// const editPopup = document.querySelector(".popup-edit-product");
// const deleteButton = document.querySelector(".products-delete-button");
// const deletePopup = document.querySelector(".popup-delete-product");
// const overlay = document.querySelector(".overlay");
// const exit = document.querySelector(".popup__header-exit");

// editButton.addEventListener("click", () => {
//     overlay.classList.toggle("open");
//     editPopup.classList.toggle("open");
// })

// deleteButton.addEventListener("click", () => {
//     overlay.classList.toggle("open");
//     deletePopup.classList.toggle("open");
// })

// exit.addEventListener("click", () => {
//     overlay.classList.toggle("open");
//     editPopup.classList.toggle("open");
//     deletePopup.classList.toggle("open");
// })

// Sections
// const productSection = document.querySelector(".productSection");
// const productSectionButton = document.querySelector(".ProductsButton");
// const addSection = document.querySelector(".AddProductSection");
// const addSectionButton = document.querySelector(".AddProductsButton");

// productSectionButton.addEventListener("click", () => {
//     // productSection.classList.toggle("open");
//     // addSection.classList.toggle("close");
//     if (productSection.classList.contains("open")) {
//     } else if (productSection.classList.contains("close")) {
//         productSection.classList.remove("close");
//         productSection.classList.add("open");
//         if (addSection.classList.contains("open")) {
//             addSection.classList.remove("open");
//             addSection.classList.add("close");
//         }
//     }
// })

// addSectionButton.addEventListener("click", () => {
//     if (addSection.classList.contains("open")) {
//     } else if (addSection.classList.contains("close")) {
//         addSection.classList.add("open");
//         addSection.classList.remove("close");
//         if (productSection.classList.contains("open")) {
//             productSection.classList.remove("open");
//             productSection.classList.add("close");
//         }
//     }
// })

// Hovering
const prodBtn = document.querySelector(".add-prod-btn");
const prodBtnIcon = document.querySelector(".prod-btn-icon");

function prodBtnChange() {
    prodBtnIcon.src = "../assets/icons/add-prod-hover.svg";
}

function prodBtnBack() {
    prodBtnIcon.src = "../assets/icons/add-prod.svg";
}

prodBtn.addEventListener("mouseover", ()=>{
    setTimeout(prodBtnChange, 100);
})

prodBtn.addEventListener("mouseout", ()=>{
    setTimeout(prodBtnBack, 100);
})

const editBtns = document.querySelectorAll(".edit-btn");
const editBtnIcon = document.querySelectorAll(".edit-icon");
const dlBtn = document.querySelectorAll(".dl-btn");
const dlBtnIcon = document.querySelectorAll(".dl-icon");

function editBtnChange() {
    editBtnIcon.src = "../assets/icons/edit-hover.svg";
}

function editBtnBack() {
    editBtnIcon.src = "../assets/icons/edit.svg";
}

// editBtn.addEventListener("mouseover", ()=>{
//     setTimeout(editBtnChange, 100);
// })

editBtns.forEach((btn)=>{
    btn.addEventListener("mouseover", ()=>{
        setTimeout(editBtnChange, 100);
    })
})

editBtn.addEventListener("mouseout", ()=>{
    setTimeout(editBtnBack, 100);
})

function dlBtnChange() {
    dlBtnIcon.src = "../assets/icons/delete-hover.svg";
}

function dlBtnBack() {
    dlBtnIcon.src = "../assets/icons/delete.svg";
}

dlBtn.addEventListener("mouseover", ()=>{
    setTimeout(dlBtnChange, 100);
})

dlBtn.addEventListener("mouseout", ()=>{
    setTimeout(dlBtnBack, 100);
})

const tabs = document.querySelectorAll(".tab_btn");
const all_content = document.querySelectorAll(".content");

tabs.forEach((tab, index)=>{
    tab.addEventListener("click", ()=>{
        tabs.forEach(tab=>{tab.classList.remove("active")});
        tab.classList.add("active");

        all_content.forEach(content=>{content.classList.remove("active")});
        all_content[index].classList.add("active");
    })
})