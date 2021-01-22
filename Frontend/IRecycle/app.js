const tl = gsap.timeline({ defaults: { ease: "power1.out" } });

tl.to(".text", { y: "0%", duration: 1, stagger: 0.5 });
tl.to(".slider", { y: "-100%", duration: 1, delay: 0.6 });
tl.to(".intro", { y: "-100%", duration: 1 }, "-=0.9");
tl.fromTo("nav", { opacity: 0 }, { opacity: 1, duration: 1 });
tl.fromTo(".big-text", { opacity: 0 }, { opacity: 1, duration: 2 }, "-=1");
tl.fromTo(".search", { opacity: 0 }, { opacity: 1, duration: 2 }, "-=2");
tl.fromTo(".bottom-text", { opacity: 0 }, { opacity: 1, duration: 2 }, "-=2");

// tl.fromTo(".nav", { y: "0%" }, { y: "100%", ease: Power2.easeInOut }, "-=1");
// tl.fromTo(hero, 1, {opacity: 0, x:30}, { opacity:1, x:0}, "-=2")
tl.fromTo(hero, 1, {height: "0%"}, {height: "80%",ease:  Power2.easeInOut});