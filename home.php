<?php 
    get_header(); ?>
    <main id="posts-page" class="content col-layout">  
    <h1>Home.php</h1>                      
        <?php 
        if(have_posts()) :             
            while (have_posts()) : 
                the_post(); ?>

                <article class="post">
                    <header class="entry-header">
                        <h2><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>
                    </header><!-- .entry-header -->
                    <div class="entry-excerpt">
                        <?php the_excerpt(); ?>
                    </div><!-- .entry-excerpt -->
                </article><!-- .post -->

                <?php 
            endwhile;
        endif; 
        ?>
    </main><!-- #posts-page -->
    <?php 
    get_sidebar(); 
    get_footer();
    ?>
