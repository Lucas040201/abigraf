<?php
	get_header();
?>

<main class="landing landing--front-page">

	<?php
		get_template_part('template-parts/sections/content-highlights');
		get_template_part('template-parts/components/daily-offers');
	?>

	<!--
	<section class="container newsletter">
		<div class="row">
			<div class="col-6">
				<div class="newsletter__text">
					<h3>Lorem Ipsum</h3>
					<p>Set dolor amet</p>
				</div>
			</div>
			<div class="col-6">
				<div class="newsletter__field">
					<input type="text">
				</div>
			</div>
		</div>
	</section>
	-->


	<?php
		get_template_part('template-parts/components/offer-rows-by-categories');
	?>

</main>

<?php
    get_footer();