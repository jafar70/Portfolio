<?php
/**
 * The template for 404 page.
 *
 * @package Jafar
 */

header( 'HTTP/1.1 301 Moved Permanently' );
header( 'Location: ' . get_bloginfo( 'url' ) );
exit();

