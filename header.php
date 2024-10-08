<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title><?php wp_title( '', true, 'right' ) ?></title>

	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<script src="https://unpkg.com/@phosphor-icons/web"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Geologica:wght@100..900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>

	<!-- If the query includes 'print-pdf', include the PDF print sheet -->
	<script>
		if( window.location.search.match( /print-pdf/gi ) ) {
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = '<?php echo get_template_directory_uri() ?>/css/print/pdf.css';
			document.getElementsByTagName( 'head' )[0].appendChild( link );
		}
	</script>

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri() ?>/lib/js/html5shiv.js"></script>
	<![endif]-->
	<script>
		function toggleMenu() {
			const aside = document.querySelector('aside')
			if (aside.classList.contains('open')) {
				aside.classList.remove('open')
			} else {
				aside.classList.add('open')
			}
		}
	</script>
</head>
<?php
global $site;
$site = domainity_get_current_site(); 
?>
<body style="margin: 0; padding: 0">
	<div class="frames">
		<aside style="color-scheme: dark; overflow-y: scroll; padding-top: 30pt; flex-direction: column">
			<div class="aside-header">
				<div style="flex: 1"></div>
				<a href="#" onclick="toggleMenu()" class="ph ph-x"></a>
			</div>
			<nav>
				<?php 
				$common_args = [ 
						'container_class' => '',
						'theme_location' => domainity_get_domain(),
						'menu_class'      => 'menu',
					];
					wp_nav_menu( $common_args );
				?>
			</nav>
			<div style="flex: 1"></div>
			<div style="padding: 20pt">
				<h3>Address</h3>
        <p>Alexander Forselius<br />
        Floragatan 21D<br />
        531 37 Lidköping<br />
        Sweden<br />
        <a href="tel:+46728872890">+46 (0) 728-87 28 90</a><br>
        VAT: SE910316XXXX01
			</div>
		</aside>
		<div style="position: relative; overflow: scroll; flex: 1" class="bootstrap-wrapper">
	 
			<div class="navbar <?php if (!is_home()):?>navbar-black<?php endif;?>"> 
				<div class="navbar-background">
				</div>
				<div class="navbar-inner">
					<div class="container">
						<div class="flex-row">
							<a href="#" onclick="toggleMenu()" class="ph ph-list sm"></a>
							<a href="/">
								<?php if (has_post_thumbnail($site->ID)) {?>
								<img style="width: 100pt; hue-rotate(180deg)" src="<?php echo get_the_post_thumbnail_url($site->ID)?>">
								<?php } else { ?>
								<?php echo get_the_title($site->ID) ?>
								<?php } ?>
							</a>
							<?php
							if (has_nav_menu(domainity_get_domain())) {
								$common_args = [ 
									'container_class' => '',
									'theme_location' => domainity_get_domain(),
									'menu_class'      => 'navbar-nav lg',
								];
								wp_nav_menu( $common_args );
							}
							?>
							</ul>
							<div style="flex: 1"></div>
							<?php
							if (has_nav_menu("cta." . domainity_get_domain())) {
								$common_args = [ 
									'container_class' => '',
									'theme_location' => "cta." . domainity_get_domain(),
									'menu_class'      => 'navbar-nav',
								];
								wp_nav_menu( $common_args );
							}
							?>
						</div>
					</div>
				</div>
			</div>