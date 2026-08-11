/**
 * J3 Apexion - Master JavaScript
 * Designed for High-End UX & Responsiveness
 */

$(document).ready(function () {
  // ==========================================================================
  // AUTO-UPDATE COPYRIGHT YEAR
  // ==========================================================================
  const currentYear = new Date().getFullYear();
  $("#currentYear").text(currentYear);

  // ==========================================================================
  // STICKY HEADER DETECTION
  // ==========================================================================
  const $header = $(".header");
  const stickyThreshold = 100;

  let ticking = false;
  function checkScroll() {
    if ($(window).scrollTop() > stickyThreshold) {
      $header.addClass("is-sticky");
    } else {
      $header.removeClass("is-sticky");
    }
    ticking = false;
  }

  $(window).on("scroll", function () {
    if (!ticking) {
      window.requestAnimationFrame(checkScroll);
      ticking = true;
    }
  });
  checkScroll(); // Run initially in case page loaded scrolled

  // ==========================================================================
  // MOBILE SLIDING DRAWER MENU
  // ==========================================================================
  const $hamburgerBtn = $("#hamburgerBtn");
  const $mobileMenuDrawer = $("#mobileMenuDrawer");
  const $mobileMenuOverlay = $("#mobileMenuOverlay");
  const $mobileMenuClose = $("#mobileMenuClose");

  function openMobileMenu() {
    $mobileMenuDrawer.addClass("is-open");
    $mobileMenuOverlay.addClass("is-visible");
    $hamburgerBtn.addClass("is-active");
    $("body").css("overflow", "hidden"); // Lock body scrolling
  }

  function closeMobileMenu() {
    $mobileMenuDrawer.removeClass("is-open");
    $mobileMenuOverlay.removeClass("is-visible");
    $hamburgerBtn.removeClass("is-active");
    $("body").css("overflow", ""); // Restore body scrolling
  }

  $hamburgerBtn.on("click", function () {
    if ($mobileMenuDrawer.hasClass("is-open")) {
      closeMobileMenu();
    } else {
      openMobileMenu();
    }
  });

  $mobileMenuClose.on("click", closeMobileMenu);
  $mobileMenuOverlay.on("click", closeMobileMenu);

  // Close drawer when any mobile nav anchor link is clicked
  $mobileMenuDrawer.find('a[href^="#"]').on("click", function () {
    closeMobileMenu();
  });

  // Auto-close drawer when resized above 1024px (desktop) with rAF throttling
  let resizeTicking = false;
  $(window).on("resize", function () {
    if (!resizeTicking) {
      window.requestAnimationFrame(function () {
        if ($(window).width() >= 1024) {
          closeMobileMenu();
        }
        resizeTicking = false;
      });
      resizeTicking = true;
    }
  });

  // Mobile Sub-menu Toggle
  $(".mobile-dropdown-toggle").on("click", function (e) {
    e.preventDefault();
    const $submenu = $(this).next(".mobile-submenu");
    const $icon = $(this).find("i");

    // Slide toggle target submenu
    $submenu.slideToggle(300);

    // Rotate Chevron
    // Rotate Chevron
    if ($icon.hasClass("ri-arrow-down-s-line")) {
      $icon.removeClass("ri-arrow-down-s-line").addClass("ri-arrow-up-s-line");
    } else {
      $icon.removeClass("ri-arrow-up-s-line").addClass("ri-arrow-down-s-line");
    }
  });

  // ==========================================================================
  // CLICK-TO-CALL / WHATSAPP DEFAULT ACTION SCRIPT
  // ==========================================================================
  $('a[href^="tel:"], a[href*="wa.me"]').on("click", function () {
    console.log("Initiating communication: " + $(this).attr("href"));
  });

  // ==========================================================================
  // INITIALIZE HERO SLIDER (Owl Carousel - Infinite, No Dots, No Arrows)
  // ==========================================================================
  const $heroSlider = $(".hero-slider");
  if ($heroSlider.length) {
    $heroSlider.owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: true,
      items: 1,
      autoplay: true,
      autoplayTimeout: 5000,
      smartSpeed: 800,
      mouseDrag: true,
      touchDrag: true,
    });
  }

  // ==========================================================================
  // INITIALIZE CLIENT LOGOS SLIDER (Owl Carousel - Auto-scroll, Draggable)
  // ==========================================================================
  const $clientsSlider = $(".clients-slider");
  if ($clientsSlider.length) {
    $clientsSlider.owlCarousel({
      loop: true,
      margin: 15,
      nav: false,
      dots: false,
      autoplay: true,
      autoplayTimeout: 2800,
      autoplayHoverPause: true,
      smartSpeed: 700,
      mouseDrag: true,
      touchDrag: true,
      responsive: {
        0: { items: 2 },
        480: { items: 3 },
        768: { items: 4 },
        992: { items: 5 },
        1200: { items: 5 },
      },
    });
  }



  // ==========================================================================
  // INITIALIZE INDUSTRIES SLIDER (Owl Carousel)
  // ==========================================================================
  const $industriesSlider = $(".industries-slider");
  if ($industriesSlider.length) {
    $industriesSlider.owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      dots: false,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      smartSpeed: 800,
      mouseDrag: true,
      touchDrag: true,
      responsive: {
        0: { items: 1 },
        576: { items: 2 },
        768: { items: 3 },
        1200: { items: 4 },
      },
    });
  }

  // ==========================================================================
  // INITIALIZE PROJECTS CAROUSEL SLIDER (Owl Carousel)
  // ==========================================================================
  const $projectsCarouselSlider = $(".projects-carousel-slider");
  if ($projectsCarouselSlider.length) {
    $projectsCarouselSlider.owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      dots: false,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      smartSpeed: 800,
      mouseDrag: true,
      touchDrag: true,
      responsive: {
        0: { items: 1, margin: 15 },   // Mobile: 1 card
        576: { items: 2, margin: 20 },  // Small Tablets/Landscape: 2 cards
        768: { items: 3, margin: 25 },  // Tablets: 3 cards
        1200: { items: 4, margin: 30 }, // Desktop: 4 cards
      },
    });
  }

  // ==========================================================================
  // INITIALIZE SERVICES CAROUSEL SLIDER (Owl Carousel — 2 per view)
  // ==========================================================================
  const $servicesCarouselSlider = $(".services-carousel-slider");
  if ($servicesCarouselSlider.length) {
    $servicesCarouselSlider.owlCarousel({
      loop: true,
      margin: 24,
      nav: false,
      dots: true,
      autoplay: true,
      autoplayTimeout: 3500,
      autoplayHoverPause: true,
      smartSpeed: 700,
      mouseDrag: true,
      touchDrag: true,
      responsive: {
        0: { items: 1 },
        576: { items: 2 },
      },
    });
  }

  // ==========================================================================
  // INITIALIZE AOS (Animate On Scroll)
  // ==========================================================================
  AOS.init({
    duration: 1000,
    easing: "ease-out-cubic",
    once: true,
    offset: 80,
  });
});
