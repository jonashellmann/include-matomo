=== Include Matomo Tracking, by Jonas Hellmann ===
Contributors: jonashellmann
Donate link: 
Tags: matomo, analytics, tracking
Requires at least: 2.7
Tested up to: 6.8
Stable tag: trunk 
Requires PHP: 7.2
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

This plugin lets you integrate your existing Matomo On-Premise into WordPress. If you don't already have a working Matomo (either <a href='https://matomo.org/matomo-on-premise/'>On-Premise</a> or <a href='https://matomo.org/hosting/'>Matomo Cloud</a>), use the <a href='https://wordpress.org/plugins/matomo/'>Matomo Analytics</a> plugin instead.

== Description ==

This plugin lets you integrate your existing Matomo On-Premise into WordPress. If you don't already have a working Matomo (either <a href='https://matomo.org/matomo-on-premise/'>On-Premise</a> or <a href='https://matomo.org/hosting/'>Matomo Cloud</a>), use the <a href='https://wordpress.org/plugins/matomo/'>Matomo Analytics</a> plugin instead.

Matomo, formerly called Piwik, is an self-hosted open-source tool to analyze your pages. It needs a tracking code to be included in the pages that should be monitored. Also campaigns can be created by using specific parameters in the URL.

Therefore in this plugin, you can configure the URL where Matomo is hosted and the site ID for tracking your Wordpress page. You can find it in the tracking code. You only need to fill in these both information. The rest of the tracking code is standartized and automatically inserted in the page. Also, you can set a campaign name (pk_campaign) and source (pk_source) which will be adds to the links in your RSS feed. This helps you to analyze how many users enter your pages by using your RSS feed.
If you like to, there is an additional field to deactivate the usage of cookies by Matomo.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the plugin files to the `/wp-content/plugins/include-matomo` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress.
1. Use the 'Settings' -> 'Include Matomo' screen to configure the plugin. Look in the description to understand the configuration options.
1. (Make your instructions match the desired user flow for activating and installing your plugin. Include any steps that might be needed for explanatory purposes)

== Frequently Asked Questions ==

= Why can't I see page views in the Matomo backend? =

Take a look at the source code of your Wordpress page and make sure that the Matomo code is actually included. It will only be injected if the URL to the Matomo installation AND the page ID are set.

If it is injected you also should check if the page ID is set correctly.

== Screenshots ==

1. Here you can see the settings page of 'Include Matomo'. You can find it under 'Settings' -> 'Include Matomo'.
2. If you provide a Matomo URL and site ID this code is injected to your Wordpress page..

== Changelog ==

= 1.0 =
* This is the initial version of the plugin.
= 1.4 =
* Renaming the plugin due to a request by Matomo. (https://wordpress.org/support/topic/request-to-update-plugin-with-regards-to-the-trademark-guidelines-2/)

== Upgrade Notice ==

= 1.0 =
No upgrade necessary at this point. Just install it. :-)
