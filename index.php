<?php

function render_client_logo($name, $alt)
{
  $webp = "assets/img/clients/{$name}.webp";
  if (file_exists($webp)) {
    echo '<img src="' . $webp . '" alt="' . htmlspecialchars($alt) . ' Logo" class="img-fluid client-logo-img" loading="lazy" width="200" height="80">';
  } else {
    echo '<span class="client-logo-fallback text-black fw-bold">' . htmlspecialchars($alt) . '</span>';
  }
}
include 'common/header.php';
?>

<!-- Hero Section (Owl Carousel, infinite slide, no arrows, no video, draggable) -->
<section id="hero" class="section-hero p-0">
  <div class="hero-slider owl-carousel owl-theme">
    <!-- Slide 1 -->
    <div class="hero-slide" style="background-image: url('assets/img/slide_01.webp');">
      <div class="hero-overlay"></div>
      <div class="container-fluid px-3 px-md-5 position-relative z-3">
        <div class="row">
          <div class="col-lg-8" data-aos="fade-up" data-aos-duration="1000">
            <!-- <span class="hero-badge mb-3 d-inline-block text-uppercase tracking-wider">Premium Security Architecture</span> -->
            <h1 class="hero-title mb-4">Unique & Powerful Automation Solutions</h1>
            <p class="hero-desc mb-5">
              Welcome to International Automation System, a decade young and energetic Panel builder & industrial automation firm in Chennai, India. We deliver complete solutions for the Industrial Sector.
            </p>
            <div class="hero-actions">
              <a href="#" class="btn-custom"><span>Get A Quote</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="hero-slide" style="background-image: url('assets/img/slide_02.webp');">
      <div class="hero-overlay"></div>
      <div class="container-fluid px-3 px-md-5 position-relative z-3">
        <div class="row">
          <div class="col-lg-8" data-aos="fade-up" data-aos-duration="1000">
            <!-- <span class="hero-badge mb-3 d-inline-block text-uppercase tracking-wider">Engineering Excellence</span> -->
            <h1 class="hero-title mb-4">Expert Workers & Quality Work</h1>
            <p class="hero-desc mb-5">
              Quality is never an accident; it is always the result of high intention, sincere effort, intelligent direction and skillful execution. We provide 24/7 support for our customers.
            </p>
            <div class="hero-actions">
              <a href="#" class="btn-custom"><span>Get A Free Quote</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: About J3 Apexion (70px spacing, image-text hybrid, AOS animated) -->
<section id="about" class="section-about py-5">
  <div class="container-fluid px-3 px-md-5">
    <div class="row align-items-center gy-5">
      <!-- Column 1: Image (placed on left) -->
      <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
        <div class="about-image-wrapper position-relative">
          <div class="about-image-border"></div>
          <img src="assets/img/about.webp"
            alt="Engineering Safer, Smarter & Sustainable Infrastructure by J3 Apexion" class="img-fluid about-img"
            loading="lazy" width="1000" height="667">
        </div>
      </div>
      <!-- Column 2: Text -->
      <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
        <div class="about-content ps-lg-4">
          <div class="about-meta mb-3">
            <span class="about-tag">International Automation System</span>
          </div>
          <h2 class="section-heading mb-4">Panel Builder & Industrial Automation Sector</h2>
          <p class="section-desc mb-3">
            <strong>International Automation System</strong> is a professional firm in the field of Panel Building, field service, control and Automation sector. We believe that commitment to Quality enables us to deliver solutions that give our customers 'Total Satisfaction'. We specialize in CNC (Computerized Numerical Control), PLC (Programmable Logical Control), and SPM (Special Purpose Machine).
          </p>
          <p class="section-desc mb-0">
            With an experienced team of engineers having expertise in proven technologies, we are able to provide the best of Industry Standards. Technical expertise in latest technology added with understanding of the business process enables us to deliver end-to-end Solutions that solve the needs of our Customers. Our team is a right mix of management, technical and administrative personnel.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Section: What We Do (Complete MEP & Fire Protection Solutions) -->
