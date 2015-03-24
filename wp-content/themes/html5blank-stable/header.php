<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="<?php bloginfo('template_url'); ?>/css/styles.css" rel="stylesheet">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">
<script src="//use.typekit.net/fgp2uiq.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

</head>
<body <?php body_class(); ?>>

<header>
	<div class="container">
		<div class="row"> 
			<div class="col-sm-12 col-md-3 logo text-left">
				<a href="<?php echo site_url(); ?>"><img src="http://belfortagency.com/demo/ramwebsite/wp-content/uploads/2015/03/logo1.png"></a>
			</div>	
			<div class="col-sm-12 col-md-9 text-right menu">
			<h3 onclick="menuToggle()" class="menu-toggle"><i class="fa fa-bars"></i>Menu</h3>
				<?php wp_nav_menu(array( 'menu' => 'Header Menu')); ?>
			</div>	
		</div>
	</div>
	<div style="clear:both"></div>
</header>