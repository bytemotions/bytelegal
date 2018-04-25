<?php 
    get_header(); ?>

	<!-- Main Banner Area Starts -->
    <div class="main-banner">
			<div class="container">
				<h1 class="text-light text-center-sm text-center-xs">Blog Page</h1>
			</div>
		</div>
	<!-- Main Banner Area Ends -->
	<!-- Main Container Starts -->
		<div class="main-container container text-center-xs">
		<!-- Nested Row Starts -->
			<div class="row">
			<!-- Mainarea Starts -->
				<div class="col-md-9 col-sm-8 col-xs-12">


                <?php 
                if(have_posts()) :             
                    while (have_posts()) : 
                        the_post(); ?>


                        <!-- Blog Post #1 Starts -->
                        <article class="blog-post">
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
	    						<p>
                                <?php the_excerpt(); ?>
							    </p>
							    <p class="text-right-lg text-right-md text-right-sm read-more">
								    <a href="<?php the_permalink(); ?>" class="btn btn-secondary flat animation">Read More...</a>
							    </p>
						    </div>
					    <!-- Blog Post Content Ends -->
					    </article>
				        <!-- Blog Post Ends -->

                        <?php 
                    endwhile;
                endif; 
                ?>

				<!-- Pagination Starts -->
					<div class="text-right-lg text-right-md text-right-sm text-center-xs">
						<ul class="pagination animation flat">
							<li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
							<li class="active"><span>1</span></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
						</ul>
					</div>
				<!-- Pagination Ends -->

				</div>
			<!-- Mainarea Ends -->
			<!-- Spacer Starts -->
				<div class="col-xs-12 hidden-lg hidden-md hidden-sm">
					<div class="spacer-1 medium"></div>
				</div>
			<!-- Spacer Ends -->

            <?php get_sidebar();  ?>

			</div>
		<!-- Nested Row Ends -->
		</div>
	<!-- Main Container Ends -->


    <?php get_footer(); ?>