<section id="services" class="section-what-we-do p-0">
  <div class="container-fluid p-0">
    <div class="row g-0 align-items-stretch">

      <!-- Left Column: Content Block with Solid Primary Background -->
      <div class="col-lg-7 bg-primary text-white p-5 d-flex align-items-center">
        <div class="what-we-do-content py-4 w-100" data-aos="fade-right" data-aos-duration="1000">
          <div class="services-meta mb-3">
            <span class="services-tag text-gold">What We Do</span>
          </div>
          <h2 class="section-heading mb-4 text-white">Complete Panel Building &amp; Automation Solutions</h2>
          <p class="section-desc text-white-80 mb-4">
            We deliver comprehensive engineering solutions covering panel building, industrial automation, field service, and control systems for a wide range of industries.
          </p>

          <h4 class="mb-3 text-gold fs-5">Our Core Services:</h4>

          <!-- 2-Column List with Icons -->
          <div class="row gy-3 mb-4">
            <div class="col-sm-6">
              <div class="d-flex align-items-center service-list-item">
                <span class="check-icon-circle me-3"><span class="inner-dot"></span></span>
                <span class="service-name">Automobile Industry Automation</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center service-list-item">
                <span class="check-icon-circle me-3"><span class="inner-dot"></span></span>
                <span class="service-name">Marine Industry Automation</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center service-list-item">
                <span class="check-icon-circle me-3"><span class="inner-dot"></span></span>
                <span class="service-name">Chemical Industry Automation</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center service-list-item">
                <span class="check-icon-circle me-3"><span class="inner-dot"></span></span>
                <span class="service-name">Foundry Industry Automation</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center service-list-item">
                <span class="check-icon-circle me-3"><span class="inner-dot"></span></span>
                <span class="service-name">Cement Industry Automation</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center service-list-item">
                <span class="check-icon-circle me-3"><span class="inner-dot"></span></span>
                <span class="service-name">Food Industry Automation</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center service-list-item">
                <span class="check-icon-circle me-3"><span class="inner-dot"></span></span>
                <span class="service-name">CNC Systems</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center service-list-item">
                <span class="check-icon-circle me-3"><span class="inner-dot"></span></span>
                <span class="service-name">PLC Systems</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center service-list-item">
                <span class="check-icon-circle me-3"><span class="inner-dot"></span></span>
                <span class="service-name">SPM (Special Purpose Machine)</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center service-list-item">
                <span class="check-icon-circle me-3"><span class="inner-dot"></span></span>
                <span class="service-name">24/7 Field Service & Support</span>
              </div>
            </div>
          </div>

          <div class="d-flex flex-wrap gap-3 mt-4">
            <a href="#" class="btn-custom btn-on-gold">
              <span>Know More <i class="ri-arrow-right-line ms-2"></i></span>
            </a>
            
          </div>

        </div>
      </div>

      <!-- Right Column: Image (Placed on right, filling height) -->
      <div class="col-lg-5 position-relative">
        <div class="what-we-do-img-wrapper w-100">
          <img src="assets/img/service-1.webp" alt="Complete Automation Solutions by International Automation System"
            class="what-we-do-img" loading="lazy" width="1000" height="667">
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Section: Why Choose Us (Why Choose J3 Apexion) -->
<section id="why-choose-us" class="section-why-choose py-5 bg-dark-theme">
  <div class="container-fluid px-3 px-md-5">

    <!-- Section Header (Split Layout with Heading and Image) -->
    <div class="row align-items-center mb-5 gy-4" data-aos="fade-up" data-aos-duration="1000">
      <div class="col-lg-6">
        <div class="why-choose-meta mb-3">
          <span class="why-choose-tag text-gold">Why Choose IAS</span>
        </div>
        <h2 class="section-heading mb-3 text-white">Your Trusted Automation Partner</h2>
        <p class="section-desc text-light-gray mb-0">
          We combine advanced engineering expertise with rigorous safety compliance to deliver reliable, end-to-end automation systems tailored for demanding environments.
        </p>
      </div>
      <div class="col-lg-6">
        <div class="why-header-img-wrapper">
          <img src="assets/img/slide_03.webp" alt="IAS Automation Engineering" class="why-header-img" loading="lazy" width="600" height="280">
        </div>
      </div>
    </div>

    <!-- 4-Column Grid of Sharp Dark Cards -->
    <div class="row g-0 why-border-grid mt-4">
      
      <!-- Card 1: Engineering Expertise -->
      <div class="col-xl-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="0">
        <div class="why-dark-card">
          <div class="why-dark-card-icon"><i class="ri-settings-3-line"></i></div>
          <h3 class="why-dark-card-title">25 Years Experience</h3>
          <p class="why-dark-card-desc">Highly skilled professionals with expertise in industrial automation systems and panel building.</p>
        </div>
      </div>

      <!-- Card 2: End-to-End Project Execution -->
      <div class="col-xl-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
        <div class="why-dark-card">
          <div class="why-dark-card-icon"><i class="ri-team-line"></i></div>
          <h3 class="why-dark-card-title">Expert Workers</h3>
          <p class="why-dark-card-desc">We are proud to say we have qualified and expert workers with us for complete execution.</p>
        </div>
      </div>

      <!-- Card 3: Compliance & Safety Focus -->
      <div class="col-xl-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <div class="why-dark-card">
          <div class="why-dark-card-icon"><i class="ri-medal-line"></i></div>
          <h3 class="why-dark-card-title">Quality Work</h3>
          <p class="why-dark-card-desc">Quality is never an accident; it is the result of high intention, sincere effort, and skillful execution.</p>
        </div>
      </div>

      <!-- Card 4: Customized Solutions -->
      <div class="col-xl-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
        <div class="why-dark-card">
          <div class="why-dark-card-icon"><i class="ri-tools-line"></i></div>
          <h3 class="why-dark-card-title">Customized Solutions</h3>
          <p class="why-dark-card-desc">Tailored systems designed to meet the unique requirements of industrial and commercial projects.</p>
        </div>
      </div>

      <!-- Card 5: Quality & Reliability -->
      <div class="col-xl-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
        <div class="why-dark-card">
          <div class="why-dark-card-icon"><i class="ri-award-line"></i></div>
          <h3 class="why-dark-card-title">Proven Technologies</h3>
          <p class="why-dark-card-desc">Use of proven technologies, premium quality materials, and industry best practices.</p>
        </div>
      </div>

      <!-- Card 6: Timely Project Delivery -->
      <div class="col-xl-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
        <div class="why-dark-card">
          <div class="why-dark-card-icon"><i class="ri-money-dollar-circle-line"></i></div>
          <h3 class="why-dark-card-title">Best Pricing Strategy</h3>
          <p class="why-dark-card-desc">Best pricing strategy with superior quality of services has helped us build strong relationships.</p>
        </div>
      </div>

      <!-- Card 7: Dedicated After-Sales Support -->
      <div class="col-xl-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
        <div class="why-dark-card">
          <div class="why-dark-card-icon"><i class="ri-customer-service-2-line"></i></div>
          <h3 class="why-dark-card-title">24/7 Support</h3>
          <p class="why-dark-card-desc">We are always there for our customer to listen actively and take the time to fully understand.</p>
        </div>
      </div>

      <!-- Card 8: Total Satisfaction -->
      <div class="col-xl-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
        <div class="why-dark-card">
          <div class="why-dark-card-icon"><i class="ri-thumb-up-line"></i></div>
          <h3 class="why-dark-card-title">Total Satisfaction</h3>
          <p class="why-dark-card-desc">Commitment to Quality enables us to deliver solutions that give our customers total satisfaction.</p>
        </div>
      </div>

    </div>
  </div>
