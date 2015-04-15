<?php
/*
Template Name: Blinds Page
*/
get_header(); ?>


	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-7 page-content">
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
			<div class="col-sm-6 col-md-4 col-md-offset-1 category-form">
			<?php dynamic_sidebar('sidebar-form'); ?>
			</div>
		</div>
	</div>


<div class="container">
	<div class="row">
		<div class="images">
			<div class="col-sm-4 photo">
				<img src="<?php bloginfo('template_url'); ?>/img/blinds1.png">
			</div>
			<div class="col-sm-4 photo">
				<img src="<?php bloginfo('template_url'); ?>/img/blinds2.png">
			</div>
			<div class="col-sm-4 photo">
				<img src="<?php bloginfo('template_url'); ?>/img/blinds3.png">
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="images">
		<div class="col-sm-4 photo">
				<img src="<?php bloginfo('template_url'); ?>/img/blinds4.png">
			</div>
			<div class="col-sm-4 photo">
				<img src="<?php bloginfo('template_url'); ?>/img/blinds5.png">
			</div>
			<div class="col-sm-4 photo">
				<img src="<?php bloginfo('template_url'); ?>/img/blinds6.png">
			</div>
		</div>
	</div>
</div>



<!-- BRANDS-->
<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12 brands">
			<ul class="brands-logos text-center">
				<li><img src="<?php bloginfo('template_url'); ?>/img/horizons.png"></li>
				<li><img src="<?php bloginfo('template_url'); ?>/img/graber.png"></li>
				<li><img src="<?php bloginfo('template_url'); ?>/img/kirsh.png"></li>
				<li><img src="<?php bloginfo('template_url'); ?>/img/conrad.png"></li>
				<li><img src="<?php bloginfo('template_url'); ?>/img/hartmann.png"></li>
			</ul>
		</div>
	</div>
</div>

<div class="space-me"></div>
	
<!-- TESTIMONIALS-->
<div class="container">
	<div class="row">
		<div class="col-sm-4 single-feedback">
				<div class="client-pic">
					<img src="<?php bloginfo('template_url'); ?>/img/arlene.jpeg">
				</div>
				<div class="box">
					<p>We have had nothing but outstanding service and product from Ram Degani and Lone Star Blinds. We have had two houses completely done by them and the entire process from start to finish was terrific. Ram is thoughtful in his approach, never pushing, & offering his input in a very positive way.</p>
				</div>
				<div class="client-info">
					<div class="client-name">
						Arlene Glazer
					</div>
					<div class="company">
						Client
					</div>
				</div>
		</div>
		<div class="col-sm-4 single-feedback">
				<div class="client-pic">
					<img src="<?php bloginfo('template_url'); ?>/img/sharon.jpeg">
				</div>
				<div class="box">
					<p>I hired Lone Star Blinds for my window coverings for my last 2 houses. I was impressed with how many options were presented & it was helpful working with someone who could give me the perfect solutions for my aesthetic. The prices were competitive & the service was excellent.</p>
				</div>
				<div class="client-info">
					<div class="client-name">
						Sharon Blumberg
					</div>
					<div class="company">
						Client
					</div>
				</div>
		</div>
		<div class="col-sm-4 single-feedback">
				<div class="client-pic">
					<img src="<?php bloginfo('template_url'); ?>/img/roger.jpeg">
				</div>
				<div class="box">
					<p>Ram and the Lone Star Blinds team are the best of the best. Working in the real estate industry, I come across multiple vendors and I can confidently say that Ram is the best I've ever worked with. I look forward to referring all of my firm's clients to Ram and his company.</p>
				</div>
				<div class="client-info">
					<div class="client-name">
						Rogers Healy
					</div>
					<div class="company">
						Client
					</div>
				</div>
		</div>
	</div>
</div>

<div class="space-me"></div>

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-md-5 choose">
		<img src="<?php bloginfo('template_url'); ?>/img/badges.png">
			<h2> Why Choose Ram </h2>
			<p>I bring over 30 years of industry experience to every client meeting. I use a very relaxed, no pressure style to work with my clients to determine what product makes the most sense for them.  Each situation is unique and I focus on solutions.  I am customer service oriented and am committed to offering my customers the finest quality products at a very competitive and fair price.  I am a one-stop shop for all things windows coverings.</p>
			<a href="<?php echo site_url(); ?>"><div class="btn btn-primary red"> Get a Quote </div></a>
		</div>
		<div class="col-sm-6 col-md-offset-1 col-md-6 ram-img">
			<img src="<?php bloginfo('template_url'); ?>/img/choose.png">
		</div>
	</div>
</div>

<div class="space-me"></div>

<?php get_footer(); ?>
