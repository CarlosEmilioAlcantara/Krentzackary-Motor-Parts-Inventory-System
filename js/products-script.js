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

// const test = document.querySelector(".test");
const editBtns = document.querySelectorAll(".edit-btn");
const editBtnIcon = document.querySelectorAll(".edit-icon");
const dlBtns = document.querySelectorAll(".dl-btn");
const dlBtnIcon = document.querySelectorAll(".dl-icon");

// test.addEventListener("mouseover", ()=>{
//     // setTimeout(editBtnChange, 100);
//     console.log(document.querySelectorAll(".edit-btn").length);
// })

editBtns.forEach((btn, index)=>{
    btn.addEventListener("mouseover", ()=>{
        function editBtnChange() {
            document.querySelectorAll(".edit-icon")[index].src = "../assets/icons/edit-hover.svg";
        }

        setTimeout(editBtnChange, 100);
    })

    btn.addEventListener("mouseout", ()=>{
        function editBtnBack() {
            document.querySelectorAll(".edit-icon")[index].src = "../assets/icons/edit.svg";
        }

        setTimeout(editBtnBack, 100);
    })
})

dlBtns.forEach((btn, index)=>{
    btn.addEventListener("mouseover", ()=>{
        function dlBtnChange() {
            document.querySelectorAll(".dl-icon")[index].src = "../assets/icons/delete-hover.svg";
        }

        setTimeout(dlBtnChange, 100);
    })

    btn.addEventListener("mouseout", ()=>{
        function dlBtnBack() {
            document.querySelectorAll(".dl-icon")[index].src = "../assets/icons/delete.svg";
        }

        setTimeout(dlBtnBack, 100);
    })
})

const tabs = document.querySelectorAll(".tab-btn");
const viewProdBtn = document.querySelector(".prod-btn");
const addProdBtn = document.querySelector(".add-prod-btn");
const all_content = document.querySelectorAll(".content");
const table_wrapper = document.querySelector(".table-wrapper");
const products_form = document.querySelector(".products-form");

// tabs.forEach((tab, index)=>{
//     tab.addEventListener("click", ()=>{
//         tabs.forEach(tab=>{tab.classList.remove("active")});
//         tab.classList.add("active");

//         all_content.forEach(content=>{content.classList.remove("active")});
//         all_content[index].classList.add("active");

//         if (table_wrapper.classList.contains("active")) {
//             table_wrapper.classList.remove("active");
//         } else {
//             table_wrapper.classList.add("active");
//         }

//         if (products_form.classList.contains("active")) {
//             products_form.classList.remove("active");
//         } else {
//             products_form.classList.add("active");
//         }
//     })
// })

viewProdBtn.addEventListener("click", ()=>{
    if (!products_form.classList.contains("inactive") && !table_wrapper.classList.contains("active")) {
        products_form.classList.remove("active");
        products_form.classList.add("inactive");
        table_wrapper.classList.remove("inactive");
        table_wrapper.classList.add("active");
    }
})

addProdBtn.addEventListener("click", ()=>{
    if (!table_wrapper.classList.contains("inactive") && !products_form.classList.contains("active")) {
        table_wrapper.classList.remove("active")
        table_wrapper.classList.add("inactive");
        products_form.classList.remove("inactive");
        products_form.classList.add("active");
    }
})