</section>



<!-- Section: Featured Projects -->
<section id="projects" class="section-projects py-5 bg-white">
  <div class="container-fluid px-3 px-md-5">
    <!-- Header of the section -->
    <div class="row mb-5" data-aos="fade-up" data-aos-duration="1000">
      <div class="col-12 text-center">
        <div class="projects-meta mb-3 justify-content-center">
          <span class="projects-tag text-primary">Featured Projects</span>
        </div>
        <h2 class="section-heading mb-0 text-black">Our Completed Projects</h2>
      </div>
    </div>

    <!-- Projects Tiles Grid (4 Columns, Interactive Overlays) -->
    <div class="row g-4">
      <!-- Project 1 -->
      <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="0" data-aos-duration="800">
        <div class="project-card-tile">
          <div class="project-tile-img-wrapper">
            <img src="assets/img/blog-1.webp"
              alt="Automobile Plant Automation by IAS" loading="lazy">
          </div>
          <div class="project-tile-overlay">
            <span class="project-tile-category">Manufacturing</span>
            <h3 class="project-tile-title">Industrial Fire Hydrant & Sprinkler System</h3>
            <div class="project-tile-details">
              <div class="project-tile-detail-item">
                <span class="tile-label"><i class="ri-map-pin-line me-2"></i>Location:</span>
                <span class="tile-value">Manufacturing Plant, Chennai</span>
              </div>
              <div class="project-tile-detail-item mt-2">
                <span class="tile-label"><i class="ri-settings-4-line me-2"></i>Scope:</span>
                <span class="tile-value">Installation, Testing & Commissioning</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project 2 -->
      <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
        <div class="project-card-tile">
          <div class="project-tile-img-wrapper">
            <img src="assets/img/blog-2.webp" alt="Logistics Warehouse Automation by IAS"
              loading="lazy">
          </div>
          <div class="project-tile-overlay">
            <span class="project-tile-category">Logistics</span>
            <h3 class="project-tile-title">Warehouse Fire Protection System</h3>
            <div class="project-tile-details">
              <div class="project-tile-detail-item">
                <span class="tile-label"><i class="ri-map-pin-line me-2"></i>Location:</span>
                <span class="tile-value">Logistics Facility, Bangalore</span>
              </div>
              <div class="project-tile-detail-item mt-2">
                <span class="tile-label"><i class="ri-settings-4-line me-2"></i>Scope:</span>
                <span class="tile-value">Design, Supply & Commissioning</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project 3 -->
      <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
        <div class="project-card-tile">
          <div class="project-tile-img-wrapper">
            <img src="assets/img/blog-3.webp" alt="Marine Industry Control Panels by IAS" loading="lazy">
          </div>
          <div class="project-tile-overlay">
            <span class="project-tile-category">Commercial</span>
            <h3 class="project-tile-title">Marine Industry Control Panels</h3>
            <div class="project-tile-details">
              <div class="project-tile-detail-item">
                <span class="tile-label"><i class="ri-map-pin-line me-2"></i>Location:</span>
                <span class="tile-value">Shipyard, Chennai</span>
              </div>
              <div class="project-tile-detail-item mt-2">
                <span class="tile-label"><i class="ri-settings-4-line me-2"></i>Scope:</span>
                <span class="tile-value">Panel Building & Installation</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project 4 -->
      <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
        <div class="project-card-tile">
          <div class="project-tile-img-wrapper">
            <img src="assets/img/blog-4.webp" alt="Food Industry Automation by IAS" loading="lazy">
          </div>
          <div class="project-tile-overlay">
            <span class="project-tile-category">Healthcare</span>
            <h3 class="project-tile-title">Food Industry Automation</h3>
            <div class="project-tile-details">
              <div class="project-tile-detail-item">
                <span class="tile-label"><i class="ri-map-pin-line me-2"></i>Location:</span>
                <span class="tile-value">Food Processing Plant, Kochi</span>
              </div>
              <div class="project-tile-detail-item mt-2">
                <span class="tile-label"><i class="ri-settings-4-line me-2"></i>Scope:</span>
                <span class="tile-value">PLC Programming & Commissioning</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-5" data-aos="fade-up" data-aos-duration="1000">
      <div class="col-12 text-center">
        <a href="#" class="btn-custom">
          <span>More Projects <i class="ri-arrow-right-line ms-2"></i></span>
        </a>
      </div>
    </div>

  </div>
