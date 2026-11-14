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
      <span class="section-eyebrow">Practice Areas</span>
      <h1 class="section-heading" style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 800; margin-bottom: 16px;">
        Strategic Financial, Tax &amp; Corporate Advisory
      </h1>
      <p class="section-subtext" style="max-width: 740px; margin: 0 auto; color: #64748B; font-size: clamp(14px, 1.6vw, 16.5px); line-height: 1.65;">
        Tailored consulting solutions for corporate enterprises, fast-growing startups, non-profits, and multinational corporations operating across Pakistan and international markets.
      </p>
    </div>

    <!-- Quick Jump Sub-Navigation -->
    <div style="display: flex; align-items: center; justify-content: center; gap: 8px; flex-wrap: wrap; margin-bottom: 40px;">
      <a href="#service-tax" class="service-tab-btn" style="text-decoration: none;">Taxation &amp; FBR</a>
      <a href="#service-secp" class="service-tab-btn" style="text-decoration: none;">SECP Corporate</a>
      <a href="#service-accounting" class="service-tab-btn" style="text-decoration: none;">Cloud Bookkeeping</a>
      <a href="#service-audit" class="service-tab-btn" style="text-decoration: none;">Audit &amp; Assurance</a>
      <a href="#service-cfo" class="service-tab-btn" style="text-decoration: none;">Virtual CFO &amp; ERP</a>
      <a href="#service-hr" class="service-tab-btn" style="text-decoration: none;">Org Design</a>
    </div>

    <!-- Practice Areas Grid (Fluid Auto-adjusting) -->
    <div class="responsive-grid-auto" style="gap: 28px; margin-bottom: 56px;">
      
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
          Comprehensive direct and indirect tax management: annual corporate &amp; individual returns, Active Taxpayer List (ATL) activation, sales tax on services (PRA, SRB, KPRA, BRA), and defense against Section 122/177 notices.
        </p>
        <ul class="service-bullets" style="margin-bottom: 24px;">
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Annual Corporate &amp; Individual Income Tax Returns (Form 114)</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Monthly Withholding &amp; Provincial Sales Tax Filings</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Tax Audit Defense &amp; Representation (CIR Appeals &amp; ATIR)</li>
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
          <h2 style="font-size: clamp(19px, 2.5vw, 22px); font-weight: 800; color: #0F172A; margin: 0;">SECP Company Registration</h2>
          <span class="roster-cred-badge badge-secp">SECP Agent</span>
        </div>
        <p style="font-size: 14px; line-height: 1.6; color: #64748B; margin-bottom: 16px;">
          Digital corporate incorporation under the Companies Act 2017: Private Limited, Single Member Company (SMC-Private), Limited Liability Partnership (LLP), statutory annual filings, and Board of Investment (BOI) investor clearance.
        </p>
        <ul class="service-bullets" style="margin-bottom: 24px;">
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Digital Incorporation via SECP eZfile in 3–5 Business Days</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> MOA &amp; AOA Drafting &amp; Company NTN Registration</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Form A, Form 29 &amp; Annual Statutory Governance Returns</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> BOI Foreign Investor Desk &amp; Work Permit Approvals</li>
        </ul>
        <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #E2E8F0; padding-top: 16px;">
          <span style="font-size: 12px; font-weight: 600; color: #64748B;">Fast-Track: 3–5 Days</span>
          <a href="<?php echo esc_url(home_url('/#consultation')); ?>" class="btn-roster-pill">Incorporate Now</a>
        </div>
      </div>

      <!-- Card 3: Cloud Bookkeeping & Payroll -->
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
        </ul>
        <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #E2E8F0; padding-top: 16px;">
          <span style="font-size: 12px; font-weight: 600; color: #64748B;">Dedicated Accountant</span>
          <a href="<?php echo esc_url(home_url('/#consultation')); ?>" class="btn-roster-pill">Start Bookkeeping</a>
        </div>
      </div>

      <!-- Card 4: Audit & Assurance -->
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
        </ul>
        <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #E2E8F0; padding-top: 16px;">
          <span style="font-size: 12px; font-weight: 600; color: #64748B;">FY 2025–26 Slots</span>
          <a href="<?php echo esc_url(home_url('/#consultation')); ?>" class="btn-roster-pill">Request Audit</a>
        </div>
      </div>

      <!-- Card 5: Virtual CFO & ERP -->
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
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Capital Structuring &amp; Bank Financing Facilities</li>
        </ul>
        <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #E2E8F0; padding-top: 16px;">
          <span style="font-size: 12px; font-weight: 600; color: #64748B;">Executive Retainer</span>
          <a href="<?php echo esc_url(home_url('/#consultation')); ?>" class="btn-roster-pill">Retain CFO</a>
        </div>
      </div>

      <!-- Card 6: HR Restructuring -->
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
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Provident, Gratuity &amp; Pension Fund Structuring</li>
        </ul>
        <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #E2E8F0; padding-top: 16px;">
          <span style="font-size: 12px; font-weight: 600; color: #64748B;">Turnaround: 2–4 Weeks</span>
          <a href="<?php echo esc_url(home_url('/#consultation')); ?>" class="btn-roster-pill">Consult Partner</a>
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
            PSEB registration, 0.25% export tax regime, US/UK Delaware/LLC multi-entity structure, and software revenue recognition.
          </p>
        </div>

        <div style="background: rgba(248, 250, 252, 0.9); border: 1px solid #E2E8F0; border-radius: 16px; padding: 20px;">
          <div style="font-weight: 800; font-size: 16px; color: #0F172A; margin-bottom: 6px;">Manufacturing &amp; Industrial</div>
          <p style="font-size: 13px; color: #64748B; margin: 0; line-height: 1.6;">
            Cost of goods sold (COGS) tracking, inventory valuations, raw material import sales tax adjustments, and standard costing.
          </p>
        </div>

        <div style="background: rgba(248, 250, 252, 0.9); border: 1px solid #E2E8F0; border-radius: 16px; padding: 20px;">
          <div style="font-weight: 800; font-size: 16px; color: #0F172A; margin-bottom: 6px;">NGOs, Trusts &amp; Development</div>
          <p style="font-size: 13px; color: #64748B; margin: 0; line-height: 1.6;">
            Section 100C tax exemptions, PCP certification, donor grant compliance audits, and multi-currency project accounting.
          </p>
        </div>

        <div style="background: rgba(248, 250, 252, 0.9); border: 1px solid #E2E8F0; border-radius: 16px; padding: 20px;">
          <div style="font-weight: 800; font-size: 16px; color: #0F172A; margin-bottom: 6px;">Retail, E-Commerce &amp; Services</div>
          <p style="font-size: 13px; color: #64748B; margin: 0; line-height: 1.6;">
            POS integration with FBR digital invoicing, provincial sales tax on services (PRA/SRB), and multi-channel ledger sync.
          </p>
        </div>

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
