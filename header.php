<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>


			<!-- header -->
			<header class="header clear" role="banner">

					<!-- nav -->
					 <div class="m-container nav">
				        <nav id="site-navigation" class="main-navigation red" role="navigation">
				          <div class="nav-wrapper container">
				          <a href="#" data-activates="mobile-nav" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
				          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo"><img src="http://i.imgur.com/jZ7dvmA.png"></a>
				            <?php wp_nav_menu( array( 
				                        'theme_location' => 'primary',
				                        'menu_class'     => 'menu side-nav', 
				                        'menu_id'        => 'mobile-nav',
				                        'items_wrap'     => '<ul id="%1$s" class="%2$s"><li class="mobile-header"><p>Menu</p></li>%3$s</ul><div class="clear"></div>') 
				                        ); 
				                        ?>      
				            <?php wp_nav_menu( array( 
				                        'theme_location' => 'primary',
				                        'menu_class'     => 'right hide-on-med-and-down' ) 
				                        ); 
				                        ?>
				        </nav><!-- #site-navigation -->
				        </div>
				      <div class="clear"></div>
						
				
					<!-- /nav -->

			</header>
			<!-- /header -->
