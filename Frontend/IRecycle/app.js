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
