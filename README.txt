=== Plugin Name ===
Contributors: codex-m 
Donate link: http://www.php-developer.org/
Tags: multisite, super admin
Requires at least: 3.7 
Tested up to: 5.2.2
Stable tag: 3.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Remove Super Admin from User List Table simply removes super admin from all of the multisite child site user list page.

== Description ==

In a multisite, super admins are listed together with ordinary admins in the child site user list page. For example, say the main site is cooldomain.com and one of the child site is subdomain.cooldomain.com.

Super admins appear in the user list page in subdomain.cooldomain.com , example here: subdomain.cooldomain.com/wp-admin/users.php

Some super admins may not want this for privacy and security. This plugin removes the super admin from the child site user list page.

== Installation ==

1. Unzip the plugin to plugins directory
1. Network activate the plugin
1. This plugin has no settings page and works right away after network activation.

== Frequently Asked Questions ==

= How to use this plugin? =

This plugin only works in WordPress multisite and should be network activated.

= How do I check if this plugin works? =

Simply visit any of the multisite child user list page. Super admins should be excluded.

== Screenshots ==

1. How it looks like when this plugin is network activated.

== Changelog ==

= 1.0 =
Original version.

= 2.0 =
Compatibility with WordPress 4.7
Added a filter to allow other plugins to add their user IDS.

= 3.0 =
Update compatibility to latest WordPress versions.

== Upgrade Notice ==

None for now.
