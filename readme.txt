=== WP HTML SITEMAP ===

Contributors: Pavan (Shona)

Tags: wp, sitemap, html sitemap, page sitemap, page, pages, wordpress, site, blog, shortcode, pagelist, list, lists

Requires at least: 2.7.0

Tested up to: 4.4

Stable tag: 1.3

License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


Wordpress pages listing,  parent and child pages in a page content. By using the shortcode [SITEMAP],[HTMP_sitemap]. 



== Description ==

This is simple and light weighted plugin to display page links in a single page. Argument like:

`sort_column`, `sort_order`, `exclude`, `include`, `depth`, `child_of`, `meta_key`, `meta_value`, `authors`, `number`,  `offset`, `post_type`,  and `post_status`



= Examples =

Simple exameple.



'[SITEMAP]'

Simple exameple with argument.



'[SITEMAP id="" class="" child_of="" authors="" date_format="" depth="" echo="" exclude="" include="" link_after="" link_before="" post_type="" post_status="" show_date="" sort_column="" title_li="" ]'



Parameter Description:

'id'                  :  Adds id to <ul> like <ul id="id"> 



'class'                  :  Adds classes to <ul> like <ul class="clesses">



'clield_of'           :   Display only the sub-pages of a single page by ID. Default 0 (all pages).



'authors'             :   (string) Comma-separated list of author IDs. Default empty (all authors).



'date_format'         :   (string) PHP date format to use for the listed pages. Relies on the 'show_date' parameter. Default is the value of 'date_format' option.



'depth'               :   (int) Number of levels in the hierarchy of pages to include in the generated list. Accepts -1 (any depth), 0 (all pages), 1 (top-level pages only), and n (pages to the given n depth). Default 0.



'echo'                :   (bool) Whether or not to echo the list of pages. Default true.



'exclude'             :   (string) Comma-separated list of page IDs to exclude.



'include'             :   (array) Comma-separated list of page IDs to include.



'link_after'          :  (string) Text or HTML to follow the page link label. Default null.



'link_before'         :  (string) Text or HTML to precede the page link label. Default null.  



'post_type'           :  (string) Post type to query for. Default 'page'.                 



'post_status'         :  (string) Comma-separated list of post statuses to include. Default 'publish'.



'show_date'           :   (string) Whether to display the page publish or modified date for each page. Accepts 'modified' or any other value. An empty value hides the date.





'sort_column'         :   (string) Comma-separated list of column names to sort the pages by. Accepts 'post_author', 'post_date', 'post_title', 'post_name', 'post_modified', 'post_modified_gmt', 'menu_order', 'post_parent', 'ID', 'rand', or 'comment_count'. Default 'post_title'.

'title_li'             :  (string) List heading. Passing a null or empty value will result in no heading, and the list will not be wrapped with unordered list <ul> tags. Default 'Pages'.

== Installation ==

Plugin easy to install.

e.g.

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress



== Frequently Asked Questions ==

= A question that someone might have =

== Screenshots ==


== Changelog ==

= 1.0 =
* A change since the previous version.
* Another change.


== Upgrade Notice ==

= 1.0 =
Upgrade notices describe the reason a user should upgrade.  No more than 300 characters.
