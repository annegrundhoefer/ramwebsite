<?php
/*
Template Name: Category Page
*/
get_header(); ?>


	<div class="container">
		<div class="row">
			<div class="col-sm-7 col-md-7 page-content">
				<main role="main">
					<!-- section -->
					<section>

						

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php the_content(); ?>

						</article>
						<!-- /article -->

					<?php endwhile; ?>

					<?php else: ?>

						<!-- article -->
						<article>

							<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

						</article>
						<!-- /article -->

					<?php endif; ?>

					</section>
					<!-- /section -->
				</main>
			</div>
			<div class="col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1category-form">
			<?php dynamic_sidebar('sidebar-form'); ?>
			</div>
		</div>
	</div>


<div class="container">
	<div class="row">
		<div class="images">
			<div class="col-sm-4 photo">
				<img src="http://placehold.it/300x300">
			</div>
			<div class="col-sm-4 photo">
				<img src="http://placehold.it/300x300">
			</div>
			<div class="col-sm-4 photo">
				<img src="http://placehold.it/300x300">
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="images">
			<div class="col-sm-4 photo">
				<img src="http://placehold.it/300x300">
			</div>
			<div class="col-sm-4 photo">
				<img src="http://placehold.it/300x300">
			</div>
			<div class="col-sm-4 photo">
				<img src="http://placehold.it/300x300">
			</div>
		</div>
	</div>
</div>

<div class="space-me"></div>


<?php get_footer(); ?>
