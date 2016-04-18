<?php
defined('ABSPATH') or die('No script kiddies please!');

/*
  Plugin Name: WP HTML SITEMAP

  Description: This Plugin is simple and light weighted plugin to generate Page sitemap.

  Use shortcode [SITEMAP], [sitemap], [HTMP_sitemap], [WP_htmlsitemap] in page content.

  Author: Pavan (Shona).

  Version: 1.0

  Requires at least: 2.5

  Tested up to: 4.4

  Copyright 20016

 */



if (!class_exists('WP_HtmlSitemap')):

    /**

     * WP Sitemap class.

     */
    class WP_HtmlSitemap {

        public $classes = 'wp-sitemap';
        public $id = '';

        public function __construct() {

            /**

             * Add shortcodes.

             */
            add_shortcode('SITEMAP', array($this, 'wp_Htmlsitemap_Shortcode'));

            add_shortcode('sitemap', array($this, 'wp_Htmlsitemap_Shortcode'));

            add_shortcode('HTMP_sitemap', array($this, 'wp_Htmlsitemap_Shortcode'));

            add_shortcode('WP_htmlsitemap', array($this, 'wp_Htmlsitemap_Shortcode'));
        }

        public function wp_Htmlsitemap_Shortcode($args = array(), $content = null) {

            if (is_feed())
                return '';



            if (isset($args['class']) && !empty($args['class'])) {

                $this->classes = $args['class'];

                unset($args['class']);
            }



            if (isset($args['id']) && !empty($args['id'])) {

                $this->id = $args['id'];

                unset($args['id']);
            }



            $args['echo'] = 0;

            $args['title_li'] = '';

            unset($args['link_before']);

            unset($args['link_after']);

            if (isset($args['child_of']) && $args['child_of'] == 'CURRENT') {

                $args['child_of'] = get_the_ID();
            } else if (isset($args['child_of']) && $args['child_of'] == 'PARENT') {

                $post = &get_post(get_the_ID());

                if ($post->post_parent)
                    $args['child_of'] = $post->post_parent;
                else
                    unset($args['child_of']);
            }



            /**

             * Get page lists.

             */
            $wpHtml = wp_list_pages($args);



            /**

             * Remove default classes form each list.

             */
            $wpHtml = preg_replace('/( class="[^"]+")/is', '', $wpHtml);



            /**

             * wrapping all list with in ul.

             */
            $wpHtml = '<ul' . (($this->classes) ? " class='" . $this->classes . "'" : "") . ' ' . (($this->id) ? " id='" . $this->id . "'" : "") . '>' . $wpHtml . '</ul>';

            return $wpHtml;
        }

    }

    /**

     * WP_HtmlSitemap class object.

     */
    $WP_HtmlSitemap = new WP_HtmlSitemap();

    

 endif;



