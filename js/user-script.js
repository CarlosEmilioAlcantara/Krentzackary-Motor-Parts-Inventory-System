const overlay = document.querySelector(".overlay");
const inputError = document.querySelector(".popup");
const popup = document.querySelector(".popup-edit-product");
const exit = document.querySelectorAll(".popup__header-exit");

exit.forEach((btn)=>{
    btn.addEventListener('click', ()=>{
        if (inputError.classList.contains("open") && popup.classList.contains("open")){
            inputError.classList.toggle("open");
            overlay.style.zIndex = "3";
        } else if (inputError.classList.contains("open")) {
                inputError.classList.toggle("open");
                overlay.classList.toggle('open');
        } else if (popup.classList.contains("open")){
            inputError.style.zIndex = "3";
            popup.classList.toggle("open");
            overlay.classList.toggle('open');
        }
    })
})
