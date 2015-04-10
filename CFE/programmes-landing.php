<?php
/**
 * Template Name: Programmes Landing
 * @package cfecustom
 */

get_header(); ?>
<section role="main" class="main-page" id="programmes-landing">
	<div class="container clearfix">
		<div class="grid_12">
			<h2><?php the_title(); ?></h2>
		</div>
		
		<div class="grid_12">
			<nav class="secondary_menu_programmes">
				<?php wp_nav_menu( array('menu' => 'Programmes Menu' )); ?>
			</nav>
		</div>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="grid_12">
			<?php the_content(); ?>
		</div>
		
	<?php endwhile; endif;  wp_reset_postdata(); ?>
		
			<!-- ACCORDIAN STARTS -->
			
			<ul id="accordion" class="grid_12"> 
			<?php
				$programmes_args = array( 
					'post_type' => 'programmes_index',
					'orderby' => 'menu_order',
					'order' => 'ASC'
				);
				
				$get_programmes_posts = new WP_Query($programmes_args);
		
				if($get_programmes_posts->have_posts()) : while($get_programmes_posts->have_posts()) : $get_programmes_posts->the_post();
					$link = get_post_meta($post->ID, 'mm_programmes_link', true);
					$reqone = get_post_meta($post->ID, 'mm_programmes_requirement_one', true);
					$reqtwo = get_post_meta($post->ID, 'mm_programmes_requirement_two', true);
					$reqthree = get_post_meta($post->ID, 'mm_programmes_requirement_three', true);
				 ?>
			    <li>
			    	
				    <a href="<?php echo $link; ?>#recent" class="heading">
			        	<h2 class="progs-title"><?php the_title(); ?></h2>
				        <h5 class="progs-sub-title"><?php the_content(); ?></h5>
			        </a>
			        <span class="accordionToggle"></span>
			        <ul id="recent">
			            <li>
			            	<div class="grid_4 alpha">
			            		<p><?php echo $reqone; ?></p>
			            	</div>
			            	<div class="grid_4">
			            		<p><?php echo $reqtwo; ?></p>
			            	</div>
			            	<div class="grid_4 omega">
			            		<p><?php echo $reqthree; ?></p>
			            	</div>
			            </li>
			        </ul>
			        <div class="faded-divider-prog"></div>
			    </li>  

			    <?php endwhile;  ?>
			    <?php endif; wp_reset_postdata(); ?>
			</ul> 
	</div>
</section>

<?php get_footer(); ?>