<div class="overlay" id="overlay">
    <nav class="overlay-menu">
        <?php 
        wp_nav_menu(
        array(
            'menu' => 'primary',
            'container' => 'ul',
            'link_before' => '<span>',     
            'link_after'  => '</span>'
        )
        );
        ?>
        
    </nav>
</div>