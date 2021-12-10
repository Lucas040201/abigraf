<?php
	if((is_home() || !is_single())):
		echo '<meta property="og:image" content="'.get_template_directory_uri().'/assets/img/new-logo-seo.png">';
	endif;

	if ( is_single() ) {
		echo '<meta property="fb:app_id" content=""/>';
	}
?>

<title>
	<?php
		/**
		 * Display the correct title
		 */
		if(is_home()):
			bloginfo('name');
		elseif( is_category() || is_tag()):
			single_cat_title(); echo ' | '; bloginfo('name');
		elseif( is_single() || is_page() ):
			single_post_title(); echo ' | Site';
		elseif(is_archive()):
			echo 'Biblioteca | '; post_type_archive_title();
		else:
			wp_title( ' | ', true, 'right' );
			bloginfo('name');
		endif;
	?>
</title>