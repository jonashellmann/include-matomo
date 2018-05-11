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

?>
