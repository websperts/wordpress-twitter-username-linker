<?php

/*
Plugin Name: Twitter Username Linker
Description: Automatically links twitter usernames prefixed with the @-sign in your WordPress posts, excerpts, and comments.
Author: websperts <hello@websperts.com>
Author URI: http://websperts.com/
Plugin URI: https://github.com/websperts/wordpress-twitter-username-linker
License: MIT
Version: 0.0.1
*/

defined('ABSPATH') || exit;

function twitter_username_linker($content) {
	$content = preg_replace('/([^\w\-\&])@(\w+)/', '$1<a href="https://twitter.com/$2" class="twitter-username" rel="nofollow" target="_blank">$2</a>', $content);
	return $content;
}

add_filter('the_content', 'twitter_username_linker');

add_filter('the_excerpt', 'twitter_username_linker');

add_filter('comment_text', 'twitter_username_linker');

?>
