=== Clear Fields ===
Contributors: bstaruk
Tags: clear fields, focus, active
Requires at least: 3.4.
Tested up to: 3.6.0
Stable tag: 1.2
License: MIT

This plugin will clear form fields on focus and refill the field if no input is given.

== Description ==

This plugin will clear form fields on focus and refill the field if no input is given.

NOTE: This plugin depends on jQuery. If you include jQuery manually in your template, you can remove it because this plugin will make sure the latest version is called on every page.
NOTE: If jQuery is already called correctly (with wp_enqueue_scripts) in another plugin, it will not be included again.

== Installation ==

1. Upload this plugin to your /wp-content/plugins directory.
2. Activate the plugin in your wp-admin panel.
3. Add class="clrFld" to any input field or textarea that you wish to be affected.
4. Add a title tag that reflects the value tag. Example: (input type="text"  name="example_field" value="Example Value" title="Example Value")

== Changelog ==

= 1.2 =
* Compatible with Wordpress 3.6
* Made plugin "classier"

= 1.1 =
* Tidying up the readme and license information.

= 1.0 =
* Plugin created