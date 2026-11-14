<?php
/**
 * Template Name: Services Overview
 *
 * @package SS_Prestige_Consultants
 */

get_header(); ?>

<main id="main-content" class="site-main" style="padding-top: clamp(100px, 12vw, 140px); padding-bottom: 80px;">
  <div class="container">
    
    <!-- Hero / Eyebrow Header -->
    <div class="section-title-wrap" style="text-align: center; margin-bottom: 48px;">
      <span class="section-eyebrow">Comprehensive Practice Areas</span>
      <h1 class="section-heading" style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 800; margin-bottom: 16px;">
        Strategic Financial, Tax &amp; Corporate Advisory
      </h1>
      <p class="section-subtext" style="max-width: 840px; margin: 0 auto; color: #64748B; font-size: clamp(14px, 1.6vw, 16.5px); line-height: 1.65;">
        Complete corporate governance, statutory compliance, tax optimization, and financial architecture. Combining domestic regulatory mastery with global cross-border standards for corporations, overseas Pakistanis, foreign investors, and non-profits.
      </p>
    </div>

    <!-- Quick Jump Sub-Navigation -->
    <div style="display: flex; align-items: center; justify-content: center; gap: 8px; flex-wrap: wrap; margin-bottom: 48px;">
      <a href="#service-tax" class="service-tab-btn" style="text-decoration: none;">Taxation &amp; FBR</a>
      <a href="#service-secp" class="service-tab-btn" style="text-decoration: none;">SECP Corporate &amp; LLP</a>
      <a href="#service-international" class="service-tab-btn" style="text-decoration: none;">International Desk &amp; FDI</a>
      <a href="#service-overseas" class="service-tab-btn" style="text-decoration: none;">Overseas Pakistanis</a>
      <a href="#service-accounting" class="service-tab-btn" style="text-decoration: none;">Cloud Bookkeeping</a>
      <a href="#service-audit" class="service-tab-btn" style="text-decoration: none;">Audit &amp; Assurance</a>
      <a href="#service-cfo" class="service-tab-btn" style="text-decoration: none;">Virtual CFO &amp; ERP</a>
      <a href="#service-npo" class="service-tab-btn" style="text-decoration: none;">NPO &amp; Donor Sector</a>
      <a href="#service-trade" class="service-tab-btn" style="text-decoration: none;">Trade &amp; WeBOC</a>
      <a href="#service-eor" class="service-tab-btn" style="text-decoration: none;">EoR &amp; Payroll</a>
      <a href="#service-salestax" class="service-tab-btn" style="text-decoration: none;">Sales Tax Matrix</a>
      <a href="#service-compare" class="service-tab-btn" style="text-decoration: none;">Entity Comparison</a>
      <a href="#service-tech" class="service-tab-btn" style="text-decoration: none;">Tech Stack</a>
      <a href="#service-insights" class="service-tab-btn" style="text-decoration: none;">Regulatory Insights</a>
    </div>

    <!-- Practice Areas Grid (Fluid Auto-adjusting) -->
    <div class="responsive-grid-auto" style="gap: 28px; margin-bottom: 64px;">
      
      <!-- Card 1: FBR Taxation -->
      <div class="frosted-card" id="service-tax" style="padding: clamp(24px, 3.5vw, 36px); border-radius: 24px; background: rgba(255, 255, 255, 0.9);">
        <div class="pillar-icon-box" style="margin-bottom: 20px;">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        </div>
        <div style="display: flex; align-items: center; justify-content: space-between; gap: 10px; margin-bottom: 8px;">
          <h2 style="font-size: clamp(19px, 2.5vw, 22px); font-weight: 800; color: #0F172A; margin: 0;">Taxation &amp; FBR Compliance</h2>
          <span class="roster-cred-badge badge-tax">FBR IRIS</span>
        </div>
        <p style="font-size: 14px; line-height: 1.6; color: #64748B; margin-bottom: 16px;">
          Comprehensive direct and indirect tax management: annual corporate &amp; individual returns, Active Taxpayer List (ATL) activation, provincial sales tax on services (PRA, SRB, KPRA, BRA), FASTER sales tax refunds, and defense against Section 122/177 notices.
        </p>
        <ul class="service-bullets" style="margin-bottom: 24px;">
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Annual Corporate &amp; Individual Income Tax Returns (Form 114)</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Monthly Withholding (Section 165) &amp; Provincial Sales Tax Filings</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> FASTER Automated Sales Tax Refund Filing for Exporters</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Tax Audit Defense &amp; Appellate Representation (CIR Appeals &amp; ATIR)</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> IT Freelancer 0.25% PSEB Final Tax Concession Filings</li>
        </ul>
        <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #E2E8F0; padding-top: 16px;">
          <span style="font-size: 12px; font-weight: 600; color: #64748B;">Turnaround: 24–48 Hours</span>
          <a href="<?php echo esc_url(home_url('/#consultation')); ?>" class="btn-roster-pill">Book Tax Service</a>
        </div>
      </div>

      <!-- Card 2: SECP Corporate Desk -->
      <div class="frosted-card" id="service-secp" style="padding: clamp(24px, 3.5vw, 36px); border-radius: 24px; background: rgba(255, 255, 255, 0.9);">
        <div class="pillar-icon-box" style="margin-bottom: 20px;">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/></svg>
        </div>
        <div style="display: flex; align-items: center; justify-content: space-between; gap: 10px; margin-bottom: 8px;">
          <h2 style="font-size: clamp(19px, 2.5vw, 22px); font-weight: 800; color: #0F172A; margin: 0;">SECP Company &amp; LLP Registration</h2>
          <span class="roster-cred-badge badge-secp">SECP Agent</span>
        </div>
        <p style="font-size: 14px; line-height: 1.6; color: #64748B; margin-bottom: 16px;">
          Digital corporate incorporation under the Companies Act 2017 &amp; Limited Liability Partnership Act 2017: Private Limited, Single Member Company (SMC-Private), LLP, statutory annual governance, and corporate banking approvals.
        </p>
        <ul class="service-bullets" style="margin-bottom: 24px;">
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Digital Incorporation via SECP eZfile in 3–5 Business Days</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Memorandum &amp; Articles (MOA/AOA) &amp; Partnership Deed Drafting</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Form A, Form 29 &amp; Annual Statutory Governance Returns</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Corporate Bank Account Opening Assistance &amp; Board Resolutions</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Statutory Auditor Appointment &amp; Compliance Filing within 90 Days</li>
        </ul>
        <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #E2E8F0; padding-top: 16px;">
          <span style="font-size: 12px; font-weight: 600; color: #64748B;">Fast-Track: 3–5 Days</span>
          <a href="<?php echo esc_url(home_url('/#consultation')); ?>" class="btn-roster-pill">Incorporate Now</a>
        </div>
      </div>

      <!-- Card 3: International Desk & FDI (URCA PK Benchmark) -->
      <div class="frosted-card" id="service-international" style="padding: clamp(24px, 3.5vw, 36px); border-radius: 24px; background: rgba(255, 255, 255, 0.9);">
        <div class="pillar-icon-box" style="margin-bottom: 20px;">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
        </div>
        <div style="display: flex; align-items: center; justify-content: space-between; gap: 10px; margin-bottom: 8px;">
          <h2 style="font-size: clamp(19px, 2.5vw, 22px); font-weight: 800; color: #0F172A; margin: 0;">International Desk &amp; FDI</h2>
          <span class="roster-cred-badge badge-intl">BOI &bull; SBP Desk</span>
        </div>
        <p style="font-size: 14px; line-height: 1.6; color: #64748B; margin-bottom: 16px;">
          Cross-border advisory for multinational corporations, foreign investors, and international groups entering Pakistan. Turnkey guidance on Branch vs. Liaison offices, Board of Investment approvals, profit repatriation, and Transfer Pricing.
        </p>
        <ul class="service-bullets" style="margin-bottom: 24px;">
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Branch Office &amp; Liaison Office Registration with BOI &amp; MOI Clearance</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> 100% Foreign-Owned Subsidiary Incorporation under Companies Act 2017</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> State Bank of Pakistan (SBP) Foreign Exchange Manual &amp; Profit Repatriation</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Transfer Pricing Documentation (Local File, Master File &amp; CbCR)</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Double Taxation Avoidance Agreement (DTAA) Cross-Border Structuring</li>
        </ul>
        <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #E2E8F0; padding-top: 16px;">
          <span style="font-size: 12px; font-weight: 600; color: #64748B;">Cross-Border Specialist</span>
          <a href="<?php echo esc_url(home_url('/#consultation')); ?>" class="btn-roster-pill">Contact Desk</a>
        </div>
      </div>

      <!-- Card 4: Overseas Pakistanis Advisory Desk (URCA PK Benchmark) -->
      <div class="frosted-card" id="service-overseas" style="padding: clamp(24px, 3.5vw, 36px); border-radius: 24px; background: rgba(255, 255, 255, 0.9);">
        <div class="pillar-icon-box" style="margin-bottom: 20px;">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
        </div>
        <div style="display: flex; align-items: center; justify-content: space-between; gap: 10px; margin-bottom: 8px;">
          <h2 style="font-size: clamp(19px, 2.5vw, 22px); font-weight: 800; color: #0F172A; margin: 0;">Overseas Pakistanis Advisory Desk</h2>
          <span class="roster-cred-badge badge-overseas">Section 7E Specialist</span>
        </div>
        <p style="font-size: 14px; line-height: 1.6; color: #64748B; margin-bottom: 16px;">
          Remote tax and legal property advisory for non-resident Pakistanis (NRPs) in the UK, USA, Canada, GCC, and Europe. Protecting foreign earnings, resolving Section 7E property tax blocks, and maintaining compliant FBR status.
        </p>
        <ul class="service-bullets" style="margin-bottom: 24px;">
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Section 7E Property Tax Exemption Certificates &amp; Sale/Transfer Clearances</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Non-Resident Tax Status Determination (Section 82 / 183-Day Rule)</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Roshan Digital Account (RDA) Withholding Tax &amp; Inward Remittance Advisory</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Wealth Statement (Form 116) Foreign Assets Declaration &amp; Reconciliations</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Remote Representation via Special Power of Attorney (SPA)</li>
        </ul>
        <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #E2E8F0; padding-top: 16px;">
          <span style="font-size: 12px; font-weight: 600; color: #64748B;">100% Remote Service</span>
          <a href="<?php echo esc_url(home_url('/#consultation')); ?>" class="btn-roster-pill">Consult Remotely</a>
        </div>
      </div>

      <!-- Card 5: Cloud Bookkeeping & BPO -->
      <div class="frosted-card" id="service-accounting" style="padding: clamp(24px, 3.5vw, 36px); border-radius: 24px; background: rgba(255, 255, 255, 0.9);">
        <div class="pillar-icon-box" style="margin-bottom: 20px;">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
        </div>
        <div style="display: flex; align-items: center; justify-content: space-between; gap: 10px; margin-bottom: 8px;">
          <h2 style="font-size: clamp(19px, 2.5vw, 22px); font-weight: 800; color: #0F172A; margin: 0;">Cloud Bookkeeping &amp; BPO</h2>
          <span class="roster-cred-badge badge-acct">QuickBooks / Xero</span>
        </div>
        <p style="font-size: 14px; line-height: 1.6; color: #64748B; margin-bottom: 16px;">
          Outsourced accounting on QuickBooks Online, Xero, Odoo, and SAP. Directed by senior Chartered Accountants managing ledgers for 150+ organizations globally across USA, UK, UAE, and Pakistan.
        </p>
        <ul class="service-bullets" style="margin-bottom: 24px;">
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Daily ledger entries &amp; multi-currency bank reconciliations</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Monthly IFRS balance sheets, P&amp;L statements, and cash flows</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Automated payroll processing compliant with EOBI &amp; PESSI</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> AP/AR aging analysis &amp; vendor payment governance</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Cloud accounting system migration &amp; Chart of Accounts setup</li>
        </ul>
        <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #E2E8F0; padding-top: 16px;">
          <span style="font-size: 12px; font-weight: 600; color: #64748B;">Dedicated Accountant</span>
          <a href="<?php echo esc_url(home_url('/#consultation')); ?>" class="btn-roster-pill">Start Bookkeeping</a>
        </div>
      </div>

      <!-- Card 6: Audit & Assurance -->
      <div class="frosted-card" id="service-audit" style="padding: clamp(24px, 3.5vw, 36px); border-radius: 24px; background: rgba(255, 255, 255, 0.9);">
        <div class="pillar-icon-box" style="margin-bottom: 20px;">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
        </div>
        <div style="display: flex; align-items: center; justify-content: space-between; gap: 10px; margin-bottom: 8px;">
          <h2 style="font-size: clamp(19px, 2.5vw, 22px); font-weight: 800; color: #0F172A; margin: 0;">Audit &amp; Assurance Services</h2>
          <span class="roster-cred-badge badge-audit">Big-4 Trained</span>
        </div>
        <p style="font-size: 14px; line-height: 1.6; color: #64748B; margin-bottom: 16px;">
          Statutory audits, internal control reviews across 700+ entities, donor-funded grant audits (AKDN, Sightsavers, PPAF), financial due diligence for M&amp;A, and Agreed-Upon Procedures (AUP).
        </p>
        <ul class="service-bullets" style="margin-bottom: 24px;">
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> ISA &amp; ICAP Compliant Independent Statutory Audits</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Internal Control Gap Analysis &amp; SOP Risk Frameworks</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Donor Grant Audits &amp; Agreed-Upon Procedures (AUP)</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Financial Due Diligence for Investors &amp; Acquisitions</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Special Investigative &amp; Forensic Review Engagements</li>
        </ul>
        <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #E2E8F0; padding-top: 16px;">
          <span style="font-size: 12px; font-weight: 600; color: #64748B;">FY 2025–26 Slots</span>
          <a href="<?php echo esc_url(home_url('/#consultation')); ?>" class="btn-roster-pill">Request Audit</a>
        </div>
      </div>

      <!-- Card 7: NPO, Trusts & Development Sector (Sunil Babar Track Record) -->
      <div class="frosted-card" id="service-npo" style="padding: clamp(24px, 3.5vw, 36px); border-radius: 24px; background: rgba(255, 255, 255, 0.9);">
        <div class="pillar-icon-box" style="margin-bottom: 20px;">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <div style="display: flex; align-items: center; justify-content: space-between; gap: 10px; margin-bottom: 8px;">
          <h2 style="font-size: clamp(19px, 2.5vw, 22px); font-weight: 800; color: #0F172A; margin: 0;">NPO &amp; Development Sector (PFM)</h2>
          <span class="roster-cred-badge badge-npo">100C &bull; EAD Verified</span>
        </div>
        <p style="font-size: 14px; line-height: 1.6; color: #64748B; margin-bottom: 16px;">
          Specialized regulatory guidance for non-profits, international NGOs, trusts, and donor-funded social development programs. Backed by verified advisory leadership with AKRSP, PPAF, and Sightsavers.
        </p>
        <ul class="service-bullets" style="margin-bottom: 24px;">
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Section 100C FBR Tax Exemption Approval &amp; Renewal Filings</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Economic Affairs Division (EAD) Registration &amp; Foreign Funding MoUs</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Institutional Donor Grant Audits (USAID, UN, World Bank, FCDO, AKDN)</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Public Financial Management (PFM) &amp; Multi-Currency Ledger Systems</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Pakistan Centre for Philanthropy (PCP) Certification Preparation</li>
        </ul>
        <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #E2E8F0; padding-top: 16px;">
          <span style="font-size: 12px; font-weight: 600; color: #64748B;">Sector Experience: 18+ Yrs</span>
          <a href="<?php echo esc_url(home_url('/#consultation')); ?>" class="btn-roster-pill">Consult NPO Team</a>
        </div>
      </div>

      <!-- Card 8: Virtual CFO & ERP -->
      <div class="frosted-card" id="service-cfo" style="padding: clamp(24px, 3.5vw, 36px); border-radius: 24px; background: rgba(255, 255, 255, 0.9);">
        <div class="pillar-icon-box" style="margin-bottom: 20px;">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
        </div>
        <div style="display: flex; align-items: center; justify-content: space-between; gap: 10px; margin-bottom: 8px;">
          <h2 style="font-size: clamp(19px, 2.5vw, 22px); font-weight: 800; color: #0F172A; margin: 0;">Virtual CFO &amp; ERP Advisory</h2>
          <span class="roster-cred-badge badge-cfo">SAP &bull; Oracle</span>
        </div>
        <p style="font-size: 14px; line-height: 1.6; color: #64748B; margin-bottom: 16px;">
          High-level executive steering: 5-year budgeting, cash flow scenario modeling, and enterprise ERP implementation leadership (Oracle to SAP S/4HANA migration, R2R, P2P, O2C optimization).
        </p>
        <ul class="service-bullets" style="margin-bottom: 24px;">
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> 5-Year Integrated Financial Strategy &amp; Board Reporting</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> SAP S/4HANA &amp; Oracle ERP Implementation Governance</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Power BI Real-Time Financial Decision Dashboards</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Capital Structuring &amp; Commercial Bank Financing Facilities</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Working Capital Optimization &amp; Runway Extensions</li>
        </ul>
        <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #E2E8F0; padding-top: 16px;">
          <span style="font-size: 12px; font-weight: 600; color: #64748B;">Executive Retainer</span>
          <a href="<?php echo esc_url(home_url('/#consultation')); ?>" class="btn-roster-pill">Retain CFO</a>
        </div>
      </div>

      <!-- Card 9: HR & Org Design -->
      <div class="frosted-card" id="service-hr" style="padding: clamp(24px, 3.5vw, 36px); border-radius: 24px; background: rgba(255, 255, 255, 0.9);">
        <div class="pillar-icon-box" style="margin-bottom: 20px;">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <div style="display: flex; align-items: center; justify-content: space-between; gap: 10px; margin-bottom: 8px;">
          <h2 style="font-size: clamp(19px, 2.5vw, 22px); font-weight: 800; color: #0F172A; margin: 0;">HR &amp; Organizational Design</h2>
          <span class="roster-cred-badge badge-tax">Org Design</span>
        </div>
        <p style="font-size: 14px; line-height: 1.6; color: #64748B; margin-bottom: 16px;">
          Organizational restructuring for 500+ employee multinational corporations: role rationalization, job grading, span-of-control optimization, and Delegation of Authority (DOA) frameworks.
        </p>
        <ul class="service-bullets" style="margin-bottom: 24px;">
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Job Grading &amp; Executive Evaluation Frameworks</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Delegation of Authority (DOA) Matrix Design</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Cross-Functional Reporting Lines Harmonization</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Provident, Gratuity &amp; Pension Fund Structuring under Sixth Schedule</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> EOBI &amp; PESSI Social Security Inspection Defense</li>
        </ul>
        <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #E2E8F0; padding-top: 16px;">
          <span style="font-size: 12px; font-weight: 600; color: #64748B;">Turnaround: 2–4 Weeks</span>
          <a href="<?php echo esc_url(home_url('/#consultation')); ?>" class="btn-roster-pill">Consult Partner</a>
        </div>
      </div>

      <!-- Card 10: Trade Facilitation & Commercial Licensing (URCA PK Benchmark) -->
      <div class="frosted-card" id="service-trade" style="padding: clamp(24px, 3.5vw, 36px); border-radius: 24px; background: rgba(255, 255, 255, 0.9);">
        <div class="pillar-icon-box" style="margin-bottom: 20px;">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>
        </div>
        <div style="display: flex; align-items: center; justify-content: space-between; gap: 10px; margin-bottom: 8px;">
          <h2 style="font-size: clamp(19px, 2.5vw, 22px); font-weight: 800; color: #0F172A; margin: 0;">Trade Facilitation &amp; WeBOC</h2>
          <span class="roster-cred-badge badge-trade">PSW &bull; WeBOC</span>
        </div>
        <p style="font-size: 14px; line-height: 1.6; color: #64748B; margin-bottom: 16px;">
          End-to-end import and export commercial licensing. Setting up Pakistan Single Window (PSW), customs WeBOC user IDs, and formal Chamber of Commerce memberships in Islamabad, Rawalpindi, and Gilgit.
        </p>
        <ul class="service-bullets" style="margin-bottom: 24px;">
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Pakistan Single Window (PSW) Subscription &amp; Biometric Verification</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> WeBOC (Web Based One Customs) User ID Issuance &amp; Green Channel Clearance</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Chamber of Commerce Membership (ICCI Islamabad, RCCI, GBCCI Gilgit)</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Free Tax Number (FTN) &amp; Sales Tax Registration for Importers/Exporters</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Trade Documentation, Letter of Credit (LC) Compliance &amp; SBP E-Form Filings</li>
        </ul>
        <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #E2E8F0; padding-top: 16px;">
          <span style="font-size: 12px; font-weight: 600; color: #64748B;">Turnaround: 3–5 Days</span>
          <a href="<?php echo esc_url(home_url('/#consultation')); ?>" class="btn-roster-pill">Setup Trade Desk</a>
        </div>
      </div>

      <!-- Card 11: Employer of Record (EoR) & HR Statutory Compliance (URCA PK Benchmark) -->
      <div class="frosted-card" id="service-eor" style="padding: clamp(24px, 3.5vw, 36px); border-radius: 24px; background: rgba(255, 255, 255, 0.9);">
        <div class="pillar-icon-box" style="margin-bottom: 20px;">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg>
        </div>
        <div style="display: flex; align-items: center; justify-content: space-between; gap: 10px; margin-bottom: 8px;">
          <h2 style="font-size: clamp(19px, 2.5vw, 22px); font-weight: 800; color: #0F172A; margin: 0;">Employer of Record (EoR) &amp; HR</h2>
          <span class="roster-cred-badge badge-eor">EOBI &bull; PESSI</span>
        </div>
        <p style="font-size: 14px; line-height: 1.6; color: #64748B; margin-bottom: 16px;">
          Full workforce employment solution for international companies hiring talent in Pakistan without a local legal entity. Complete payroll, withholding tax certificates, EOBI, and social security coverage.
        </p>
        <ul class="service-bullets" style="margin-bottom: 24px;">
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Legal Employer of Record (EoR) for Foreign Groups in Pakistan</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Automated Monthly Payroll Disbursement &amp; Payslip Generation</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> EOBI (Employees' Old-Age Benefits) Employee Registration &amp; Challans</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Provincial Social Security (PESSI / SESSI / KPRA) Monthly Compliance</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Annual Withholding Tax Deduction Certificates (Form 149 / CPR)</li>
        </ul>
        <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #E2E8F0; padding-top: 16px;">
          <span style="font-size: 12px; font-weight: 600; color: #64748B;">Workforce Ready</span>
          <a href="<?php echo esc_url(home_url('/#consultation')); ?>" class="btn-roster-pill">Retain EoR</a>
        </div>
      </div>

    </div>

    <!-- Multi-Jurisdictional Provincial Sales Tax & FASTER Refund Matrix (Virtual Accountants Benchmark) -->
    <div class="frosted-card" id="service-salestax" style="padding: clamp(24px, 4vw, 44px); border-radius: 28px; margin-bottom: 56px; background: rgba(255, 255, 255, 0.95);">
      <div style="text-align: center; margin-bottom: 32px;">
        <span class="section-eyebrow">Revenue Architecture</span>
        <h2 style="font-size: clamp(20px, 3vw, 28px); font-weight: 800; color: #0F172A; margin-bottom: 12px;">
          Multi-Jurisdictional Provincial Sales Tax &amp; FASTER Refund Matrix
        </h2>
        <p style="font-size: 14.5px; color: #64748B; max-width: 760px; margin: 0 auto;">
          Pakistan enforces separate sales tax regimes for goods (federal) and services (provincial). S&amp;S PRESTIGE CONSULTANTS LLP manages multi-provincial tax registrations, input-output reconciliations, and automated refund systems across all jurisdictions.
        </p>
      </div>

      <div class="table-scroll-wrapper">
        <table class="salestax-matrix-table">
          <thead>
            <tr>
              <th>Revenue Authority</th>
              <th>Jurisdiction</th>
              <th>Taxable Base</th>
              <th>Standard Rate</th>
              <th>Monthly Return Due Date</th>
              <th>Key Strategic Advantage &amp; Compliance Focus</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><span class="tax-authority-pill auth-fbr">FBR Federal</span></td>
              <td>All Pakistan</td>
              <td>Sales Tax on Goods</td>
              <td>18% (Standard)</td>
              <td>15th Payment / 18th Return</td>
              <td>FASTER automated refund processing for zero-rated exporters, STARR electronic validation, Annexure C reconciliation.</td>
            </tr>
            <tr>
              <td><span class="tax-authority-pill auth-pra">PRA Punjab</span></td>
              <td>Punjab Province</td>
              <td>Sales Tax on Services</td>
              <td>16% (Standard)</td>
              <td>15th Payment / 18th Return</td>
              <td>Withholding sales tax compliance under Punjab Sales Tax on Services Act, input tax credit adjustments on inter-provincial services.</td>
            </tr>
            <tr>
              <td><span class="tax-authority-pill auth-srb">SRB Sindh</span></td>
              <td>Sindh Province</td>
              <td>Sales Tax on Services</td>
              <td>15% (Standard)</td>
              <td>15th Payment / 18th Return</td>
              <td>E-invoicing integration, port &amp; logistics services compliance, financial service withholding management.</td>
            </tr>
            <tr>
              <td><span class="tax-authority-pill auth-kpra">KPRA Khyber Pakhtunkhwa</span></td>
              <td>KP Province</td>
              <td>Sales Tax on Services</td>
              <td>15% (Standard)</td>
              <td>15th Payment / 18th Return</td>
              <td>Special concessions for IT exporters, construction services, and regional infrastructure developmental projects.</td>
            </tr>
            <tr>
              <td><span class="tax-authority-pill auth-bra">BRA Balochistan</span></td>
              <td>Balochistan</td>
              <td>Sales Tax on Services</td>
              <td>15% (Standard)</td>
              <td>15th Payment / 18th Return</td>
              <td>Mining, energy, infrastructure, and CPEC-related cross-border logistics service tax clearances.</td>
            </tr>
            <tr>
              <td><span class="tax-authority-pill auth-gb">Gilgit-Baltistan &amp; ICT</span></td>
              <td>Gilgit &amp; Islamabad</td>
              <td>Services &amp; Regional Trade</td>
              <td>Regional Directives</td>
              <td>Statutory Calendar</td>
              <td>Direct physical chamber in Gilgit (Cinema Bazaar, Airport Road) providing on-ground regional tax exemptions and GB trade advisory.</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- FASTER Refund Processing Callout Box -->
      <div style="background: linear-gradient(135deg, rgba(26, 107, 255, 0.05) 0%, rgba(37, 211, 102, 0.05) 100%); border: 1px solid rgba(26, 107, 255, 0.2); border-radius: 18px; padding: 24px; margin-top: 24px; display: flex; align-items: flex-start; gap: 16px; flex-wrap: wrap;">
        <div style="width: 44px; height: 44px; border-radius: 12px; background: #1A6BFF; color: #FFFFFF; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
        </div>
        <div style="flex: 1; min-width: 260px;">
          <div style="font-size: 16px; font-weight: 800; color: #0F172A; margin-bottom: 4px;">FASTER Automated Sales Tax Refund System for Exporters</div>
          <p style="font-size: 13.5px; color: #64748B; line-height: 1.6; margin: 0;">
            Exporters face critical liquidity traps when input sales tax is locked in government balances. S&amp;S Prestige Consultants LLP prepares electronic Annexure H declarations via FBR's FASTER system, enabling verified exporters to receive State Bank of Pakistan payment advice directly into corporate bank accounts within 72 hours of return filing.
          </p>
        </div>
        <a href="<?php echo esc_url(home_url('/#consultation')); ?>" class="btn-roster-pill" style="align-self: center;">File Sales Tax Refund</a>
      </div>

    </div>

    <!-- Interactive Entity Selection Comparison Table (Virtual Accountants Benchmark) -->
    <div class="frosted-card" id="service-compare" style="padding: clamp(24px, 4vw, 44px); border-radius: 28px; margin-bottom: 56px; background: rgba(255, 255, 255, 0.95);">
      <div style="text-align: center; margin-bottom: 32px;">
        <span class="section-eyebrow">Decision Matrix</span>
        <h2 style="font-size: clamp(20px, 3vw, 28px); font-weight: 800; color: #0F172A; margin-bottom: 12px;">
          Entity Selection &amp; Business Formation Guide
        </h2>
        <p style="font-size: 14.5px; color: #64748B; max-width: 720px; margin: 0 auto;">
          Choose the right legal framework for your venture in Pakistan. Compare governing bodies, personal liability, statutory compliance, and tax advantages.
        </p>
      </div>

      <div class="table-scroll-wrapper">
        <table class="entity-compare-table">
          <thead>
            <tr>
              <th>Legal Structure</th>
              <th>Governing Body</th>
              <th>Min. Members</th>
              <th>Personal Liability</th>
              <th>Legal Personality</th>
              <th>Statutory Audit</th>
              <th>Best Suited For</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="entity-name-cell">Sole Proprietorship</td>
              <td>FBR (Direct Tax)</td>
              <td>1 Individual</td>
              <td><span class="liability-tag liability-unlimited">Unlimited</span></td>
              <td>Same as Owner</td>
              <td>Optional</td>
              <td>Solo retail, local vendors &amp; individual freelancers</td>
            </tr>
            <tr>
              <td class="entity-name-cell">Partnership (AOP / Form C)</td>
              <td>Registrar of Firms</td>
              <td>2 to 20 Partners</td>
              <td><span class="liability-tag liability-unlimited">Joint &amp; Several</span></td>
              <td>Separate for Tax Only</td>
              <td>Optional</td>
              <td>Small trading firms, multi-founder local businesses</td>
            </tr>
            <tr>
              <td class="entity-name-cell">SMC-Private Limited</td>
              <td>SECP (Companies Act 2017)</td>
              <td>1 Director / Shareholder</td>
              <td><span class="liability-tag liability-limited">Limited to Shares</span></td>
              <td>Separate Legal Person</td>
              <td>Mandatory (Capital &gt; 1M)</td>
              <td>Single-founder startups wanting limited liability</td>
            </tr>
            <tr>
              <td class="entity-name-cell">Private Limited Company</td>
              <td>SECP (Companies Act 2017)</td>
              <td>2 to 50 Shareholders</td>
              <td><span class="liability-tag liability-limited">Limited to Shares</span></td>
              <td>Separate Legal Person</td>
              <td>Mandatory by Law</td>
              <td>Scalable enterprises, VC/angel funded startups, tech firms</td>
            </tr>
            <tr>
              <td class="entity-name-cell">Limited Liability Partnership (LLP)</td>
              <td>SECP (LLP Act 2017)</td>
              <td>2+ Designated Partners</td>
              <td><span class="liability-tag liability-limited">Limited to Agreed Contribution</span></td>
              <td>Separate Body Corporate</td>
              <td>Subject to Turnover</td>
              <td>Professional advisors, consultants, CA firms &amp; joint ventures</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Document Readiness Checklist -->
      <div style="margin-top: 40px;">
        <h3 style="font-size: 18px; font-weight: 800; color: #0F172A; margin-bottom: 20px; text-align: center;">
          Document Readiness Checklist — What You Need to Get Started
        </h3>
        <div class="doc-checklist-grid">
          <div class="doc-checklist-card">
            <span class="doc-step-num">1</span>
            <div class="doc-card-title">Identity Verification</div>
            <p class="doc-card-text">Valid CNIC / NICOP for Pakistani citizens; passport copy with valid Pakistan visa for foreign directors.</p>
          </div>
          <div class="doc-checklist-card">
            <span class="doc-step-num">2</span>
            <div class="doc-card-title">Entity Naming &amp; Objects</div>
            <p class="doc-card-text">Three proposed names in order of preference plus principal commercial activity description for SECP name availability.</p>
          </div>
          <div class="doc-checklist-card">
            <span class="doc-step-num">3</span>
            <div class="doc-card-title">Registered Office Proof</div>
            <p class="doc-card-text">Official business address in Pakistan, recent utility bill copy, and tenancy agreement or ownership document.</p>
          </div>
          <div class="doc-checklist-card">
            <span class="doc-step-num">4</span>
            <div class="doc-card-title">Capital &amp; Shareholding</div>
            <p class="doc-card-text">Authorized &amp; paid-up capital distribution ratio, director appointments, and corporate bank account resolution.</p>
          </div>
        </div>
      </div>

    </div>

    <!-- Financial Technology & Supported ERP Stack (Virtual Accountants Benchmark) -->
    <div class="frosted-card" id="service-tech" style="padding: clamp(24px, 4vw, 44px); border-radius: 28px; margin-bottom: 56px; background: rgba(255, 255, 255, 0.95);">
      <div style="text-align: center;">
        <span class="section-eyebrow">Enterprise Stack</span>
        <h2 style="font-size: clamp(20px, 3vw, 26px); font-weight: 800; color: #0F172A; margin-bottom: 8px;">
          Financial Technology &amp; ERP Platforms We Operate
        </h2>
        <p style="font-size: 14.5px; color: #64748B; max-width: 680px; margin: 0 auto;">
          We operate across industry-leading cloud accounting, enterprise ERPs, business intelligence, and statutory government portals.
        </p>

        <div class="tech-stack-grid">
          <div class="tech-stack-card">
            <div class="tech-icon-box">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><line x1="12" y1="4" x2="12" y2="20"/></svg>
            </div>
            <div class="tech-card-name">QuickBooks Online</div>
            <div class="tech-card-badge">Certified ProAdvisor</div>
          </div>

          <div class="tech-stack-card">
            <div class="tech-icon-box">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"/></svg>
            </div>
            <div class="tech-card-name">Xero Accounting</div>
            <div class="tech-card-badge">Certified Practice</div>
          </div>

          <div class="tech-stack-card">
            <div class="tech-icon-box">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
            </div>
            <div class="tech-card-name">SAP S/4HANA</div>
            <div class="tech-card-badge">Enterprise Migration</div>
          </div>

          <div class="tech-stack-card">
            <div class="tech-icon-box">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg>
            </div>
            <div class="tech-card-name">Oracle Cloud ERP</div>
            <div class="tech-card-badge">R2R &bull; P2P Architecture</div>
          </div>

          <div class="tech-stack-card">
            <div class="tech-icon-box">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 20V10M12 20V4M6 20v-6"/></svg>
            </div>
            <div class="tech-card-name">Microsoft Power BI</div>
            <div class="tech-card-badge">Financial Dashboards</div>
          </div>

          <div class="tech-stack-card">
            <div class="tech-icon-box">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
            </div>
            <div class="tech-card-name">FBR IRIS &amp; POS</div>
            <div class="tech-card-badge">Direct API Invoicing</div>
          </div>

          <div class="tech-stack-card">
            <div class="tech-icon-box">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
            </div>
            <div class="tech-card-name">SECP eZfile</div>
            <div class="tech-card-badge">Digital Corporate Agent</div>
          </div>

          <div class="tech-stack-card">
            <div class="tech-icon-box">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
            </div>
            <div class="tech-card-name">Pakistan Single Window</div>
            <div class="tech-card-badge">PSW &bull; WeBOC Customs</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Executive Regulatory Insights & Knowledge Hub (Withum & URCA Benchmark) -->
    <div class="frosted-card" id="service-insights" style="padding: clamp(24px, 4vw, 44px); border-radius: 28px; margin-bottom: 56px; background: rgba(255, 255, 255, 0.95);">
      <div style="text-align: center;">
        <span class="section-eyebrow">Executive Intelligence</span>
        <h2 style="font-size: clamp(20px, 3vw, 28px); font-weight: 800; color: #0F172A; margin-bottom: 12px;">
          Regulatory Advisory Insights &amp; Market Directives
        </h2>
        <p style="font-size: 14.5px; color: #64748B; max-width: 720px; margin: 0 auto;">
          Authoritative intelligence briefs authored by our Senior Chartered Accountants to help corporate leaders eliminate regulatory and statutory ambiguity.
        </p>

        <div class="insight-grid">
          
          <!-- Insight 1: Finance Act 2024-25 -->
          <article class="insight-card">
            <div class="insight-card-top">
              <div class="insight-meta">
                <span class="insight-badge badge-tax">Taxation &bull; FBR</span>
                <span class="insight-date">Finance Act 2024–25</span>
              </div>
              <h3 class="insight-title">Corporate Tax Slabs, Advance Tax (Sec 147) &amp; Super Tax Directives</h3>
              <p class="insight-desc">
                Critical compliance analysis on Section 4C Super Tax brackets, revised corporate withholding rates, and quarterly advance tax forecasting to prevent penalty notices under Section 205.
              </p>
            </div>
            <div class="insight-card-footer">
              <span style="font-size: 12px; color: #64748B;">Turnaround: Priority Review</span>
              <a href="<?php echo esc_url(home_url('/#consultation')); ?>" class="insight-link">
                <span>Request Briefing</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </article>

          <!-- Insight 2: Section 7E Exemption -->
          <article class="insight-card">
            <div class="insight-card-top">
              <div class="insight-meta">
                <span class="insight-badge badge-overseas">Expat Wealth &bull; Real Estate</span>
                <span class="insight-date">Property Clearance</span>
              </div>
              <h3 class="insight-title">Section 7E Deemed Income: Exemption Certificates for Overseas Owners</h3>
              <p class="insight-desc">
                Comprehensive legal roadmap for Non-Resident Pakistanis (NRPs) and local owners to secure Commissioner exemption certificates, CPR challan generation, and avoid property sale blocks.
              </p>
            </div>
            <div class="insight-card-footer">
              <span style="font-size: 12px; color: #64748B;">Turnaround: 48 Hours</span>
              <a href="<?php echo esc_url(home_url('/#consultation')); ?>" class="insight-link">
                <span>Request Briefing</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </article>

          <!-- Insight 3: Foreign Investment Roadmap -->
          <article class="insight-card">
            <div class="insight-card-top">
              <div class="insight-meta">
                <span class="insight-badge badge-intl">FDI &bull; Cross-Border</span>
                <span class="insight-date">International Desk</span>
              </div>
              <h3 class="insight-title">Foreign Entry in Pakistan: Branch Office vs. Liaison vs. 100% Subsidiary</h3>
              <p class="insight-desc">
                Detailed comparison of Board of Investment (BOI) approvals, Ministry of Interior security clearances, and State Bank of Pakistan Foreign Exchange Manual profit repatriation frameworks.
              </p>
            </div>
            <div class="insight-card-footer">
              <span style="font-size: 12px; color: #64748B;">Turnaround: Dedicated Escort</span>
              <a href="<?php echo esc_url(home_url('/#consultation')); ?>" class="insight-link">
                <span>Request Briefing</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </article>

          <!-- Insight 4: Section 100C NPO -->
          <article class="insight-card">
            <div class="insight-card-top">
              <div class="insight-meta">
                <span class="insight-badge badge-npo">Non-Profit &bull; PFM</span>
                <span class="insight-date">Donor Governance</span>
              </div>
              <h3 class="insight-title">Section 100C Tax Exemption &amp; EAD Foreign Funding Compliance</h3>
              <p class="insight-desc">
                Regulatory governance for non-profit organizations, trusts, and donor programs (USAID, UN, AKDN, PPAF) covering FBR 100C certification renewals and Economic Affairs Division approvals.
              </p>
            </div>
            <div class="insight-card-footer">
              <span style="font-size: 12px; color: #64748B;">Turnaround: Partner Escort</span>
              <a href="<?php echo esc_url(home_url('/#consultation')); ?>" class="insight-link">
                <span>Request Briefing</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </article>

        </div>

      </div>
    </div>

    <!-- Sector Experience Matrix -->
    <div class="frosted-card" style="padding: clamp(24px, 4vw, 44px); border-radius: 28px; margin-bottom: 48px; background: rgba(255, 255, 255, 0.95);">
      <h2 style="font-size: clamp(20px, 3vw, 26px); font-weight: 800; color: #0F172A; margin-bottom: 12px; text-align: center;">
        Sector Depth &amp; Industry Specialization
      </h2>
      <p style="font-size: 14.5px; color: #64748B; text-align: center; max-width: 680px; margin: 0 auto 32px;">
        We tailor our compliance, audit, and tax strategies to the specific regulatory and commercial dynamics of your industry.
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 260px), 1fr)); gap: 20px;">
        
        <div style="background: rgba(248, 250, 252, 0.9); border: 1px solid #E2E8F0; border-radius: 16px; padding: 20px;">
          <div style="font-weight: 800; font-size: 16px; color: #0F172A; margin-bottom: 6px;">Technology &amp; IT Exporters</div>
          <p style="font-size: 13px; color: #64748B; margin: 0; line-height: 1.6;">
            PSEB registration, 0.25% export tax regime, SBP IT foreign exchange retention accounts, US/UK Delaware/LLC multi-entity structure, and software revenue recognition.
          </p>
        </div>

        <div style="background: rgba(248, 250, 252, 0.9); border: 1px solid #E2E8F0; border-radius: 16px; padding: 20px;">
          <div style="font-weight: 800; font-size: 16px; color: #0F172A; margin-bottom: 6px;">Manufacturing &amp; Industrial</div>
          <p style="font-size: 13px; color: #64748B; margin: 0; line-height: 1.6;">
            Cost of goods sold (COGS) tracking, inventory valuations, raw material import sales tax adjustments, FASTER refund processing, and standard costing.
          </p>
        </div>

        <div style="background: rgba(248, 250, 252, 0.9); border: 1px solid #E2E8F0; border-radius: 16px; padding: 20px;">
          <div style="font-weight: 800; font-size: 16px; color: #0F172A; margin-bottom: 6px;">NGOs, Trusts &amp; Development</div>
          <p style="font-size: 13px; color: #64748B; margin: 0; line-height: 1.6;">
            Section 100C tax exemptions, EAD MoU registration, PCP certification, donor grant compliance audits (AKDN, PPAF, Sightsavers), and multi-currency project accounting.
          </p>
        </div>

        <div style="background: rgba(248, 250, 252, 0.9); border: 1px solid #E2E8F0; border-radius: 16px; padding: 20px;">
          <div style="font-weight: 800; font-size: 16px; color: #0F172A; margin-bottom: 6px;">Real Estate, Construction &amp; Expat</div>
          <p style="font-size: 13px; color: #64748B; margin: 0; line-height: 1.6;">
            Section 7E property deemed income tax clearance certificates, builder/developer tax regimes, Capital Value Tax (CVT), and non-resident property tax management.
          </p>
        </div>

      </div>
    </div>

    <!-- ========================================== -->
    <!-- Official Statutory & Regulatory Portals Directory -->
    <!-- ========================================== -->
    <div id="statutory-portals" style="margin-bottom: clamp(48px, 6vw, 72px);">
      <div style="text-align: center; max-width: 820px; margin: 0 auto 36px;">
        <span class="hero-badge" style="margin-bottom: 12px; display: inline-flex;">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
          Direct Government Filing Channels
        </span>
        <h2 style="font-size: clamp(24px, 3.2vw, 36px); font-weight: 800; color: #0F172A; letter-spacing: -0.02em; margin-bottom: 12px;">
          Official Statutory &amp; Regulatory Portals
        </h2>
        <p style="font-size: clamp(14px, 1.8vw, 16px); color: #64748B; line-height: 1.6;">
          Quick-access directory of Pakistan's federal and provincial regulatory portals, online tax filing systems, and corporate compliance registries — curated for corporate executives, business owners, and expatriates.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
        
        <!-- FBR Federal Board of Revenue -->
        <div class="glass-card" style="padding: 28px; display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
              <span style="font-size: 11px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em; padding: 4px 10px; background: #EFF6FF; color: #1A6BFF; border-radius: 9999px;">Federal Taxation</span>
              <span style="font-size: 12px; color: #10B981; font-weight: 700; display: flex; align-items: center; gap: 4px;">
                <span style="width: 7px; height: 7px; background: #10B981; border-radius: 50%; display: inline-block;"></span> Active
              </span>
            </div>
            <h3 style="font-size: 18px; font-weight: 800; color: #0F172A; margin-bottom: 8px;">
              Federal Board of Revenue (FBR)
            </h3>
            <p style="font-size: 13px; color: #64748B; line-height: 1.6; margin-bottom: 16px;">
              Official federal portal for electronic tax filing, NTN registration, income tax return submission, and active taxpayer status.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0 0 20px 0; font-size: 13px; color: #334155; line-height: 2;">
              <li>• <strong>IRIS 2.0 Portal:</strong> Annual return &amp; monthly sales tax</li>
              <li>• <strong>Active Taxpayer List (ATL):</strong> Instant online verification</li>
              <li>• <strong>e-Payment System:</strong> Tax challan &amp; PSID generation</li>
              <li>• <strong>Maloomat:</strong> Withholding data &amp; asset profiling</li>
            </ul>
          </div>
          <div style="display: flex; flex-direction: column; gap: 8px;">
            <a href="https://iris.fbr.gov.pk/" target="_blank" rel="noopener" class="btn-primary-glow" style="justify-content: center; padding: 10px 16px; font-size: 13px;">
              <span>Open FBR IRIS 2.0</span>
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            </a>
            <a href="https://e.fbr.gov.pk/" target="_blank" rel="noopener" class="btn-outline-glass" style="justify-content: center; padding: 8px 14px; font-size: 12px; color: #475569;">
              <span>FBR e-Payment &amp; ATL Check</span>
              <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            </a>
          </div>
        </div>

        <!-- SECP Securities & Exchange Commission -->
        <div class="glass-card" style="padding: 28px; display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
              <span style="font-size: 11px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em; padding: 4px 10px; background: #ECFDF5; color: #059669; border-radius: 9999px;">Corporate Registry</span>
              <span style="font-size: 12px; color: #10B981; font-weight: 700; display: flex; align-items: center; gap: 4px;">
                <span style="width: 7px; height: 7px; background: #10B981; border-radius: 50%; display: inline-block;"></span> Active
              </span>
            </div>
            <h3 style="font-size: 18px; font-weight: 800; color: #0F172A; margin-bottom: 8px;">
              SECP eZfile &amp; Corporate Portal
            </h3>
            <p style="font-size: 13px; color: #64748B; line-height: 1.6; margin-bottom: 16px;">
              Apex regulatory portal for corporate registration under Companies Act 2017 and LLP Act 2017.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0 0 20px 0; font-size: 13px; color: #334155; line-height: 2;">
              <li>• <strong>eZfile Services:</strong> Online incorporation &amp; annual returns</li>
              <li>• <strong>Company Name Search:</strong> Instant name availability search</li>
              <li>• <strong>Statutory Returns:</strong> Form 29, Form A, and LLP Form 3/4</li>
              <li>• <strong>Certified Copies:</strong> Digital CTC issuance</li>
            </ul>
          </div>
          <div style="display: flex; flex-direction: column; gap: 8px;">
            <a href="https://eservices.secp.gov.pk/" target="_blank" rel="noopener" class="btn-primary-glow" style="justify-content: center; padding: 10px 16px; font-size: 13px; background: linear-gradient(135deg, #059669 0%, #10B981 100%);">
              <span>Open SECP eZfile Portal</span>
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            </a>
            <a href="https://www.secp.gov.pk/company-name-search/" target="_blank" rel="noopener" class="btn-outline-glass" style="justify-content: center; padding: 8px 14px; font-size: 12px; color: #475569;">
              <span>Search Available Company Names</span>
              <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            </a>
          </div>
        </div>

        <!-- Provincial Revenue Authorities (PRA, SRB, KPRA, BRA) -->
        <div class="glass-card" style="padding: 28px; display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
              <span style="font-size: 11px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em; padding: 4px 10px; background: #FFFBEB; color: #B45309; border-radius: 9999px;">Provincial Sales Tax</span>
              <span style="font-size: 12px; color: #10B981; font-weight: 700; display: flex; align-items: center; gap: 4px;">
                <span style="width: 7px; height: 7px; background: #10B981; border-radius: 50%; display: inline-block;"></span> Active
              </span>
            </div>
            <h3 style="font-size: 18px; font-weight: 800; color: #0F172A; margin-bottom: 8px;">
              Provincial Sales Tax Boards
            </h3>
            <p style="font-size: 13px; color: #64748B; line-height: 1.6; margin-bottom: 16px;">
              Provincial e-filing systems for Sales Tax on Services (STS) across Punjab, Sindh, KP, and Balochistan.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0 0 20px 0; font-size: 13px; color: #334155; line-height: 2;">
              <li>• <strong>PRA (Punjab):</strong> Punjab Revenue Authority e-portal</li>
              <li>• <strong>SRB (Sindh):</strong> Sindh Revenue Board automated portal</li>
              <li>• <strong>KPRA (KP):</strong> Khyber Pakhtunkhwa Revenue Authority</li>
              <li>• <strong>BRA (Balochistan):</strong> Balochistan Revenue Authority</li>
            </ul>
          </div>
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 8px;">
            <a href="https://pra.punjab.gov.pk/" target="_blank" rel="noopener" class="btn-outline-glass" style="justify-content: center; padding: 8px 10px; font-size: 12px; font-weight: 700; color: #0F172A;">
              <span>PRA (Punjab)</span>
              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            </a>
            <a href="https://srb.gos.pk/" target="_blank" rel="noopener" class="btn-outline-glass" style="justify-content: center; padding: 8px 10px; font-size: 12px; font-weight: 700; color: #0F172A;">
              <span>SRB (Sindh)</span>
              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            </a>
            <a href="https://kpra.gov.pk/" target="_blank" rel="noopener" class="btn-outline-glass" style="justify-content: center; padding: 8px 10px; font-size: 12px; font-weight: 700; color: #0F172A;">
              <span>KPRA (KP)</span>
              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            </a>
            <a href="https://bra.gob.pk/" target="_blank" rel="noopener" class="btn-outline-glass" style="justify-content: center; padding: 8px 10px; font-size: 12px; font-weight: 700; color: #0F172A;">
              <span>BRA (Balochistan)</span>
              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            </a>
          </div>
        </div>

        <!-- Trade, Customs & Central Banking -->
        <div class="glass-card" style="padding: 28px; display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
              <span style="font-size: 11px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em; padding: 4px 10px; background: #F5F3FF; color: #6D28D9; border-radius: 9999px;">Trade &amp; Central Bank</span>
              <span style="font-size: 12px; color: #10B981; font-weight: 700; display: flex; align-items: center; gap: 4px;">
                <span style="width: 7px; height: 7px; background: #10B981; border-radius: 50%; display: inline-block;"></span> Active
              </span>
            </div>
            <h3 style="font-size: 18px; font-weight: 800; color: #0F172A; margin-bottom: 8px;">
              Customs, PSW &amp; State Bank
            </h3>
            <p style="font-size: 13px; color: #64748B; line-height: 1.6; margin-bottom: 16px;">
              Regulatory portals for import/export clearance, cross-border payments, and foreign exchange compliance.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0 0 20px 0; font-size: 13px; color: #334155; line-height: 2;">
              <li>• <strong>PSW Portal:</strong> Pakistan Single Window unified trade portal</li>
              <li>• <strong>WeBOC Customs:</strong> Web-Based One Customs GD filing</li>
              <li>• <strong>State Bank of Pakistan:</strong> FX Manual &amp; FDI regulations</li>
              <li>• <strong>PSEB Registration:</strong> 0.25% IT export regime portal</li>
            </ul>
          </div>
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 8px;">
            <a href="https://www.psw.gov.pk/" target="_blank" rel="noopener" class="btn-outline-glass" style="justify-content: center; padding: 8px 10px; font-size: 12px; font-weight: 700; color: #0F172A;">
              <span>PSW Portal</span>
              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            </a>
            <a href="https://www.weboc.gov.pk/" target="_blank" rel="noopener" class="btn-outline-glass" style="justify-content: center; padding: 8px 10px; font-size: 12px; font-weight: 700; color: #0F172A;">
              <span>WeBOC Customs</span>
              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            </a>
            <a href="https://www.sbp.org.pk/" target="_blank" rel="noopener" class="btn-outline-glass" style="justify-content: center; padding: 8px 10px; font-size: 12px; font-weight: 700; color: #0F172A;">
              <span>State Bank (SBP)</span>
              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            </a>
            <a href="https://pseb.org.pk/" target="_blank" rel="noopener" class="btn-outline-glass" style="justify-content: center; padding: 8px 10px; font-size: 12px; font-weight: 700; color: #0F172A;">
              <span>PSEB (IT Firm)</span>
              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            </a>
          </div>
        </div>

      </div>

      <!-- Professional Disclaimer Note -->
      <div style="margin-top: 24px; padding: 16px 20px; background: rgba(241, 245, 249, 0.7); border: 1px solid #CBD5E1; border-radius: 12px; display: flex; align-items: center; gap: 12px;">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#64748B" stroke-width="2" style="flex-shrink: 0;"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
        <span style="font-size: 12px; color: #475569; line-height: 1.5;">
          <strong>Executive Compliance Notice:</strong> These links connect directly to the official government and statutory systems of the Islamic Republic of Pakistan. S&amp;S Prestige Consultants LLP assists clients with filing, digital representation, dispute resolution, and audit documentation across all these portals under ICAP professional standards.
        </span>
      </div>
    </div>

    <!-- Bottom CTA Bar -->
    <div style="background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%); border-radius: 24px; padding: clamp(24px, 4vw, 40px); color: #FFFFFF; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
      <div>
        <h3 style="font-size: clamp(18px, 2.5vw, 24px); font-weight: 800; color: #FFFFFF; margin-bottom: 6px;">
          Not Sure Which Practice Fits Your Requirement?
        </h3>
        <p style="font-size: 14px; color: #94A3B8; margin: 0;">
          Speak directly with our managing partners for a free, no-obligation 15-minute diagnostic assessment.
        </p>
      </div>
      <a href="<?php echo esc_url(home_url('/#consultation')); ?>" class="btn-primary-glow" style="white-space: nowrap;">
        <span>Book 15-Min Free Assessment</span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>

  </div>
</main>

<?php get_footer(); ?>
