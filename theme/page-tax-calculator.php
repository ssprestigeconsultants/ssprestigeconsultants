<?php
/**
 * Template Name: Tax Calculator
 *
 * @package SS_Prestige_Consultants
 */

get_header(); ?>

<main id="main-content" class="site-main" style="padding-top: clamp(100px, 12vw, 140px); padding-bottom: 80px;">
  <div class="container">
    
    <!-- Page Header -->
    <div class="section-title-wrap" style="text-align: center; margin-bottom: 40px;">
      <span class="section-eyebrow">Interactive Advisory Tool</span>
      <h1 class="section-heading" style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 800; margin-bottom: 16px;">
        Pakistan Income Tax Calculator
      </h1>
      <p class="section-subtext" style="max-width: 720px; margin: 0 auto; color: #64748B; font-size: clamp(14px, 1.6vw, 16px);">
        Accurate calculations based on official Federal Board of Revenue (FBR) Finance Act tax slabs for Tax Year 2024–2025 and 2025–2026. Calculate monthly tax, annual liability, and net take-home salary.
      </p>
    </div>

    <!-- Main Calculator Frosted Card -->
    <div class="frosted-card" style="padding: clamp(20px, 4vw, 44px); border-radius: clamp(20px, 3.5vw, 32px); margin-bottom: 48px; background: rgba(255, 255, 255, 0.92); box-shadow: 0 25px 60px -15px rgba(15, 23, 42, 0.08);">
      
      <!-- Calculator Controls Row -->
      <div style="max-width: 860px; margin: 0 auto;">
        
        <!-- Entity Mode Switcher Tabs -->
        <div style="display: flex; align-items: center; justify-content: center; gap: 10px; margin-bottom: 32px; flex-wrap: wrap;">
          <button type="button" class="service-tab-btn active" id="calc-tab-salaried" style="padding: 10px 24px; font-size: 14px;">
            Salaried Individual
          </button>
          <button type="button" class="service-tab-btn" id="calc-tab-business" style="padding: 10px 24px; font-size: 14px;">
            Business Individual / AOP
          </button>
          <button type="button" class="service-tab-btn" id="calc-tab-freelancer" style="padding: 10px 24px; font-size: 14px;">
            IT Exporter / Freelancer (0.25%)
          </button>
        </div>

        <!-- Gross Income Input Box -->
        <div style="background: rgba(248, 250, 252, 0.85); border: 1px solid rgba(226, 232, 240, 0.9); border-radius: 20px; padding: clamp(20px, 3vw, 32px); margin-bottom: 32px; text-align: center;">
          <label for="calc-main-income" style="display: block; font-size: clamp(13px, 1.4vw, 15px); font-weight: 700; color: #0F172A; margin-bottom: 12px;" id="calc-input-label">
            Enter Monthly Gross Salary / Income (PKR):
          </label>
          <div style="position: relative; max-width: 440px; margin: 0 auto;">
            <span style="position: absolute; left: 18px; top: 50%; transform: translateY(-50%); font-weight: 800; font-size: 18px; color: #64748B;">PKR</span>
            <input type="number" id="calc-main-income" value="250000" min="0" step="1000" 
                   style="width: 100%; padding: 14px 18px 14px 70px; font-size: clamp(20px, 3vw, 26px); font-weight: 800; color: #1A6BFF; border: 2px solid #CBD5E1; border-radius: 9999px; outline: none; transition: border-color 0.2s; background: #FFFFFF; box-shadow: 0 4px 14px rgba(15, 23, 42, 0.04);">
          </div>
          <div style="font-size: 12.5px; color: #64748B; margin-top: 10px;" id="calc-annual-hint">
            Estimated Annual Income: <strong>PKR 3,000,000</strong>
          </div>
        </div>

        <!-- 4 Key Output Result Cards Grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 190px), 1fr)); gap: 16px; margin-bottom: 36px;">
          
          <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 18px; padding: 20px 16px; text-align: center; box-shadow: 0 4px 14px rgba(15, 23, 42, 0.03);">
            <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; color: #64748B; letter-spacing: 0.5px; margin-bottom: 6px;">Monthly Tax</div>
            <div id="out-monthly-tax" style="font-size: clamp(18px, 2.5vw, 24px); font-weight: 800; color: #EF4444;">PKR 17,500</div>
            <div style="font-size: 11px; color: #94A3B8; margin-top: 4px;">Deducted per pay slip</div>
          </div>

          <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 18px; padding: 20px 16px; text-align: center; box-shadow: 0 4px 14px rgba(15, 23, 42, 0.03);">
            <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; color: #64748B; letter-spacing: 0.5px; margin-bottom: 6px;">Annual Tax Liability</div>
            <div id="out-annual-tax" style="font-size: clamp(18px, 2.5vw, 24px); font-weight: 800; color: #DC2626;">PKR 210,000</div>
            <div style="font-size: 11px; color: #94A3B8; margin-top: 4px;">Total tax for Tax Year</div>
          </div>

          <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 18px; padding: 20px 16px; text-align: center; box-shadow: 0 4px 14px rgba(15, 23, 42, 0.03);">
            <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; color: #64748B; letter-spacing: 0.5px; margin-bottom: 6px;">Net Take-Home</div>
            <div id="out-net-income" style="font-size: clamp(18px, 2.5vw, 24px); font-weight: 800; color: #10B981;">PKR 232,500</div>
            <div style="font-size: 11px; color: #94A3B8; margin-top: 4px;">Monthly in bank</div>
          </div>

          <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 18px; padding: 20px 16px; text-align: center; box-shadow: 0 4px 14px rgba(15, 23, 42, 0.03);">
            <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; color: #64748B; letter-spacing: 0.5px; margin-bottom: 6px;">Effective Tax Rate</div>
            <div id="out-effective-rate" style="font-size: clamp(18px, 2.5vw, 24px); font-weight: 800; color: #1A6BFF;">7.0%</div>
            <div style="font-size: 11px; color: #94A3B8; margin-top: 4px;">Average tax percentage</div>
          </div>

        </div>

        <!-- Action Consultation CTA Inside Calculator -->
        <div style="background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%); border-radius: 20px; padding: clamp(20px, 3vw, 28px); color: #FFFFFF; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
          <div>
            <div style="font-weight: 800; font-size: clamp(15px, 1.8vw, 18px); color: #FFFFFF; margin-bottom: 4px;">
              Need a Chartered Accountant to File Your Form 114 Return?
            </div>
            <div style="font-size: 13px; color: #94A3B8;">
              Pre-engagement NDA protection &bull; FBR Active Taxpayer List (ATL) maintenance &bull; Wealth Statement reconciliation
            </div>
          </div>
          <a href="<?php echo esc_url(home_url('/#consultation')); ?>" class="btn-primary-glow" style="white-space: nowrap;">
            <span>Consult Tax Partner</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

      </div>

    </div>

    <!-- Official FBR Tax Slabs Reference Table -->
    <div class="frosted-card" style="padding: clamp(24px, 4vw, 40px); border-radius: 24px; margin-bottom: 48px;">
      <h2 style="font-size: clamp(18px, 2.5vw, 24px); font-weight: 800; color: #0F172A; margin-bottom: 16px;">
        Official FBR Income Tax Slabs (Finance Act 2024–2025)
      </h2>
      <p style="font-size: 14px; color: #64748B; margin-bottom: 24px;">
        Applicable to Salaried Individuals where taxable salary exceeds 75% of total taxable income. Source: Federal Board of Revenue (FBR) Pakistan.
      </p>

      <div class="roster-table-scroll">
        <table class="roster-table" style="width: 100%;">
          <thead>
            <tr>
              <th>Slab</th>
              <th>Taxable Income Range (Annual)</th>
              <th>Rate of Income Tax</th>
              <th>Fixed Tax</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Slab 1</strong></td>
              <td>Up to PKR 600,000</td>
              <td>0%</td>
              <td>PKR 0</td>
            </tr>
            <tr>
              <td><strong>Slab 2</strong></td>
              <td>PKR 600,001 to PKR 1,200,000</td>
              <td>5% of amount exceeding PKR 600,000</td>
              <td>PKR 0</td>
            </tr>
            <tr>
              <td><strong>Slab 3</strong></td>
              <td>PKR 1,200,001 to PKR 2,200,000</td>
              <td>15% of amount exceeding PKR 1,200,000</td>
              <td>PKR 30,000</td>
            </tr>
            <tr>
              <td><strong>Slab 4</strong></td>
              <td>PKR 2,200,001 to PKR 3,200,000</td>
              <td>25% of amount exceeding PKR 2,200,000</td>
              <td>PKR 180,000</td>
            </tr>
            <tr>
              <td><strong>Slab 5</strong></td>
              <td>PKR 3,200,001 to PKR 4,100,000</td>
              <td>30% of amount exceeding PKR 3,200,000</td>
              <td>PKR 430,000</td>
            </tr>
            <tr>
              <td><strong>Slab 6</strong></td>
              <td>Exceeding PKR 4,100,000</td>
              <td>35% of amount exceeding PKR 4,100,000</td>
              <td>PKR 700,000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Micro-FAQ Accordion or Guidance -->
    <div class="frosted-card" style="padding: clamp(24px, 4vw, 40px); border-radius: 24px;">
      <h2 style="font-size: clamp(18px, 2.5vw, 22px); font-weight: 800; color: #0F172A; margin-bottom: 20px;">
        Frequently Asked Questions: Pakistan Income Tax &amp; FBR Filings
      </h2>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        
        <div style="background: rgba(255, 255, 255, 0.7); border: 1px solid #E2E8F0; border-radius: 14px; padding: 18px 20px;">
          <h3 style="font-size: 15px; font-weight: 700; color: #0F172A; margin-bottom: 6px;">Who is legally required to file an annual income tax return in Pakistan?</h3>
          <p style="font-size: 13.5px; color: #475569; margin: 0; line-height: 1.6;">
            Every individual whose annual taxable income exceeds PKR 600,000, anyone owning a motor vehicle above 1000cc, owners of immoveable property above specified thresholds, holders of commercial electricity connections, and all registered Private Ltd, SMC, and LLP companies are statutorily required to file Form 114 with the FBR.
          </p>
        </div>

        <div style="background: rgba(255, 255, 255, 0.7); border: 1px solid #E2E8F0; border-radius: 14px; padding: 18px 20px;">
          <h3 style="font-size: 15px; font-weight: 700; color: #0F172A; margin-bottom: 6px;">What is the special 0.25% tax concession for IT Freelancers &amp; Tech Exporters?</h3>
          <p style="font-size: 13.5px; color: #475569; margin: 0; line-height: 1.6;">
            Under the Income Tax Ordinance, individuals and entities registered with the Pakistan Software Export Board (PSEB) exporting computer software or IT-enabled services are eligible for a reduced final tax regime (FTR) rate of 0.25% on foreign remittance proceeds received through banking channels. S&amp;S Prestige Consultants assists tech founders with PSEB registration and FBR concession filings.
          </p>
        </div>

        <div style="background: rgba(255, 255, 255, 0.7); border: 1px solid #E2E8F0; border-radius: 14px; padding: 18px 20px;">
          <h3 style="font-size: 15px; font-weight: 700; color: #0F172A; margin-bottom: 6px;">Why do I need a Wealth Statement (Form 116) alongside my Income Tax Return?</h3>
          <p style="font-size: 13.5px; color: #475569; margin: 0; line-height: 1.6;">
            The FBR requires every resident individual taxpayer to submit an annual Wealth Statement detailing personal assets, liabilities, bank balances, and living expenses. Reconciling your net wealth increase with declared taxable income is critical to avoid receiving Section 111 (unexplained assets) or Section 122 audit notices from FBR Commissioners.
          </p>
        </div>

      </div>
    </div>

  </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const input = document.getElementById('calc-main-income');
  const label = document.getElementById('calc-input-label');
  const annualHint = document.getElementById('calc-annual-hint');
  const btnSalaried = document.getElementById('calc-tab-salaried');
  const btnBusiness = document.getElementById('calc-tab-business');
  const btnFreelancer = document.getElementById('calc-tab-freelancer');

  const outMonthly = document.getElementById('out-monthly-tax');
  const outAnnual = document.getElementById('out-annual-tax');
  const outNet = document.getElementById('out-net-income');
  const outRate = document.getElementById('out-effective-rate');

  let mode = 'salaried';

  function updateActiveTab(btn) {
    [btnSalaried, btnBusiness, btnFreelancer].forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
  }

  btnSalaried.addEventListener('click', function() {
    mode = 'salaried';
    updateActiveTab(this);
    label.textContent = 'Enter Monthly Gross Salary / Income (PKR):';
    recalc();
  });

  btnBusiness.addEventListener('click', function() {
    mode = 'business';
    updateActiveTab(this);
    label.textContent = 'Enter Monthly Business Net Profit / Turnover (PKR):';
    recalc();
  });

  btnFreelancer.addEventListener('click', function() {
    mode = 'freelancer';
    updateActiveTab(this);
    label.textContent = 'Enter Monthly IT Export Remittance (PKR):';
    recalc();
  });

  input.addEventListener('input', recalc);

  function recalc() {
    const monthly = parseFloat(input.value) || 0;
    const annual = monthly * 12;

    if (annualHint) {
      annualHint.innerHTML = 'Estimated Annual Income: <strong>PKR ' + Math.round(annual).toLocaleString() + '</strong>';
    }

    let annualTax = 0;

    if (mode === 'salaried') {
      if (annual <= 600000) {
        annualTax = 0;
      } else if (annual <= 1200000) {
        annualTax = (annual - 600000) * 0.05;
      } else if (annual <= 2200000) {
        annualTax = 30000 + (annual - 1200000) * 0.15;
      } else if (annual <= 3200000) {
        annualTax = 180000 + (annual - 2200000) * 0.25;
      } else if (annual <= 4100000) {
        annualTax = 430000 + (annual - 3200000) * 0.30;
      } else {
        annualTax = 700000 + (annual - 4100000) * 0.35;
      }
    } else if (mode === 'business') {
      if (annual <= 600000) {
        annualTax = 0;
      } else if (annual <= 1200000) {
        annualTax = (annual - 600000) * 0.15;
      } else if (annual <= 1600000) {
        annualTax = 90000 + (annual - 1200000) * 0.20;
      } else if (annual <= 2400000) {
        annualTax = 170000 + (annual - 1600000) * 0.30;
      } else if (annual <= 3200000) {
        annualTax = 410000 + (annual - 2400000) * 0.40;
      } else {
        annualTax = 730000 + (annual - 3200000) * 0.45;
      }
    } else if (mode === 'freelancer') {
      // 0.25% PSEB Final Tax Regime for IT Exporters
      annualTax = annual * 0.0025;
    }

    const monthlyTax = annualTax / 12;
    const netMonthly = monthly - monthlyTax;
    const rate = annual > 0 ? ((annualTax / annual) * 100).toFixed(1) : 0;

    outMonthly.textContent = 'PKR ' + Math.round(monthlyTax).toLocaleString();
    outAnnual.textContent = 'PKR ' + Math.round(annualTax).toLocaleString();
    outNet.textContent = 'PKR ' + Math.round(netMonthly).toLocaleString();
    outRate.textContent = rate + '%';
  }

  recalc();
});
</script>

<?php get_footer(); ?>
