<?php ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie ie6"> <![endif]-->
<<<<<<< HEAD
<!--[if IE 7 ]>    <html lang="en" class="ie ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie ie9"> <![endif]-->
=======
<!--[if IE 7 ]>    <html lang="en" class="ie ie7"> <![endif]--> 
<!--[if IE 8 ]>    <html lang="en" class="ie ie8"> <![endif]--> 
<!--[if IE 9 ]>    <html lang="en" class="ie ie9"> <![endif]--> 
>>>>>>> 81e9bb3a3f20453db0fcc87d98b868bdc1c678c6
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
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
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" href="<?php echo bloginfo('template_directory'); ?>/favicon.png">
	<link rel="apple-touch-icon" href="<?php echo bloginfo('template_directory'); ?>/apple-touch-icon-precomposed.png"/>
    <link rel="author" type="text/plain" href="<?php echo bloginfo('template_directory'); ?>/humans.txt" />
<!-- The little things -->

<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<!-- Stylesheets -->

<!-- Load scripts quick smart -->
	<script src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/modernizr-2.6.2.js"></script>
    <!--[if (lt IE 9) & (!IEMobile)]>
		<script src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/selectivizr-min.js"></script>
	<![endif]-->
<!-- Load scripts quick smart -->

	<?php wp_deregister_script('jquery');wp_head(); ?>
</head>

<body <?php body_class(); ?> id="top">
    <header role="banner">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="logo"><?php bloginfo( 'name' ); ?></a>
        <p class="desc">
			<?php bloginfo( 'description' ); ?>
        </p>
        <nav role="navigation">
            <?php $args = array( 'menu' => 'mainnav', 'container' => false, 'menu_id' => false, 'menu_class' => false); wp_nav_menu($args); ?>
        </nav>
        <?php get_search_form(); ?>
    </header>
