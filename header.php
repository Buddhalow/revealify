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

<body style="margin: 0; padding: 0">
	<div class="frames">
		<aside style="color-scheme: dark; overflow-y: scroll; padding-top: 30pt; flex-direction: column">
			<div class="aside-header">
				<div style="flex: 1"></div>
				<a href="#" onclick="toggleMenu()" class="ph ph-x"></a>
			</div>
			<nav>
				<ul class="menu">
					<li>
						<a href="/">Start</a>
					</li>
					<?php /* $menuItems = wp_get_nav_menu_items('Main menu');
					foreach($menuItems as $menuItem):?>
					<li>
						<a href="<?php echo $menuItem->url?>"><?php echo $menuItem->title?></a>
					</li>
					<?php endforeach; */ ?>
				</ul>
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
		<div style="position: relative; overflow: scroll; flex: 1">
			<div class="topleft-menu">
			<a href="#" onclick="toggleMenu()" class="ph ph-list"></a>
		</div>