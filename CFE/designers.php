<?php
/**
 *
 * Template Name: Designers
 * @package cfecustom
 */

get_header(); ?>
<section role="main" class="main-page" id="designer-container">
	<div class="container clearfix">
		<div class="grid_3">
			<h2><?php the_title(); ?></h2>
		</div>
		<div class="grid_9">
			<nav class="secondary_menu" id="iso-filter">
				<ul id="filters" class="designer-filter">
					<li><a href="#venture" class="category_filter">VENTURE</a></li>
					<li><a href="#pioneer" class="category_filter">PIONEER</a></li>
					<li><a href="#testimonial" class="category_filter">TESTIMONIALS</a></li>
					<li><a href="#international" class="category_filter">INTERNATIONAL<span class="extraFilters">, .turkey, .indonesia</span></a></li>
				</ul>
			</nav>
		</div>	
		
		<article id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting" class="article designer isotope">
		
			<?php
			$desginer_args = array(
				'posts_per_page' => -1,
				'post_type' => 'designer',
				'orderby' => 'menu_order',
				'order' => 'ASC'
			);
			$get_designer_posts = new WP_Query($desginer_args);
	
			if($get_designer_posts->have_posts()) : while($get_designer_posts->have_posts()) : $get_designer_posts->the_post();
				$categories = get_post_meta( get_the_id(), 'mm_designer_designer_category', true );
			 ?>
		
			<div class="grid_4 <?php foreach($categories as $category) {echo $category." ";} ?>">
				<a href="<?php the_permalink(); ?>">
				<span class="designer-info">
					<?php the_title(); ?>
					<p><?php
						foreach($categories as $category) {
							if($category !== "testimonial") {

								echo $category;	
							}
						}
					 ?></p>
				</span>
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('standard-thumb');
				} else { ?>
					<img src="<?php bloginfo('template_directory'); ?>/images/default-thumb.png" alt="<?php the_title(); ?>" />
				<?php } ?>
				</a>		
			</div>
			
			<?php endwhile;  ?>
			<?php endif; 
				
			// Reset Post Data
			wp_reset_postdata();
				
			?>
		
		</article>
	</div>
</section>

<?php get_footer(); ?>