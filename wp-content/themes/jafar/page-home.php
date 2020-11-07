<?php
/*
* Template Name: Home Template
*/
get_header(); 

?>

<?php get_template_part( 'modules/m01', 'home-hero' ); ?>

<?php get_template_part( 'modules/m02', 'portfolio-items' ); ?>

<?php get_template_part( 'modules/m03', 'about-me' ); ?>

<?php get_template_part( 'modules/m04', 'skills' ); ?>  


  <?php 
get_footer();
?>