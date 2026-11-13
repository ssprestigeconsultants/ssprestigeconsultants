# SS Prestige Consultants Website Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Create a high-converting, trust-reducing WordPress website for `ssprestigeconsultants.com` on Hostinger, featuring a floating frosted glass UI, Withum-inspired video hero, Google Sans typography, electric trust blue palette, and full service matrix from virtualaccountants.pk and urcapk.com.

**Architecture:** Custom modern WordPress theme (`ssprestige-theme`) built with semantic HTML5, CSS custom properties (glassmorphism tokens), Google Sans web fonts, video background controls, and interactive consultation tools. Verified locally first via browser automation before deploying to Hostinger WordPress.

**Tech Stack:** WordPress (PHP/CMS), Vanilla JavaScript (no bloat, high speed), Modern CSS (CSS Grid, Flexbox, backdrop-filter, animate.css micro-animations), Google Sans typography, SVG Lucide/Heroicons.

**Spec:** `d:\ssprestigeconsultants\docs\superpowers\specs\2026-11-14-ssprestige-website-design.md`

## Global Constraints
- Primary Blue: `#1A6BFF` (Vibrant electric royal blue)
- Typography: `Google Sans`, `Product Sans`, sans-serif
- Design: Floating frosted glass cards (`backdrop-filter: blur(20px)`), floating rounded navbar (`border-radius: 9999px`)
- Reference Synthesis: Comprehensive coverage of all pages/services from `virtualaccountants.pk` and `urcapk.com`
- Hostinger Environment: Build via WordPress on Hostinger domain `ssprestigeconsultants.com` using the built-in browser for all interactions, prompting user when authentication is required.

## Review Focus
1. **Glassmorphism Contrast:** Ensure text against frosted glass cards meets WCAG AA 4.5:1 contrast in all viewports.
2. **Video Hero Performance:** Autoplay muted with low-bandwidth fallback poster image and mobile battery-saver compatibility.
3. **Floating Navbar Mobile Usability:** Does not obscure viewport content on small screens (collapses into an accessible frosted glass drawer).
4. **Frictionless Trust Journey:** CTAs, WhatsApp trigger, and consultation booking form clearly explain confidentiality, turnaround, and deliverables.
5. **Interactive Tools:** Pakistan Tax Calculator and Service Selector provide immediate feedback without page reload.

---

### Task 1: Design System & Core Assets Setup
**Files:**
- Create: `theme/assets/css/variables.css`
- Create: `theme/assets/css/glassmorphism.css`
- Create: `theme/assets/css/typography.css`
- Create: `theme/assets/js/main.js`

- [ ] Set up CSS custom properties for Electric Blue (`#1A6BFF`), Dark Slate (`#0F172A`), Background (`#F8FAFC`), and frosted glass tokens (`--glass-bg`, `--glass-border`, `--glass-blur`).
- [ ] Configure Google Sans font-face imports and typographic scale.
- [ ] Integrate lightweight animation utilities inspired by animate.css for smooth entrance transitions.

### Task 2: Floating Rounded Navbar Component
**Files:**
- Create: `theme/template-parts/header/floating-nav.php`
- Modify: `theme/header.php`
- Modify: `theme/assets/css/glassmorphism.css`

- [ ] Build pill-shaped floating navbar with rounded corners (`border-radius: 9999px`) and frosted glass styling.
- [ ] Implement mega-menu for services: Tax & FBR, SECP Registration, Accounting & Bookkeeping, Audit & Assurance, Corporate Advisory & International Desk.
- [ ] Add prominent "Book Free Consultation" CTA button with glowing hover state and responsive mobile hamburger trigger.

### Task 3: Elevated Hero Section with Video Background
**Files:**
- Create: `theme/template-parts/hero/hero-section.php`
- Create: `theme/assets/js/hero-video.js`

- [ ] Implement dual-zone hero layout:
  - Left column: Authority headline, confidence proof points (Licensed CAs, SECP/FBR compliant, 100% NDA guarantee), and dual CTA buttons.
  - Right column: Rounded organic frosted glass container embedding video background with custom play/pause/scrubber controls.
- [ ] Verify video fallback poster image and responsive scaling.

### Task 4: Interactive Floating Frosted Glass Service Selector
**Files:**
- Create: `theme/template-parts/home/service-selector.php`
- Create: `theme/assets/js/service-tabs.js`

- [ ] Create category tabs:
  - 1. Tax & FBR Compliance
  - 2. SECP Company Registration
  - 3. Cloud Bookkeeping & Payroll
  - 4. Audit & Assurance
  - 5. Corporate Legal Advisory & International Desk
- [ ] Implement floating frosted glass cards displaying deliverables, estimated turnaround, and direct "Book Service" action buttons.

### Task 5: Consultation Trust Framework & Interactive Calculators
**Files:**
- Create: `theme/template-parts/home/trust-framework.php`
- Create: `theme/template-parts/tools/tax-calculator.php`
- Create: `theme/assets/js/tax-calculator.js`

- [ ] Implement "4 Pillars of Financial Trust": Bank-Grade Security, Big 4/ICAP Licensed Advisory, Transparent Fixed Pricing, and Dedicated Client Director.
- [ ] Build interactive Pakistan Salary & Business Tax Calculator providing instant liability estimates to drive qualified consultations.
- [ ] Add 3-step onboarding flow: 15-Min Free Assessment -> Scope & NDA -> Dedicated CA & Live Tracking.

### Task 6: Dedicated Detail Pages (Synthesizing Virtual Accountants & URCA)
**Files:**
- Create: `theme/page-services.php`
- Create: `theme/page-about.php`
- Create: `theme/page-contact.php`
- Create: `theme/page-client-hub.php`

- [ ] Build in-depth service detail templates covering all regulatory and compliance offerings from both reference websites.
- [ ] Create "About Us" page detailing firm credentials, leadership, code of ethics, and national presence.
- [ ] Build "Client Hub & Consultation Booking" page with calendar booking, RFP upload, and direct WhatsApp routing.

### Task 7: Hostinger WordPress Setup & Live Browser Deployment
**Files:**
- Create: `theme/style.css`
- Create: `theme/index.php`
- Create: `theme/functions.php`

- [ ] Package `ssprestige-theme` for WordPress.
- [ ] Open Hostinger hPanel / WordPress admin in the built-in browser, alerting user if credentials or sign-in are needed.
- [ ] Install and activate theme on `ssprestigeconsultants.com`.
- [ ] Verify SSL, DNS, and responsive UI live on the web.
