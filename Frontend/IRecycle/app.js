//animations
const tl = gsap.timeline({ defaults: { ease: "power1.out" } });

// tl.to(".text", { y: "0%", duration: 1, stagger: 0.5 });
// tl.to(".slider", { y: "-100%", duration: 1, delay: 0.6 });
// tl.to(".intro", { y: "-100%", duration: 1 }, "-=0.9");
tl.fromTo(".navbar", { opacity: 0 }, { opacity: 1, duration: 1 });
tl.fromTo(".landing", { opacity: 0 }, { opacity: 1, duration: 2 }, "-=1.2");
// tl.fromTo(".search", { opacity: 0 }, { opacity: 1, duration: 2 }, "-=2");
// tl.fromTo(".login", { opacity: 0 }, { opacity: 1, duration: 2 }, "-=2");
tl.fromTo(".box", { opacity: 0 }, { opacity: 1, duration: 2 }, "-=1.5");


// about page
tl.fromTo(".app", { opacity: 0 }, { opacity: 1, duration: 2 }, "-=1.5");
tl.fromTo(".sdg11", { opacity: 0 }, { opacity: 1, duration: 2 }, "-=2");
tl.fromTo(".sdg12", { opacity: 0 }, { opacity: 1, duration: 2 }, "-=2");
tl.fromTo(".sdg13", { opacity: 0 }, { opacity: 1, duration: 2 }, "-=2");
tl.fromTo(".footer", { opacity: 0 }, { opacity: 1, duration: 2 }, "-=3");

// results page
tl.fromTo(".search-results", { opacity: 0 }, { opacity: 1, duration: 2 }, "-=3");
tl.fromTo(".results-container", { opacity: 0 }, { opacity: 1, duration: 2 }, "-=2.5");

//form valodation
const fullname = document.getElementById('fullname');
const email = document.getElementById('email');
const empty = document.getElementById('empty')
//variables

const form = document.getElementById('form')

const errorElement = document.getElementById('error-fullname')
const errorElement1 = document.getElementById('error-email')
const errorElement2= document.getElementById('error-description')

form.addEventListener('submit', (e) => {
    let messages = []
    if( fullname.value == null || fullname.value === '' ){
        messages.push('full name is required')
        
    }
    if( fullname.value.length >= 40  ){
        messages.push('full name should be less than 40');
        
    }
    if(messages.length > 0){
        e.preventDefault();
        errorElement.innerText = messages.join(',  ')
    }
    
   
})
form.addEventListener('submit', (e) => {
    let messages = []
    if(email.value.length == null || email.value.length == "" ){
        messages.push('email is required')
       
    }
    if(messages.length > 0){
        e.preventDefault();
        errorElement1.innerText = messages.join(',  ')
    }
   
})
form.addEventListener('submit', (e) => {
    let messages = []
    if(empty.value.length == null || empty.value.length == "" ){
        messages.push('description is required')
       
    }
    if(messages.length > 0){
        e.preventDefault();
        errorElement2.innerText = messages.join(',  ')
    }
   
})