<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title><?php wp_title( '', true, 'right' ) ?></title>

	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

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
</head>
<body>