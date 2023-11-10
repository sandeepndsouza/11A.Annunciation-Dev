document.addEventListener("click",function(e){
    if(e.target.classList.contains("gallery-item")){
        const src =e.target.getAttribute("src");
        document.querySelector(".modal-img").src = src;
        const myModal = new bootstrap.Modal(document.getElementById('gallery-modal'));
        myModal.show();
    }
})


const navEl = document.querySelector('.navbar');
const headEl = document.querySelector('.header')
window.addEventListener('scroll',() => {
    if (window.scrollY>=200){
        navEl.classList.add('navbar-scrolled');
        headEl.classList.add('navbar-scrolled');
    }else if(window.screenY<200){
        navEl.classList.remove('navbar-scrolled');
        headEl.classList.remove('navbar-scrolled');
    }
});