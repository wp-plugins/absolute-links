=== Absolute Links ===
Contributors: ICanLocalize
Tags: CMS, navigation, page, pages, post, posts, links, permlink
Requires at least: 2.6
Tested up to: 2.7 (Beta 3)
Stable tag: 1.0

Prevents dead links between any post or page by guaranteeing that all links always point to the current addresses (permlinks).

== Description ==

This plugin will make sure that any link you enter to other posts or pages will always stay valid.
When documents that you link to move, change slugs or even when the entire permlink structure changes completely, links will be correct.

It does so by replacing all internal links to their default link format (e.g. /?p=N or /?page_id=M).
Then, when rendering, the default links are changed to the current permlink values.

= Supports =

* Posts
* Pages
* Categories

= Fixing existing contents =

The plugin can scan existing contents (posts and pages). It will automatically convert all live links and would suggest how to fix links to pages that have moved.

= Reverting =

The plugin lets you return all links to their current permlink structure in the database, so if you choose to deactivate the plugin, things go back to the exact way they were.

== Installation ==

1. Place the folder containing this file into the plugins folder
2. Activate the plugin from the admin interface

== Frequently Asked Questions ==

= Can this plugin break existing links? =

No. It will only replace correct links to their default link scheme. Broken links will have to be dealt with manually.

== Version History ==

* Version 0.1
	* First public release.
* Version 0.2
	* Improved link replacement.
	* Improved suggestions for broken links.
	* Added absolute links for categories.
