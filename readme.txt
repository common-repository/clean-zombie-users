=== Clean Up Zombie Users (spammers) ===
Contributors: ianarmstrong
Tags: plugin, admin, users, spam
Requires at least: 3.0.1
Tested up to: 3.8
Stable tag: 0.4f
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

If you have a WordPress site with lots spammer registrations, this plugin will delete any user who has never had a post or comment approved.

== Description ==
Anyone who has run a WordPress site for more than a few weeks knows that 95% of all site registrations typically come from spammers. When they can't get a comment approved, they just sit in the database, clogging up the works.

We call these folks **zombie users**, and they're *coming for your brains*.

This is a plugin designed to do one thing: clean up zombie users.

If you have a WordPress site with lots spammer registrations, this plugin will delete any user who has never had a post or comment approved. Zombie Users... BRAAAAINS.

= Included Features: =
-------------------------------------------------
* Target specific user roles for deletion based on whether they have ever posted or commented
* Includes a test mode to see what the results will be
* Includes the ability to delete users in chunks, for large sites.

= To Do: =
-------------------------------------------------
An [x] indicates this is done in the development version

* [ ] Allow newer users to be excluded
* [ ] Build in logic for all major e-commerce plugins so that paying customers can't be pruned
* [ ] Boolean values don't really need to be sanitized, but we're going to do it anyway
* [ ] Save selections as session data between submit & results
* [x] Trim " | User Role" from the end of role listings on older WP sites.
* [ ] Need to make the entire introductory message change after a post
* [ ] Need to put the deleted users list into a scrolling DIV
* [ ] Investigate AJAX updates as the plugin works
* [ ] Investigate the ability to protect users without changing their roles
* [ ] Investigate the ability to line-item delete users, or remove them from the operation

= Ongoing Development =
-------------------------------------------------
If you would like to contribute something, find the plugin at:
https://github.com/isarmstrong/clean-zombie-users

== Installation ==
1. Upload plugin to the "/wp-content/plugins/" directory.
2. Activate the plugin through the "Plugins" menu in WordPress.
3. Visit the options page in your administrative settings and get cleaning

== Screenshots ==
1. The plugin options screen
2. Successful Operation Screen

== Changelog ==

= 0.5 =
* Properly filtered user names on old sites so that (example) "Subscriber|Role Name" reports as "Subscriber" in the admin panel

= 0.4 (rollup) =
* Accidentally reverted a few lines in the limiter check to 4.0b, causing a bug in that feature. Resolved
* Updated the never-comment/never-post logic to avoid undefined variables in certain situations
* Questioned whether I'm even going to leave the office in time for New Years Eve
* Fixed an issue with key => value pairs when determining roles for auto-inclusion. Primarily affected older installations
* Properly sanitized the text field for limiting results
* Broke up the plugin into smaller files for greater readability
* Properly enqueued styles & scripts
* Fixed the undefined index in dynamic variables on lines 71 and 72.
* Fixed a jQuery mistake in the confirmation conditional
* Plugin now 100% error free in testing.
* Fixed the has_cap warning by changing "8" to "manage_options" in option page permissions

== Upgrade Notice ==
Resolved plugin-breaking bugs with both roles and limiters since the initial release (0.4d). Update recommended.