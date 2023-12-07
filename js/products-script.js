// Hovering tab buttons
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

// Tabs functionality
const tabs = document.querySelectorAll(".tab-btn");
const viewProdBtn = document.querySelector(".prod-btn");
const addProdBtn = document.querySelector(".add-prod-btn");
const table_wrapper = document.querySelector(".table-wrapper");
const products_form = document.querySelector(".products-form");

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

// Edit and delete buttons for the entries
const editBtns = document.querySelectorAll(".edit-btn");
const editBtnIcon = document.querySelectorAll(".edit-icon");
const dlBtns = document.querySelectorAll(".dl-btn");
const dlBtnIcon = document.querySelectorAll(".dl-icon");
const editPopup = document.querySelector(".popup-edit-product");
const dlPopup = document.querySelector(".popup-delete-product");
const popups = document.querySelector(".popup");
const overlay = document.querySelector(".overlay");
const exitBtns = document.querySelectorAll(".popup__header-exit");

editBtns.forEach((btn, index)=>{
    btn.addEventListener("mouseover", ()=>{
        function editBtnChange() {
            document.querySelectorAll(".edit-icon")[index].src = "../assets/icons/edit-hover.svg";
        }

        setTimeout(editBtnChange, 100);
    })

    btn.addEventListener("click", ()=>{
        overlay.classList.toggle("open");
        editPopup.classList.toggle("open");
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

    btn.addEventListener("click", ()=>{
        overlay.classList.toggle("open");
        dlPopup.classList.toggle("open");
    })
})

exitBtns.forEach((btn)=>{
    btn.addEventListener("click", ()=>{
        overlay.classList.toggle("open");
        if (editPopup.classList.contains("open")) {
            editPopup.classList.toggle("open");
        } else if (dlPopup.classList.contains("open")) {
            dlPopup.classList.toggle("open");
        } else if (popups.classList.contains("open")) {
            popups.classList.toggle("open");
        }
    })
})

function customAlert() {
    addErrorPopup.classList.toggle("open");
}

function validateForm() {
    prodName = document.forms["products-form-php"]["product_name"].value;
    category = document.forms["products-form-php"]["category"].value;
    description = document.forms["products-form-php"]["description"].value;
    attributes = document.forms["products-form-php"]["attribute"].value;
    amount = document.forms["products-form-php"]["amount"].value;
    location = document.forms["products-form-php"]["location"].value;
    addErrorPopup = document.getElementById("add-error");

    if (prodName == "" || category == "" || description == "" || attributes == "" || amount == "" || location == "") {
        alert();
        return false;
    }
}