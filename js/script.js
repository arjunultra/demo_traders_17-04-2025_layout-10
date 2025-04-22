document.addEventListener("DOMContentLoaded", () => {
  new Swiper(".home-carousel-swiper", {
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
    grabCursor: true,

    // 💡 Breakpoints to tweak behavior on smaller screens
    breakpoints: {
      0: {
        speed: 500,
        creativeEffect: {
          prev: {
            translate: [0, "-30%", -1],
            opacity: 0.3,
            scale: 0.9,
          },
          next: {
            translate: [0, "30%", -1],
            opacity: 0.3,
            scale: 0.9,
          },
        },
      },
      768: {
        speed: 600,
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
      },
    },
  });
});

// brands swiper
// Initialize Swiper
const brandsSwiper = new Swiper('.brands-swiper', {
  slidesPerView: 1,
  spaceBetween: 20,
  loop: true,
  breakpoints: {
    768: {
      slidesPerView: 3,
    },
    992: {
      slidesPerView: 4,
    }
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  }
});

// Set up IntersectionObserver to detect when slides enter the viewport
const swiperSlides = document.querySelectorAll('.swiper-slide');

// IntersectionObserver callback function
const observerCallback = (entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      // If the slide is in the viewport, add the 'visible' class
      entry.target.classList.add('visible');
    } else {
      // If the slide is not in the viewport, remove the 'visible' class
      entry.target.classList.remove('visible');
    }
  });
};

// Create an observer instance
const observer = new IntersectionObserver(observerCallback, {
  threshold: 0.5 // Trigger when at least 50% of the slide is visible
});

// Observe each slide
swiperSlides.forEach(slide => {
  observer.observe(slide);
});

// adding image title
// add title to all images
let images = document.getElementsByTagName("img");
for (let i = 0; i < images.length; i++) {
  images[i].setAttribute("title", "Demo Traders");
} 
// navbar fixed scrolling
document.addEventListener('DOMContentLoaded', function() {
  const headerTop = document.getElementById('headerTop');
  const headerSection = document.querySelector('.header-section');
  let lastScrollTop = 0;
  let scrollThreshold = 40; // The height of your topbar
  
  // Initial classes
  headerSection.classList.add('with-topbar');
  
  window.addEventListener('scroll', function() {
      let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
      
      // Scrolling down and past threshold
      if (currentScroll > lastScrollTop && currentScroll > scrollThreshold) {
          headerTop.classList.add('hidden');
          headerSection.classList.remove('with-topbar');
          headerSection.classList.add('topbar-hidden');
      } 
      // Scrolling back to top
      else if (currentScroll <= scrollThreshold) {
          headerTop.classList.remove('hidden');
          headerSection.classList.add('with-topbar');
          headerSection.classList.remove('topbar-hidden');
      }
      
      lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
  });
  
  // Handle mobile menu closing when clicking outside
  document.addEventListener('click', function(event) {
      const navbarCollapse = document.getElementById('navMenu');
      const navbarToggler = document.querySelector('.navbar-toggler');
      
      // If navbar is expanded and click is outside menu and not on toggler
      if (navbarCollapse.classList.contains('show') && 
          !navbarCollapse.contains(event.target) && 
          !navbarToggler.contains(event.target)) {
          // Bootstrap 4.6 way to close the menu
          $(navbarToggler).trigger('click');
      }
  });
});
// about odometer 
// Counter Section JavaScript with Odometer Effect
document.addEventListener("DOMContentLoaded", function () {
  let counters = document.querySelectorAll(".num");

  let observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          let counter = entry.target;
          let targetValue = parseInt(counter.getAttribute("data-val"), 10);

          counter.innerHTML = 0;

          setTimeout(() => {
            counter.innerHTML = targetValue;
          }, 500);

          observer.unobserve(counter);
        }
      });
    },
    { threshold: 0.5 }
  );

  counters.forEach((counter) => observer.observe(counter));
});
