<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col s12 m8 l8">		
				<main role="main">
					<!-- section -->
					<section>

						<?php get_template_part('loop'); ?>

						<?php get_template_part('pagination'); ?>

					</section>
					<!-- /section -->
				</main>
			</div>
			<div class="col s12 m4 l4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
		

<?php get_footer(); ?>
