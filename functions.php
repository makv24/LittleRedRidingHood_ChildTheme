<?php
register_nav_menus( array('secondary' => __( 'Secondary Navigation' ),));

function excerpt_read_more_link($output) {
 global $post;
 return $output . '<a href="'. get_permalink($post->ID) . '"> Read More...</a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');

register_sidebar( array(
		'name' 		=> __( 'Page Sidebar', 'twentytwelve' ),
		'id' 		=> 'sidebar-page',
		'description' 	=> __( 'Appears on the sidebar of static pages.', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );