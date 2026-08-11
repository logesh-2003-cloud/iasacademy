<?php
$current_page = basename($_SERVER['PHP_SELF']);

$canonical = "https://iaschennai.com/";

if ($current_page != "index.php" && $current_page != "") {
    $canonical .= str_replace(".php", "", $current_page);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>International Automation System | Panel Builder & Industrial Automation</title>
  <meta name="description"
    content="International Automation System offers premium, high-end Panel Building and Automation systems for modern industrial settings.">
    <link rel="canonical" href="<?php echo $canonical; ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/img/ias_logo.png">

  <!-- LCP Preload (Logo & First Hero Image) -->
  <link rel="preload" as="image" href="assets/img/ias_logo.png" fetchpriority="high">
  <link rel="preload" as="image" href="assets/img/slide_01.webp" fetchpriority="high">

  <!-- Preconnect to CDNs to reduce TTFB -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://cdn.jsdelivr.net">

  <!-- Google Fonts - Outfit for modern typography -->
  <link
    href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Roboto:wght@300;400;500;700&family=Sora:wght@400;500;600;700;800&display=swap"
    rel="stylesheet">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Remix Icon -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />

  <!-- AOS (Animate on Scroll) CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

  <!-- Owl Carousel 2 CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>



  <!-- Header / Navigation — Layout 1: Logo Left | Menu Center | Contact + Button Right -->
  <header class="header">
    <div class="header-inner">

      <!-- Logo Box (White bg, pinned left) -->
      <a href="index.php" class="logo-wrapper text-decoration-none" aria-label="IAS Home">
        <img src="assets/img/ias_logo.png" alt="IAS — Panel Builder & Industrial Automation" class="site-logo"
          loading="eager" width="300" height="266" fetchpriority="high">
      </a>

      <nav class="desktop-nav" aria-label="Main Navigation">
        <ul class="nav-menu list-inline mb-0">
          <li class="menu-item list-inline-item"><a href="index.php" class="nav-link <?php echo ($current_page == 'index.php' || $current_page == '') ? 'active' : ''; ?>">Home</a></li>
          <li class="menu-item list-inline-item"><a href="#" class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">About Us</a></li>
          <li class="menu-item list-inline-item"><a href="#" class="nav-link <?php echo ($current_page == 'services.php') ? 'active' : ''; ?>">Services</a></li>
          <li class="menu-item list-inline-item"><a href="#" class="nav-link <?php echo ($current_page == 'projects.php') ? 'active' : ''; ?>">Projects</a></li>
          <li class="menu-item list-inline-item"><a href="#" class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact Us</a></li>
        </ul>
      </nav>

      <!-- Right Side: Email | Phone | Button | Hamburger -->
      <div class="header-right d-flex align-items-center">

        <!-- Contact Block (responsive: call + email icons below 1024px) -->
        <div class="header-contact" id="headerContact">
          <!-- Call Icon -->
          <a href="tel:+919959886057" class="hdr-contact-icon hdr-contact-phone-btn text-decoration-none" aria-label="Call Us">
            <i class="ri-phone-fill"></i>
          </a>
          <!-- Email Icon -->
          <a href="mailto:ias.saravanank11@gmail.com" class="hdr-contact-icon hdr-contact-email-btn text-decoration-none" aria-label="Email Us">
            <i class="ri-mail-fill"></i>
          </a>
          <!-- Stacked: Phone + Email (Desktop Only) -->
          <div class="hdr-contact-text">
            <a href="tel:+919959886057" class="hdr-phone text-decoration-none">+91 99598 86057</a>
            <a href="mailto:ias.saravanank11@gmail.com" class="hdr-email text-decoration-none">ias.saravanank11@gmail.com</a>
          </div>
        </div>

        <!-- Get A Quote Button -->
        <a href="#" class="btn-custom-nav">
          <span><i class="ri-file-list-3-line me-2"></i> Get A Quote</span>
        </a>

        <!-- Hamburger (visible below 1024px only) -->
        <button class="hamburger-btn" aria-label="Toggle mobile menu" id="hamburgerBtn">
          <span class="hamburger-bar"></span>
          <span class="hamburger-bar"></span>
          <span class="hamburger-bar"></span>
        </button>

      </div>

    </div>
  </header>

  <!-- Mobile Sliding Menu (Right -> Left, single column, internal scroll) -->
  <div class="mobile-menu-overlay" id="mobileMenuOverlay"></div>
  <div class="mobile-menu-drawer" id="mobileMenuDrawer">
    <div class="mobile-menu-header d-flex align-items-center justify-content-between">
      <div class="mobile-logo-wrapper d-flex align-items-center">
        <img src="assets/img/ias_logo.png" alt="IAS" class="mobile-logo">
      </div>
      <button class="mobile-menu-close" aria-label="Close menu" id="mobileMenuClose">
        <i class="ri-close-line"></i>
      </button>
    </div>

    <div class="mobile-menu-body">
      <ul class="mobile-nav-menu list-unstyled mb-0">
        <li class="mobile-menu-item"><a href="index.php" class="<?php echo ($current_page == 'index.php' || $current_page == '') ? 'active' : ''; ?>">Home</a></li>
        <li class="mobile-menu-item"><a href="#" class="<?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">About Us</a></li>
        <li class="mobile-menu-item"><a href="#" class="<?php echo ($current_page == 'services.php') ? 'active' : ''; ?>">Services</a></li>
        <li class="mobile-menu-item"><a href="#" class="<?php echo ($current_page == 'projects.php') ? 'active' : ''; ?>">Projects</a></li>
        <li class="mobile-menu-item"><a href="#" class="<?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact Us</a></li>
      </ul>

      <div class="mobile-menu-footer mt-3">
        <a href="tel:+919959886057" class="mobile-contact-link d-block mb-3 text-decoration-none">
          <i class="ri-phone-fill me-2 text-primary"></i>+91 99598 86057
        </a>
        <a href="mailto:ias.saravanank11@gmail.com" class="mobile-contact-link d-block mb-4 text-decoration-none">
          <i class="ri-mail-line me-2 text-primary"></i>ias.saravanank11@gmail.com
        </a>
      </div>
    </div>
  </div>


