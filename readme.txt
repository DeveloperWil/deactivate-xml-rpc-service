=== Deactivate XML-RPC Service ===
Contributors: DeveloperWil
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=BEUW6MXMN7WWE
Tags: XML-RPC, XMLRPC, XML RPC
Requires at least: 3.5
Requires PHP: 5.6
Tested up to: 4.8.1
Stable tag: 1.0.1

Disables the XMP-RPC API service introduced in WordPress 3.5 and above.

== Description ==

Completely disables the XML-RPC API which was introduced in WordPress 3.5 and above which lets remote clients post, upload and edit content.

Notes:
If you are using the WordPress smart phone app or the Jetpack plugin, please note that they need this service enabled.

If you activate this plugin your WordPress phone app will not be able to connect to your site and Jetpack will not be able to connect to wordpress.com where site visitor data (and other stuff) is stored.

Other plugins and services that use the XML-RPC API will also not function properly.


= Plugin Page =
[Deactivate XML-RPC](https://zeropointdevelopment.com/wordpress-plugins/deactivate-xml-rpc-service-wordpress-plugin/ "Deactivate XML-RPC Service WordPress Plugin")

== Installation ==

1. Download the plugin zip file & unzip it
2. Copy the folder deactivate-xml-rpc-service into the directory /wp-content/plugins/
3. Activate the plugin through the 'Plugins' menu in the WordPress admin area.
4. The XML-RPC API service is now deactivated.

To reactivate the XML-RPC API service:
1. Deactivate the plugin through the 'Plugins' menu in the WordPress admin area.

== Frequently Asked Questions ==

= Does the plugin do anything else? =

Nope.

= Is there an admin settings page for this plugin? =

Nope.  It just switches the XML-RPC off and on via plugin activate and deactivate respectively.

= How can I check if the plugin is working? =

Easy, go to http://xmlrpc.eritreo.it/ and enter your website URL.  If you have the plugin enabled, your site should fail the test for XML-RPC.

= My Jetpack plugin isn't working! =

Nope.  This plugin switches off the XML-RPC API.  Jetpack needs this API to work correctly.  Deactivate this plugin.

= My WordPress phone app can't connect to my WordPress website! =

Nope. This plugin switches off the XML-RPC API. The official WordPress phone app needs this API to work correctly.  Deactivate this plugin.

== Screenshots ==
1. After the plugin is activated.  Cannot connect to site using XML-RPC service.

== Changelog ==
= 1.0.0 =
* Initial release.