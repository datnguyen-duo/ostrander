<?php
$themeurl = get_bloginfo('template_url');

$logo = get_field('logo', 'option');
$phone = get_field('phone', 'option');
$email = get_field('email', 'option');
$linkedin = get_field('linkedin', 'option');


?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!--Fonts -->

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ostrander' ); ?></a>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-end">

		<?php if ($logo): ?>
			<h1 class="logo me-auto"><a href="/">
				<img src="<?php echo $logo['url']; ?>" alt="logo">
			</a></h1>
		<?php endif ?>
		<nav id="navbar" class="navbar order-last order-lg-0">
			<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'container' => false,
						)
					);
				?>
				<li class="d-flex icons">
					<?php if ($phone): ?>
						<a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>" class="me-2 pt-0"><img src="<?php echo $themeurl ?>/assets/img/phone-round-34px.png" alt="phone" height="30" width="30"></a>
					<?php endif; ?>
					<?php if ($email): ?>
						<a href="mailto:<?php echo $email; ?>" class="me-2 pt-0 ps-0"><img src="<?php echo $themeurl ?>/assets/img/email-round-34px.png" alt="email" height="30" width="30"></a>
					<?php endif; ?>
					<?php if ($linkedin): ?>
						<a href="<?php echo $linkedin; ?>" target="_blank"  class="pt-0 ps-0"><img src="<?php echo $themeurl ?>/assets/img/linkedin-round-34px.png" alt="linkedin" height="30" width="30"></a>
					<?php endif; ?>
				</li>
				<i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">