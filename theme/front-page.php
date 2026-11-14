<?php
/**
 * Front Page Template - S&S PRESTIGE CONSULTANTS LLP
 *
 * @package SS_Prestige_Consultants
 */

get_header(); ?>

<main id="main-content" class="site-main">

  <!-- =========================================================================
       1. HERO SECTION - Withum-Inspired Video Placement + Elevated Dual Cards
       ========================================================================= -->
  <section class="hero-section" id="hero">
    <div class="container">
      <div class="hero-grid">
        
        <!-- Left Column: Value Proposition & Authority -->
        <div class="hero-content">
          <!-- Floating 3D Elements from Reference Design -->
          <div class="hero-3d-elements" aria-hidden="true">
            <div class="floating-sphere sphere-pearl"></div>
            <div class="floating-sphere sphere-dot-pink"></div>
            <div class="floating-sphere sphere-dot-blue"></div>
            <div class="floating-sphere sphere-dot-coral"></div>
          </div>

          <div class="hero-badge">
            <span class="hero-badge-dot"></span>
            <span>SECP Registered LLP • Inc # 0316515 • NTN # I107949-3</span>
          </div>

          <h1 class="hero-title">
            Multiply Financial Growth. <br>
            <span class="text-gradient">Eliminate Regulatory Uncertainty.</span>
          </h1>

          <p class="hero-description">
            S&amp;S PRESTIGE CONSULTANTS LLP pairs 18+ years of seasoned Chartered Accountancy leadership with Big-4 audit rigor and enterprise ERP transformation. We protect client capital, minimize tax exposure, and structure sustainable growth across Pakistan and global markets.
          </p>

          <div class="hero-cta-group">
            <a href="#services" class="btn-hero-primary">
              <span>Get Started &amp; Explore</span>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="#consultation" class="btn-hero-secondary">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
              <span>15-Min Free Assessment</span>
            </a>
          </div>

          <!-- Micro-Trust Badges -->
          <div class="hero-trust-row">
            <div class="trust-item">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              <span>Strict Pre-Engagement NDA</span>
            </div>
            <div class="trust-item">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
              <span>ICAP Certified Leadership</span>
            </div>
            <div class="trust-item">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
              <span>Islamabad &amp; Gilgit Offices</span>
            </div>
          </div>
        </div>

        <!-- Right Column: Frosted Glass Video Showcase with Custom Controls -->
        <div class="hero-media-wrap">
          <div class="hero-video-card">
            
            <div class="floating-status-pill">
              <span class="hero-badge-dot"></span>
              <span>Advisory in Motion • Direct Partner Oversight</span>
            </div>

            <div class="video-container circular-cutout">
              <video class="hero-video-element" id="hero-bg-video" autoplay loop muted playsinline poster="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1200&q=80">
                <source src="https://assets.mixkit.co/videos/preview/mixkit-financial-analyst-working-on-a-laptop-42994-large.mp4" type="video/mp4">
              </video>
              <div class="video-overlay-gradient"></div>

              <!-- Interactive Floating Toggle Slider from Reference Design -->
              <div class="hero-floating-toggle" id="heroSliderToggle" role="button" tabindex="0" title="Click to toggle live status">
                <div class="toggle-slider-track">
                  <div class="toggle-slider-thumb"></div>
                </div>
                <span class="toggle-slider-label">CA-CAF Oversight</span>
              </div>

              <!-- Frosted Glass Controller Bar -->
              <div class="video-controls-bar">
                <button class="btn-video-toggle" id="video-toggle-btn" aria-label="Play or Pause Video">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><rect x="6" y="4" width="4" height="16"/><rect x="14" y="4" width="4" height="16"/></svg>
                </button>
                <div class="video-scrubber-track">
                  <div class="video-scrubber-progress" id="video-progress-bar"></div>
                </div>
                <span class="video-tagline-text">S&amp;S Prestige Tour</span>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- =========================================================================
       2. FLOATING FROSTED GLASS SERVICE SELECTOR (Home Core Component)
       ========================================================================= -->
  <section class="service-selector-section" id="services">
    <div class="container">
      <div class="service-selector-card">
        
        <div class="selector-header">
          <div class="selector-heading-group">
            <div class="selector-icon-pin">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div>
              <h2 class="selector-title">Doctor Consultation &bull; Financial &amp; Corporate Advisory</h2>
              <span class="selector-subtitle">Chartered Accountant oversight • Transparent fixed scopes • Direct partner helpline</span>
            </div>
          </div>
          <div class="selector-header-accent-dot" aria-hidden="true"></div>
        </div>

        <!-- Filter Tabs & Search Bar Row (Reference Design Match) -->
        <div class="selector-toolbar-row">
          <div class="service-tabs-nav" role="tablist">
            <button class="service-tab-btn active" data-target="all">All Practice Areas</button>
            <button class="service-tab-btn" data-target="tab-taxation">Taxation &amp; FBR</button>
            <button class="service-tab-btn" data-target="tab-secp">SECP Setup</button>
            <button class="service-tab-btn" data-target="tab-accounting">Cloud Accounting</button>
            <button class="service-tab-btn" data-target="tab-audit">Audit &amp; Assurance</button>
            <button class="service-tab-btn" data-target="tab-cfo">Virtual CFO</button>
          </div>

          <div class="consultation-search-box">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            <input type="text" id="consultationSearchInput" placeholder="Search for more..." aria-label="Search practice areas or consultants">
          </div>
        </div>

        <!-- Quick Consultation Roster Table (Reference Design Match) -->
        <div class="consultation-roster-wrapper">
          <div class="roster-table-scroll">
            <table class="roster-table" id="consultationRosterTable">
              <thead>
                <tr>
                  <th>Advisor / Practice</th>
                  <th>Degree / Credential</th>
                  <th>Chamber &amp; Scope</th>
                  <th>Availability</th>
                  <th style="text-align: right;">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr data-category="tab-taxation" data-keywords="tax taxation fbr sunil babar income irs 114 corporate individual sales ntn">
                  <td>
                    <div class="roster-cell-lead">
                      <div class="roster-lead-avatar">SB</div>
                      <div>
                        <strong>Sunil Babar</strong>
                        <span class="roster-lead-sub">Managing Partner</span>
                      </div>
                    </div>
                  </td>
                  <td><span class="roster-cred-badge badge-tax">CA-CAF (ICAP)</span></td>
                  <td>Corporate Tax, FBR IRIS &amp; Audit Defense</td>
                  <td>
                    <span class="roster-avail-pill">
                      <span class="avail-dot-live"></span>
                      Mon - Sat &bull; Active Today
                    </span>
                  </td>
                  <td style="text-align: right;">
                    <a href="#consultation" class="btn-roster-pill" data-preselect="taxation">View details</a>
                  </td>
                </tr>

                <tr data-category="tab-secp" data-keywords="secp corporate company registration pvt ltd smc llp incorporation legal formation">
                  <td>
                    <div class="roster-cell-lead">
                      <div class="roster-lead-avatar avatar-secp">SC</div>
                      <div>
                        <strong>Corporate Secretarial Desk</strong>
                        <span class="roster-lead-sub">SECP Practice Wing</span>
                      </div>
                    </div>
                  </td>
                  <td><span class="roster-cred-badge badge-secp">SECP Registered Agent</span></td>
                  <td>PVT LTD, SMC &amp; Foreign LLP Incorporation</td>
                  <td>
                    <span class="roster-avail-pill">
                      <span class="avail-dot-live"></span>
                      Fast-Track (3-5 Days)
                    </span>
                  </td>
                  <td style="text-align: right;">
                    <a href="#consultation" class="btn-roster-pill" data-preselect="secp">View details</a>
                  </td>
                </tr>

                <tr data-category="tab-accounting" data-keywords="accounting bookkeeping payroll ledgers quickbooks xero reconciliation balance sheet">
                  <td>
                    <div class="roster-cell-lead">
                      <div class="roster-lead-avatar avatar-acct">CB</div>
                      <div>
                        <strong>Cloud Bookkeeping Desk</strong>
                        <span class="roster-lead-sub">Digital Accounting Team</span>
                      </div>
                    </div>
                  </td>
                  <td><span class="roster-cred-badge badge-acct">QuickBooks / Xero</span></td>
                  <td>Monthly Ledgers, Payroll &amp; Invoicing Management</td>
                  <td>
                    <span class="roster-avail-pill">
                      <span class="avail-dot-live"></span>
                      Instant Client Onboarding
                    </span>
                  </td>
                  <td style="text-align: right;">
                    <a href="#consultation" class="btn-roster-pill" data-preselect="bookkeeping">View details</a>
                  </td>
                </tr>

                <tr data-category="tab-audit" data-keywords="audit assurance statutory controls internal big4 risk compliance review">
                  <td>
                    <div class="roster-cell-lead">
                      <div class="roster-lead-avatar avatar-audit">AA</div>
                      <div>
                        <strong>Statutory Audit &amp; Assurance</strong>
                        <span class="roster-lead-sub">Audit Review Board</span>
                      </div>
                    </div>
                  </td>
                  <td><span class="roster-cred-badge badge-audit">Big-4 Audit Trained</span></td>
                  <td>Independent Statutory Audit &amp; Internal Controls</td>
                  <td>
                    <span class="roster-avail-pill">
                      <span class="avail-dot-live"></span>
                      FY 2025-26 Slots Open
                    </span>
                  </td>
                  <td style="text-align: right;">
                    <a href="#consultation" class="btn-roster-pill" data-preselect="audit">View details</a>
                  </td>
                </tr>

                <tr data-category="tab-cfo" data-keywords="cfo virtual erp sap oracle financial modeling valuation business strategy s4hana">
                  <td>
                    <div class="roster-cell-lead">
                      <div class="roster-lead-avatar avatar-cfo">VC</div>
                      <div>
                        <strong>Virtual CFO &amp; ERP Advisory</strong>
                        <span class="roster-lead-sub">Enterprise Transformation</span>
                      </div>
                    </div>
                  </td>
                  <td><span class="roster-cred-badge badge-cfo">SAP S/4HANA &bull; Oracle</span></td>
                  <td>Virtual CFO, Financial Modeling &amp; ERP Architecture</td>
                  <td>
                    <span class="roster-avail-pill">
                      <span class="avail-dot-live"></span>
                      Executive Appointment
                    </span>
                  </td>
                  <td style="text-align: right;">
                    <a href="#consultation" class="btn-roster-pill" data-preselect="cfo">View details</a>
                  </td>
                </tr>

                <tr data-category="tab-secp" data-keywords="international foreign investor fdi branch liaison boi sbp foreign exchange profit repatriation transfer pricing">
                  <td>
                    <div class="roster-cell-lead">
                      <div class="roster-lead-avatar" style="background: linear-gradient(135deg, #4F46E5, #818CF8); color: #fff;">ID</div>
                      <div>
                        <strong>International Desk &amp; FDI</strong>
                        <span class="roster-lead-sub">Cross-Border Inward Investment</span>
                      </div>
                    </div>
                  </td>
                  <td><span class="roster-cred-badge badge-intl">BOI &bull; SBP Compliant</span></td>
                  <td>Branch / Liaison Office &amp; Profit Repatriation</td>
                  <td>
                    <span class="roster-avail-pill">
                      <span class="avail-dot-live"></span>
                      Direct Partner Escort
                    </span>
                  </td>
                  <td style="text-align: right;">
                    <a href="<?php echo esc_url(home_url('/services/#service-international')); ?>" class="btn-roster-pill">View details</a>
                  </td>
                </tr>

                <tr data-category="tab-taxation" data-keywords="overseas non-resident nrp section 7e property tax deemed income roshan digital rda form 116 wealth remittance">
                  <td>
                    <div class="roster-cell-lead">
                      <div class="roster-lead-avatar" style="background: linear-gradient(135deg, #0D9488, #2DD4BF); color: #fff;">OP</div>
                      <div>
                        <strong>Overseas Pakistanis Desk</strong>
                        <span class="roster-lead-sub">Expat Tax &amp; Real Estate Wing</span>
                      </div>
                    </div>
                  </td>
                  <td><span class="roster-cred-badge badge-overseas">Section 7E Specialist</span></td>
                  <td>Property Tax Clearance &amp; Non-Resident Returns</td>
                  <td>
                    <span class="roster-avail-pill">
                      <span class="avail-dot-live"></span>
                      Remote Online Filing
                    </span>
                  </td>
                  <td style="text-align: right;">
                    <a href="<?php echo esc_url(home_url('/services/#service-overseas')); ?>" class="btn-roster-pill">View details</a>
                  </td>
                </tr>

                <tr data-category="tab-audit" data-keywords="npo ngo trust non-profit 100c ead donor grant audit usaid un akdn ppaf public financial management pfm">
                  <td>
                    <div class="roster-cell-lead">
                      <div class="roster-lead-avatar" style="background: linear-gradient(135deg, #D97706, #FBBF24); color: #fff;">NP</div>
                      <div>
                        <strong>NPO &amp; Donor Compliance Desk</strong>
                        <span class="roster-lead-sub">Development Sector Advisory</span>
                      </div>
                    </div>
                  </td>
                  <td><span class="roster-cred-badge badge-npo">100C &bull; EAD Verified</span></td>
                  <td>Section 100C Exemption &amp; Donor Grant Audits</td>
                  <td>
                    <span class="roster-avail-pill">
                      <span class="avail-dot-live"></span>
                      AKDN / PPAF Standard
                    </span>
                  </td>
                  <td style="text-align: right;">
                    <a href="<?php echo esc_url(home_url('/services/#service-npo')); ?>" class="btn-roster-pill">View details</a>
                  </td>
                </tr>

                <tr data-category="tab-secp" data-keywords="trade commercial psw weboc customs chamber import export ftn license international border">
                  <td>
                    <div class="roster-cell-lead">
                      <div class="roster-lead-avatar" style="background: linear-gradient(135deg, #0284C7, #38BDF8); color: #fff;">TF</div>
                      <div>
                        <strong>Trade Facilitation &amp; WeBOC</strong>
                        <span class="roster-lead-sub">Cross-Border Commercial Desk</span>
                      </div>
                    </div>
                  </td>
                  <td><span class="roster-cred-badge badge-trade">PSW &bull; WeBOC Agent</span></td>
                  <td>Customs User ID &amp; Chamber of Commerce</td>
                  <td>
                    <span class="roster-avail-pill">
                      <span class="avail-dot-live"></span>
                      Direct Chamber Escort
                    </span>
                  </td>
                  <td style="text-align: right;">
                    <a href="<?php echo esc_url(home_url('/services/#service-trade')); ?>" class="btn-roster-pill">View details</a>
                  </td>
                </tr>

                <tr data-category="tab-accounting" data-keywords="eor employer of record payroll hr eobi pessi provident gratuity social security workforce">
                  <td>
                    <div class="roster-cell-lead">
                      <div class="roster-lead-avatar" style="background: linear-gradient(135deg, #059669, #34D399); color: #fff;">ER</div>
                      <div>
                        <strong>Employer of Record (EoR) &amp; HR</strong>
                        <span class="roster-lead-sub">Workforce Compliance Wing</span>
                      </div>
                    </div>
                  </td>
                  <td><span class="roster-cred-badge badge-eor">EOBI &bull; PESSI Compliant</span></td>
                  <td>Payroll Outsourcing &amp; Statutory Benefits</td>
                  <td>
                    <span class="roster-avail-pill">
                      <span class="avail-dot-live"></span>
                      Instant Deployment
                    </span>
                  </td>
                  <td style="text-align: right;">
                    <a href="<?php echo esc_url(home_url('/services/#service-eor')); ?>" class="btn-roster-pill">View details</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Tab 1: Taxation & FBR Compliance -->
        <div class="service-tab-pane active" id="tab-taxation">
          <div class="services-grid-sub">
            
            <div class="service-box-card">
              <div>
                <div class="service-box-header">
                  <h3 class="service-title">Corporate &amp; SME Tax Compliance</h3>
                  <span class="service-meta-tag">FBR Certified</span>
                </div>
                <p style="font-size: 13.5px; color: #64748B;">Complete annual &amp; quarterly corporate tax filings, IRIS portal management, and statutory tax provisioning for Private Ltd, SMC, and partnerships.</p>
                <ul class="service-bullets">
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Annual Corporate Income Tax Return (Form 114)</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Monthly &amp; Biannual Withholding Tax Statements (165)</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Monthly Provincial &amp; Federal Sales Tax Returns (FBR/PRA/SRB)</li>
                </ul>
              </div>
              <div class="service-box-footer">
                <span class="service-turnaround">Turnaround: 3-5 Business Days</span>
                <a href="#consultation" class="btn-service-action">Book Service</a>
              </div>
            </div>

            <div class="service-box-card">
              <div>
                <div class="service-box-header">
                  <h3 class="service-title">Tax Audit Defense &amp; Representation</h3>
                  <span class="service-meta-tag">Legal Shield</span>
                </div>
                <p style="font-size: 13.5px; color: #64748B;">Expert representation before FBR Commissioners, Appellate Tribunals, and tax audit officers to contest unjustified notices and penalties.</p>
                <ul class="service-bullets">
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Defense against Section 122, 177 &amp; 214C Audit Notices</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Drafting legal replies &amp; documentary reconciliation</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Representation before CIR (Appeals) &amp; ATIR</li>
                </ul>
              </div>
              <div class="service-box-footer">
                <span class="service-turnaround">Immediate Notice Response</span>
                <a href="#consultation" class="btn-service-action">Consult Partner</a>
              </div>
            </div>

            <div class="service-box-card">
              <div>
                <div class="service-box-header">
                  <h3 class="service-title">Individual &amp; Expat Tax Planning</h3>
                  <span class="service-meta-tag">Active Taxpayer</span>
                </div>
                <p style="font-size: 13.5px; color: #64748B;">NTN registration, Active Taxpayer List (ATL) maintenance, foreign income declaration, and wealth statement reconciliation for executives and freelancers.</p>
                <ul class="service-bullets">
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Instant NTN Registration &amp; ATL Activation</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Annual Wealth Statement (Form 116) Reconciliation</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Freelancer IT Export 0.25% Tax Concession Filings</li>
                </ul>
              </div>
              <div class="service-box-footer">
                <span class="service-turnaround">Turnaround: 24-48 Hours</span>
                <a href="#consultation" class="btn-service-action">File Today</a>
              </div>
            </div>

          </div>
        </div>

        <!-- Tab 2: SECP Registration & Corporate Governance -->
        <div class="service-tab-pane" id="tab-secp">
          <div class="services-grid-sub">
            
            <div class="service-box-card">
              <div>
                <div class="service-box-header">
                  <h3 class="service-title">Private Limited &amp; SMC Registration</h3>
                  <span class="service-meta-tag">SECP Verified</span>
                </div>
                <p style="font-size: 13.5px; color: #64748B;">Complete digital company incorporation via SECP eZfile system, Memorandum &amp; Articles of Association (MOA/AOA), and digital certificates.</p>
                <ul class="service-bullets">
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Name Reservation &amp; Incorporation Certificate</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> MOA &amp; AOA Custom Drafting</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Company NTN &amp; Corporate Bank Account Resolution</li>
                </ul>
              </div>
              <div class="service-box-footer">
                <span class="service-turnaround">Turnaround: 3-5 Working Days</span>
                <a href="#consultation" class="btn-service-action">Incorporate Now</a>
              </div>
            </div>

            <div class="service-box-card">
              <div>
                <div class="service-box-header">
                  <h3 class="service-title">LLP &amp; Partnership Formation</h3>
                  <span class="service-meta-tag">Flexible Structure</span>
                </div>
                <p style="font-size: 13.5px; color: #64748B;">Limited Liability Partnership (LLP) formation under SECP, drafting partnership deeds, and Registrar of Firms registration.</p>
                <ul class="service-bullets">
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> SECP LLP Agreement &amp; Form III / Form IV Filings</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Form C Registration with Registrar of Firms</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Legal Liability Protection Structuring</li>
                </ul>
              </div>
              <div class="service-box-footer">
                <span class="service-turnaround">Turnaround: 4-6 Working Days</span>
                <a href="#consultation" class="btn-service-action">Register LLP</a>
              </div>
            </div>

            <div class="service-box-card">
              <div>
                <div class="service-box-header">
                  <h3 class="service-title">Foreign Investor Desk &amp; BOI Clearance</h3>
                  <span class="service-meta-tag">Cross-Border</span>
                </div>
                <p style="font-size: 13.5px; color: #64748B;">Board of Investment (BOI) work permits, branch office registration, SECP foreign director clearances, and SBP foreign exchange repatriation.</p>
                <ul class="service-bullets">
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> 100% Remote Incorporation for Foreign Nationals</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> BOI Liaison / Branch Office Permissions</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> State Bank of Pakistan (SBP) Repatriation Setup</li>
                </ul>
              </div>
              <div class="service-box-footer">
                <span class="service-turnaround">Dedicated International Lead</span>
                <a href="#consultation" class="btn-service-action">Inquire Desk</a>
              </div>
            </div>

          </div>
        </div>

        <!-- Tab 3: Cloud Bookkeeping & Payroll -->
        <div class="service-tab-pane" id="tab-accounting">
          <div class="services-grid-sub">
            
            <div class="service-box-card">
              <div>
                <div class="service-box-header">
                  <h3 class="service-title">Multi-Entity Cloud Bookkeeping</h3>
                  <span class="service-meta-tag">QuickBooks &amp; Xero</span>
                </div>
                <p style="font-size: 13.5px; color: #64748B;">Managed cloud bookkeeping on Xero, QuickBooks Online, SAP, and Odoo. Led by a team of 12 senior accountants managing 150+ companies globally.</p>
                <ul class="service-bullets">
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Daily transaction logging &amp; bank reconciliations</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Accounts Payable (P2P) &amp; Receivable (O2C) cycles</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Monthly IFRS / IAS compliant balance sheets &amp; P&amp;L</li>
                </ul>
              </div>
              <div class="service-box-footer">
                <span class="service-turnaround">Monthly Fixed Retainer</span>
                <a href="#consultation" class="btn-service-action">Outsource Today</a>
              </div>
            </div>

            <div class="service-box-card">
              <div>
                <div class="service-box-header">
                  <h3 class="service-title">Automated Payroll &amp; EOBI Compliance</h3>
                  <span class="service-meta-tag">Zero Risk</span>
                </div>
                <p style="font-size: 13.5px; color: #64748B;">End-to-end payroll processing, tax salary deductions under Section 149, EOBI &amp; PESSI registrations, and digital payslips.</p>
                <ul class="service-bullets">
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Automated Monthly Payroll Calculation</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> EOBI &amp; Social Security (PESSI) Monthly Challans</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Provident, Gratuity &amp; Pension Fund Structuring</li>
                </ul>
              </div>
              <div class="service-box-footer">
                <span class="service-turnaround">Monthly Closing Support</span>
                <a href="#consultation" class="btn-service-action">Manage Payroll</a>
              </div>
            </div>

            <div class="service-box-card">
              <div>
                <div class="service-box-header">
                  <h3 class="service-title">Financial Statements Compilation</h3>
                  <span class="service-meta-tag">Audit-Ready</span>
                </div>
                <p style="font-size: 13.5px; color: #64748B;">Preparation of audit-ready statutory financial statements in full compliance with Third / Fourth / Fifth Schedule of Companies Act 2017.</p>
                <ul class="service-bullets">
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Balance Sheet, Statement of Comprehensive Income</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Statement of Cash Flows &amp; Changes in Equity</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Full Disclosures &amp; Accounting Policies</li>
                </ul>
              </div>
              <div class="service-box-footer">
                <span class="service-turnaround">Turnaround: 5-7 Days</span>
                <a href="#consultation" class="btn-service-action">Compile Accounts</a>
              </div>
            </div>

          </div>
        </div>

        <!-- Tab 4: Audit & Assurance -->
        <div class="service-tab-pane" id="tab-audit">
          <div class="services-grid-sub">
            
            <div class="service-box-card">
              <div>
                <div class="service-box-header">
                  <h3 class="service-title">Statutory &amp; External Audit Support</h3>
                  <span class="service-meta-tag">ISA Standard</span>
                </div>
                <p style="font-size: 13.5px; color: #64748B;">Comprehensive audit preparation, working paper compilation, and liaison with external auditors to ensure unqualified audit opinions.</p>
                <ul class="service-bullets">
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> International Standards on Auditing (ISA) Compliance</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Audit Schedule Preparation &amp; Lead Schedules</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Zero-surprise resolution of management letter points</li>
                </ul>
              </div>
              <div class="service-box-footer">
                <span class="service-turnaround">Pre-Audit Readiness</span>
                <a href="#consultation" class="btn-service-action">Request Audit</a>
              </div>
            </div>

            <div class="service-box-card">
              <div>
                <div class="service-box-header">
                  <h3 class="service-title">Internal Audit &amp; Control Reviews</h3>
                  <span class="service-meta-tag">Over 700+ Entities</span>
                </div>
                <p style="font-size: 13.5px; color: #64748B;">Systematic evaluation of internal financial controls, inventory fraud prevention, SOP design, and governance frameworks.</p>
                <ul class="service-bullets">
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Control Gap Identification &amp; Process Remediation</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Revenue leakage &amp; procurement fraud checks</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Board-level Internal Audit Reporting</li>
                </ul>
              </div>
              <div class="service-box-footer">
                <span class="service-turnaround">Quarterly / Semi-Annual</span>
                <a href="#consultation" class="btn-service-action">Audit Controls</a>
              </div>
            </div>

            <div class="service-box-card">
              <div>
                <div class="service-box-header">
                  <h3 class="service-title">Special Audits &amp; Due Diligence</h3>
                  <span class="service-meta-tag">200+ Feasibilities</span>
                </div>
                <p style="font-size: 13.5px; color: #64748B;">Agreed-Upon Procedures (AUP), grant utilization audits for donor agencies (AKDN, Sightsavers, PPAF, AKRSP), and M&amp;A due diligence.</p>
                <ul class="service-bullets">
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Donor Grant &amp; Project Completion Audits</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Rapid 1-2 Day Business Due Diligence turnarounds</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Business Valuation &amp; Asset Verification</li>
                </ul>
              </div>
              <div class="service-box-footer">
                <span class="service-turnaround">Fast-Track Turnaround</span>
                <a href="#consultation" class="btn-service-action">Due Diligence</a>
              </div>
            </div>

          </div>
        </div>

        <!-- Tab 5: Virtual CFO & ERP Transformations -->
        <div class="service-tab-pane" id="tab-cfo">
          <div class="services-grid-sub">
            
            <div class="service-box-card">
              <div>
                <div class="service-box-header">
                  <h3 class="service-title">Virtual CFO (Fractional Leadership)</h3>
                  <span class="service-meta-tag">Executive Impact</span>
                </div>
                <p style="font-size: 13.5px; color: #64748B;">On-demand C-level financial strategy without full-time executive overhead. Currently serving 5 major corporate entities with 5-year financial modeling.</p>
                <ul class="service-bullets">
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> 5-Year Budget Planning &amp; Scenario Modeling</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Cash Flow Runway &amp; Working Capital Optimization</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Board-level Financial Presentations &amp; Investor Relations</li>
                </ul>
              </div>
              <div class="service-box-footer">
                <span class="service-turnaround">Retainer Engagement</span>
                <a href="#consultation" class="btn-service-action">Hire Virtual CFO</a>
              </div>
            </div>

            <div class="service-box-card">
              <div>
                <div class="service-box-header">
                  <h3 class="service-title">ERP Transformation (SAP &amp; Oracle)</h3>
                  <span class="service-meta-tag">Enterprise Scale</span>
                </div>
                <p style="font-size: 13.5px; color: #64748B;">End-to-end ERP migration project leadership. Proven track record leading Oracle Fusion / HFM migrations to SAP S/4HANA Finance.</p>
                <ul class="service-bullets">
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> R2R, P2P, and O2C Process Redesign</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Chart of Accounts (COA) Harmonization &amp; Data Migration</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Power BI Executive Reporting Dashboard Integration</li>
                </ul>
              </div>
              <div class="service-box-footer">
                <span class="service-turnaround">Milestone Governance</span>
                <a href="#consultation" class="btn-service-action">Plan ERP Project</a>
              </div>
            </div>

            <div class="service-box-card">
              <div>
                <div class="service-box-header">
                  <h3 class="service-title">HR &amp; Organizational Restructuring</h3>
                  <span class="service-meta-tag">Scale &amp; Governance</span>
                </div>
                <p style="font-size: 13.5px; color: #64748B;">Job grading, role rationalization, span-of-control optimization, and governance frameworks for 500+ employee multinationals.</p>
                <ul class="service-bullets">
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Job Evaluation &amp; Executive Salary Banding</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Reporting Lines &amp; Delegation of Authority (DOA)</li>
                  <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Finance &amp; Operations SOP Documentation</li>
                </ul>
              </div>
              <div class="service-box-footer">
                <span class="service-turnaround">Custom Project Scope</span>
                <a href="#consultation" class="btn-service-action">Restructure Org</a>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- =========================================================================
       3. 4 PILLARS OF FINANCIAL TRUST - Reducing Uncertainty Consultation UX
       ========================================================================= -->
  <section class="section trust-pillars-section" id="trust">
    <div class="container">
      
      <div class="section-title-wrap">
        <span class="section-eyebrow">Consultation Trust Architecture</span>
        <h2 class="section-heading">Why Leaders Trust S&amp;S Prestige with Their Capital</h2>
        <p class="section-subtext">
          Trust is not an assumption—it is an engineering discipline. We have eliminated every point of uncertainty so you know exactly where your documents, tax liabilities, and funds stand at all times.
        </p>
      </div>

      <div class="pillars-grid">
        
        <div class="pillar-card frosted-card">
          <div class="pillar-icon-box">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
          </div>
          <h3 class="pillar-title">1. Pre-Engagement NDA &amp; Security</h3>
          <p class="pillar-text">
            Before a single ledger or bank statement is shared, you receive a legally binding mutual Non-Disclosure Agreement. Your proprietary financial data is stored in bank-grade 256-bit encrypted vaults with restricted partner-level access.
          </p>
        </div>

        <div class="pillar-card frosted-card">
          <div class="pillar-icon-box">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 12 15 16 10"/></svg>
          </div>
          <h3 class="pillar-title">2. ICAP Certified CA Oversight</h3>
          <p class="pillar-text">
            No work is outsourced to unverified junior contractors. Every filing, audit working paper, and financial model is personally supervised and signed off by a qualified Chartered Accountant (CA-CAF) with 18+ years of Big-4 rigor.
          </p>
        </div>

        <div class="pillar-card frosted-card">
          <div class="pillar-icon-box">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
          </div>
          <h3 class="pillar-title">3. Transparent Fixed Scope</h3>
          <p class="pillar-text">
            Uncertainty kills trust. We provide clear, itemized milestone proposals with fixed deliverables before starting. Zero unexpected retainers, zero unapproved invoice surprises, and guaranteed turnaround time commitments.
          </p>
        </div>

        <div class="pillar-card frosted-card">
          <div class="pillar-icon-box">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </div>
          <h3 class="pillar-title">4. Direct Partner Helpline</h3>
          <p class="pillar-text">
            When regulatory authorities serve an unexpected FBR notice or audit summons, you don't wait in a support queue. You have direct WhatsApp and telephone access to our Managing Partner for immediate legal defense.
          </p>
        </div>

      </div>
    </div>
  </section>


  <!-- =========================================================================
       4. INTERACTIVE TOOL: PAKISTAN INCOME TAX & SALARY CALCULATOR
       ========================================================================= -->
  <section class="section" id="tax-calculator" style="background: var(--color-bg-alt);">
    <div class="container">
      
      <div class="section-title-wrap">
        <span class="section-eyebrow">Client Self-Service Tool</span>
        <h2 class="section-heading">Pakistan Income Tax &amp; Salary Calculator</h2>
        <p class="section-subtext">
          Calculate your accurate FBR tax liability in real-time according to the latest Finance Act tax slabs for both Salaried Individuals and Business Individuals/AOPs.
        </p>
      </div>

      <div class="tax-calculator-card">
        <div class="calculator-grid">
          
          <!-- Input Column -->
          <div class="calc-inputs-col">
            <label class="calc-label">Select Taxpayer Category</label>
            <div class="calc-type-toggle">
              <button class="calc-toggle-btn active" id="calc-type-salaried">Salaried Individual</button>
              <button class="calc-toggle-btn" id="calc-type-business">Business Individual / AOP</button>
            </div>

            <div class="calc-input-group">
              <label class="calc-label" for="calc-income-input">Enter Monthly Gross Income (PKR)</label>
              <input type="number" id="calc-income-input" class="calc-input-field" value="250000" placeholder="e.g. 250000" min="0" step="10000">
              <span style="font-size: 12px; color: #64748B; margin-top: 6px; display: block;">Annualized automatically across 12 calendar months.</span>
            </div>

            <div style="background: rgba(26, 107, 255, 0.08); border-left: 3px solid var(--color-primary); padding: 12px 16px; border-radius: 8px;">
              <div style="font-size: 13px; font-weight: 600; color: var(--color-dark); margin-bottom: 4px;">Need Tax Rebates or Foreign Exemption?</div>
              <div style="font-size: 12px; color: #64748B;">Our tax team specializes in IT export exemptions (0.25%), corporate tax shields, and admissible business deductions.</div>
            </div>
          </div>

          <!-- Result Column -->
          <div class="calc-results-col">
            <div class="calc-result-display">
              <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #94A3B8; margin-bottom: 16px;">Tax Liability Breakdown</div>

              <div class="result-row">
                <span>Monthly Tax Deduction:</span>
                <span class="result-amount" id="calc-monthly-tax">PKR 0</span>
              </div>

              <div class="result-row">
                <span>Annual Tax Liability:</span>
                <span class="result-amount" id="calc-annual-tax">PKR 0</span>
              </div>

              <div class="result-row">
                <span>Net Monthly Take-Home:</span>
                <span class="result-amount" id="calc-net-income" style="color: #FFFFFF;">PKR 0</span>
              </div>

              <div class="result-row">
                <span>Effective Tax Rate:</span>
                <span class="result-amount" id="calc-effective-rate" style="color: #FBBF24;">0%</span>
              </div>

              <div class="result-row total-tax">
                <span>Estimated Annual Tax:</span>
                <span class="result-amount total" id="calc-total-display">PKR 0</span>
              </div>

              <a href="#consultation" class="btn-hero-primary" style="width: 100%; justify-content: center; margin-top: 20px; font-size: 14px;">
                <span>File with Our Tax Partner</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>


  <!-- =========================================================================
       5. LEADERSHIP PROFILE & TRACK RECORD (Sunil Babar, Managing Partner)
       ========================================================================= -->
  <section class="section leadership-section" id="leadership">
    <div class="container">
      
      <div class="section-title-wrap">
        <span class="section-eyebrow">Proven Executive Pedigree</span>
        <h2 class="section-heading">Chartered Accountancy Leadership You Can Count On</h2>
        <p class="section-subtext">
          Our practice is anchored by senior executive governance with an unbroken 18+ year track record serving multinationals, development agencies, and high-growth commercial enterprises.
        </p>
      </div>

      <div class="leadership-grid">
        
        <!-- Profile Card -->
        <div class="leader-card-profile frosted-card">
          <div class="leader-avatar-circle">SB</div>
          <h3 class="leader-name">Sunil Babar</h3>
          <div class="leader-designation">Managing Partner &amp; Senior Transformation Advisor</div>
          
          <div class="leader-credentials-tags">
            <span class="cred-badge">CA-CAF (ICAP)</span>
            <span class="cred-badge">SAP S/4HANA Certified</span>
            <span class="cred-badge">Power BI Specialist</span>
            <span class="cred-badge">18+ Years Executive Experience</span>
          </div>

          <p style="font-size: 14px; color: #475569; line-height: 1.6; text-align: left; margin-bottom: 20px;">
            Former Chief Operating Officer at Malik Mirza &amp; Co. / IECNet S.K.S.S.S. Chartered Accountants, Virtual CFO across 5 corporate entities, and Project Lead for enterprise financial planning and SAP/Oracle ERP migrations.
          </p>

          <div class="leader-contact-box">
            <div><strong>Direct Contact:</strong> +92-346-4439391 / +92-333-4439391</div>
            <div><strong>Email:</strong> <a href="mailto:info@ssprestigeconsultants.com" style="color: #1E293B; text-decoration: none;">info@ssprestigeconsultants.com</a></div>
            <a href="https://wa.me/923464439391" target="_blank" rel="noopener" class="btn-primary-glow" style="margin-top: 10px; width: 100%;">
              <span>Connect on WhatsApp</span>
            </a>
          </div>
        </div>

        <!-- Metrics & Sector Experience Grid -->
        <div class="leader-metrics-content">
          <h3 style="font-size: 24px; font-weight: 800; margin-bottom: 12px;">Demonstrated Scale &amp; Strategic Impact</h3>
          <p style="font-size: 15px; color: #64748B; margin-bottom: 24px;">
            From nationwide audits to multinational cloud bookkeeping and high-stakes tax defense before FBR authorities, our verifiable deliverables speak for themselves:
          </p>

          <div class="metrics-grid-four">
            <div class="metric-stat-box">
              <div class="metric-big-num">700+</div>
              <div class="metric-label">Audit &amp; Risk Reviews</div>
              <div class="metric-sub">Internal control gaps identified and remediated across 700+ corporate entities.</div>
            </div>

            <div class="metric-stat-box">
              <div class="metric-big-num">500+</div>
              <div class="metric-label">Tax Compliance Cases</div>
              <div class="metric-sub">FBR audits, corporate returns, and appellate defense successfully concluded.</div>
            </div>

            <div class="metric-stat-box">
              <div class="metric-big-num">150+</div>
              <div class="metric-label">Global Ledgers Managed</div>
              <div class="metric-sub">Active accounting across USA, UK, China, UAE, Australia &amp; Pakistan.</div>
            </div>

            <div class="metric-stat-box">
              <div class="metric-big-num">200+</div>
              <div class="metric-label">Feasibilities &amp; Due Diligence</div>
              <div class="metric-sub">Including AKDN, Sightsavers, PPAF, AKRSP, Fauji Cement, NHA &amp; HDIP.</div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- =========================================================================
       6. 3-STEP ENGAGEMENT ROADMAP - Frictionless Onboarding UX
       ========================================================================= -->
  <section class="section" id="roadmap" style="background: #FFFFFF;">
    <div class="container">
      
      <div class="section-title-wrap">
        <span class="section-eyebrow">Zero Friction Onboarding</span>
        <h2 class="section-heading">How We Work Together from Day One</h2>
        <p class="section-subtext">
          A crystal-clear, 3-step pathway designed to eliminate ambiguity, guarantee document confidentiality, and deliver immediate financial clarity.
        </p>
      </div>

      <div class="pillars-grid">
        
        <div class="pillar-card frosted-card">
          <div style="font-size: 32px; font-weight: 900; color: var(--color-primary); line-height: 1; margin-bottom: 16px;">01</div>
          <h3 class="pillar-title">15-Min Free Assessment</h3>
          <p class="pillar-text">
            We schedule a concise video call or WhatsApp review to diagnose your exact accounting, tax liability, SECP filing, or ERP requirements—no commitment required.
          </p>
        </div>

        <div class="pillar-card frosted-card">
          <div style="font-size: 32px; font-weight: 900; color: var(--color-primary); line-height: 1; margin-bottom: 16px;">02</div>
          <h3 class="pillar-title">Mutual NDA &amp; Fixed Scope</h3>
          <p class="pillar-text">
            We sign a binding confidentiality agreement and provide an itemized proposal with clear milestone deliverables, committed turnarounds, and fixed fees.
          </p>
        </div>

        <div class="pillar-card frosted-card">
          <div style="font-size: 32px; font-weight: 900; color: var(--color-primary); line-height: 1; margin-bottom: 16px;">03</div>
          <h3 class="pillar-title">Execution &amp; Live Tracking</h3>
          <p class="pillar-text">
            Your dedicated Chartered Accountant takes ownership of execution. You receive regular status updates, filing confirmation receipts, and direct partner access.
          </p>
        </div>

      </div>

    </div>
  </section>


  <!-- =========================================================================
       6B. REGULATORY INSIGHTS & KNOWLEDGE HUB (Withum & URCA Benchmark)
       ========================================================================= -->
  <section class="section" id="insights" style="background: #F8FAFC;">
    <div class="container">
      
      <div class="section-title-wrap">
        <span class="section-eyebrow">Executive Intelligence</span>
        <h2 class="section-heading">Regulatory Advisory Insights &amp; Market Briefs</h2>
        <p class="section-subtext">
          Strategic analysis and compliance directives authored by our Senior Chartered Accountants to help corporate leaders eliminate uncertainty.
        </p>
      </div>

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
            <span style="font-size: 12px; color: #64748B;">Reading Time: 4 Mins</span>
            <a href="<?php echo esc_url(home_url('/services/#service-insights')); ?>" class="insight-link">
              <span>Read Advisory Brief</span>
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
            <span style="font-size: 12px; color: #64748B;">Reading Time: 5 Mins</span>
            <a href="<?php echo esc_url(home_url('/services/#service-insights')); ?>" class="insight-link">
              <span>Read Advisory Brief</span>
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
            <span style="font-size: 12px; color: #64748B;">Reading Time: 6 Mins</span>
            <a href="<?php echo esc_url(home_url('/services/#service-insights')); ?>" class="insight-link">
              <span>Read Advisory Brief</span>
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
            <span style="font-size: 12px; color: #64748B;">Reading Time: 5 Mins</span>
            <a href="<?php echo esc_url(home_url('/services/#service-insights')); ?>" class="insight-link">
              <span>Read Advisory Brief</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </article>

      </div>

    </div>
  </section>


  <!-- =========================================================================
       7. CONSULTATION BOOKING & INTAKE SECTION
       ========================================================================= -->
  <section class="section" id="consultation" style="background: linear-gradient(180deg, #F8FAFC 0%, #EFF6FF 100%);">
    <div class="container">
      <div class="frosted-card" style="max-width: 840px; margin: 0 auto; padding: 48px 36px; border-radius: 28px; background: rgba(255, 255, 255, 0.92);">
        
        <div style="text-align: center; margin-bottom: 32px;">
          <span class="section-eyebrow">Instant Action</span>
          <h2 style="font-size: 28px; font-weight: 800; margin-bottom: 10px;">Schedule Your Confidential Consultation</h2>
          <p style="font-size: 15px; color: #64748B;">Speak directly with a licensed Chartered Accountant to resolve your tax, corporate, or bookkeeping challenges.</p>
        </div>

        <?php if (isset($_GET['consultation_sent'])) : ?>
        <div style="background: rgba(16, 185, 129, 0.12); border: 1px solid rgba(16, 185, 129, 0.4); border-radius: 16px; padding: 20px 24px; margin-bottom: 32px; display: flex; align-items: center; gap: 16px;">
          <div style="width: 44px; height: 44px; border-radius: 50%; background: #10B981; color: #FFFFFF; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
          </div>
          <div>
            <div style="font-size: 16px; font-weight: 700; color: #065F46; margin-bottom: 4px;">Consultation Request Received!</div>
            <div style="font-size: 14px; color: #047857; line-height: 1.5;">
              Thank you! Our Managing Partner has received your submission and will review your requirements under our strict pre-engagement NDA. For immediate assistance, you can also reach us directly on WhatsApp at <a href="https://wa.me/923464439391" style="font-weight: 700; color: #065F46; text-decoration: underline;">+92 346 4439391</a>.
            </div>
          </div>
        </div>
        <?php endif; ?>

        <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" id="consultation-form">
          <input type="hidden" name="action" value="submit_consultation">
          <?php wp_nonce_field('ss_consultation_action', 'ss_consultation_nonce'); ?>

          <div class="responsive-form-row">
            <div>
              <label class="calc-label">Your Full Name *</label>
              <input type="text" name="client_name" class="calc-input-field" placeholder="e.g. Tariq Mehmood" required>
            </div>
            <div>
              <label class="calc-label">Phone / WhatsApp Number *</label>
              <input type="tel" name="client_phone" class="calc-input-field" placeholder="+92 300 1234567" required>
            </div>
          </div>

          <div class="responsive-form-row">
            <div>
              <label class="calc-label">Corporate Email Address *</label>
              <input type="email" name="client_email" class="calc-input-field" placeholder="tariq@company.com" required>
            </div>
            <div>
              <label class="calc-label">Service Required *</label>
              <select name="service_type" class="calc-input-field" required>
                <option value="taxation">FBR Income Tax &amp; Sales Tax Compliance</option>
                <option value="secp">SECP Company Registration (Pvt Ltd / SMC / LLP)</option>
                <option value="international">Foreign Investor Desk &amp; BOI Support</option>
                <option value="overseas">Overseas Pakistanis Desk &amp; Section 7E Tax</option>
                <option value="bookkeeping">Cloud Accounting &amp; Bookkeeping (Xero / QBO)</option>
                <option value="audit">Statutory Audit, Internal Audit &amp; Controls</option>
                <option value="npo">NPO, Trusts &amp; Donor Grant Audits (100C / EAD)</option>
                <option value="cfo_erp">Virtual CFO &amp; SAP/Oracle ERP Transformation</option>
                <option value="trade">Trade Facilitation, PSW &amp; WeBOC Customs</option>
                <option value="eor">Employer of Record (EoR) &amp; Payroll Outsourcing</option>
              </select>
            </div>
          </div>

          <div style="margin-bottom: 24px;">
            <label class="calc-label">Brief Description of Your Requirements</label>
            <textarea name="client_message" class="calc-input-field" rows="4" placeholder="Tell us about your company, current challenges, or upcoming deadlines..."></textarea>
          </div>

          <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
            <div style="font-size: 12px; color: #64748B; display: flex; align-items: center; gap: 6px;">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
              <span>100% Confidentiality Guaranteed under pre-engagement NDA.</span>
            </div>
            <button type="submit" class="btn-primary-glow" style="padding: 14px 32px; font-size: 15px;">
              <span>Submit Consultation Request</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </button>
          </div>
        </form>

      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
