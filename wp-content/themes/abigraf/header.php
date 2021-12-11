<?php
/**
* Including DFP segmentation details.
* These are as the DFP has been configured by the client.
*/

#include(TEMPLATEPATH . '/inc/dfp/dfp-segmentation-attributes.php');
?>

<!DOCTYPE html>
<html dir="ltr" lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="publisher" content="contato@okngroup.com.brr">
	<?php

		get_template_part('template-parts/header/seo');
		# get_template_part('inc/analytics/analytics');
		wp_head();

		global $current_user;
		wp_get_current_user();

	?>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- Assets -->
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500;600;800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css.map"> -->


	<!-- Helpers -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/cdn/Helpers.css">
	<!--
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/cdn/Message.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/cdn/OKNPagination.css">
	-->

	<!-- Must Have -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/headjs/1.0.3/head.load.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/lib/app.js"></script>

	<script>
		let app = new App ({
			host : window.location.protocol + '//' + window.location.host + '/',
			// You can define default instances or vendors to load in every page filling this next parameters
			vendors : [
                'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
                'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js',
				'<?php echo get_template_directory_uri(); ?>/assets/cdn/Helpers.js'
			],
			instances : []
		});
	</script>

</head>

<body <?php body_class($post->post_name ?? ''); ?>>
	<?php
		get_template_part('inc/analytics/analytics-noscript');
		get_template_part('template-parts/navigation/menu');
	?>