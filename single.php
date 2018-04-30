<?php get_header(); ?>

	<!-- Main Banner Area Starts -->
	<div class="main-banner">
			<div class="container">
				<h1 class="text-light text-center-sm text-center-xs">Blog Single Page</h1>
			</div>
		</div>
	<!-- Main Banner Area Ends -->
	<!-- Main Container Starts -->
		<div class="main-container container">
		<!-- Nested Row Starts -->
			<div class="row">
			<!-- Mainarea Starts -->
			<div class="col-md-9 col-sm-8 col-xs-12">

				<?php 
				if(have_posts()): 
					while(have_posts()): 
						the_post();?>

						<article class="blog-post single">	

							<!-- Blog Media Starts -->
								<div class="blog-media">
									<?php                                 
									// check if the post or page has a Featured Image assigned to it.
										if ( has_post_thumbnail() ) {
											//the_post_thumbnail( 'thumbnail', array( 'class' => 'img-responsive' ) );
											the_post_thumbnail( 
												array( 870, 404 ), 
												array( 'class' => 'img-responsive' ) );
									}
									?>
								<!--<img src="images/blog/blog-img1.jpg" alt="Blog Title" class="img-responsive">-->
								</div>
							<!-- Blog Media Ends -->				
							<!-- Blog Title Starts -->
								<h4 class="blog-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h4>
							<!-- Blog Title Ends -->
								
							<!-- Blog Post Info Starts -->
								<ul class="blog-post-info list-unstyled list-inline">
									<li>
										<i class="fa fa-user"></i> 
										<a href="#">By <?php the_author(); ?></a>
									</li>
									<li>
										<i class="fa fa-calendar-o"></i>
										<?php the_date(); ?>
									</li>
									<li>
										<i class="fa fa-comments"></i>
										<a href="#"><?php wp_count_comments( $post->ID ); ?> Comments</a>
									</li>
									<li>                                    
										<i class="fa fa-tag"></i>
										<?php echo get_the_tag_list(null,', ',null,  $post->ID); ?>
									</li>
								</ul>
							<!-- Blog Post Info Ends -->
							
							<!-- Blog Post Content Starts -->
								<div class="blog-post-content">
									<?php the_content(); ?>
								</div>
							<!-- Blog Post Content Ends -->						

							<!-- Starts -->
							<div class="clearfix">
								<!-- Tags Starts -->
									<ul class="list-unstyled list-inline blog-post-tags pull-left-lg pull-left-md">
										<li><h6>Tags: </h6></li>
										<?php
										if ( get_the_tag_list () ) {
    										echo get_the_tag_list('<li><i class="fa fa-tag"></i>','</li><li><i class="fa fa-tag"></i>','</li>', $post->ID);
										}
										?>
										<!--<li><i class="fa fa-tag"></i> <a href="#">Company</a></li>-->										
									</ul>
								<!-- Tags Ends -->
								<!-- Share Starts -->
									<ul class="list-unstyled list-inline blog-post-share pull-right-lg pull-right-md">
										<li><h6>Share: </h6></li>
										<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
										<li><a href="#"><i class="fa fa-tumblr-square"></i></a></li>
									</ul>
								<!-- Share Ends -->
							</div>
							<!-- Ends -->

						</article><!-- .post -->
				
						<!-- Author Bio Starts -->
							<div class="blog-author-bio">
								<h5>About the Author</h5>
								<h6><?php echo get_the_author_meta('first_name').' '.get_the_author_meta('last_name'); ?></h6>
								<div class="row">
									<div class="col-xs-3 author-bio-img">
										<?php echo get_avatar( get_the_author_meta('email') , 90 ); ?>
									</div>
									<div class="col-xs-9">								
										<p class="text-justify">
											<?php the_author_meta('description') ?>
										</p>
									</div>
								</div>
							</div>
						<!-- Author Bio Ends -->						

						<?php 
					endwhile; 
				endif; 
				?>
				<!-- Comments Display Starts -->
				<?php
				// If comments are open or we have at least one comment, load up the comment template.
 				if ( comments_open() || get_comments_number() ) :
     				comments_template();
 				endif;
				?>
				<!-- Comments Display Ends -->

			
			</div>
			<!-- Mainarea Ends -->

			<!-- Spacer Starts -->
				<div class="col-xs-12 hidden-lg hidden-md hidden-sm">
					<div class="spacer-1 medium"></div>
				</div>
			<!-- Spacer Ends -->
			
			<?php get_sidebar(); ?>

			</div>
		<!-- Nested Row Ends -->
		</div>
	<!-- Main Container Ends -->	

<?php get_footer(); ?>