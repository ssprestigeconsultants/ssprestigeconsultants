/**
 * Main Interactive Scripts - S&S PRESTIGE CONSULTANTS LLP
 */

document.addEventListener('DOMContentLoaded', function () {
  'use strict';

  // 1. Floating Header Scroll Animation
  const header = document.getElementById('site-header');
  window.addEventListener('scroll', function () {
    if (window.scrollY > 30) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });

  // 2. Mobile Menu Toggle
  const mobileToggle = document.getElementById('mobile-toggle');
  const navMenu = document.querySelector('.nav-menu-wrapper');
  if (mobileToggle && navMenu) {
    mobileToggle.addEventListener('click', function () {
      navMenu.classList.toggle('mobile-open');
    });
  }

  // 3. Floating Interactive Toggle Slider in Hero
  const heroSliderToggle = document.getElementById('heroSliderToggle');
  if (heroSliderToggle) {
    heroSliderToggle.addEventListener('click', function () {
      this.classList.toggle('active');
    });
    heroSliderToggle.addEventListener('keydown', function (e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        this.classList.toggle('active');
      }
    });
  }

  // 4. Floating Frosted Glass Service Selector Tabs & Quick Consultation Roster
  const tabButtons = document.querySelectorAll('.service-tab-btn');
  const tabPanes = document.querySelectorAll('.service-tab-pane');
  const rosterRows = document.querySelectorAll('#consultationRosterTable tbody tr');
  const searchInput = document.getElementById('consultationSearchInput');

  function filterConsultationRoster(category, query) {
    const q = (query || '').toLowerCase().trim();

    rosterRows.forEach(row => {
      const rowCat = row.getAttribute('data-category');
      const rowKeywords = (row.getAttribute('data-keywords') || '').toLowerCase();
      const rowText = row.textContent.toLowerCase();

      const matchCat = (category === 'all' || !category || rowCat === category);
      const matchQuery = !q || rowKeywords.includes(q) || rowText.includes(q);

      if (matchCat && matchQuery) {
        row.style.display = '';
      } else {
        row.style.display = 'none';
      }
    });

    // Handle tab panes
    if (q) {
      // If user is searching, show matching panes
      tabPanes.forEach(pane => {
        const paneText = pane.textContent.toLowerCase();
        if (paneText.includes(q)) {
          pane.classList.add('active');
        } else {
          pane.classList.remove('active');
        }
      });
    } else if (category && category !== 'all') {
      tabPanes.forEach(pane => {
        if (pane.id === category) {
          pane.classList.add('active');
        } else {
          pane.classList.remove('active');
        }
      });
    } else {
      // All selected: show first pane as active default
      tabPanes.forEach((pane, idx) => {
        if (idx === 0) {
          pane.classList.add('active');
        } else {
          pane.classList.remove('active');
        }
      });
    }
  }

  tabButtons.forEach(button => {
    button.addEventListener('click', function () {
      const targetId = this.getAttribute('data-target');

      // Update button states
      tabButtons.forEach(btn => btn.classList.remove('active'));
      this.classList.add('active');

      const currentQuery = searchInput ? searchInput.value : '';
      filterConsultationRoster(targetId, currentQuery);
    });
  });

  if (searchInput) {
    searchInput.addEventListener('input', function () {
      const activeBtn = document.querySelector('.service-tab-btn.active');
      const currentCat = activeBtn ? activeBtn.getAttribute('data-target') : 'all';
      filterConsultationRoster(currentCat, this.value);
    });
  }

  // Pre-select service in consultation form when clicking 'View details'
  const rosterButtons = document.querySelectorAll('.btn-roster-pill');
  const serviceDropdown = document.getElementById('form-service-select');

  rosterButtons.forEach(btn => {
    btn.addEventListener('click', function () {
      const preselectVal = this.getAttribute('data-preselect');
      if (serviceDropdown && preselectVal) {
        serviceDropdown.value = preselectVal;
      }
    });
  });

  // 4. Hero Video Controls (Play/Pause & Scrubber)
  const heroVideo = document.getElementById('hero-bg-video');
  const videoToggleBtn = document.getElementById('video-toggle-btn');
  const scrubberProgress = document.getElementById('video-progress-bar');

  if (heroVideo && videoToggleBtn) {
    videoToggleBtn.addEventListener('click', function () {
      if (heroVideo.paused) {
        heroVideo.play();
        videoToggleBtn.innerHTML = '<svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><rect x="6" y="4" width="4" height="16"/><rect x="14" y="4" width="4" height="16"/></svg>';
      } else {
        heroVideo.pause();
        videoToggleBtn.innerHTML = '<svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"/></svg>';
      }
    });

    heroVideo.addEventListener('timeupdate', function () {
      if (heroVideo.duration) {
        const percent = (heroVideo.currentTime / heroVideo.duration) * 100;
        if (scrubberProgress) {
          scrubberProgress.style.width = percent + '%';
        }
      }
    });
  }

  // 5. Pakistan Income Tax Calculator Logic (Salaried & Business NTN)
  const salaryInput = document.getElementById('calc-income-input');
  const toggleSalaried = document.getElementById('calc-type-salaried');
  const toggleBusiness = document.getElementById('calc-type-business');
  const monthlyTaxOutput = document.getElementById('calc-monthly-tax');
  const annualTaxOutput = document.getElementById('calc-annual-tax');
  const netTakeHomeOutput = document.getElementById('calc-net-income');
  const effectiveRateOutput = document.getElementById('calc-effective-rate');

  let calculationMode = 'salaried'; // or 'business'

  if (toggleSalaried && toggleBusiness) {
    toggleSalaried.addEventListener('click', function () {
      calculationMode = 'salaried';
      toggleSalaried.classList.add('active');
      toggleBusiness.classList.remove('active');
      calculatePakistanTax();
    });

    toggleBusiness.addEventListener('click', function () {
      calculationMode = 'business';
      toggleBusiness.classList.add('active');
      toggleSalaried.classList.remove('active');
      calculatePakistanTax();
    });
  }

  if (salaryInput) {
    salaryInput.addEventListener('input', calculatePakistanTax);
  }

  function calculatePakistanTax() {
    if (!salaryInput) return;
    const monthlyGross = parseFloat(salaryInput.value) || 0;
    const annualGross = monthlyGross * 12;

    let annualTax = 0;

    if (calculationMode === 'salaried') {
      // Pakistan FBR Tax Slabs for Salaried Individuals
      if (annualGross <= 600000) {
        annualTax = 0;
      } else if (annualGross <= 1200000) {
        annualTax = (annualGross - 600000) * 0.05;
      } else if (annualGross <= 2200000) {
        annualTax = 30000 + (annualGross - 1200000) * 0.15;
      } else if (annualGross <= 3200000) {
        annualTax = 180000 + (annualGross - 2200000) * 0.25;
      } else if (annualGross <= 4100000) {
        annualTax = 430000 + (annualGross - 3200000) * 0.30;
      } else {
        annualTax = 700000 + (annualGross - 4100000) * 0.35;
      }
    } else {
      // Pakistan FBR Tax Slabs for Association of Persons (AOP) / Business Individuals
      if (annualGross <= 600000) {
        annualTax = 0;
      } else if (annualGross <= 1200000) {
        annualTax = (annualGross - 600000) * 0.15;
      } else if (annualGross <= 1600000) {
        annualTax = 90000 + (annualGross - 1200000) * 0.20;
      } else if (annualGross <= 2400000) {
        annualTax = 170000 + (annualGross - 1600000) * 0.30;
      } else if (annualGross <= 3200000) {
        annualTax = 410000 + (annualGross - 2400000) * 0.40;
      } else {
        annualTax = 730000 + (annualGross - 3200000) * 0.45;
      }
    }

    const monthlyTax = annualTax / 12;
    const monthlyNet = monthlyGross - monthlyTax;
    const effectiveRate = annualGross > 0 ? ((annualTax / annualGross) * 100).toFixed(1) : 0;

    if (monthlyTaxOutput) monthlyTaxOutput.textContent = 'PKR ' + Math.round(monthlyTax).toLocaleString();
    if (annualTaxOutput) annualTaxOutput.textContent = 'PKR ' + Math.round(annualTax).toLocaleString();
    if (netTakeHomeOutput) netTakeHomeOutput.textContent = 'PKR ' + Math.round(monthlyNet).toLocaleString();
    if (effectiveRateOutput) effectiveRateOutput.textContent = effectiveRate + '%';
  }

  // Run initial calculation
  calculatePakistanTax();

  // 6. Smooth Scroll for internal anchors
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });
});
