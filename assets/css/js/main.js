document.addEventListener("DOMContentLoaded", function(){

/* Sticky Header */

const header = document.querySelector("header");

window.addEventListener("scroll", () => {

if(window.scrollY > 100){

header.classList.add("sticky");

}else{

header.classList.remove("sticky");

}

});


/* Mobile Menu */

const menuToggle = document.querySelector(".menu-toggle");
const navMenu = document.querySelector("nav ul");

if(menuToggle){

menuToggle.addEventListener("click", () => {

navMenu.classList.toggle("active");

});

}


/* Smooth Scroll */

document.querySelectorAll("a[href^='#']").forEach(anchor => {

anchor.addEventListener("click", function(e){

e.preventDefault();

document.querySelector(this.getAttribute("href")).scrollIntoView({
behavior:"smooth"
});

});

});

});