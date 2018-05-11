<?php
/* 
Plugin Name: Include Matomo
Plugin URI: https://jonas-hellmann.de
Description: This plugin includes Matomo into your Wordpress site
Version: 1.0.0
Author: Jonas Hellmann
Author URI: https://jonas-hellmann.de
License: GPL2
*/

add_action( 'wp_footer', 'include_matomo_script' );
 
function include_matomo_script() {
  echo '';
}

?>
