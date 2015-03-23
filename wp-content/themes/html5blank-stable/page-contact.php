<?php
/*
Template Name: Contact Page
*/
get_header(); ?>

<section id="mastHead">
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
			<div class="col-md-5 col-sm-5 form">
			<?php dynamic_sidebar('quote-form'); ?>
			</div>
		</div>
	</div>
</section>



<div class="space-me"></div>


<?php get_footer(); ?>