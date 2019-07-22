<?php
function gcms_remove_default_admin_widget() {
 
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
    remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
    remove_meta_box( 'yoast_db_widget', 'dashboard', 'normal' );
    remove_meta_box( 'rg_forms_dashboard', 'dashboard', 'normal' );
    remove_meta_box( 'bbp-dashboard-right-now', 'dashboard', 'normal' );
    // remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    // remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    // remove_meta_box( 'postcustom' , 'post' , 'normal' ); 
    // remove_meta_box( 'linktargetdiv', 'link', 'normal' );
    // remove_meta_box( 'linkxfndiv', 'link', 'normal' );
    // remove_meta_box( 'linkadvanceddiv', 'link', 'normal' );
    // remove_meta_box( 'postexcerpt', 'post', 'normal' );
    // remove_meta_box( 'trackbacksdiv', 'post', 'normal' );
    // remove_meta_box( 'postcustom', 'post', 'normal' );
    // remove_meta_box( 'commentstatusdiv', 'post', 'normal' );
    // remove_meta_box( 'commentsdiv', 'post', 'normal' );
    // remove_meta_box( 'revisionsdiv', 'post', 'normal' );
    // remove_meta_box( 'authordiv', 'post', 'normal' );
	// remove_meta_box( 'sqpt-meta-tags', 'post', 'normal' );
    remove_action( 'welcome_panel', 'wp_welcome_panel' );
	remove_action( 'admin_notices', 'update_nag' );

}
add_action( 'wp_dashboard_setup', 'gcms_remove_default_admin_widget' );

function gcms_create_admin_widget_notice_callback() {
    echo '
 
Đây là nội dung mẫu trong bài hướng dẫn cách tạo một widget đơn giản trong trang quản trị.
 
';
}
function gcms_create_admin_widget_notice() {
    wp_add_dashboard_widget( 'gcms_notice', 'Ghi chú nhắc nhở', 'gcms_create_admin_widget_notice_callback' );
 }
add_action( 'wp_dashboard_setup', 'gcms_create_admin_widget_notice' );

