<?php

add_theme_support( 'menus' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<aside>',
		'after_widget' => '</aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
));






function post_comments( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-author vcard">
			<?php echo get_avatar( $comment, 40 ); ?>
			<?php printf( __( '%s <span class="says">says:</span>' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
		</div>

		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
		<?php endif; ?>

		<div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
				/* translators: 1: date, 2: time */
				printf( __( '%1$s at %2$s' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), ' ' );
			?>
		</div>

		<div class="comment-body"><?php comment_text(); ?></div>

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div>
	</div>

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>

	<li class="post pingback">
		<p><?php _e( 'Pingback:' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)' ), ' ' ); ?></p>
	<?php

		break;
	endswitch;
}



// Custom functions 

// START : Show word count on blog post pages
// See more about the word count and reading time here http://www.welcomebrand.co.uk/blog/2010/12/12/wordpress-reading-time-and-word-count/
function show_post_word_count(){
    ob_start();
    the_content();
    $content = ob_get_clean();
    return sizeof(explode(" ", $content));
}
// END : Show word count

// START : Estimated reading time on blog post pages
if (!function_exists('est_read_time')):
function est_read_time( $return = false) {
	$wordcount = round(str_word_count(get_the_content()), -2);
	$minutes_fast = ceil($wordcount / 250);
	$minutes_slow = ceil($wordcount / 170);
 
	if ($wordcount <= 100) {
		$output = __("< 1 minute");
	} else {
		$output = sprintf(__("%s - %s minutes"), $minutes_fast, $minutes_slow);
	}
	echo $output;
}
endif;
 
if (!function_exists('est_the_content')):
function est_the_content( $orig ) {
	// Prepend the reading time to the post content
	return est_read_time(true) . "\n\n" . $orig;
}
endif;
// END : Estimated reading time


// Tidy up the <head> a little. Full reference of things you can show/remove is here: http://rjpargeter.com/2009/09/removing-wordpress-wp_head-elements/
remove_action('wp_head', 'wp_generator');// Removes the WordPress version as a layer of simple security 

add_theme_support('post-thumbnails');
?>