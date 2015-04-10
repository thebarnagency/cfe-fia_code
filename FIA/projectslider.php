<?php
	
// Create Project Slider
	function mm_project_slider_template() {
		
		// Query Arguments
		$args = array(
			'post_type' => 'project',
		);	
		
		// The Query
		$projectslider_query = new WP_Query( $args );
		
		// Check if the Query returns any posts
		if ($projectslider_query->have_posts() ) {
		
		// Start the Slider ?>
		<div class="flexslider">
			<ul class="slides">
			
			<?php // The Loop
		
			while($projectslider_query->have_posts()) : $projectslider_query->the_post(); ?>
			

			<?php
				$key = 'is_in_slider';
				$themeta = get_post_meta(get_the_ID(), $key, TRUE);
				if($themeta != '') {
				echo '<li>';
				echo '<a href=" ',the_permalink(),'">';
				echo '<div class="project-slider">';
				echo '<span class="project-name">';
				echo '<h3> ',the_title(),'</h3>';
				echo '</span>';
				the_post_thumbnail('projects-slider');
				echo '</div>';
				echo '</a>';
				echo '</li>'; 
				}
			?>
			<?php endwhile;  ?>	
				
			</ul><!-- .slides -->
		</div><!-- .flexslider -->
		
		
		<?php }
				
// Reset Post Data
wp_reset_postdata(); 
		}
?>


