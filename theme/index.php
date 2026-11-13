<?php
/**
 * Fallback Index Template - S&S PRESTIGE CONSULTANTS LLP
 *
 * @package SS_Prestige_Consultants
 */

get_header(); ?>

<main id="main-content" class="site-main" style="padding: 140px 0 80px 0;">
  <div class="container">
    <div class="frosted-card" style="padding: 40px; border-radius: 24px;">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <div class="entry-content" style="margin-top: 20px; line-height: 1.8;">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; else : ?>
        <p><?php esc_html_e('No content found.', 'ssprestige'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
