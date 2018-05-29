<?php get_header(); ?>

	<!-- Main Banner Area Starts -->
	<div class="main-banner">
			<div class="container">
				<h1 class="text-light text-center-sm text-center-xs">
					<?php the_title(); ?>
				</h1>
			</div>
		</div>
	<!-- Main Banner Area Ends -->

	
	
	<?php 
	if(have_posts()): 
		while(have_posts()): 
			the_post();				
				the_content();
		endwhile;
	endif; 
	?>	
	

	<?php get_footer(); ?>
