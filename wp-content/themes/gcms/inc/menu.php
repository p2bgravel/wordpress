<?php

add_action( 'admin_bar_menu', 'social_media_links', 99 );
function social_media_links($wp_admin_bar)
{

	$args = array(
		'id'     => 'social_media',
		'title'	=>	'Social Media',
        'meta'   => array( 'class' => 'first-toolbar-group' ),
        'parent'	=>	'site-name'
	);
	$wp_admin_bar->add_node( $args );	

	// add child items
	$args = array();
	array_push($args,array(
		'id'		=>	'twitter',
		'title'		=>	'Twitter',
		'href'		=>	'http://www.twitter.com',
		'parent'	=>	'social_media',
	));

	array_push($args,array(
		'id'     	=> 'youtube',
		'title'		=>	'YouTube',
		'href'		=>	'http://www.YouTube.com',
		'parent' 	=> 'social_media',
		'meta'   	=> array( 'class' => 'first-toolbar-group' ),
	));
	array_push($args,array(
		'id'		=>	'fb',
		'title'		=>	'Facebook',
		'href'		=>	'http://www.facebook.com',
		'parent'	=>	'social_media',
	));

	sort($args);
	foreach( $args as $each_arg)	{
		$wp_admin_bar->add_node($each_arg);
	}
} 


function gcms_admin_bar_remove_logo() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu( 'wp-logo' );
    $wp_admin_bar->remove_menu( 'comments' );
    $wp_admin_bar->remove_menu( 'wp-admin-bar-site-name' );
}
add_action( 'wp_before_admin_bar_render', 'gcms_admin_bar_remove_logo', 0 );

function gcms_remove_help($old_help, $screen_id, $screen){
    $screen->remove_help_tabs();
    return $old_help;
}
add_filter( 'contextual_help', 'gcms_remove_help', 999, 3 );
