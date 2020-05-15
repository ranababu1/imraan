<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" type="image/png" href="/wp-content/themes/imran2/fav.png"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa:500|Lalezar&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-58938853-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-58938853-13');
	</script>

</head>
<body <?php body_class(); ?>>
	<?php
		wp_body_open();
		?>
	<header id="site-header" class="header-footer-group" role="banner">
		<div class="header-inner section-inner">
			<div class="header-titles-wrapper">
				
				<div class="header-titles">
					<?php
							// Site title or logo.
							twentytwenty_site_logo();

							// Site description.
							
						?>
				</div><!-- .header-titles -->
				<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"
					data-toggle-body-class="showing-menu-modal" aria-expanded="false"
					data-set-focus=".close-nav-toggle">
					<span class="toggle-inner">
<div class="triangle-right"></div>


					</span>
				</button><!-- .nav-toggle -->
			</div><!-- .header-titles-wrapper -->
			<div class="header-navigation-wrapper">
				<?php
					if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
						?>
				<nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e( 'Horizontal', 'twentytwenty' ); ?>"
					role="navigation">
					<ul class="primary-menu reset-list-style">
						<?php
								if ( has_nav_menu( 'primary' ) ) {
									wp_nav_menu(
										array(
											'container'  => '',
											'items_wrap' => '%3$s',
											'theme_location' => 'primary',
										)
									);
								} elseif ( ! has_nav_menu( 'expanded' ) ) {
									wp_list_pages(
										array(
											'match_menu_classes' => true,
											'show_sub_menu_icons' => true,
											'title_li' => false,
											'walker'   => new TwentyTwenty_Walker_Page(),
										)
									);
								}
								?>
					</ul>
				</nav><!-- .primary-menu-wrapper -->
				<?php
					}
					if ( true === $enable_header_search || has_nav_menu( 'expanded' ) ) {
						?>
				<div class="header-toggles hide-no-js">
					<?php
						if ( has_nav_menu( 'expanded' ) ) {
							?>
					<div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">
						<button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal"
							data-toggle-body-class="showing-menu-modal" aria-expanded="false"
							data-set-focus=".close-nav-toggle">
							<span class="toggle-inner">
								
								<span class="toggle-icon">
									X
								</span>
							</span>
						</button><!-- .nav-toggle -->
					</div><!-- .nav-toggle-wrapper -->
					<?php
						}
						if ( true === $enable_header_search ) {
							?>
					
					<?php
						}
						?>
				</div><!-- .header-toggles -->
				<?php
					}
					?>
			</div><!-- .header-navigation-wrapper -->
		</div><!-- .header-inner -->
	
	</header><!-- #site-header -->
	<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );