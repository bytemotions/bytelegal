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
					
						<?php 
					endwhile; 
				endif; 
				?>

				<!-- Blog Single Post Ends -->
				<!-- Author Bio Starts -->
					<div class="blog-author-bio">
						<h5>About the Author</h5>
						<div class="row">
							<div class="col-xs-3 author-bio-img">
								<img src="images/blog/author-bio-img1.jpg" alt="Author Name" class="img-responsive">
							</div>
							<div class="col-xs-9">								
								<p class="text-justify">
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
								</p>
							</div>
						</div>
					</div>
				<!-- Author Bio Ends -->
				<!-- Comments Display Starts -->
					<h4 class="main-heading-4">3 Comments</h4>
					<div class="comments-area">
					<!-- Comment #1 Starts -->
						<div class="media">
							<a class="pull-left" href="#">
								<img class="media-object" src="images/avatar/avatar-1.png" alt="Avatar">
							</a>
							<div class="media-body">
								<h6 class="media-heading">Super Admin</h6>
								<p class="date"><a href="#">June 12, 2016 | 16.45</a></p>
								<p>
									It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
								</p>
								<br>
								<p class="text-right-lg text-right-md text-right-sm">
									<a href="#" class="btn btn-secondary flat animation">Reply</a>
								</p>
							<!-- Nested Comment #1 Starts -->
								<div class="media">
									<a class="pull-left" href="#">
										<img class="media-object" src="images/avatar/avatar-1.png" alt="Avatar">
									</a>
									<div class="media-body">
										<h6 class="media-heading">Super Admin</h6>
										<p class="date"><a href="#">June 12, 2016 | 16.45</a></p>
										<p>
											It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
										</p>
										<br>
										<p class="text-right-lg text-right-md text-right-sm">
											<a href="#" class="btn btn-secondary flat animation">Reply</a>
										</p>
									</div>
								</div>
							<!-- Nested Comment #1 Ends -->
							</div>
						</div>
					<!-- Comment #1 Ends -->
					<!-- Comment #2 Starts -->
						<div class="media">
							<a class="pull-left" href="#">
								<img class="media-object" src="images/avatar/avatar-1.png" alt="Avatar">
							</a>
							<div class="media-body">
								<h6 class="media-heading">Super Admin</h6>
								<p class="date"><a href="#">June 12, 2016 | 16.45</a></p>
								<p>
									It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
								</p>
								<br>
								<p class="text-right-lg text-right-md text-right-sm">
									<a href="#" class="btn btn-secondary flat animation">Reply</a>
								</p>
							</div>
						</div>
					<!-- Comment #2 Ends -->
					<!-- Comment #3 Starts -->
						<div class="media">
							<a class="pull-left" href="#">
								<img class="media-object" src="images/avatar/avatar-1.png" alt="Avatar">
							</a>
							<div class="media-body">
								<h6 class="media-heading">Super Admin</h6>
								<p class="date"><a href="#">June 12, 2016 | 16.45</a></p>
								<p>
									It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
								</p>
								<br>
								<p class="text-right-lg text-right-md text-right-sm">
									<a href="#" class="btn btn-secondary flat animation">Reply</a>
								</p>
							</div>
						</div>
					<!-- Comment #3 Ends -->
					</div>
				<!-- Comments Display Ends -->
				<!-- Comments Form Starts -->
					<div class="comment-form">
						<h4 class="main-heading-4">Leave Your Comments</h4>
						<form role="form">
							<div class="row">
								<div class="col-md-4 col-xs-12">
									<div class="form-group">
										<input type="text" class="form-control flat" placeholder="Full Name">
									</div>
								</div>
								<div class="col-md-4 col-xs-12">
									<div class="form-group">
										<input type="email" class="form-control flat" placeholder="Email">
									</div>
								</div>
								<div class="col-md-4 col-xs-12">
									<div class="form-group">
										<input type="text" class="form-control flat" placeholder="Website">
									</div>
								</div>
								<div class="col-xs-12">
									<div class="form-group">
										<textarea class="form-control flat" rows="5" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-xs-12">
									<input type="submit" class="btn btn-secondary flat animation" value="Submit Comment">
								</div>
							</div>
						</form>
					</div>
				<!-- Comments Form Ends -->
			
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