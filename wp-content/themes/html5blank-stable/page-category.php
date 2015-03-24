<?php
/*
Template Name: Category Page
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



<!-- BRANDS-->
<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12 brands">
			<ul class="brands-logos text-center">
				<li><img src="<?php bloginfo('template_url'); ?>/img/horizons.png"></li>
				<li><img src="<?php bloginfo('template_url'); ?>/img/graber.png"></li>
				<li><img src="<?php bloginfo('template_url'); ?>/img/kirsh.png"></li>
				<li><img src="<?php bloginfo('template_url'); ?>/img/heritage.png"></li>
				<li><img src="<?php bloginfo('template_url'); ?>/img/conrad.png"></li>
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
					<img src="http://placehold.it/50x50">
				</div>
				<div class="box">
					<p>Ram at Lone Star Blinds is dependable, very professional and great at communicating with us and our clients. He follows through from beginning to end on every project, helping to make selections, ordering and installing the finished product. We reccomed him to ALL of our clients.</p>
				</div>
				<div class="client-info">
					<div class="client-name">
						Susan Slacina
					</div>
					<div class="company">
						Simply Done Interiors
					</div>
				</div>
		</div>
		<div class="col-sm-4 single-feedback">
				<div class="client-pic">
					<img src="http://placehold.it/75x75">
				</div>
				<div class="box">
					<p>The quality of work performed was exceptional and exceeded our expectations. Every step of the process from scheduling, to communication, and through work completion was all done in a timely manner which make the process go very smoothly. We highly recommend Lone Star Blinds!</p>
				</div>
				<div class="client-info">
					<div class="client-name">
						Aydlotte
					</div>
					<div class="company">
						Client
					</div>
				</div>
		</div>
		<div class="col-sm-4 single-feedback">
				<div class="client-pic">
					<img src="http://placehold.it/50x50">
				</div>
				<div class="box">
					<p>Lone Star Blinds truly went the extra mile to help with our window coverings in our home 60 miles away! He listened to our needs & was very knowledgable. He also suggested the right solution for motorized room darkening shades! Ram's measurements were precise & installation was quick.</p>
				</div>
				<div class="client-info">
					<div class="client-name">
						Cindy Stephens
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
			<img src="http://placehold.it/500x300">
		</div>
	</div>
</div>

<div class="space-me"></div>

<?php get_footer(); ?>
