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

// Tabs functionality
const sections = document.querySelector(".sections");
const tabs = document.querySelectorAll(".tab-btn");
const viewProdBtn = document.querySelector(".prod-btn");
const addProdBtn = document.querySelector(".add-prod-btn");
const table_wrapper = document.querySelector(".table-wrapper");
const products_form = document.querySelector(".products-form");

viewProdBtn.addEventListener("click", ()=>{
    if (!products_form.classList.contains("inactive") && !table_wrapper.classList.contains("active")) {
        sections.classList.remove("form-section");
        sections.classList.add("table-section");

        products_form.classList.remove("active");
        products_form.classList.add("inactive");

        addProdBtn.classList.remove("active");
        addProdBtn.classList.add("inactive");

        viewProdBtn.classList.remove("inactive");
        viewProdBtn.classList.add("active");

        table_wrapper.classList.remove("inactive");
        table_wrapper.classList.add("active");
    }

    prodBtnBack();
})

addProdBtn.addEventListener("click", ()=>{
    if (!table_wrapper.classList.contains("inactive") && !products_form.classList.contains("active")) {
        sections.classList.add("form-section");
        sections.classList.remove("table-section");

        table_wrapper.classList.remove("active")
        table_wrapper.classList.add("inactive");

        addProdBtn.classList.remove("inactive");
        addProdBtn.classList.add("active");

        viewProdBtn.classList.remove("active");
        viewProdBtn.classList.add("inactive");

        products_form.classList.remove("inactive");
        products_form.classList.add("active");
    }
    prodBtnChange();
})

prodBtn.addEventListener("mouseout", ()=>{
    if (!products_form.classList.contains("active")) {
        setTimeout(prodBtnBack, 100);
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
const overlaySpcl = document.querySelector(".overlay-spcl");
const popupEditError = document.querySelector(".popup-edit-error");
const exitBtns = document.querySelectorAll(".popup__header-exit");

editBtns.forEach((btn, index)=>{
    btn.addEventListener("mouseover", ()=>{
        function editBtnChange() {
            document.querySelectorAll(".edit-icon")[index].src = "../assets/icons/edit-hover.svg";
        }

        setTimeout(editBtnChange, 100);
    })

    // btn.addEventListener("click", ()=>{
    //     overlay.classList.toggle("open");
    //     editPopup.classList.toggle("open");
    // })

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

    // btn.addEventListener("click", ()=>{
    //     overlay.classList.toggle("open");
    //     dlPopup.classList.toggle("open");
    // })
})

exitBtns.forEach((btn)=>{
    btn.addEventListener("click", ()=>{
        if (popupEditError.classList.contains("open")) {
            overlay.style.zIndex = "3";
            popupEditError.classList.toggle("open");
        } else if (editPopup.classList.contains("open")) {
            editPopup.classList.toggle("open");
            overlay.classList.toggle("open");
        } else if (dlPopup.classList.contains("open")) {
            dlPopup.classList.toggle("open");
            overlay.classList.toggle("open");
        } else if (popups.classList.contains("open")) {
            popups.classList.toggle("open");
            overlay.classList.toggle("open");
        } 
    })
})

const exitSpcl = document.querySelector(".popup__header-exit-spcl");

exitSpcl.addEventListener("click", ()=>{
    overlaySpcl.classList.toggle("open");
    popups.classList.toggle("open");
})

overlay.addEventListener("click", ()=>{
    overlay.classList.toggle("open");
    if (editPopup.classList.contains("open")) {
        editPopup.classList.toggle("open");
    } else if (dlPopup.classList.contains("open")) {
        dlPopup.classList.toggle("open");
    }
})

overlaySpcl.addEventListener("click", ()=>{
    overlaySpcl.classList.toggle("open");
    popups.classList.toggle("open");
})

// Clear inputs
const clearBtn = document.querySelector(".cancel-button");

clearBtn.addEventListener("click", ()=>{
    document.getElementById('products-form-php').reset() = "";
})
