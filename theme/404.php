<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package SS_Prestige_Consultants
 */

get_header(); ?>

<main id="main-content" class="site-main" style="min-height: 80vh; display: flex; align-items: center; justify-content: center; padding-top: clamp(120px, 15vw, 160px); padding-bottom: 80px;">
  <div class="container">
    
    <div class="frosted-card" style="max-width: 780px; margin: 0 auto; padding: clamp(32px, 5vw, 56px); border-radius: 32px; background: rgba(255, 255, 255, 0.94); text-align: center; box-shadow: 0 25px 60px -15px rgba(26, 107, 255, 0.12);">
      
      <!-- 404 Icon & Large Number -->
      <div style="display: inline-flex; align-items: center; justify-content: center; width: 88px; height: 88px; border-radius: 28px; background: rgba(26, 107, 255, 0.08); color: #1A6BFF; margin-bottom: 24px;">
        <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
      </div>

      <div style="font-size: clamp(4rem, 10vw, 6.5rem); font-weight: 900; line-height: 1; letter-spacing: -0.04em; background: linear-gradient(135deg, #0F172A 0%, #1A6BFF 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; margin-bottom: 12px;">
        404
      </div>

      <span class="section-eyebrow" style="margin-bottom: 16px;">Regulatory Route Relocated</span>
      
      <h1 style="font-size: clamp(22px, 3.5vw, 32px); font-weight: 800; color: #0F172A; margin-bottom: 14px;">
        Page Not Found on Official Portal
      </h1>

      <p style="font-size: 15.5px; color: #64748B; max-width: 580px; margin: 0 auto 36px; line-height: 1.65;">
        The requested compliance document, advisory route, or statutory resource does not exist or may have been relocated under our updated governance structure.
      </p>

      <!-- Quick Directory Navigation -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 200px), 1fr)); gap: 14px; margin-bottom: 36px; text-align: left;">
        
        <a href="<?php echo esc_url(home_url('/')); ?>" class="frosted-card" style="padding: 16px; border-radius: 16px; text-decoration: none; display: block; border: 1px solid #E2E8F0; transition: transform 0.2s ease, border-color 0.2s ease;">
          <div style="font-weight: 700; font-size: 14px; color: #0F172A; margin-bottom: 4px;">Return Home &rarr;</div>
          <div style="font-size: 12px; color: #64748B;">Explore firm pedigree &amp; overview</div>
        </a>

        <a href="<?php echo esc_url(home_url('/services/')); ?>" class="frosted-card" style="padding: 16px; border-radius: 16px; text-decoration: none; display: block; border: 1px solid #E2E8F0; transition: transform 0.2s ease, border-color 0.2s ease;">
          <div style="font-weight: 700; font-size: 14px; color: #0F172A; margin-bottom: 4px;">Practice Areas &rarr;</div>
          <div style="font-size: 12px; color: #64748B;">Tax, SECP, FDI &amp; ERP advisory</div>
        </a>

        <a href="<?php echo esc_url(home_url('/tax-calculator/')); ?>" class="frosted-card" style="padding: 16px; border-radius: 16px; text-decoration: none; display: block; border: 1px solid #E2E8F0; transition: transform 0.2s ease, border-color 0.2s ease;">
          <div style="font-weight: 700; font-size: 14px; color: #0F172A; margin-bottom: 4px;">Tax Calculator &rarr;</div>
          <div style="font-size: 12px; color: #64748B;">Instant FBR slab computation</div>
        </a>

        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="frosted-card" style="padding: 16px; border-radius: 16px; text-decoration: none; display: block; border: 1px solid #E2E8F0; transition: transform 0.2s ease, border-color 0.2s ease;">
          <div style="font-weight: 700; font-size: 14px; color: #0F172A; margin-bottom: 4px;">Dual Chambers &rarr;</div>
          <div style="font-size: 12px; color: #64748B;">Islamabad &amp; Gilgit offices</div>
        </a>

      </div>

      <!-- Immediate Action Buttons -->
      <div style="display: flex; align-items: center; justify-content: center; gap: 14px; flex-wrap: wrap;">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary-glow" style="padding: 14px 28px;">
          <span>Back to Homepage</span>
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="https://wa.me/923464439391?text=Hello%20Sunil%20Babar%2C%20I%20encountered%20a%20missing%20page%20on%20ssprestigeconsultants.com%20and%20need%20direct%20advisory." 
           class="btn-nav-outline" target="_blank" rel="noopener" style="padding: 13px 24px;">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          <span>WhatsApp Partner Helpline</span>
        </a>
      </div>

    </div>

  </div>
</main>

<?php get_footer(); ?>
