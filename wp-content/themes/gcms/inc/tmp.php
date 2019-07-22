<?php
// https://codex.wordpress.org/Plugin_API/Filter_Reference
// https://thachpham.com/wordpress/wordpress-development/su-dung-wp-query-va-loop-vong-lap-de-lay-bai-viet.html
// https://thachpham.com/wordpress/wordpress-development/huong-dan-tao-widget.html

echo get_bloginfo('wpurl');
// echo $post->post_title;
// var_dump( $my_query );


// Hook này sẽ giúp chúng ta lọc lại nội dung hiển thị ra bên ngoài. Chúng ta thử áp dụng nó vào việc in đậm một từ khoá nào đó bằng việc kết hợp hàm str_replace() trong PHP nhé.

function gcms_content_filter( $content ) {
    $find = 'hello';
    $replacement = "<strong>hello</strong>";
    $content = str_replace( $find, $replacement, $content );
    return $content;
}
add_filter( 'the_content', 'gcms_content_filter' );

// Hook này sẽ được gọi ra để lọc lại tập tin upload lên Media Library của WordPress. Dựa vào hook này, bạn có thể sử dụng tham số $file để đổi tên tập tin sau khi upload lên server.
add_filter('wp_handle_upload_prefilter', 'custom_upload_filter' );
 
function custom_upload_filter( $file ){
    $file['name'] = 'wordpress-is-awesome-' . $file['name'];
    return $file;
}

// Hook này sẽ được sử dụng nếu như bạn muốn chèn một cái gì đó vào cặp thẻ <head> của theme mà không cần sửa template của theme.

function gcms_author_tag(){
    echo "<link rel=\"author\" href=\"https://gcms.com\" />\n";
}
add_action( 'wp_head', 'gcms_author_tag' );

// Vòng lặp 

if( have_posts() ) :
    while( have_posts() ) :
        the_post();

        // Template tag hiển thị nội dung của trang ở đây.

    endwhile;
endif;

// Start the loop.
while ( have_posts() ) : the_post();
 
    // Include the page content template.
    get_template_part( 'content', 'page' );
 
    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
 
// End the loop.
endwhile;