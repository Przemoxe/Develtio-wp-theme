window.addEventListener('DOMContentLoaded', () => {

    let faBars = document.querySelector(".fa-bars");
    let faAngels = document.querySelector(".fa-angle-left");
    let mobileCollapse = document.querySelector(".container .nav-collapse-hide");

    faBars.addEventListener('click', () => {
        faBars.classList.toggle("off");
        faAngels.classList.toggle("off");
        mobileCollapse.classList.toggle("nav-collapse-show");

    })
    faAngels.addEventListener('click', () => {
        faBars.classList.toggle("off");
        faAngels.classList.toggle("off");
        mobileCollapse.classList.toggle("nav-collapse-show");
    });

    console.log(window.scrollY);
    document.addEventListener('scroll', () => {
        let nav = document.querySelector(".container-nav");
        if(window.scrollY > 63){
            nav.classList.add("container-nav-border-bottom");
        }
        else{
            nav.classList.remove("container-nav-border-bottom");
        }
        
    })


    
});

