window.addEventListener("DOMContentLoaded", initiate);


function initiate(){
    const nav = document.querySelector("nav");
    const a = nav.querySelectorAll("a");
    for(let i = 0; i < a.length; i++){
        if(a[i].pathname === window.location.pathname){
            a[i].classList.add("active");
            break;
        }
    }
}