</section>

<!-- Section: Industries We Serve -->
<section id="industries" class="section-industries py-5 bg-light">
  <div class="container-fluid px-3 px-md-5">

    <!-- Header -->
    <div class="row mb-5" data-aos="fade-up" data-aos-duration="1000">
      <div class="col-12 text-center">
        <div class="industries-meta mb-3 justify-content-center">
          <span class="industries-tag">Industries We Serve</span>
        </div>
        <h2 class="section-heading mb-0 text-black">Engineering Safety Across Diverse Sectors</h2>
      </div>
    </div>

    <!-- Industry Carousel Slider -->
    <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
      <div class="col-12">
        <div class="industries-slider owl-carousel owl-theme">
          <?php
          $industries = [
            ["name" => "Automobile Industry", "img" => "service-1.webp"],
            ["name" => "Marine Industry", "img" => "service-2.webp"],
            ["name" => "Chemical Industry", "img" => "service-3.webp"],
            ["name" => "Foundry Industry", "img" => "service-4.webp"],
            ["name" => "Cement Industry", "img" => "service-5.webp"],
            ["name" => "Food Industry", "img" => "service-6.webp"],
            ["name" => "Manufacturing", "img" => "blog-5.webp"],
            ["name" => "Civil", "img" => "blog-6.webp"],
            ["name" => "Real Estate", "img" => "about.webp"],
            ["name" => "Industrial Automation", "img" => "slide_03.webp"]
          ];

          foreach ($industries as $ind) {
            echo '
            <div class="industry-slide-card">
              <div class="industry-slide-img-wrapper">
                <img src="assets/img/' . $ind['img'] . '" alt="' . htmlspecialchars($ind['name']) . ' by J3 Apexion" class="industry-slide-img" loading="lazy" width="400" height="300">
                <div class="industry-slide-tag">' . htmlspecialchars($ind['name']) . '</div>
              </div>
            </div>';
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     Section 1.5: Client Logos (Owl Carousel, draggable)
     ============================================================ -->
<section class="section-clients">
  <div class="container-fluid px-3 px-md-5">
    <!-- Section Header -->
    <div class="row mb-5" data-aos="fade-up" data-aos-duration="1000">
      <div class="col-12 text-center">
        <div class="clients-meta mb-3 justify-content-center">
          <span class="clients-tag">Trusted By Industry Leaders</span>
        </div>
        <h2 class="section-heading text-black mb-3">Delivering Engineering Excellence Across Industries</h2>
        <p class="clients-desc max-w-800 mx-auto">
          Our solutions are trusted by industrial, commercial, educational, healthcare, and residential clients for
          their critical fire protection and MEP infrastructure requirements.
        </p>
      </div>
    </div>

    <!-- Client Logos Owl Carousel -->
    <div class="clients-slider owl-carousel owl-theme" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
      <div class="client-logo-item"><img src="assets/img/clients/audco.webp" alt="Audco Valves By Flowserve Logo" class="img-fluid client-logo-img" loading="lazy" width="200" height="80"></div>
      <div class="client-logo-item"><img src="assets/img/clients/gestamp.webp" alt="Gestamp Logo" class="img-fluid client-logo-img" loading="lazy" width="200" height="80"></div>
      <div class="client-logo-item"><img src="assets/img/clients/hincol.webp" alt="Hincol Logo" class="img-fluid client-logo-img" loading="lazy" width="200" height="80"></div>
      <div class="client-logo-item"><img src="assets/img/clients/icmpl.webp" alt="ICMPL Logo" class="img-fluid client-logo-img" loading="lazy" width="200" height="80"></div>
      <div class="client-logo-item"><img src="assets/img/clients/jeya.webp" alt="Jeyachandran Textiles Logo" class="img-fluid client-logo-img" loading="lazy" width="200" height="80"></div>
      <div class="client-logo-item"><img src="assets/img/clients/SDS Ramcides.webp" alt="SDS Ramcides CropScience Logo" class="img-fluid client-logo-img" loading="lazy" width="200" height="80"></div>
      <div class="client-logo-item"><img src="assets/img/clients/eskay.webp" alt="Eskay Cartons Logo" class="img-fluid client-logo-img" loading="lazy" width="200" height="80"></div>
      <div class="client-logo-item"><img src="assets/img/clients/rane.webp" alt="Rane Logo" class="img-fluid client-logo-img" loading="lazy" width="200" height="80"></div>
      <div class="client-logo-item"><img src="assets/img/clients/saravana.webp" alt="Saravana Stores Logo" class="img-fluid client-logo-img" loading="lazy" width="200" height="80"></div>
      <div class="client-logo-item"><img src="assets/img/clients/seah.webp" alt="SeAH Logo" class="img-fluid client-logo-img" loading="lazy" width="200" height="80"></div>
      <div class="client-logo-item"><img src="assets/img/clients/steel.webp" alt="Steel Stripes Wheels Limited Logo" class="img-fluid client-logo-img" loading="lazy" width="200" height="80"></div>
      <div class="client-logo-item"><img src="assets/img/clients/star.webp" alt="Star Boxes India Logo" class="img-fluid client-logo-img" loading="lazy" width="200" height="80"></div>
      <div class="client-logo-item"><img src="assets/img/clients/tafe.webp" alt="TAFE Logo" class="img-fluid client-logo-img" loading="lazy" width="200" height="80"></div>
      <div class="client-logo-item"><img src="assets/img/clients/ucall.webp" alt="UCAL Fuel Systems Limited Logo" class="img-fluid client-logo-img" loading="lazy" width="200" height="80"></div>
    </div>
  </div>
</section>

<!-- ============================================================
     Section 1.6: Call To Action (Fixed BG, Emerald/Copper)
     ============================================================ -->
<section class="section-cta" style="background-image: url('assets/img/cta_bg.webp');">
  <!-- Overlay -->
  <div class="cta-overlay"></div>

  <div class="container-fluid px-3 px-md-5 position-relative" style="z-index:3;">
    <div class="row align-items-center justify-content-center gx-lg-5 gy-5">

      <!-- Left: Heading & Description -->
      <div class="col-lg-7" data-aos="fade-right" data-aos-duration="1000">
        <div class="cta-meta mb-3">
          <span class="cta-tag">Call To Action</span>
        </div>
        <h2 class="cta-heading">Let's Build Smarter<br>Automated Facilities Together</h2>
        <p class="cta-desc mt-4">
          Partner with <strong>International Automation System</strong> for reliable Panel Building and Industrial Automation Solutions tailored to your project requirements. Our experienced team ensures seamless execution —
          from design and procurement to installation, testing, commissioning, and long-term maintenance.
        </p>
      </div>

      <!-- Right: CTA Buttons -->
      <div class="col-lg-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="150">
        <div class="cta-box">
          <p class="cta-box-headline">Request a Consultation Today</p>
          <a href="#" class="btn-custom mb-3">
            <span><i class="ri-file-list-3-line me-2"></i>Get a Quote</span>
          </a>
          <a href="#" class="btn-custom btn-custom-outline mb-3">
            <span><i class="ri-calendar-check-line me-2"></i>Schedule a Site Visit</span>
          </a>
          <a href="#" class="btn-custom btn-custom-outline">
            <span><i class="ri-customer-service-2-line me-2"></i>Talk to Our Experts</span>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>



<?php include 'common/footer.php'; ?>


