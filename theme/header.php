<?php
/**
 * Header Template - S&S PRESTIGE CONSULTANTS LLP
 *
 * @package SS_Prestige_Consultants
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "AccountingService",
        "@id": "https://ssprestigeconsultants.com/#organization",
        "name": "S&S PRESTIGE CONSULTANTS LLP",
        "alternateName": "S&S Prestige Consultants",
        "legalName": "S&S PRESTIGE CONSULTANTS LLP",
        "url": "https://ssprestigeconsultants.com/",
        "logo": "https://ssprestigeconsultants.com/wp-content/themes/ssprestige-theme/assets/images/logo.png",
        "email": "info@ssprestigeconsultants.com",
        "telephone": "+923464439391",
        "taxID": "I107949-3",
        "identifier": "0316515",
        "description": "Licensed Chartered Accountancy & corporate consultancy LLP providing FBR income and sales tax compliance, SECP company registration, International Desk FDI, Overseas Pakistanis Section 7E clearances, audit, and ERP transformation in Pakistan.",
        "foundingDate": "2025-11-24",
        "founder": {
          "@type": "Person",
          "name": "Sunil Babar",
          "jobTitle": "Managing Partner & Senior Transformation Advisor",
          "alumniOf": "Institute of Chartered Accountants of Pakistan (ICAP)"
        },
        "address": [
          {
            "@type": "PostalAddress",
            "streetAddress": "2nd Floor, Farooq Plaza, Kurri Road, Jinnah Avenue",
            "addressLocality": "Islamabad",
            "addressRegion": "ICT",
            "addressCountry": "PK"
          },
          {
            "@type": "PostalAddress",
            "streetAddress": "Hunza Electronics, Naseem Shopping Center, Cinema Bazaar, Airport Road",
            "addressLocality": "Gilgit",
            "addressRegion": "Gilgit-Baltistan",
            "addressCountry": "PK"
          }
        ],
        "areaServed": [
          { "@type": "Country", "name": "Pakistan" },
          { "@type": "Country", "name": "United Kingdom" },
          { "@type": "Country", "name": "United States" },
          { "@type": "Country", "name": "United Arab Emirates" }
        ],
        "hasOfferCatalog": {
          "@type": "OfferCatalog",
          "name": "Financial & Advisory Services",
          "itemListElement": [
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Taxation & FBR IRIS Compliance" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "SECP Company & LLP Registration" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "International Desk & Foreign Direct Investment (FDI)" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Overseas Pakistanis Section 7E Property Tax Advisory" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Statutory & Donor Grant Audits" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Virtual CFO & Enterprise ERP Architecture" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Pakistan Single Window (PSW) & WeBOC Customs Licensing" } }
          ]
        }
      }
    ]
  }
  </script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Ambient Backdrop Glows for Frosted Glass Depth -->
<div class="ambient-glow-wrapper" aria-hidden="true">
  <div class="ambient-blob ambient-blob-1"></div>
  <div class="ambient-blob ambient-blob-2"></div>
  <div class="ambient-blob ambient-blob-3"></div>
</div>

<!-- Floating Rounded Rectangle Header -->
<header class="floating-header" id="site-header">
  <div class="floating-navbar-container">
    
    <!-- Brand Logo -->
    <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-brand" aria-label="S&S Prestige Consultants LLP Home">
      <div class="brand-icon-box">S&amp;S</div>
      <div class="brand-text-group">
        <span class="brand-name">S&amp;S PRESTIGE</span>
        <span class="brand-tagline">Consultants LLP • Reg # 0316515</span>
      </div>
    </a>

    <!-- Desktop Navigation Menu -->
    <nav class="nav-menu-wrapper" aria-label="Main Navigation">
      <ul class="nav-menu">
        <li class="nav-item">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link">Home</a>
        </li>
        <li class="nav-item has-dropdown">
          <a href="<?php echo esc_url(home_url('/services/')); ?>" class="nav-link">
            Services
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
          </a>
          <ul class="nav-dropdown">
            <li><a href="<?php echo esc_url(home_url('/services/#service-tax')); ?>" class="dropdown-link">Taxation &amp; FBR Compliance</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/#service-secp')); ?>" class="dropdown-link">SECP Company &amp; LLP Registration</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/#service-international')); ?>" class="dropdown-link">International Desk &amp; FDI</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/#service-overseas')); ?>" class="dropdown-link">Overseas Pakistanis Desk</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/#service-accounting')); ?>" class="dropdown-link">Cloud Bookkeeping &amp; BPO</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/#service-audit')); ?>" class="dropdown-link">Audit &amp; Assurance</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/#service-cfo')); ?>" class="dropdown-link">Virtual CFO &amp; ERP Advisory</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/#service-npo')); ?>" class="dropdown-link">NPO &amp; Development Sector</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/#service-trade')); ?>" class="dropdown-link">Trade &amp; WeBOC Licensing</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/#service-eor')); ?>" class="dropdown-link">Employer of Record (EoR) &amp; HR</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/#service-salestax')); ?>" class="dropdown-link">Provincial Sales Tax Matrix</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/#service-compare')); ?>" class="dropdown-link">Entity Selection Comparison</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/#service-insights')); ?>" class="dropdown-link">Regulatory Insights Hub</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="<?php echo esc_url(home_url('/client-assurance/')); ?>" class="nav-link">Client Assurance</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo esc_url(home_url('/about/')); ?>" class="nav-link">Leadership</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo esc_url(home_url('/tax-calculator/')); ?>" class="nav-link">
            Tax Calculator
            <span class="nav-badge-pill">Free</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="nav-link">Offices</a>
        </li>
      </ul>
    </nav>

    <!-- Nav Actions -->
    <div class="nav-actions">
      <a href="https://wa.me/923464439391?text=Hello%20SS%20Prestige%20Consultants%2C%20I%20would%20like%20to%20inquire%20about%20your%20services." 
         class="btn-nav-outline" target="_blank" rel="noopener">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        <span>+92 346 4439391</span>
      </a>
      <a href="#consultation" class="btn-primary-glow">
        <span>Book Consultation</span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
      <button class="mobile-nav-toggle" id="mobile-toggle" aria-label="Toggle Navigation Menu">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
      </button>
    </div>

  </div>
</header>
