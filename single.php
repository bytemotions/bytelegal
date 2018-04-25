<?php 
	get_header(); ?>
    <h1>Single Loop</h1>
	<main id="single-page" class="content col-layout">
		<?php 
		if(have_posts()): 
			while(have_posts()): 
				the_post();?>

				<article class="post">					
					<header class="entry-header">
						<h2><?php the_title(); ?></h2>
					</header><!-- .entry-header -->
					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
					<footer class="entry-meta">
						<p>por <?php the_author(); ?></p>
						<p><?php the_date(); ?></p>
					</footer><!-- .entry-meta -->						
				</article><!-- .post -->
			
				<?php 
			endwhile; 
		endif; 
		?>
	</main><!-- #single-page -->
	<?php 
	get_sidebar();
	get_footer(); 
	?>