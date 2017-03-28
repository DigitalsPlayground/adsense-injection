<?php
/*
Plugin Name: Ads in Content
Description: Insert an add after the Xth paragraph. Configure in the plugins file.
Version: 3.1.3
Plugin URI: http://aming.id
Author: Aming
Author URI: http://aming.id
*/


add_filter('the_content', 'article_ad');

function article_ad($post_content) {
   global $wp_query, $post;

   if (!is_single() ) return $post_content;
   $afterParagraph = 2;
   $ads=' -Script Adsense Disini- ';
   preg_match_all('/(?:\r\n|\r|\n)/', $post_content, $matches, PREG_OFFSET_CAPTURE );
   $insert_at = $matches[0][$afterParagraph][2];

   return substr($post_content,0,$insert_at). $ads . substr($post_content,$insert_at,strlen($post_content));

}

?>