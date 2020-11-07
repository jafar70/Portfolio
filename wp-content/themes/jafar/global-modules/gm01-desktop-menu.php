<header class="gm01">
    <div class="container gm01__grid">
    <div class="mobile-whitespace"></div>
    <a class="gm01__grid__logo logo" href="<?php echo get_site_url(); ?>"> <h2>Jafar.</h2></a>
    
    <nav class="gm01__grid__menu">
        <?php 
            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'container' => 'ul',
                    'menu_class' => 'nav__links',
                )
            );
        ?>
    </nav>
    
    <div class="gm01__grid__right nav-right">
        <div id="toggle" class="hamburger" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>  
            <?php if(get_field('instagram_url', 'option')) { ?>
                <a href="<?php echo get_field('instagram_url', 'option'); ?>" rel="noopener" target="_blank" class='nav-right__link' aria-label="Instagram">
                    <?php echo file_get_contents( get_template_directory() . '/assets/img/instagram.svg' ); ?>
                </a>
            <?php } ?>
            <?php if(get_field('github_url', 'option')) { ?>
                <a href="<?php echo get_field('github_url', 'option'); ?>" rel="noopener" target="_blank" class='nav-right__link' aria-label="Github">
                    <?php echo file_get_contents( get_template_directory() . '/assets/img/github.svg' ); ?>
                </a>
            <?php } ?>
            <?php if(get_field('linkedin_url', 'option')) { ?>
                <a href="<?php echo get_field('linkedin_url', 'option'); ?>" rel="noopener" target="_blank" class='nav-right__link' aria-label="LinkedIn">
                <?php echo file_get_contents( get_template_directory() . '/assets/img/linkedin.svg' ); ?>
                </a>
            <?php } ?>
        
        </div>
    </div>
</header>