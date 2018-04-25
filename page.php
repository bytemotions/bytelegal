<?php get_header(); ?>
<h1>Page.php</h1>
	<main id="static-page" class="content fullwidth-layout">
		<?php 
		if(have_posts()): 
			while(have_posts()): 
				the_post(); ?>

				<article class="post">
					<header class="entry-header">
						<h2><?php the_title(); ?></h2>
					</header><!-- .entry-header -->
					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</article><!-- .post -->

				<?php 
			endwhile;
		endif; 
		?>
	</main><!-- #single-page -->
	<?php get_footer(); ?>
    