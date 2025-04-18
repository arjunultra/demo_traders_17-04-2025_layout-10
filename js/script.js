document.addEventListener("DOMContentLoaded", () => {
  const homeCarouselSwiper = new Swiper(".home-carousel-swiper", {
    direction: "vertical",
    loop: true,
    speed: 600,
    effect: "creative",
    creativeEffect: {
      prev: {
        translate: [0, "-40%", -1],
        opacity: 0.4,
        scale: 0.85,
      },
      next: {
        translate: [0, "40%", -1],
        opacity: 0.4,
        scale: 0.85,
      },
    },
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    // Optional:
    grabCursor: true,
    // mousewheel: { forceToAxis: true },
  });
});


// adding image title
// add title to all images
let images = document.getElementsByTagName("img");
for (let i = 0; i < images.length; i++) {
  images[i].setAttribute("title", "Demo Traders");
} 