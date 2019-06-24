<div class="home-page-posts">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>The Davis Companies In the News</h2>
            </div>
        </div>
        <div class="row">
            <?php // WP_Query arguments
                $args = array (
                'post_type' => array( 'post' ),
                'category_name' => 'featured',
                'posts_per_page' => '4',
                );

                // The Query
                $fpquery = new WP_Query( $args );

                // The Loop
                if ( $fpquery->have_posts() ) {
                while ( $fpquery->have_posts() ) {
                $fpquery->the_post(); ?>
                    
                    <div class="col-md-3 mb-4">
                        <div class="fp-post">
                            <div class="fp-image-wrapper">
                                <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                                <a href="<?php the_permalink(); ?>" class="fp-image" style="background-image: url('<?php echo $backgroundImg[0]; ?>') "></a>
                            </div>
                            <div class="fp-post-header-wrapper">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            </div>
                        </div>
                    </div>
                
                <?php }
                } else {
                // no posts found
                }

                // Restore original Post Data
                wp_reset_postdata(); ?>
        </div>
        <div class="row">
            <div class="fp-btn-wrapper">
                <a href="/news-press" class="btn btn-primary">Read All News</a>
            </div>
        </div>
    </div>
</div>