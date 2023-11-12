document.addEventListener("click",function(e){
    if(e.target.classList.contains("gallery-item")){
        const src =e.target.getAttribute("src");
        document.querySelector(".modal-img").src = src;
        const myModal = new bootstrap.Modal(document.getElementById('gallery-modal'));
        myModal.show();
    }
})


const navEl = document.querySelector('.navbars');
const headEl = document.querySelector('.header')
document.addEventListener("scroll",() => {
    if (window.scrollY>=50){
        navEl.classList.add('navbar-scrolled');
        headEl.classList.add('navbar-scrolled');
    }else if(window.screenY<200){
        navEl.classList.remove('navbar-scrolled');
        headEl.classList.remove('navbar-scrolled');
    }
});

    // window.addEventListener("scroll", function(){
    //     var header = document.querySelector("header");
    //     header.classList.toggle("sticky",this.window.scrollY > 0);
    // });