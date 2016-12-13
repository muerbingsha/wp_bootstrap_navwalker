<?php   
function remove(){
//remove_action(   'wp_head',   'wp_enqueue_scripts', 1 );   
//remove_action(   'wp_head',   'feed_links', 2 );   
//remove_action(   'wp_head',   'feed_links_extra', 3 );   
remove_action(   'wp_head',   'rsd_link' ); //<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://example.com/xmlrpc.php?rsd" />   
remove_action(   'wp_head',   'wlwmanifest_link' );//<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://example.com/wp-includes/wlwmanifest.xml" /> 
//remove_action(   'wp_head',   'index_rel_link' );   
//remove_action(   'wp_head',   'parent_post_rel_link', 10, 0 );   
//remove_action(   'wp_head',   'start_post_rel_link', 10, 0 );   
//remove_action(   'wp_head',   'adjacent_posts_rel_link_wp_head', 10, 0 );   
//remove_action(   'wp_head',   'locale_stylesheet' );   
//remove_action(   'publish_future_post',   'check_and_publish_future_post', 10, 1 );   
//remove_action(   'wp_head',   'noindex', 1 );   
//remove_action(   'wp_head',   'wp_print_styles', 8 );   
//remove_action(   'wp_head',   'wp_print_head_scripts', 9 );   
remove_action(   'wp_head',   'wp_generator' );  //<meat name="generator" content="WordPress 3.0.0" 
//remove_action(   'wp_head',   'rel_canonical' );   
//remove_action(   'wp_footer', 'wp_print_footer_scripts' );   
//remove_action(   'wp_head',   'wp_shortlink_wp_head', 10, 0 );   
//remove_action(   'template_redirect',   'wp_shortlink_header', 11, 0 );  
}
add_action('init','remove');

  
?> 