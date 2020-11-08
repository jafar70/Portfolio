<?php
$instagram_url = get_field('instagram_url', 'option');
$github_url = get_field('github_url', 'option');
$linkedin_url = get_field('linkedin_url', 'option');
$twitter_url = get_field('twitter_url', 'option');

?>

<footer class='gm04'>
  <div class="container">
    <div class='gm04__grid'>
      <div class="gm04__grid__logo">
        <h2 class="gm04__logo"><?php echo esc_html('Jafar.'); ?></h2>
      </div>

      <div class="gm04__grid__social-media">
        <?php if($instagram_url) { ?>
          <a class="gm04__links" href="<?php echo esc_url($instagram_url); ?>" rel="noopener" target="_blank" aria-label="Instagram">
            <?php echo file_get_contents( get_template_directory() . '/assets/img/instagram.svg' ); ?><?php echo esc_html('Instagram'); ?>
          </a>
        <?php } ?>

        <?php if($github_url) { ?>
          <a class="gm04__links" href="<?php echo esc_url($instagram_url); ?>" rel="noopener"  target="_blank" aria-label="Github">
            <?php echo file_get_contents( get_template_directory() . '/assets/img/github.svg' ); ?><?php echo esc_html('Github'); ?>
          </a>
        <?php } ?>

        <?php if($linkedin_url) { ?>
          <a class="gm04__links" href="<?php echo esc_url($linkedin_url); ?>" rel="noopener" target="_blank" aria-label="LinkedIn">
            <?php echo file_get_contents( get_template_directory() . '/assets/img/linkedin.svg' ); ?><?php echo esc_html('LinkedIn'); ?>
          </a>  
        <?php } ?>

        <?php if($twitter_url) { ?>
          <a class="gm04__links" href="<?php echo esc_url($twitter_url); ?>" rel="noopener" target="_blank" aria-label="Twitter">
          <?php echo file_get_contents( get_template_directory() . '/assets/img/twitter.svg' ); ?><?php echo esc_html('Twitter'); ?>
          </a>
        <?php } ?>  
      </div>
      <div class="gm04__grid__social-media">
        <a href='mailto:jafsalami@hotmail.co.uk' class="gm04__links" target='_blank'>
          <?php echo esc_html('jafsalami@hotmail.co.uk'); ?>
        </a>
        <p class='mb-0'><b><?php echo esc_html('© ' . date("Y") . ' Jafar Salami'); ?></b></p>
      </div>
    </div>
  </div>
</footer>
