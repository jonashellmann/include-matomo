<?php
/* 
Plugin Name: Include Matomo
Plugin URI: https://github.com/jonashellmann/include-matomo/
Description: This plugin includes Matomo into your Wordpress site
Version: 1.0.0
Author: Jonas Hellmann
Author URI: https://jonas-hellmann.de/en/
License: GPL3
*/

add_action( 'wp_footer', 'include_matomo_script' );
 
function include_matomo_script() {
  echo "<!-- Include Matomo -->\n";
  echo "<script type='text/javascript'>\n";
  echo "  var _paq = _paq || [];\n";
  echo "  _paq.push(['trackPageView']);\n";
  echo "  _paq.push(['enableLinkTracking']);\n";
  echo "  (function() {\n";
  echo "    var u='//example.com/';\n";
  echo "    _paq.push(['setTrackerUrl', u+'piwik.php']);\n";
  echo "    _paq.push(['setSiteId', '1']);\n";
  echo "    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];\n";
  echo "    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);\n";
  echo "  })();\n";
  echo "</script>\n";
  echo "<!-- End Matomo Code-->\n";
}


add_filter( 'the_permalink_rss', 'add_matomo_campaign_to_rss' );

function add_matomo_campaign_to_rss($guid) {
  global $post;
  $get_vars = array(
    urlencode( 'pk_campaign=rss' ),
    urlencode( 'pk_source=rss' )
  );
  return $guid . '?' . implode( '&', $get_vars );
}


add_action('admin_menu', 'include_matomo_menu');

function include_matomo_menu() {
    add_submenu_page('options-general.php', 'Include Matomo - Settings', 'Include Matomo', 'administrator', 'include-matomo-settings', 'include_matomo_settings_page');
}

add_action( 'admin_init', 'my_plugin_settings' );

function my_plugin_settings() {
  register_setting( 'include-matomo-settings-group', 'matomo_url' );
  register_setting( 'include-matomo-settings-group', 'matomo_page_id' );
  register_setting( 'include-matomo-settings-group', 'matomo_rss_campaign' );
  register_setting( 'include-matomo-settings-group', 'matomo_rss_source' );
}

function include_matomo_settings_page() {
  // 
}

?>
