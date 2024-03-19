const headerBtnsBars = document.querySelector(".header-btns-bars");
const headerBtnsClose = document.querySelector(".header-btns-close");

const headerLinks = document.querySelector(".header-links");

headerBtnsBars.addEventListener("click", ()=>{
    headerLinks.classList.toggle("header-links-open");
    
    headerBtnsClose.classList.remove("header-btns-hiden");
    headerBtnsBars.classList.add("header-btns-hiden");

})

headerBtnsClose.addEventListener("click", ()=>{
    headerLinks.classList.toggle("header-links-open");

    headerBtnsBars.classList.remove("header-btns-hiden");
    headerBtnsClose.classList.add("header-btns-hiden");
})