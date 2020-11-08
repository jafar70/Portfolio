<?php
$tag = get_field('m03_tag');
$heading = get_field('m03_title');
$profile_image = get_field('personal_image');
$text = get_field('about_me_text');
?>
<div class="m03">
  <div class="container">
    <h4 class="m03__tag">
      <?php echo esc_html( $tag ); ?>
    </h4>
    <h2 class="m03__title">
    <?php echo esc_html( $heading ); ?>
    </h2>
    <div class="m03__grid">
      <div class="m03__grid__img">

      <?php 
      if( $profile_image ): ?>
        <img class='lazy' data-src='<?php echo $profile_image['url']; ?>' alt="<?php echo $profile_image['alt']; ?>" />
      <?php endif; ?>

      </div>

      <div class="m03__grid__text">
          <?php echo wp_kses_post( $text ); ?>
        <div class="social-buttons mt-20">
          <?php if(get_field('instagram_url', 'option')) { ?>
            <a href="<?php echo get_field('instagram_url', 'option'); ?>" rel="noopener" target="_blank" aria-label="Instagram">
              <?php echo file_get_contents( get_template_directory() . '/assets/img/instagram.svg' ); ?>
            </a>
          <?php } ?>

          <?php if(get_field('github_url', 'option')) { ?>
            <a href="<?php echo get_field('github_url', 'option'); ?>" rel="noopener" target="_blank" aria-label="Github">
              <?php echo file_get_contents( get_template_directory() . '/assets/img/github.svg' ); ?>
            </a>
          <?php } ?>

          <?php if(get_field('linkedin_url', 'option')) { ?>
            <a href="<?php echo get_field('linkedin_url', 'option'); ?>" rel="noopener" target="_blank" aria-label="LinkedIn">
              <?php echo file_get_contents( get_template_directory() . '/assets/img/linkedin.svg' ); ?>
            </a>
          <?php } ?>

          <?php if(get_field('twitter_url', 'option')) { ?>
            <a href="<?php echo get_field('twitter_url', 'option'); ?>" rel="noopener" target="_blank" aria-label="Twitter">
              <?php echo file_get_contents( get_template_directory() . '/assets/img/twitter.svg' ); ?>
            </a>
          <?php } ?>  
        </div>
        <?php if(get_field('cv_file', 'option')) { ?><a href="<?php echo get_field('cv_file', 'option'); ?>" class="button" rel="noopener" target="_blank" aria-label="CV">Download CV</a><?php } ?>  
      </div>

    </div>
  </div>
</div>