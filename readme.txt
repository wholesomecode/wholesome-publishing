=== Wholesome Publishing ===
Contributors:      wholesomecode, mattwatsoncodes
Donate Link:
Tags:              block, comments, draft
Requires at least: 5.3.2
Tested up to:      5.5.0
Stable tag:        1.3.0
Requires PHP:      7.2.0
License:           GPL-2.0-or-later
License URI:       https://www.gnu.org/licenses/gpl-2.0.html

Wholesome Publishing: Editor comments for WordPress Gutenberg blocks and Draft block support.

== Description ==

Wholesome Publishing brings some wholesome editing features to the WordPress Block Editor (Gutenberg).

Features include:

* Ability to add threaded comments to individual blocks.
* Ability to mark a block as draft, so that it does not appear on the front end.
* Granular email notifications, for posts you have authored, commented on or contributed to.

== Installation ==

To install Wholesome Publishing:

1. Upload the plugin files to the `/wp-content/plugins/wholesome-publishing` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress

== Frequently Asked Questions ==

= Avatars are not showing next to my comments =

1. Ensure you have turned on `Show Avatars` from the WordPress dashboard `Settings > Discussion` panel.
2. Ensure you have registered an Avatar for your email address at [Gravatar](gravatar.com).

= I've altered my email settings, but I am still getting email notifications =

1. Edit your email settings via your profile
2. Ensure you uncheck "Receive notifications for comments on posts you have contributed to", as a comment counts as a contribution.

== Screenshots ==

1. Screenshot of block comments
2. Screenshot of draft blocks
3. Adding a block comment
4. Adding a threaded reply to a block comment
5. Edit your own comments, blocks are highlighted when you select a comment
6. Creating a block and setting it to draft
7. Granular email notification settings

== Changelog ==

= 1.0.0 =
* Initial Plugin.

= 1.1.0 =
* Bug Fix: Fixes an issue that only let administrators add and view block comments.

= 1.1.1 =
* Bug Fix: Fixes an issue that caused the draft block toggle panel to close when using the toggle.

= 1.2.0 =
* Feature: Better comment highlighting when a block is selected.
* Bug Fix: Issue with translations not being picked up.

= 1.2.1 =
* Bug Fix: Issue with comments on innerBlocks now resolved.

= 1.2.2 =
* Bug Fix: Sometimes comments not applied to third party blocks.

= 1.3.0 =
* Feature: Email notifications if someone comments on your post or replies to your comment.
* Bug Fix: Rendering React on front end.