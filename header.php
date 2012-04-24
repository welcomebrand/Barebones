<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
		bloginfo( 'name' );
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
	?>
</title>
<meta name="description" content="<?php if ( is_single() ) {
	single_post_title('', true); 
	} else {
	bloginfo('name'); echo " - "; bloginfo('description');
	}
?>" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<!-- The little things -->
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="icon" type="image/png" href="<?php echo bloginfo('template_directory'); ?>/assets/images/favicon.png" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!-- The little things -->

<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="all" />
<!-- Stylesheets -->

<!-- Load scripts quick smart -->
	<script src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/modernizr-2.0.6.js"></script>     
    <!--[if (lt IE 9) & (!IEMobile)]>
		<script src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/respond.js"></script>
		<script src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/selectivizr-min.js"></script>
	<![endif]-->
<!-- Load scripts quick smart -->

<?php wp_deregister_script('jquery');wp_head(); ?>
</head>

<body <?php body_class(); ?> id="top">
    <header role="banner">
        <?php get_search_form(); ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="logo"><?php bloginfo( 'name' ); ?></a>
        <p class="desc"><?php bloginfo( 'description' ); ?></p>
        <nav role="navigation">
            <?php $args = array( 'menu' => 'mainnav', 'container' => false, 'menu_id' => false, 'menu_class' => false); wp_nav_menu($args); ?>
        </nav>
    </header>