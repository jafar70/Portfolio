<?php
/*
* Template Name: Home Template
*/
get_header(); 

get_template_part( 'modules/m01', 'home-hero' );

get_template_part( 'modules/m02', 'portfolio-items' ); 

get_template_part( 'modules/m03', 'about-me' ); 

get_template_part( 'modules/m04', 'skills' ); 

get_footer();
?>