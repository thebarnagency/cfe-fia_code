<?php
/**
 * The template for displaying the header.
 *
 *
 * @package cfecustom */
?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php bloginfo( ); ?> <?php wp_title( '|', true, 'left' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<meta name="description" content="">
	<meta name="author" content="missmonkee ltd">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/ico-favicon.png">
	<meta name="viewport" content="width=device-width">

	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=163682500318771";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<?php wp_head(); ?>
</head>
<body>


<header>
	<div class="container clearfix">
		<div class="grid_3">
	    	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/lg-centre-for-fashion-enterprise.png" class="logo" alt="Centre for Fashion Enterprise logo" role="img" /></a></h1>
	    </div>
		
		<div class="grid_9">
			<a class="sign-up-button" href="http://fashion-enterprise.us4.list-manage1.com/subscribe?u=25d89d3ecf4d1262677609d23&id=a4fdd323a6">Sign up</a>
			<!-- <li><?php if ( is_user_logged_in() ) { ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>designer-resources">Designer Resources</a>
				<?php } else { ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>wp-admin">Designers Login</a>
				<?php } ?></li> -->

			</ul>
			<h2 role="tagline" class="tag-line">London's pioneering fashion business incubator</h2>
		</div>
	</div><!-- close container -->
	
	
	<section class="nav" id="navigation">
		<div class="container clearfix">		
			<div class="grid_10">
				<nav>
					<a href="#" id="pull">&nbsp;</a> 
					<?php wp_nav_menu( ); ?> 
				</nav>
			</div>
			
			<div class="grid_2">
				<form method="get" class="search_form_image_button" action="<?php echo home_url(); ?>/">
					<input class="search-input" type="text" value="SEARCH" name="s" id="s" onfocus="if (this.value == 'SEARCH') {this.value = '';}" onblur="if (this.value == '') {this.value = 'SEARCH';}" />
					<input type="submit" class="search-button" id="searchsubmit" value="GO" />
				</form>
			</div>
		
		</div><!-- Close Container -->
	</section>
</header>